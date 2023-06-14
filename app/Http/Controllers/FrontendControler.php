<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoryRequest;
use App\Models\About;
use App\Models\Benefit;
use App\Models\Billing;
use App\Models\ClientType;
use App\Models\Congrat;
use App\Models\Content;
use App\Models\Home;
use App\Models\Integration;
use App\Models\MoveTo;
use App\Models\Opportunity;
use App\Models\Service;
use App\Models\Story;
use App\Models\User;
use App\Notifications\StoryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Artisan;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Notification;

class FrontendControler extends Controller
{
  public function homePage(){
     $home = Home::first() ?? null;
     $services = Service::orderBy('priority','asc')->take(4)->get() ;
     $benefits = Benefit::orderBy('priority','asc')->take(6)->get() ;
     $featureStory  = Story::where('feature', '1')->where('status', 1)->orderBy('priority', 'asc')
                     ->select('image', 'title', 'description', 'name', 'profession')->take(2)->get();
     $stories = Story::select('id', 'name','slug', 'title', 'priority', 'image', 'description', 'profession')->orderBy('priority','asc')->take(15)->get();
     $popularStory = Story::where('status', 1)->OrderBy('views', 'desc')->take(3)->get();
     $storyCount = Story::all()->count();
    return view('frontend.pages.home',compact('home', 'services', 'benefits', 'stories', 'featureStory', 'popularStory', 'storyCount'));
  }

  public function membershipPage(){
       $memberShips = ClientType::orderBy('created_at', 'desc')->get();
       $opportunity = Opportunity::orderBy('id', 'asc')->first();
    return view('frontend.pages.member', compact('memberShips','opportunity'));
  }

  public function communityPage(){
       $storyHead = Home::select('story_title', 'story_subtitle')->first();
      $stories = Story::where('status', 1)->orderBy('priority','asc')->take(10)->get();
    return view('frontend.pages.community',compact('stories', 'storyHead'));
  }


  public function dynamicMenu($slug)
  {
      $content = Content::where('slug', $slug)->first();
      return view('frontend.pages.dynamicMenu', ['content' => $content]);
  }



  public function congratsPage($planId=null){

    $Congrat = Congrat::first();
    return view('frontend.pages.congrats', compact('Congrat'));
  }

  public function about(){
     $about = About::first();
     $stories = Story::orderBy('priority','asc')->take(3)->get();
    return view('frontend.pages.about', compact('about', 'stories'));
  }

  public function discover(){
    return view('frontend.pages.discover');
  }

  public function benefitPage(){
      $benefitHeader = Home::select('benefit_title', 'benefit_subtitle')->first();
      $Benefits = Benefit::orderBy('priority','asc')->get();
      return view('frontend.pages.benefit', ['Benefits' => $Benefits, 'benefitHeader' => $benefitHeader]);
  }

  public function singleBenefit($slug)
  {

    return view('frontend.pages.single-benefit');
  }
  public function singleStory($slug){

       $story = Story::where('slug', $slug)->first();
        $story->views +=1;
        $story->save();

    return view('frontend.pages.single-story', ['story' => $story]);
  }
  public function shareStory(){
     $user = auth()->user();
      if($user ==null){
         return Redirect::back();
      }
    return view('frontend.pages.share-story', ['user' => $user]);
  }


  public function storyStore(UserStoryRequest $request)
  {
          if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
            }else{
            $image = null;
            }

            $slug = Str::slug($request->title, '-');

        Story::create([
            'name' =>$request->name,
            'slug' => $slug ,
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'profession' =>$request->profession,
            'address' => $request->address,
            'city' =>$request->city,
            'user_id' => auth()->user()->id
        ]);

        $user = User::all();
        Notification::send($user, new StoryNotification($slug));

         return to_route('thank.you');
  }

  public function thank()
  {
    return view('frontend.pages.thank');
  }

  public function moveSwitzerland(){
        $moveTo = MoveTo::where('status', 1)->orderBy('priority', 'asc')->get();
    return view('frontend.pages.move-ch', compact('moveTo'));
  }
  public function integrationSwitzerland(){
     $integration = Integration::where('status', 1)->orderBy('priority', 'asc')->get();
    return view('frontend.pages.integration-ch',compact('integration'));
  }
  public function billingPage(Request $request){

    $plan = $request->plan;
    $user = auth()->user();
     if($user == null){
       return to_route('register',$plan);
     }
    $planId = ClientType::where('plan_id', $plan)->first();
    return view('frontend.pages.billing', ['planId' => $planId]);
  }

  public function billingSto(Request $request, $planId)
  {
        if($planId==null){
           return Redirect::back();
        }
       $billing =  Billing::create([
          'f_name' => $request->f_name,
           'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'zip' => $request->zip,
            'user_id' => auth()->user()->id,
            'plan_id' => $planId,
        ]);
      return to_route('payment.Page', $billing->id);
  }


  public function paymentPage($billing){
   if($billing ==null){
     return Redirect::back();
   }

    $user = auth()->user();

    $billing = Billing::findOrFail($billing);

    $planId = ClientType::where('plan_id', $billing->plan_id)->first();
    $user = auth()->user();
    $intent = $user->createSetupIntent();
    $stripe_key = config('services.stripe.key');


    return view('frontend.pages.payment',compact('planId', 'billing', 'stripe_key', 'intent'));
  }





  // authorize user function
  public function userHome()
  {
    return view('frontend.pages.user-home');
  }

  public function myStory()
  {
    return view('frontend.pages.my-story');
  }
  public function profile()
  {
    return view('frontend.pages.profile');
  }
  public function editProfile()
  {
    return view('frontend.pages.profile-edit');
  }
   public function memberShipUpdate()
  {
    return view('frontend.pages.membership-update');
  }

  public function helpSupport()
  {
    return view('frontend.pages.help_support');
  }
  public function termsCondition()
  {
    return view('frontend.pages.terms');
  }
  public function cookies()
  {
    return view('frontend.pages.cookies');
  }












}

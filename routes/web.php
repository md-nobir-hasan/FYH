<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\Auth\GoogleSocialController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BrotcastController;
use App\Http\Controllers\ClientTypeController;
use App\Http\Controllers\CongratController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\FrontendControler;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MembershipTypeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\MoveToController;
use App\Http\Controllers\OpporcunityController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentDurationController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\SubcriptionController;
use App\Http\Controllers\Submenucontroller;
use App\Http\Controllers\TermController;
use App\Http\Controllers\UserCommonController;
use Illuminate\Support\Facades\Route;



// Frontend controller

    Route::get('/', [FrontendControler::class,'homePage'])->name('home');
    Route::get('/membership', [FrontendControler::class,'membershipPage'])->name('member');
    Route::get('/community', [FrontendControler::class,'communityPage'])->name('community');
    Route::get('/payment', [FrontendControler::class,'paymentPage'])->name('payment');
    Route::get('/congratulations/{planId?}', [FrontendControler::class,'congratsPage'])->name('congrats');
    Route::get('/benefits', [FrontendControler::class,'benefitPage'])->name('benefit');
    Route::get('/single-benefits/{slug}', [FrontendControler::class,'singleBenefit'])->name('single.benefit');
    Route::get('/single-story/{slug}', [FrontendControler::class,'singleStory'])->name('single-story');
    Route::get('/refuse', [FrontendControler::class,'refuse'])->name('refuse');

    Route::get('/password-reset-done',[FrontendControler::class,'passRessDone'])->name('pass_reset_done');
    Route::prefix('/guide')->name('guide.')->group(function(){
        Route::get('/survival-guide',[FrontendControler::class,'survivalGuide'])->name('survival');
        Route::get('/moving-to-switzerland',[FrontendControler::class,'moveSwitzerland'])->name('move_switzerland');
        Route::get('/integration-in-switzerland',[FrontendControler::class,'integrationSwitzerland'])->name('intro.move_switzerland');
    });

    // Subscriber Route
     Route::group(['middleware' => 'pdc'], function () {
        Route::get('/home', [FrontendControler::class, 'userHome'])->name('user.home');
        Route::get('/share-story', [FrontendControler::class,'shareStory'])->name('share.story');
        Route::post('/share-story/store', [FrontendControler::class,'storyStore'])->name('share.story.store');
        Route::get('/thankYou', [FrontendControler::class,'thank'])->name('thank.you');
         Route::get('my-story', [FrontendControler::class, 'myStory'])->name('user.myStroy');
         Route::get('user/profile', [FrontendControler::class, 'profile'])->name('user.profile');
         Route::get('user/edit/profile', [FrontendControler::class, 'editProfile'])->name('user.profile.edit');
         Route::get('help/support', [FrontendControler::class, 'helpSupport'])->name('help.support');
         Route::post('feedback', [FrontendControler::class, 'feedback'])->name('feedback');
         Route::get('ticket', [FrontendControler::class, 'ticket'])->name('ticket');
         //  benefit  Search
        Route::any('/community/search', [FrontendControler::class, 'communitySearch'])->name('community.search');

        // problem route
        Route::get('/request/problem', [FrontendControler::class, 'createRequest'])->name('createRequest');
        Route::post('/problem/store', [FrontendControler::class, 'problemStore'])->name('problemStore');
        Route::get('/problem/{id}', [FrontendControler::class, 'problem'])->name('problem');

    });

    Route::get('/Share/problem/thankyou', [FrontendControler::class, 'problemThank'])->name('problem.thank');
    // authorize user route

    Route::get('terms/condition', [FrontendControler::class, 'termsCondition'])->name('terms.condition');
    Route::get('cookies', [FrontendControler::class, 'cookies'])->name('cookies');

    Route::post('/mail/subscribe', [FrontendControler::class, 'mailSubscribe'])->name('mail.subscribe');
    Route::get('/subscribe/thank', [FrontendControler::class, 'mailSubscribeThank'])->name('mail.subscribe.thank');


     Route::get('/discover', [FrontendControler::class, 'discover'])->name('discover');
     Route::get('/about', [FrontendControler::class, 'about'])->name('about');

     Route::any('/billings', [FrontendControler::class, 'billingPage'])->name('web.billing');
     Route::post('billings/{planId?}', [FrontendControler::class, 'billingSto'])->name('web.billing.store');

     // checkout
    Route::get('/payment/page/{billing}', [FrontendControler::class,'paymentPage'])->name('payment.Page'); //checkout page
    Route::post('/checkout/paid', [PaymentController::class, 'Payment'])->name('checkout.payment');
    Route::get('/menu/page/{slug}', [FrontendControler::class, 'dynamicMenu'])->name('dynamicMenu');

    // paypal
    Route::prefix('/paypal')->name('paypal.')->group(function(){
        Route::post('/checkout',[PaypalController::class,'checkout'])->name('checkout')->withoutMiddleware('pdc');
        Route::get('/payment',[PaypalController::class,'payment'])->name('payment')->withoutMiddleware('pdc');
        Route::get('/success',[PaypalController::class,'success'])->name('success')->withoutMiddleware('pdc');
        Route::get('/cancel',[PaypalController::class,'cancel'])->name('cancel')->withoutMiddleware('pdc');

    });
    Route::get('error',[FrontendControler::class,'error'])->name('error');
//End frontend controller

//Wthout middleware routes


        //Update Payment
        Route::get('updatepayment/{ct_id}',[PaypalController::class,'updatePayment'])->name('update_payment');

//End Without middleware routes

//Micellanous route
    Route::get('/mdnhcu',[ArtisanController::class,'composerUpdate'])->name('cu');
    Route::get('/mdnhci',[ArtisanController::class,'composerInstall'])->name('ci');
    Route::get('/mdnhni',[ArtisanController::class,'npmInstall'])->name('ni');
    Route::get('/mdnhnb',[ArtisanController::class,'npmBuild'])->name('nb');
    Route::get('/mdnhoc',[ArtisanController::class,'optimizeClear'])->name('oc');
    Route::get('/mdnhrc',[ArtisanController::class,'routeClear'])->name('rc');
    Route::get('/mdnhcc',[ArtisanController::class,'cacheClear'])->name('cc');
    Route::get('/mdnhms',[ArtisanController::class,'migrateSeed'])->name('ms');
    Route::get('/mdnhsl',[ArtisanController::class,'storageLink'])->name('sl');
//End Micellanous route

//broadcast
Route::get('/broadcast',[BrotcastController::class,'UserRegInfoAdmin'])->name('brotcast');

//Profile common for comstomer and admin
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Redirect route

Route::get('/redirect/route',[UserCommonController::class,'redirect']);





// google Login
Route::get('/redirect/{planId?}', [GoogleSocialController::class, 'redirect'])->name('google.auth');
Route::get('/auth/callback', [GoogleSocialController::class, 'callBack'])->name('google.callback');



// Admin route ===============================================

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');
//end dashoard

Route::middleware(['auth','admin'])->prefix('/admin')->name('admin.')->group(function () {

    //Settings
    Route::prefix('/setting')->name('setting.')->group(function(){
        Route::resource('setting',SettingsController::class);
    });


    Route::get('/delete/{id}/{model}',[MiscellaneousController::class,'SingleDelete'])->name('delete');

    //ajax throug axios
    Route::get('customer/mark-as-read',[AjaxController::class,'customerMarkAsRead'])->name('customer.mark_as_read');

    // Export routes
    Route::get('/customers/export/excel',[ExportController::class,'CustomerExport'])->name('customer.export');
    Route::get('/customers/export/pdf',[ExportController::class,'CustomerExportPdf'])->name('customer.export.pdf');
    // Route::get('/customers/export/pdf/htmlshow',[ExportController::class,'CustomerExportPdfhtml'])->name('customer.export.html');

    //Customers
    Route::prefix('/customer')->name('customer.')->group(function(){
        Route::get('/index',[CustomerController::class,'index'])->name('index');
    });

    // feedback
    Route::get('/feedback', [FeedBackController::class, 'index'])->name('feedback.index');

    // problem and solving
    Route::resource('problem', ProblemController::class)->except('create', 'destroy');
    Route::get('/problem/destroy/{id}', [ProblemController::class, 'destroy'])->name('problem.destroy');

    Route::resource('billings', BillingController::class)->only('index');
    Route::get('/billings/destroy/{id}', [BillingController::class, 'destroy'])->name('billings.destroy');

    Route::get('/subscriptions', [SubcriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('/subscriptions/cancel/{userId}/{subName}', [SubcriptionController::class, 'cancel'])->name('subscriptions.cancel');
    Route::get('/subscriptions/resume/{userId}/{subName}', [SubcriptionController::class, 'resume'])->name('subscriptions.resume');

    // admin First Section
    Route::resource('/home', HomeController::class)->only('create', 'update', 'store');

     // about
     Route::resource('/about', AboutController::class)->only('create', 'update', 'store');

    // admin service section
    Route::resource('/services', ServiceController::class)->except('destroy');
    Route::get('services/destroy/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Story
    Route::resource('stories', StoryController::class)->except('destroy');
    Route::get('stories/destroy/{id}', [StoryController::class, 'destroy'])->name('stories.destroy');
    Route::get('/stories/status/{id}', [StoryController::class, 'status'])->name('stories.status');
    Route::get('/stories/feature/{id}', [StoryController::class, 'feature'])->name('stories.feature');

    // benefit and other Section title and subtitle
    Route::resource('opportunitys', OpporcunityController::class);

    // Congrats Route
    Route::resource('congrats', CongratController::class);
    Route::resource('country', CountryController::class)->except('show','destroy');
    Route::get('country/destroy/{id}', [CountryController::class, 'destroy'])->name('country.destroy');

    // move to swizerland
    Route::resource('moves', MoveToController::class)->except('destroy');
    Route::get('/moves/destroy/{id}', [MoveToController::class, 'destroy'])->name('moves.destroy');
    Route::get('/moves/status/{id}', [MoveToController::class, 'status'])->name('moves.status');


    // Switzerland integration
    Route::resource('integrations', IntegrationController::class);
    Route::get('/integrations/destroy/{id}', [IntegrationController::class, 'destroy'])->name('integrations.destroy');
    Route::get('/integrations/status/{id}', [IntegrationController::class, 'status'])->name('integrations.status');


    //Help and support
    Route::resource('/helps', HelpController::class);
    Route::get('helps/destroy/{id}', [HelpController::class, 'destroy'])->name('helps.destroy');


    // term and Condition
    Route::resource('terms', TermController::class);

    //Setup
    Route::prefix('/setup')->name('setup.')->group(function(){
        //Client type
        Route::resource('/client-type',ClientTypeController::class);

        //Membership type
        Route::resource('/membership',MembershipTypeController::class);

        //Benefit
        Route::resource('/benefit',BenefitController::class)->except('destroy');
        Route::get('/benefit/destroy/{id}', [BenefitController::class, 'destroy'])->name('benefit.destroy');

        //Links
        Route::resource('/link',LinkController::class);

        //Currency
        Route::resource('/currency',CurrencyController::class);

        //Payment Duration
        Route::resource('/payment_duration',PaymentDurationController::class);
    });

    //Menus route
    Route::prefix('/menu')->name('menu.')->group(function(){
        Route::resource('menu',MenuController::class);
        Route::resource('submenu',Submenucontroller::class);
    });




    // content or Page Create Route
    Route::resource('/contents', ContentController::class);

    //User Management
    Route::prefix('/user')->name('user.')->group(function(){
        //Features
        Route::resource('features',FeatureController::class)->names([
            'index' => 'feature.index',
            'create' => 'feature.create',
            'edit' => 'feature.edit',
            'store' => 'feature.store',
            'update' => 'feature.update',
            'show' => 'feature.show',
            ]);


        //role
        Route::group(['as' => 'role.', 'prefix' => 'role'], function (){
            Route::get('/index', [SettingController::class, 'roleIndex'])->name('index');
            Route::get('/create/{id?}', [SettingController::class, 'roleCreate'])->name('create');
            Route::post('/store', [SettingController::class, 'roleStore'])->name('store');
        });

        //user
        Route::group(['as' => 'user.', 'prefix' => 'user'], function (){
            Route::get('/index', [SettingController::class, 'userIndex'])->name('index');
            Route::get('/create/{id?}', [SettingController::class, 'userCreate'])->name('create');
            Route::post('/store', [SettingController::class, 'userStore'])->name('store');
        });
    });

});
//=================================== End admin route

require __DIR__.'/auth.php';

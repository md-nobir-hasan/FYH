<?php

namespace App\Providers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        require_once base_path().'/app/Http/Helpers/GlobalFunction.php';
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       try{
        if(Schema::hasTable('users')) {
            $user = User::where('role_id',null)->orderBy('id','desc')->get() ?? null;
                View::share('customers',$user);
            }
           if(Schema::hasTable('settings')) {
            $n['setting'] = Setting::first() ?? null;
                View::share($n);
            }

            if(Schema::hasTable('contents')) {
                $homeContents = Content::orderBy('priority','asc')->get() ?? null;
                    View::share('homeContents',$homeContents);
            }
            if(Schema::hasTable('menus')) {
                $menus = Menu::with('link','submenus','submenus.link')->orderBy('serial','asc')->get();
                    View::share('menus',$menus);
            }

       }catch(\Exception $e){

       }

    }
}

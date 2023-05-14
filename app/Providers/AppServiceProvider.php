<?php

namespace App\Providers;

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
       if(Schema::hasTable('users')) {
        $user = User::where('role_id',null)->orderBy('id','desc')->get();
            View::share('customers',$user);
        }
       if(Schema::hasTable('settings')) {
        $n['setting'] = Setting::first();
            View::share($n);
        }

    }
}

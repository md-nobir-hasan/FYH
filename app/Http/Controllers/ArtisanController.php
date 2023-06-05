<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function composerUpdate(){
        // Artisan::call('composer:update');
        shell_exec('composer update');
        echo 'Successfully composer updated';
    }
    public function composerInstall(){
        Artisan::call('composer:install');
        echo 'Successfully composer installed';
    }
    public function npmInstall(){
        Artisan::call('npm:install');
        echo 'Successfully npm installed';
    }
    public function npmBuild(){
        Artisan::call('npm:build');
        echo 'Successfully npm builded';
    }
    public function optimizeClear(){
        Artisan::call('optimize:clear');
        echo 'Successfully site optimized';
    }
    public function routeClear(){
        Artisan::call('route:clear');
        echo 'Successfully server route cleared';
    }
    public function cacheClear(){
        Artisan::call('cache:clear');
        echo 'Successfully server cache cleared';
    }
    public function migrateSeed(){
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed');
        echo 'Successfully migrated and seed the data';
    }
    public function storageLink(){
        Artisan::call('storage:link');
        echo 'Storage linked successfully';
    }
}

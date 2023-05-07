<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //client type seeder
       $ct = [
        ['name'=>'Move to Switzerland','ct_code'=>'mts'],
        ['name'=>'Already Relocated','ct_code'=>'ap'],
       ];
       DB::table('client_types')->insert($ct);

       //membership type seeder
       $mt = [
        ['name'=>'Monthly','price'=>250,'mt_code'=>'m'],
        ['name'=>'Yearly','price'=>2000,'mt_code'=>'y'],
       ];
       DB::table('membership_types')->insert($mt);

       //Link
       $links = [
        ['name'=>'Home','url'=>'/'],
        ['name'=>'Membership Page','url'=>'/members'],
       ];
       DB::table('links')->insert($links);
    }
}

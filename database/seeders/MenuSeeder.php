<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            [
                'pageName' => 'Home',
                'pageRoutes' => '/'
            ],

            [
                'pageName' => 'Products',
                'pageRoutes' => 'products'
            ],

            [
                'pageName' => 'Blogs',
                'pageRoutes' => 'blogs'
            ],

            [
                'pageName' => 'Contact Us',
                'pageRoutes' => 'contactUs'
            ],

            [
                'pageName' => 'Profile',
                'pageRoutes' => 'profile'
            ],

            [
                'pageName' => 'Wishlist',
                'pageRoutes' => 'wishlists'
            ],

            [
                'pageName' => 'Cart',
                'pageRoutes' => 'cart'
            ]
        ]);
    }
}

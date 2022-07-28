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
                'pageLocation' => 'resources\views\dashboard.blade.php'
            ],

            [
                'pageName' => 'Products',
                'pageLocation' => 'resources\views\products.blade.php'
            ],

            [
                'pageName' => 'Blogs',
                'pageLocation' => 'resources\views\blogs.blade.php'
            ],

            [
                'pageName' => 'Contact Us',
                'pageLocation' => 'resources\views\contactus.blade.php'
            ],

            [
                'pageName' => 'Profile',
                'pageLocation' => 'resources\views\profile.blade.php'
            ],

            [
                'pageName' => 'Wishlist',
                'pageLocation' => 'resources\views\wishlist.blade.php'
            ],

            [
                'pageName' => 'Cart',
                'pageLocation' => 'resources\views\cart.blade.php'
            ]
        ]);
    }
}

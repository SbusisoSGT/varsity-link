<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = new Shop;
        $shop->name = 'Stationery Shop';
        $shop->owner = 'Magoro Precious';
        $shop->location = 'Res 5A';
        $shop->email = 'info@stationeryshop.co.za';
        $shop->contact = '0794836643';
        $shop->link = Str::slug($shop->name);
        $shop->save();

        $shop = new Shop;
        $shop->name = 'Scrubs Life';
        $shop->owner = 'Sithole Lethabo';
        $shop->location = 'Res 1C';
        $shop->email = 'info@scrubslife.co.za';
        $shop->contact = '0671370305';
        $shop->link = Str::slug($shop->name);
        $shop->save();


        $shop = new Shop;
        $shop->name = 'Best Bakes';
        $shop->owner = 'Modau Ndiwanga';
        $shop->location = 'South Point';
        $shop->email = 'info@bestbakes.co.za';
        $shop->contact = '0784235597';
        $shop->link = Str::slug($shop->name);
        $shop->save();


        $shop = new Shop;
        $shop->name = 'Pre-loved Books';
        $shop->owner = 'Mahlangu Nolwazi';
        $shop->location = 'Res 1D';
        $shop->email = 'info@prelovedbooks.co.za';
        $shop->contact = '0794836643';
        $shop->link = Str::slug($shop->name);
        $shop->save();

        
        $shop = new Shop;
        $shop->name = 'Snackery';
        $shop->owner = 'Sekgobela Bafana';
        $shop->location = 'Res 1B';
        $shop->email = 'info@snackery.co.za';
        $shop->contact = '0815789325';
        $shop->link = Str::slug($shop->name);
        $shop->save();

        $shop = new Shop;
        $shop->name = 'Captor & Dro_SA';
        $shop->owner = 'James Gbenro';
        $shop->location = 'Pretoria';
        $shop->email = 'captor.and.dro@gmail.com';
        $shop->contact = '0797135672';
        $shop->link = Str::slug($shop->name);
        $shop->save();
    }
}

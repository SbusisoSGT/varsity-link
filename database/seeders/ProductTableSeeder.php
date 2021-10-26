<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Stationery Shop
        $product = new Product;
        $product->name = '2 Quire Book';
        $product->price = 79.00;
        $product->image = '2 quire.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();


        $product = new Product;
        $product->name = '3 Quire Book';
        $product->price = 89.00;
        $product->image = '3 quire.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();

        $product = new Product;
        $product->name = '4 Quire Book';
        $product->price = 99.00;
        $product->image = '4 quire.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();

        $product = new Product;
        $product->name = '100 Pages Exam Pad';
        $product->price = 25.00;
        $product->image = 'exam pad.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();

        $product = new Product;
        $product->name = 'Acer Laptop';
        $product->price = 4899.00;
        $product->image = 'Accer.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();


        $product = new Product;
        $product->name = 'Lenovo Laptop';
        $product->price = 5848.00;
        $product->image = 'lenovo.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();


        $product = new Product;
        $product->name = 'HP Laptop';
        $product->price = 5875.00;
        $product->image = 'hp.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();


        $product = new Product;
        $product->name = '3-Pack Black pens';
        $product->price = 28.00;
        $product->image = 'black pens.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();

        $product = new Product;
        $product->name = '3-Pack Black Pens';
        $product->price = 28.00;
        $product->image = 'black pens.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();

        $product = new Product;
        $product->name = '3-Pack Blue Pens';
        $product->price = 28.00;
        $product->image = 'blue pens.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();

        $product = new Product;
        $product->name = '3-Pack Red Pens';
        $product->price = 28.00;
        $product->image = 'red pens.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 1;
        $product->save();


        // Scrubs Life
        $product = new Product;
        $product->name = 'White Lab Coat';
        $product->price = 175.00;
        $product->image = 'lab coat.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 2;
        $product->save();


        $product = new Product;
        $product->name = 'Clinical Coat';
        $product->price = 250.00;
        $product->image = 'clinical coat.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 2;
        $product->save();

        $product = new Product;
        $product->name = 'Grey Scrubs';
        $product->price = 250.00;
        $product->image = 'grey scrubs.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 2;
        $product->save();


        $product = new Product;
        $product->name = 'Navy Scrubs';
        $product->price = 250.00;
        $product->image = 'navy scrubs.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 2;
        $product->save();

        $product = new Product;
        $product->name = 'Pink Scrubs';
        $product->price = 250.00;
        $product->image = 'pink scrubs.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 2;
        $product->save();


        $product = new Product;
        $product->name = 'Blueberry Muffins';
        $product->price = 5.00;
        $product->image = 'blueberry muffins.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();
        

        $product = new Product;
        $product->name = 'Chocolate Muffins';
        $product->price = 5.00;
        $product->image = 'chocolate muffins.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();

        $product = new Product;
        $product->name = 'Red Velvet Muffins';
        $product->price = 5.00;
        $product->image = 'red velvet muffins.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();


        $product = new Product;
        $product->name = 'Sprinkled Cupcakes';
        $product->price = 10.00;
        $product->image = 'Sprinkled cupcakes.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();

        $product = new Product;
        $product->name = 'Oreo cupcake';
        $product->price = 10.00;
        $product->image = 'oreo cupcake.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();

        $product = new Product;
        $product->name = 'Cinnamon Donuts';
        $product->price = 7.00;
        $product->image = 'cinnamon donuts.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();


        $product = new Product;
        $product->name = 'Glazed Donuts';
        $product->price = 7.00;
        $product->image = 'glazed donuts.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 3;
        $product->save();


        $product = new Product;
        $product->name = 'Linear Algebra';
        $product->price = 450.00;
        $product->image = 'linear algebra.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 4;
        $product->save();

        $product = new Product;
        $product->name = 'Physics';
        $product->price = 395.00;
        $product->image = 'physics.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 4;
        $product->save();


        $product = new Product;
        $product->name = 'Physiology';
        $product->price = 879.00;
        $product->image = 'physiology.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 4;
        $product->save();

        $product = new Product;
        $product->name = 'Clinical Obstetrics';
        $product->price = 800.00;
        $product->image = 'clinical obstetrics.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 4;
        $product->save();

        $product = new Product;
        $product->name = 'Dental Hygiene';
        $product->price = 500.00;
        $product->image = 'dental hygiene.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 4;
        $product->save();


        //Snackery
        $product = new Product;
        $product->name = 'Lays Snacks';
        $product->price = 15.00;
        $product->image = 'lays.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 5;
        $product->save();


        $product = new Product;
        $product->name = 'Simba Snacks';
        $product->price = 15.00;
        $product->image = 'simba.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 5;
        $product->save();


        $product = new Product;
        $product->name = 'Coca-Cola Coke';
        $product->price = 12.00;
        $product->image = 'coke.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 5;
        $product->save();


        $product = new Product;
        $product->name = 'Sprite';
        $product->price = 12.00;
        $product->image = 'sprite.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 5;
        $product->save();

        $product = new Product;
        $product->name = 'Fanta Orange';
        $product->price = 12.00;
        $product->image = 'fanta.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 5;
        $product->save();


        //CAPTOR&DRO_SA
        $product = new Product;
        $product->name = 'T-shirts';
        $product->price = 150.00;
        $product->image = 'captor&dro t-shirt.JPG';
        $product->link = Str::slug($product->name);
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ratione quis aliquam debitis, ipsa facere vel laborum placeat officia doloribus similique ullam.';
        $product->shop_id = 6;
        $product->save();
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'=>'Margarita', 
                'image'=>'img/pizza1.jpg', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'6.50',
                'price_euro'=>'5.50',
            ],
            [
                'name'=>'Mozzarella', 
                'image'=>'img/pizza2.jpg', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'5.50',
                'price_euro'=>'4.50',
            ],
            [
                'name'=>'Bugatti', 
                'image'=>'img/pizza3.jpg', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'7.50',
                'price_euro'=>'6.50',
            ],
            [
                'name'=>'Dart Vader', 
                'image'=>'img/pizza6.png', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'9.50',
                'price_euro'=>'8.50',
            ],
            [
                'name'=>'Neapolitano', 
                'image'=>'img/pizza7.png', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'6.40',
                'price_euro'=>'5.40',
            ],
            [
                'name'=>'I\'m your Father', 
                'image'=>'img/pizza8.png', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'7.50',
                'price_euro'=>'6.50',
            ],
            [
                'name'=>'Aberozzio', 
                'image'=>'img/pizza9.png', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'8.20',
                'price_euro'=>'7.20',
            ],
            [
                'name'=>'Fugio', 
                'image'=>'img/pizza1.jpg', 
                'description'=>'A typical Neapolitan pizza, made with San Marzano tomatoes, 
                                mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
                'price_dollar'=>'4.50',
                'price_euro'=>'3.50',
            ]
        
        ];

        foreach($products as $product) 
        {
            App\Product::create([
                'name'=>$product['name'],
                'image'=>$product['image'],
                'description'=>$product['description'],
                'price_dollar'=>$product['price_dollar'],
                'price_euro'=>$product['price_euro'],
            ]);
        }
    }

}

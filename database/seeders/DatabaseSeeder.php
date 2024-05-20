<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use App\Models\Barbecue;
use App\Models\Image;
use App\Models\BasketProduct;
use App\Models\Basket;
use App\Models\Product;
use App\Models\BarbecueFriendship;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user_joan = User::create([
            'name' => 'Joan',
            'surnames' => 'Paneque Domingo',
            'email' => 'jpaneque@cendrassos.net',
            'description' => 'Sóc un noi de 22 anys que m\'agrada molt la cuina i fer barbacoes amb els amics. ',
            'password' => bcrypt('123456')
        ]);

        $user_roman = User::create([
            'name' => 'Roman',
            'surnames' => 'Mysyura',
            'email' => 'rmysyura@cendrassos.net',
            'description' => 'Sóc un noi de 53 anys que m\'agrada molt la cuina i fer barbacoes amb els amics. ',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/roman.jpg'
        ]);

        $user_emma = User::create([
            'name' => 'Emma',
            'surnames' => 'Cardosa',
            'email' => 'ecardosa@cendrassos.net',
            'description' => 'Sóc una noia de 22 anys que m\'agrada molt la cuina i fer barbacoes amb els amics. ',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/emma.jpg'
        ]);

        $user_aniol = User::create([
            'name' => 'Aniol',
            'surnames' => 'Moreno',
            'email' => 'amoreno@cendrassos.net',
            'description' => 'Sóc un noi de 22 anys que m\'agrada molt la cuina i fer barbacoes amb els amics. ',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/aniol.jpg'
        ]);

        $user_marcos = User::create([
            'name' => 'Marcos',
            'surnames' => 'Muñoz',
            'email' => 'mmunoz@cendrassos.net',
            'description' => 'Sóc un noi de 24 anys y soc un estudiant en el 2 DAW',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Jordi ',
            'surnames' => 'Rodríguez',
            'email' => 'jrodriquez@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/jrodriquez.jpg'
        ]);

        User::create([
            'name' => 'Marcelo',
            'surnames' => 'Hernàndez',
            'email' => 'mhernandez@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/mhernandez.jpg'
        ]);

        User::create([
            'name' => 'Adrià',
            'surnames' => 'Moya',
            'email' => 'amoya@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/amoya.jpg'
        ]);

        User::create([
            'name' => 'Alejandro',
            'surnames' => 'Espinoza',
            'email' => 'aespinoza@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/aespinoza.jpg'
        ]);

        User::create([
            'name' => 'Adrià',
            'surnames' => 'Poncelas',
            'email' => 'aponcelas@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/aponcelas.jpg'
        ]);

        User::create([
            'name' => 'Adrià',
            'surnames' => 'Jofre',
            'email' => 'ajofre@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/ajofre.jpg'
        ]);

        User::create([
            'name' => 'Xavier',
            'surnames' => 'Vallejo',
            'email' => 'xvallejo@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/xvallejo.jpg'
        ]);

        User::create([
            'name' => 'Alex',
            'surnames' => 'Escribano',
            'email' => 'aescribano@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/aescribano.jpg'
        ]);

        User::create([
            'name' => 'Anton',
            'surnames' => 'Stamov',
            'email' => 'astamov@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/astamov.jpg'
        ]);

        User::create([
            'name' => 'Adrià',
            'surnames' => 'Garcia',
            'email' => 'agarcia@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/agarcia.jpg'
        ]);

        User::create([
            'name' => 'Albert',
            'surnames' => 'Rocas',
            'email' => 'arocas@cendrassos.net',
            'password' => bcrypt('123456'),
            'image' => '/assets/img/arocas.jpg'
        ]);


        Product::create([
            'user_id' => 2,
            'name' => 'Coca-Cola',
            'price' => 2,
            'is_deleted' => false
        ]);

        Product::create([
            'user_id' => 2,
            'name' => 'Barbarechos',
            'price' => 5,
            'is_deleted' => false
        ]);

        Product::create([
            'user_id' => 1,
            'name' => 'Fanta',
            'price' => 1,
            'is_deleted' => false
        ]);

        Product::create([
            'user_id' => 3,
            'name' => 'Pan',
            'price' => 3,
            'is_deleted' => false
        ]);

        $user_roman->sendFriendRequest($user_emma);
        $user_joan->sendFriendRequest($user_emma);


        // // joan
        // $user_joan->sendFriendRequest($user_roman);
        // $user_roman->acceptFriendRequest($user_joan);

        // $user_joan->sendFriendRequest($user_emma);
        // $user_emma->acceptFriendRequest($user_joan);

        // $user_joan->sendFriendRequest($user_aniol);
        // $user_aniol->acceptFriendRequest($user_joan);

        // $user_joan->sendFriendRequest($user_marcos);
        // $user_marcos->acceptFriendRequest($user_joan);

        // // roman
        // $user_roman->sendFriendRequest($user_emma);
        // $user_emma->acceptFriendRequest($user_roman);

        // $user_roman->sendFriendRequest($user_aniol);
        // $user_aniol->acceptFriendRequest($user_roman);

        // $user_roman->sendFriendRequest($user_marcos);
        // $user_marcos->acceptFriendRequest($user_roman);

        // // emma
        // $user_emma->sendFriendRequest($user_aniol);
        // $user_aniol->acceptFriendRequest($user_emma);

        // $user_emma->sendFriendRequest($user_marcos);
        // $user_marcos->acceptFriendRequest($user_emma);

        // // aniol
        // $user_aniol->sendFriendRequest($user_marcos);
        // $user_marcos->acceptFriendRequest($user_aniol);

        // $user_emma->sendFriendRequest($user_joan);
        // $user_roman->sendFriendRequest($user_joan);
        // $user_aniol->sendFriendRequest($user_joan);
        // $user_marcos->sendFriendRequest($user_joan);

        function random_float($min, $max): float
        {
            return $min + lcg_value() * abs($max - $min);
        }

        for ($i = 0; $i < 30; $i++) {
            $random_user = User::inRandomOrder()->first();

            $user = User::create([
                'name' => 'Usuari' . $i,
                'surnames' => 'Cognoms' . $i,
                'email' => 'prova' . $i . '@cendrassos.net',
                'password' => bcrypt('123456')
            ]);
        
            $barbecue = Barbecue::create([
                'user_id' => $random_user->id,
                'latitude' => random_float(40, 42),
                'longitude' => random_float(1, 3),
                'address' => "Adreça de la barbacoa nº$i",
                'title' => "Barbacoa nº$i",
                'content' => "<p>Benvinguts a la barbacoa nº$i, en aquet lloc podreu gaudir de la millor barbacoa de la ciutat. Us esperem a tots!</p>",
                'date' => "08/08/2026 16:15h"
            ]);

            $random_images = rand(1, 4);

            if ($random_images === 4) {
                $random_images += rand(1, 4);
            }

            for ($j = 0; $j < $random_images; $j++) {
                $randomX = rand(450, 500);
                $randomY = rand(450, 500);
                $barbecue->images()->create([
                    'path' => 'https://random.imagecdn.app/' . $randomX . '/' . $randomY
                ]);
            }

            $random_comments = rand(0, 5);

            for ($j = 0; $j < $random_comments; $j++) {
                $random_user = User::inRandomOrder()->first();
                $barbecue->comments()->create([
                    'user_id' => $random_user->id,
                    'comment' => "Comentari de prova nº$j"
                ]);

                $random_replies = rand(0, 5);

                for ($k = 0; $k < $random_replies; $k++) {
                    $random_user = User::inRandomOrder()->first();
                    $comment = $barbecue->comments()->inRandomOrder()->first();
                    $comment->replies()->create([
                        'user_id' => $random_user->id,
                        'comment' => "Resposta de prova nº$k"
                    ]);
                    $comment->update([
                        'created_at' => now()
                    ]);

                    $random_replies2 = rand(0, 2);

                    for ($l = 0; $l < $random_replies2; $l++) {
                        $random_user = User::inRandomOrder()->first();
                        $comment = $comment->replies()->inRandomOrder()->first();
                        $comment->replies()->create([
                            'user_id' => $random_user->id,
                            'comment' => "Resposta de prova nº$l"
                        ]);
                        $comment->update([
                            'created_at' => now()
                        ]);
                    }
                }
            }

            $barbecue->update([
                'created_at' => now()->subDays(rand(0, 30))
            ]);

            $product = Product::create([
                'user_id' => $random_user->id,
                'name' => 'Producte nº' . $i,
                'price' => random_float(1, 10),
            ]);

            Review::create([
                'user_id' => $random_user->id,
                'guest_id' => $user->id,
                'barbecue_id' => $barbecue->id,
                'rating' => rand(1, 5),
                'content' => 'Comentari de prova'
            ]);
        }
        

        Barbecue::create([
            'user_id' => $user_joan->id,
            'latitude' => 41.385063,
            'longitude' => 2.173404,
            'address' => 'Barcelona',
            'title' => 'Barbacoa a barcelona',
            'content' => '<h1>Barbacoa a barcelona</h1><>Benvinguts a la barbacoa a barcelona, en aquet lloc podreu gaudir de la millor barbacoa de la ciutat. Us esperem a tots!</p>',
            'date' => '08/08/2026 16:15h'
        ]);

        Barbecue::create([
            'user_id' => $user_roman->id,
            'latitude' => 42.2666,
            'longitude' => 2.9591,
            'address' => 'Figueres, Girona',
            'title' => 'Barbacoa a Figueres, Girona',
            'content' => '<h1>Barbacoa a Figueres, Girona</h1><p>Benvinguts a la barbacoa a figueres, en aquet lloc podreu gaudir de la millor barbacoa de la ciutat. Us esperem a tots!</p>',
            'date' => '02/02/2025 12:45h'
        ]);

        Barbecue::create([
            'user_id' => $user_emma->id,
            'latitude' => 42.2632,
            'longitude' => 3.1600,
            'address' => 'Roses, Girona',
            'title' => 'Barbacoa a Roses, Girona',
            'content' => '<h1>Barbacoa a roses, Girona</h1><p>Benvinguts a la barbacoa a roses, en aquet lloc podreu gaudir de la millor barbacoa de la ciutat. Us esperem a tots!</p>',
            'date' => '25/06/2024 13:00h'
        ]);

        Barbecue::create([
            'user_id' => $user_aniol->id,
            'latitude' => 42.0451,
            'longitude' => 3.1856,
            'address' => 'L\'Estartit, Girona',
            'title' => 'Barbacoa a l\'Estartit, Girona',
            'content' => '<h1>Barbacoa a l\'estartit, girona</h1><p>Benvinguts a la barbacoa a l\'estartit, en aquet lloc podreu gaudir de la millor barbacoa de la ciutat. Us esperem a tots!</p>',
            'date' => '08/08/2024 20:30h'
        ]);

        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu1.jpg'
        ]);
        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu2.jpg'
        ]);
        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu3.jpg'
        ]);
        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu2.jpg'
        ]);
        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu1.jpg'
        ]);
        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu3.jpg'
        ]);
        Image::create([
            'barbecue_id' => 32,
            'path' => '/assets//img/barbaquiu1.jpg'
        ]);
        
        BarbecueFriendship::create([
            'barbecue_id' => 1,
            'user_id' => 1,
            'guest_id' => 2,
            'is_admin' => false,
            'accepted' => true
        ]);

        Basket::create([
            'id' => 1,
            'barbecue_id' => 32,
        ]);

        BasketProduct::create([
            'basket_id' => 1,
            'product_id' => 1,
            'user_id' => 2,
            'quantity' => 2,
            'price' => 2
        ]);

        BasketProduct::create([
            'basket_id' => 1,
            'product_id' => 2,
            'user_id' => 2,
            'quantity' => 3,
            'price' => 5
        ]);

        BasketProduct::create([
            'basket_id' => 1,
            'product_id' => 3,
            'user_id' => 2,
            'quantity' => 1,
            'price' => 1
        ]);

        BasketProduct::create([
            'basket_id' => 1,
            'product_id' => 4,
            'user_id' => 2,
            'quantity' => 3,
            'price' => 3
        ]);

        
    }

}
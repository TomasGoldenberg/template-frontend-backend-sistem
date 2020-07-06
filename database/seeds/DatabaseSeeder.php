<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            "name"      => "Tomas Goldenberg",
            "email"     => "tomasgoldenberg@hotmail.com",
            "password"  => Hash::make("12345678")
        ]);

        factory(App\User::class, 7)->create();

        //PAGES
        App\Page::create([
            "parent_id" => null,
            "title"     => "Quienes Somos",
            "slug"      => "quienes-somos",
            "body"      => "We specialize in creating graphic art. Convincing ideas with specialized systems to solve visual communication problems. Our team was created in 2017, where we began to promote brands with our secret and creative formula that manages to transmit the right message to its clients in all parts of the world. Now tell me; Would you like to know what the secret is? We will tell you honestly ... It is our team. We encourage each other to be our best human and artistic version."
        ]);

        App\Page::create([
            "parent_id" => 1,
            "title"     => "Mision",
            "slug"      => "mision",
            "body"      => "NOS ENCANTA CREAR EMPRESAS CHINGONAS WEEEY QUE PEDOOOO"
        ]);

        App\Page::create([
            "parent_id" => 1,
            "title"     => "Vision",
            "slug"      => "vision",
            "body"      => "NOS ENCANTAra CREAR todas las EMPRESAS CHINGONAS que existan WEEEY QUE PEDOOOO"
        ]);

        //POSTS
        factory(App\Post::class, 24)->create();
    }
}

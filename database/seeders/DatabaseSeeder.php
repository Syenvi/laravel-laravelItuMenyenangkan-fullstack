<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name'=>'Syahdin',
        //     'email'=>'syahdin@gmail.com',
        //     'password'=>bcrypt('12345678')
        // ]);

        // User::create([
        //     'name'=>'Huang',
        //     'email'=>'huangtiandi@gmail.com',
        //     'password'=>bcrypt('12345678')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name'=>'Anime',
            'slug'=>'anime'
        ]);

        Category::create([
            'name'=>'Drama Korea',
            'slug'=>'drama-korea'
        ]);

        Category::create([
            'name'=>'Drama Jepang',
            'slug'=>'drama-jepang'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title'=>'One Piece',
        //     'category_id'=>1,
        //     'user_id'=>1,
        //     'slug'=>'one-piece',
        //     'excerpt'=>'Barely surviving in a barrel after passing through a terrible whirlpool at sea, carefree Monkey D. Luffy ends up aboard a ship under attack by fearsome pirates. Despite being a naive-looking teenager, he is not to be underestimated. Unmatched in battle, Luffy is a pirate himself who resolutely pursues the coveted One Piece treasure and the King of the Pirates title that comes with it.',
        //     'body'=>'<p>Barely surviving in a barrel after passing through a terrible whirlpool at sea, carefree Monkey D. Luffy ends up aboard a ship under attack by fearsome pirates. Despite being a naive-looking teenager, he is not to be underestimated. Unmatched in battle, Luffy is a pirate himself who resolutely pursues the coveted One Piece treasure and the King of the Pirates title that comes with it.</p><p>The late King of the Pirates, Gol D. Roger, stirred up the world before his death by disclosing the whereabouts of his hoard of riches and daring everyone to obtain it. Ever since then, countless powerful pirates have sailed dangerous seas for the prized One Piece only to never return. Although Luffy lacks a crew and a proper ship, he is endowed with a superhuman ability and an unbreakable spirit that make him not only a formidable adversary but also an inspiration to many.</p><p>As he faces numerous challenges with a big smile on his face, Luffy gathers one-of-a-kind companions to join him in his ambitious endeavor, together embracing perils and wonders on their once-in-a-lifetime adventure..</p>'
        // ]);

        // Post::create([
        //     'title'=>'Sousou no Frieren',
        //     'category_id'=>1,
        //     'user_id'=>1,
        //     'slug'=>'sousou-no-frieren',
        //     'excerpt'=>'During their decade-long quest to defeat the Demon King, the members of the heros party-Himmel himself, the priest Heiter, the dwarf warrior Eisen, and the elven mage Frieren-forge bonds through adventures and battles, creating unforgettable precious memories for most of them.',
        //     'body'=>'<p>During their decade-long quest to defeat the Demon King, the members of the heros party-Himmel himself, the priest Heiter, the dwarf warrior Eisen, and the elven mage Frieren-forge bonds through adventures and battles, creating unforgettable precious memories for most of them.
        //     </p><p>However, the time that Frieren spends with her comrades is equivalent to merely a fraction of her life, which has lasted over a thousand years. When the party disbands after their victory, Frieren casually returns to her "usual" routine of collecting spells across the continent. Due to her different sense of time, she seemingly holds no strong feelings toward the experiences she went through.
        //     </p><p>As the years pass, Frieren gradually realizes how her days in the heros party truly impacted her. Witnessing the deaths of two of her former companions, Frieren begins to regret having taken their presence for granted; she vows to better understand humans and create real personal connections. Although the story of that once memorable journey has long ended, a new tale is about to begin.</p>'
        // ]);

        // Post::create([
        //     'title'=>'The Penthouse',
        //     'category_id'=>2,
        //     'user_id'=>1,
        //     'slug'=>'the-penthouse',
        //     'excerpt'=>'Para penghuni apartemen termewah di Seoul yang ambisius dan serakah mengabaikan moral mereka demi meraih puncak kekayaan dan kekuasaan yang memusingkan.',
        //     'body'=>'<p>Para penghuni apartemen termewah di Seoul yang ambisius dan serakah mengabaikan moral mereka demi meraih puncak kekayaan dan kekuasaan yang memusingkan.</p>'
        // ]);

        // Post::create([
        //     'title'=>'Alice in Borderland',
        //     'category_id'=>3,
        //     'user_id'=>2,
        //     'slug'=>'alice-in-borderland',
        //     'excerpt'=>'An aimless gamer and two friends are stranded in a parallel Tokyo. There, they are forced to compete in a series of sadistic games in order to survive.',
        //     'body'=>'<p>An aimless gamer and two friends are stranded in a parallel Tokyo. There, they are forced to compete in a series of sadistic games in order to survive.</p>'
        // ]);
    }
}

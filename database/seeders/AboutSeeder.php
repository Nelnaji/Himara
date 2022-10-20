<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'card_bg_img' => 'about-card.jpg',
            'sub_title' => 'High quality accommodation services',
            "body"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda. ",
            "recommended_1" => "provider-1.png",
            "recommended_2" => "provider-2.png",
            "recommended_3" => "provider-3.png",
            "recommended_4" => "provider-4.png",
            "card_title" => "luxury hotel",
            "card_body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo. ",
        ]);
    }
}

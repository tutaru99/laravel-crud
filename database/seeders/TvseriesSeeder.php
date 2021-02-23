<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TvseriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tvseries = new \App\Models\TvSeries([
            'name' => 'Ozark',
            'description' => 'A financial advisor drags his family from Chicago to the Missouri Ozarks, where he must launder money to appease a drug boss.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BODIyNzk5NDg5M15BMl5BanBnXkFtZTgwMTE5NjA5MjI@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '24',
            'rating' => '10'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'Snowpiercer',
            'description' => 'Seven years after the world has become a frmnants of humanity inhabit a perpetually-moving train that circles the globe, where class warfare',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BYTY1MDhjOWQtYWFkNS00ODA1LTg1YTUtZDhmZDE0MDJlMzIwXkEyXkFqcGdeQXVyMTI4MDc0NjU2._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '22',
            'rating' => '7'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'The Expanse',
            'description' => 'In the 24th century, a disparate band of antiheroes unravel a vast conspiracy that threatens the Solar Systems fragile state of cold war.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BMjM4ZTVkODctNGZhNC00NWY5LWJkMjEtYmI1ZDg2Yjg2NDQzXkEyXkFqcGdeQXVyNjcyNjcyMzQ@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '12',
            'rating' => '9'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'Lucifer',
            'description' => 'Lucifer Morningstar has decided hes had enough of being the dutiful servant in Hell and decides to spend some time on Earth to better understand humanity.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BNzY1YjIxOGMtOTAyZC00YTcyLWFhMzQtZTJkYTljYzU0MGRlXkEyXkFqcGdeQXVyMTAwMzM3NDI3._V1_UY268_CR0,0,182,268_AL_.jpg',
            'episode_number' => '34',
            'rating' => '10'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'Game of Thrones',
            'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY268_CR7,0,182,268_AL_.jpg',
            'episode_number' => '73',
            'rating' => '1'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'Stranger Things',
            'description' => 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '14',
            'rating' => '6'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'Westworld',
            'description' => 'Set at the intersection of the near future and the reimagined past, explore a world in which every human appetite',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BMTRmYzNmOTctZjMwOS00ODZlLWJiZGQtNDg5NDY5NjE3MTczXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '12',
            'rating' => '5'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'The Mandalorian',
            'description' => 'The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BZDhlMzY0ZGItZTcyNS00ZTAxLWIyMmYtZGQ2ODg5OWZiYmJkXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '24',
            'rating' => '9'
        ]);
        $tvseries -> save();

        $tvseries = new \App\Models\TvSeries([
            'name' => 'The Walking Dead',
            'description' => 'Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins and must lead a group of survivors to stay alive.',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BMTc5ZmM0OTQtNDY4MS00ZjMyLTgwYzgtOGY0Y2VlMWFmNDU0XkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'episode_number' => '1231',
            'rating' => '4'
        ]);
        $tvseries -> save();

      
    }
}

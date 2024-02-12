<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        App\User::create([
            'name'     => 'Princewill',
            'email'    => 'princewillopah@gmail.com',
            'password' => bcrypt('prince'),
        ]);
        App\User::create([
            'name'     => 'opah Princewill',
            'email'    => 'opahpricewill@gmail.com',
            'password' => bcrypt('prince'),
        ]);
// ==========================================================================
        $name1 = 'Oluseyi Grey';$name2 = 'John Lee';$name3 = 'Packer Love';$name4 = 'Gaga Olusetye';$name5 = 'Gred Paul';
        $name6 = 'Obasenjo Ogungbe';$name7 = 'Alem Paul';$name8 = 'Tosin Ade';$name9 = 'Akata koko';$name10 = 'Moshood Ola';
        App\Pastor::create([
            'name'        => $name1 ,
            'title'       => 'Head Pastor',
            'slug'        => str_slug($name1),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+23409803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name2 ,
            'title'       => 'Pastor',
            'slug'        => str_slug($name2),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+23409803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name3 ,
            'title'       => 'Pastor',
            'slug'        => str_slug($name3),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+23409803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name4 ,
            'title'       => 'Zonal Pastor',
            'slug'        => str_slug($name4),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+23409803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name5 ,
            'title'       => 'Zonal Pastor',
            'slug'        => str_slug($name5),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+209803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name6 ,
            'title'       => 'Visiting Pastor',
            'slug'        => str_slug($name6),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+209803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name7 ,
            'title'       => 'District Pastor',
            'slug'        => str_slug($name7),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+209803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name8 ,
            'title'       => 'Pastor',
            'slug'        => str_slug($name8),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+234003834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name9 ,
            'title'       => 'Pastor',
            'slug'        => str_slug($name9),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+209803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
        App\Pastor::create([
            'name'        => $name10 ,
            'title'       => 'Zonal Pastor',
            'slug'        => str_slug($name10),
            'pic'         => 'public/placeholder-img/pastors/person_1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
            'phone'       => '+23407803834',
            'facebook'    => 'www.facebook.com/yrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'twitter'     => 'www.twitter.com/eyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
            'instagram'   => 'www.instagram.com/tyrrdgfhfghfgfhffhggngjghgdvfbngnbg',
        ]);
 // ==============================================================================

            $title1 = 'The journey Beyond';$title2 = 'God palace'; $title3 = 'Packer Love';$title4 = 'book of life';$title5 = 'gray message';
            $title6 = 'Love indept';$title7 = 'Play in Heaven'; $title8 = 'heaven and Token'; $title9 = 'children day';$title10 = 'place after heaven';
            App\Event::create([
                'title'          => $title1 ,
                'place'          => 'the garden house',
                'slug'           => str_slug($title1),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title2 ,
                'place'          => 'Paint house',
                'slug'           => str_slug($title2),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title3 ,
                'place'          => 'love place',
                'slug'           => str_slug($title3),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title4 ,
                'place'          => 'place of peace',
                'slug'           => str_slug($title4),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title5 ,
                'place'          => 'the garden house',
                'slug'           => str_slug($title5),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title6 ,
                'place'          => 'the place good',
                'slug'           => str_slug($title6),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title7 ,
                'place'          => 'the garden house',
                'slug'           => str_slug($title7),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title8 ,
                'place'          => 'the garden house',
                'slug'           => str_slug($title8),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title9 ,
                'place'          => 'the garden house',
                'slug'           => str_slug($title9),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);
            App\Event::create([
                'title'          => $title10,
                'place'          => 'the garden house',
                'slug'           => str_slug($title10),
                'image'          => 'public/placeholder-img/pastors/person_1.jpg',
                'description'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem ea culpa voluptates, similique ratione dignissimos expedita debitis aliquid, maiores repellat, possimus ex exercitationem voluptatum incidunt commodi numquam atque earum?',
                'eventStartDate' => '2019-10-23 03:04:12',
                'eventEndDate'   => '2019-11-13 05:05:12',
            ]);

    }
}

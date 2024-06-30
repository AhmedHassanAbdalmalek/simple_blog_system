<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class makepostsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post=Post::create([
            'title'=>Str::random(10),
            'body'=>Str::random(400),
            'user_id'=>1
        ]);
        for($i=0;$i<5;$i++){
            $post->comments()->create([
                'body'=>Str::random(200)
            ]);
        }
    }
}

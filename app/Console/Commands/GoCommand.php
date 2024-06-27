<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $profile = Profile::first();
        $post = Post::first();
        $tag = Tag::first();

        dd($profile->posts);
    }
}

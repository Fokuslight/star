<?php

namespace App\Console\Commands;

use App\Events\Post\PostStoreEvent;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
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
        Post::all();
//        Post::where('id', 10)->delete();
//        PostStoreEvent::dispatch();
        // attach - просто добавление
        // syncWithoutDetaching
        // detach - просто удаление
        // sync - оставляет только то, что в методе
        // toggle - включить/выключить
        // updateExistingPivot - апдейт
//    0 => 7
//    1 => 8
//    2 => 9
//    3 => 12
//    4 => 16
        dd(7777);
    }
}

<?php

namespace App\Http\Controllers;

use App\Events\Post\PostStoreEvent;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function store()
    {
        $data = $this->getData();
        $post = Post::create($data);
        PostStoreEvent::dispatch();
        return $post;
        // Обработка
        // Бизнес логика
        // Формирование ответа
    }

    public function index()
    {
        return PostResource::collection(Post::all())->resolve();
    }

    public function show(Post $post)
    {
        return PostResource::make($post)->resolve();
    }

    public function update(Post $post)
    {
        $post->update([
            'title' => 'my post edited',
            'content' => 'some content edited',
            'author' => 'Ivan edited',
            'category' => 'Web edited',
        ]);

        return PostResource::make($post)->resolve();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return Response::HTTP_NO_CONTENT;
    }

    private function getData() {
        return [
            'title' => 'my post',
            'published_at' => now(),
            'content' => 'some content',
            'author' => 'Ivan',
            'category' => 'Web',
        ];
    }
}

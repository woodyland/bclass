<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    // seperti komponen tp bukan komponen halaman posts yg plural
    private function getPosts()
    {
        return [
            ['id' => 1, 'title' => 'UBG', 'content' => 'komputer'],
            ['id' => 2, 'title' => 'unram', 'content' => 'teknik sipil'],
            ['id' => 3, 'title' => 'uin', 'content' => 'agama'],
        ];
    }

    // halaman home isinya posts banyak
    public function home()
    {
        $posts = $this->getPosts();
        return view('home', compact('posts'));
    }

    // single kalo diklik satu2
    public function show($id)
    {
        $posts = $this->getPosts();
        $post = collect($posts)->firstWhere('id', (int)$id);

        if (!$post) {
            abort(404);
        }

        return view('post', compact('post'));
    }

    //halaman tentang
    public function about()
    {
        $info = [
            'name' => 'deva',
            'bio' => 'penulis.'
        ];

        return view('about', compact('info'));
    }
}

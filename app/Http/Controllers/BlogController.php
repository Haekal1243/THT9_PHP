<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs = [

            ['id' => 1, 'title' => 'RRQ Wins MPL Championship', 'excerpt' => 'How RRQ secured their victory in the MPL Championship...', 'content' => 'Detailed article about the MPL Championship...'],
            ['id' => 2, 'title' => 'Interview with Lemon', 'excerpt' => 'Exclusive insights from one of RRQ\'s star players...', 'content' => 'Full interview with Lemon...'],
            ['id' => 3, 'title' => 'RRQ’s Gaming House Tour', 'excerpt' => 'Take a peek inside RRQ\'s state-of-the-art gaming house...', 'content' => 'Full details about the gaming house...'],
        ];


    public function index()
    {
        return view('blog.index', ['blogs' => $this->blogs]);
    }

    public function post($id)
    {
        $blog = collect($this->blogs)->firstWhere('id', $id);
        return view('blog.post', ['blog' => $blog]);
    }
}

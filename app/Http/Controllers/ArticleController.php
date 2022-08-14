<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        $data = [
            'title' => 'Article',
            'details' => [
                'category_1' => 'Laravel',
                'category_2' => 'VueJs',
                'category_3' => 'Mysql',
            ]
        ];

        $article = Article::create($data);

        dd($article->details);
    }
}

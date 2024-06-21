<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Article extends Model
{
    use HasFactory, Sushi;

    protected $fillable = [
        'title',
        'description',
        'public'
    ];

    public function getRows()
    {
        return [
            [
                'title' => 'Hello Blog',
                'description' => 'Hello Blog',
                'path' => '2024/hello-blog.md',
                'public' => false,
            ],
            [
                'title' => 'Hey Stranger',
                'description' => 'A way of saying hello ',
                'path' => '2024/hey-stranger.md',
                'public' => true,
            ],
        ];
    }
}

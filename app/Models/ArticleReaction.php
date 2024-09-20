<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class ArticleReaction extends Model
{
    use HasFactory , Sushi;

    protected $rows = [
        [
            'name' => 'like',
            'smiley' => '👍',
        ],
        [
            'name' => 'funny',
            'smiley' => '😂',
        ],
        [
            'name' => 'love',
            'smiley' => '❤️',
        ],
        [
            'name' => 'dislike',
            'smiley' => '👎',
        ],
    ];
}

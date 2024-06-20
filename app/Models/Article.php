<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Article extends Model
{
    use HasFactory, Sushi;

    protected $rows = [
        [
            "title" => "Hello Blog",
            "description" => "Hello Blog",
            "path" => "2024/path.md",
            "public" => false,
        ],
        [
            "title" => "Hello Blog",
            "description" => "Hello Blog",
            "path" => "2024/path.md",
            "public" => true,
        ],
    ];
}

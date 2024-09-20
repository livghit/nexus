<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    //slug planed as mini description and keyword desciption of the blog
    protected $fillable = ['title', 'description', 'public'];

    public function hashtags(): HasMany
    {
        return $this->hasMany(Hashtag::class);
    }
}

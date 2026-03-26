<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
            protected $fillable = ['title', 'content', 'category_id', 'author', 'published_at'];

            public function category () {
                return $this->belongsTo(Category::class);
            }

            public function tags() {
                return $this->beLongsToMany(Tag::class, 'news_tag');
            }

}

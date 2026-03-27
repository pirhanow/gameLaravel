<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class News extends Model
{
            protected $fillable = ['title', 'content', 'category_id', 'author', 'published_at'];

            public function category () {
                return $this->belongsTo(Category::class);
            }

            public function tags() {
                return $this->beLongsToMany(Tag::class, 'news_tag');
            }
            protected function title():Attribute
            {
                return Attribute::make(
                    //get: fn ($value) => ucfirst($value),
                    get: fn ($value) => mb_convert_case($value, MB_CASE_TITLE, "UTF-8"),
                    set: fn ($value) => strtolower($value),
                );
            }

}

<?php

namespace App\Models;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Columns that are mass assignable
     */
    protected $fillable = ['name','description','slug','keywords'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    /**
     * Returns the posts for this category
     */
    public function posts() {

        return $this->hasMany(Post::class,'category_id','id');
    }

    public function scopeEagerLoaded($query)
    {
        return $query->with('posts');
    }

    public function name():Attribute
    {
        return new Attribute(set:fn ($value) => ucwords($value));
    }

    public function description():Attribute
    {
        return new Attribute(set:fn ($value) => ucwords($value));
    }
}

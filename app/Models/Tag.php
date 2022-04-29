<?php

namespace App\Models;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory, Sluggable;

    /**
     * Columns that are mass assignable
     */
    protected $fillable = ['name','desc','slug','keywords'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    /**
     * Returns the posts for this tag
     */
    public function posts() {

        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}

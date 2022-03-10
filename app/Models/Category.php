<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Columns that are mass assignable
     */
    protected $fillable = ['name','description','slug','keywords'];

    /**
     * Returns the posts for this category
     */
    public function posts() {

        return $this->hasMany(Post::class,'category_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Columns that are mass assignable
     */
    protected $fillable = ['name','desc','slug','keywords'];

    /**
     * Returns the posts for this tag
     */
    public function posts() {

        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}

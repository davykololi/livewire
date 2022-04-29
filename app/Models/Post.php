<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;
    /**
     * Columns that are mass assignable
     */
    protected $table = 'posts';
    protected $dates = ['published_at']; 
    protected $fillable = ['title','image','caption','content','description','keywords','is_published','user_id','category_id','slug','published_date','published_by'];
    const EXCERPT_LENGTH = 100;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }

    /**
     * Returns the user for this post
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
     * Returns the category for this post
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    /**
     * Returns the comments for this post
     */
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id','id');
    }

    /**
     * Returns the tags for this post
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function excerpt()
    {
        return Str::limit(strip_tags($this->content),Post::EXCERPT_LENGTH);
    }

    /**
    * Return the date portion of published_time
    */
    public function pubDate()
    { 
        return Carbon::parse($this->published_date)->format('M d, Y');
    } 

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}

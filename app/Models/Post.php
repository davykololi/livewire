<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Feedable
{
    use HasFactory, Sluggable;
    /**
     * Columns that are mass assignable
     */
    protected $table = 'posts';
    protected $dates = ['published_at']; 
    protected $fillable = ['title','image','caption','content','description','keywords','is_published','user_id','category_id','slug','published_date','published_by'];
    protected $appends = ['createdDate'];
    const EXCERPT_LENGTH = 100;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id(env('APP_URL').'/article/'.$this->slug)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->link(route('post-detail',$this->slug))
            ->authorName($this->user->name);
    }

    public static function getFeedItems()
    {
        return Post::eagerLoaded()->published()->latest()->limit(50)->get();
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

    /**
    * Set the title attribute and automatically the slug
    * 
    * @param string $value
    */
    public function title():Attribute
    {
        return new Attribute(set:fn ($value) => ucwords($value));

        if (! $this->exists){ 
            $this->setUniqueSlug($value, '');
        } 
    }

    /**
    * Recursive routine to set a unique slug
    *
    * @param string $title
    * @param mixed $extra
    */
    protected function setUniqueSlug($title, $extra)
    {
        $slug = str_slug($title.'-'.$extra);
        if (static::whereSlug($slug)->exists()){
            $this->setUniqueSlug($title, $extra + 1);
            return;
        }
        $this->attributes['slug'] = $slug;
    } 

    public function description():Attribute
    {
        return new Attribute(set:fn ($value) => ucwords($value));
    }

    public function caption():Attribute
    {
        return new Attribute(set:fn ($value) => ucwords($value));
    }

    public function imageUrl()
    {
        return url('/storage/'.$this->image);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function postDetails()
    {
        return route('post-detail',$this->slug);
    }

    public function scopeEagerLoaded($query)
    {
        return $query->with('user','category','tags','comments')->withCount('comments');
    }
}

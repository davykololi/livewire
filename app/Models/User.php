<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','role','email','password',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isEditor()
    {
        return $this->role === 'editor';
    }

    public function isAuthor()
    {
        return $this->role === 'author';
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    /**
    * Get the posts for this user
    */
    public function posts() {

        return $this->hasMany(Post::class);
    }

    /**
    * Get the comments for this user
    */
    public function comments() {

        return $this->hasManyThrough(Comment::class,Post::class,'post_id','user_id','id');
    }
}

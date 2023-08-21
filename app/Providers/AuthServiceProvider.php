<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        /* define an admin user role */
        Gate::define('isAdmin',function(User $user){
            return $user->role == 'admin';
        });

        /* define an editor user role */
        Gate::define('isEditor',function(User $user){
            return $user->role == 'editor';
        });

        /* define an admin user role */
        Gate::define('isAuthor',function(User $user){
            return $user->role == 'author';
        });

        /* define an admin user role */
        Gate::define('isVisitor',function(User $user){
            return $user->role == 'visitor';
        });

        Gate::define('create-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('edit-post', function (User $user, Post $post) {
            return $user->role === 'editor';
        });
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about-us'))
            ->add(Url::create('/contact-us'));

        $categories = Category::all();
        foreach($categories as $category){
            $sitemap->add(Url::create('/categories/'.$category->slug));
        }

        $posts = Post::published()->get();
        foreach($posts as $post){
            $sitemap->add(Url::create('/article/'.$post->slug));
        }

        $tags = Tag::all();
        foreach($tags as $tag){
            $sitemap->add(Url::create('/tags/'.$tag->slug));
        }

        $users = User::with('posts')->whereRole('author')->get();
        foreach($users as $user){
            $sitemap->add(Url::create('/author-posts/'.$user->slug));
        }
        
        $sitemap->writeToFile(public_path('sitemap.xml')); 
    }
}

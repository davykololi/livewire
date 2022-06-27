<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

function categories()
{
	return Category::eagerLoaded()->limit(10)->get();
}

function tags()
{
	return Tag::eagerLoaded()->limit(20)->get();
}

function latest_posts()
{
	return Post::where('is_published', true)->latest()->limit(10)->get();
}

function footer_categories()
{
	return Category::eagerLoaded()->get();
}
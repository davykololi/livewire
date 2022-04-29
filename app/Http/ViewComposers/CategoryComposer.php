<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer 
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */

    public function compose(View $view){
        $categories = categories();
        $footerCategories = footer_categories();
        $view->with(['categories'=>$categories,'footerCategories'=>$footerCategories]); 
    }
}

<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{

    /**
     * Handle the Category "deleting" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleting(Category $category)
    {
        $category->servicesBoot()->delete();
        $category->doctorsBoot()->update(['category_id' => null]);
    }

    /**
     * Handle the Category "restoring" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restoring(Category $category)
    {
        $category->servicesBoot()->restore();
    }
}
<?php

namespace App\Actions;

use App\Http\Requests\FilterCategoryRequest;
use App\Models\Category;


class FilterCategoryAction
{

    /**
     * pick data from Category table with pagination and sortable
     * and filter
     *
     * @param  FilterCategoryRequest $request
     * @return array
     */
    public function handle(FilterCategoryRequest $request): array
    {
        $query = Category::sortable();
        $data['search'] = $request->query('search');
        if ($data['search']) {
            $query->orWhere("id", "like", '%' . $data['search'] . '%');
            $query->orWhere("name", "like", '%' . $data['search'] . '%');
        }
        $data['categories'] = $query->paginate(5)->withQueryString();

        return $data;
    }
}
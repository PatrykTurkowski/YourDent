<?php

namespace App\Actions;

use App\Http\Requests\FilterServiceRequest;
use App\Models\Category;
use App\Models\Service;


class FilterServiceAction
{

    /**
     * pick data from Service table with pagination and sortable
     * and filter
     * 
     * leftJoin Categories
     *
     * @param  mixed $request
     * @return array
     */
    public function handle(FilterServiceRequest $request): array
    {

        $data['search'] = $request->query('search');
        $query = Service::select('services.*');
        $query->sortable();

        if (is_null($query->getQuery()->joins)) {
            $query->leftJoin('categories', 'categories.id', '=', 'services.category_id');
        }

        if ($data['search']) {

            $query->orWhere("services.id", "like", '%' . $data['search'] . '%');
            $query->orWhere("services.name", "like", '%' . $data['search'] . '%');
            $query->orWhere('categories.name', "like", '%' .  $data['search'] . '%');
        }
        $data['services'] = $query->paginate(5)->withQueryString();

        return $data;
    }
}
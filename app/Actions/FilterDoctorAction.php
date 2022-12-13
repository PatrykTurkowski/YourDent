<?php

namespace App\Actions;

use App\Http\Requests\FilterDoctorRequest;
use App\Models\Doctor;



class FilterDoctorAction
{



    /**
     * pick data from Doctors table with pagination and sortable
     * and filter
     * 
     * leftJoin Categories
     *
     * @param  mixed $request
     * @return array
     */
    public function handle(FilterDoctorRequest $request): array
    {
        $data['search'] = $request->query('search');
        $query = Doctor::select('doctors.*');
        $query->sortable();

        if (is_null($query->getQuery()->joins)) {
            $query->leftJoin('categories', 'categories.id', '=', 'doctors.category_id');
        }

        if ($data['search']) {

            $query->orWhere("doctors.id", "like", '%' . $data['search'] . '%');
            $query->orWhere("doctors.name", "like", '%' . $data['search'] . '%');
            $query->orWhere('doctors.surname', "like", '%' .  $data['search'] . '%');
            $query->orWhere('categories.name', "like", '%' .  $data['search'] . '%');
        }
        $data['doctors'] = $query->paginate(5)->withQueryString();

        return $data;
    }
}
<?php

namespace App\Actions;

use App\Http\Requests\FilterUserRequest;
use App\Models\User;


class FilterUserAction
{

    public function __construct()
    {
    }

    public function handle(FilterUserRequest $request)
    {
        $query = User::sortable();
        $data['search'] = $request->query('search');
        if ($data['search']) {
            $query->orWhere("id", "like", '%' . $data['search'] . '%');
            $query->orWhere("name", "like", '%' . $data['search'] . '%');
            $query->orWhere("surname", "like", '%' . $data['search'] . '%');
            $query->orWhere("pesel", "like", '%' . $data['search'] . '%');
        }
        $data['users'] = $query->paginate(5)->withQueryString();

        return $data;
    }
}
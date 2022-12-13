<?php

namespace App\Actions;

use App\Http\Requests\SearchFreeVisitRequest;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Term;


class SearchFreeVisitAction
{

    public function __construct()
    {
    }

    public function handle(SearchFreeVisitRequest $request)
    {

        $query = Term::sortable()->where('user_id', '=', null);

        if ($request->query('doctor_id') === '') {
            $data['doctor_id'] = null;
        } else {
            $data['doctor_id'] = $request->query('doctor_id');
        }


        $data['start_day'] = $request->query('start_day');
        $data['end_day'] = $request->query('end_day');
        $data['doctors'] = Doctor::all();

        if ($data['start_day']) {
            $query->where('date_visit', '>=', $data['start_day']);
        }
        if ($data['end_day']) {
            $query->where('date_visit', '<=', $data['end_day']);
        }
        if ($data['doctor_id']) {
            $query->where('doctor_id', '=', $data['doctor_id']);
        }
        $data['terms'] = $query->paginate(5)->withQueryString();
        return $data;
    }
}
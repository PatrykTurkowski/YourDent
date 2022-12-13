<?php

namespace App\Actions;

use App\Http\Requests\FilterTermRequest;
use App\Models\Term;


class FilterTermAction
{

    public function __construct()
    {
    }

    public function handle(FilterTermRequest $request)
    {

        $query = Term::sortable();
        $data['start_day'] = $request->query('start_day');
        $data['end_day'] = $request->query('end_day');
        $data['start_time'] = $request->query('start_time');
        $data['end_time'] = $request->query('end_time');

        if ($data['start_day']) {
            $query->where('date_visit', '>=', $data['start_day']);
        }
        if ($data['end_day']) {
            $query->where('date_visit', '<=', $data['end_day']);
        }
        if ($data['start_time']) {
            $query->where('start_visit', '>=', $data['start_time']);
        }
        if ($data['end_time']) {
            $query->where('start_visit', '<=', $data['end_time']);
        }

        $data['terms'] = $query->paginate(5)->withQueryString();
        return $data;
    }
}
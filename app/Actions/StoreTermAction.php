<?php

namespace App\Actions;

use App\Http\Requests\StoreTermsGeneratorRequest;
use App\Models\Term;
use Illuminate\Support\Facades\DB;


class StoreTermAction
{
    public function handle(StoreTermsGeneratorRequest $request)
    {

        $startDayInMonth = strtotime($request->start_date);
        $endDayInMonth = strtotime($request->end_date);
        $startDayOfHour = strtotime($request->start_day);
        $endDayOfHour = strtotime($request->end_day);
        $startBreak = strtotime($request->start_break);
        $endBreak = strtotime($request->end_break);
        $workingDays = $request->work_days;
        $timeOneVisit = $request->time_one_visit * 60;
        $doctor = $request->doctor_id;

        $dateVisitBefore = [];
        $startVisitBefore = [];
        $endVisitBefore = [];


        $j = $startDayInMonth;

        while ($endDayInMonth >= $j) {

            if (!in_array(date('N', $j), $workingDays)) {
                $j += 86400;
                continue;
            }

            $i = $startDayOfHour;

            while ($endDayOfHour > $i) {
                if ($startBreak <= $i && $endBreak > $i) {
                    $i = $endBreak;
                }




                array_push($dateVisitBefore, date('Y-m-d', $j));
                array_push($startVisitBefore, date('H:i', $i));
                array_push($endVisitBefore, date('H:i', $i + $timeOneVisit));




                $i += $timeOneVisit;
            }
            $j += 86400;
        }
        return [
            'doctor_id' => $doctor,
            'date_visit' => $dateVisitBefore,
            'start_visit' => $startVisitBefore,
            'end_visit' => $endVisitBefore,
        ];
    }

    public function pushTermsToDb(array $terms): void
    {

        for ($i = 0; $i < count($terms['date_visit']); $i++) {
            Term::create([

                'doctor_id' => $terms['doctor_id'],
                'date_visit' => $terms['date_visit'][$i],
                'start_visit' => $terms['start_visit'][$i],
                'end_visit' => $terms['end_visit'][$i]
            ]);
        }
    }
}
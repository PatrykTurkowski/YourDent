<?php

namespace Database\Seeders;

use App\Actions\SeedTermAction;
use Illuminate\Database\Seeder;


class TermSeeder extends Seeder
{
    public function run(SeedTermAction $action)
    {


        $endDate = date("Y-m-d", strtotime(now()->addMonths(2)));
        $timeOneVisit = 20;
        $startDay = "08:00";
        $startDate = date("Y-m-d", strtotime(now()->addMonth()));
        $endDay = "16:00";
        $startBreak = "12:00";
        $endBreak = "12:20";
        $workDays = [1, 3, 5];
        $doctor_id = 1;

        $data = [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'time_one_visit' => $timeOneVisit,
            'start_day' => $startDay,
            'end_day' => $endDay,
            'start_break' => $startBreak,
            'end_break' => $endBreak,
            'work_days' => $workDays,
            'doctor_id' => $doctor_id,
        ];

        $terms = $action->handle($data);


        $action->pushTermsToDb($terms);
    }
}
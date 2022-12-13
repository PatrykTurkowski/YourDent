<?php

namespace App\Observers;

use App\Models\Doctor;
use App\Models\Term;

class DoctorObserver
{


    /**
     * Handle the Doctor "deleting" event.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return void
     */
    public function deleting(Doctor $doctor)
    {
        $Terms = Term::where('doctor_id', $doctor->id);
        $Terms->delete();
    }
}
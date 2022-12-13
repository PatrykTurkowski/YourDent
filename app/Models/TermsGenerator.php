<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TermsGenerator extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'end_date',
        'time_one_visit',
        'start_day',
        'end_day',
        'start_break',
        'end_break',
        'work_days',
        'doctor_id',
    ];

    /**
     * doctors
     *
     * @return BelongsTo
     */
    public function doctors(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }


    /**
     * take from database all Doctors 
     * its needed if we want create news terms
     * one line less from controller
     *
     * @return Collection
     */
    public function doctorsAll(): Collection
    {
        return Doctor::all();
    }
}
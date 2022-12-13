<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Service;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Term extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'date_visit',
        'start_visit',
        'is_active',
        'end_visit',
        'user_id',
        'is_paid',
        'doctor_id',
    ];
    protected $sortable = [
        'id',
        'date_visit',
        'start_visit',
        'end_visit',
        'user_id',
        'is_paid',
        'doctor_id',


    ];

    /**
     * categories
     *
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function doctors(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
    public static function boot()
    {

        // static::addGlobalScope(new DeletedRowsScopes);

        parent::boot();
    }
}
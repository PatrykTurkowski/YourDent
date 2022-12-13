<?php

namespace App\Models;

use App\Models\Scopes\DeletedRowsScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;



class Category extends Model
{

    use HasFactory, Sortable, SoftDeletes;
    // public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',


    ];

    public $sortable = [
        'id',
        'name',


    ];
    /**
     * services with name 
     *
     * @return HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id', 'name');
    }
    /**
     * doctors with name 
     *
     * @return HasMany
     */
    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class, 'category_id', 'name');
    }
    /**
     * services with name 
     *
     * @return HasMany
     */
    public function servicesBoot(): HasMany
    {
        return $this->hasMany(Service::class);
    }
    /**
     * doctors with name 
     *
     * @return HasMany
     */
    public function doctorsBoot(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }



    public static function boot()
    {

        static::addGlobalScope(new DeletedRowsScopes);

        parent::boot();
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Term;
use App\Models\TermsGenerator;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class Doctor extends Model
{
    use HasFactory, Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'category_id'
    ];
    protected $sortable = [
        'id',
        'name',
        'surname',
        'category_id'
    ];


    public function terms(): HasMany
    {
        return $this->hasMany(Term::class, 'doctor_id', 'name');
    }
    public function termsGenerators(): HasMany
    {
        return $this->hasMany(TermsGenerator::class, 'doctor_id', 'name');
    }
    public function termsAll(): HasMany
    {
        return $this->hasMany(TermsGenerator::class, 'doctor_id')->all();
    }


    /**
     * categories
     *
     * @return BelongsTo
     */
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    /**
     * categories
     *
     * @return BelongsTo
     */
    public function categoriesLol(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'foreign_key', 'local_key');
    }
    /**
     * categories
     *
     * @return BelongsTo
     */
    public function categoriesBoot(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public static function boot()
    {
        parent::boot();
    }
}
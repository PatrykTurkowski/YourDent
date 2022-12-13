<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Scopes\DeletedRowsScopes;
use App\Models\Term;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Service extends Model
{

    use HasFactory, Sortable, SoftDeletes;
    // public $timestamps = false;
    protected $fillable = [
        'name',
        'content',
        'category_id',
        'is_active',
        'price',
    ];

    public $sortable = [
        'id',
        'name',
        'content',
        'category_id',
        'is_active',
        'price',
    ];

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
    public function categoriesBoot(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }



    public function isSelectedCategory(int $category_id): bool
    {
        return $this->category_id == $category_id;
    }

    public static function boot()
    {

        static::addGlobalScope(new DeletedRowsScopes);

        parent::boot();

        // static::restoring(function (Service $service) {

        //     $service->categories()->restore();
        // });
    }
}
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title','description','portion_price','kilogram_price','category'
    ];

    public function images():HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function firstImage(): HasOne
{
    return $this->hasOne(ProductImage::class)->orderBy('id', 'asc');
}

    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'category');
    }

    public function scopeMostRecent(Builder $query)
    {
        return $query->orderByDesc('created_at');
    }

    public function scopeFilters(Builder $query, array $filters){
        return $query->when(
            $filters['category'] ?? false,
            fn($query,$value) => $query->where('category',$value)
        );
    }
}

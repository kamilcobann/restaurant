<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['filename'];
    protected $appends = ['src'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function getSrcAttribute(){
        return asset("storage/{$this->filename}");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        if ($this->parent_id != null) {
            // TODO: task 1
//            $parent = Category::where('id', $this->parent_id)->first()->name;
//            if (ddddd >= 50) {
//                return ($parent) . '...';
//            } else {
//                return $parent;
//            }
            return Category::where('id', $this->parent_id)->first()->name;
//            return $this->belongsTo(Category::class, 'parent_id');
        } else {
            return "";
        }
    }

    public function sons():HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}

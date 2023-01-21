<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if($filters['ingredient'] ?? false) {
            $query->where('ingredients', 'like', '%' . request('ingredient') . '%');
        }
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('review', 'like', '%' . request('search') . '%', );
        }
    }

}

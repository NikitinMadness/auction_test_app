<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lot;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $guarded = false;

    
    public function lots(){
        return $this->hasMany(Lot::class, 'category->id', 'id');
    }
}

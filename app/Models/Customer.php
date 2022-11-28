<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'age',
    ];

    public function areas()
    {
        return $this->belongsToMany(Area::class)->with('area:id');
    }
}

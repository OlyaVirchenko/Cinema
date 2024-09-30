<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'rows',
        'cols',
        'seats',
        'price',
        'price_vip',
        'is_open'
    ];

    public function sessions(): HasMany{
        return $this->hasMany(Session::class);
    }

    public function seat(): HasMany {
        return $this->hasMany(Seat::class);
    }
}

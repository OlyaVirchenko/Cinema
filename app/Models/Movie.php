<?php

namespace App\Models;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'duration'
    ];

    public function sesions(): HasMany {
        return $this -> hasMany(Session::class) -> orderBy('start');
    }
}

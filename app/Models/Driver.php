<?php

namespace App\Models;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }
}

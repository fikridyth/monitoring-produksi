<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Delivery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shiptoaddress extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }
}

<?php

namespace App\Models;

use App\Models\Mastercard;
use App\Models\Shiptoaddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mastercard()
    {
        return $this->hasMany(Mastercard::class);
    }

    public function shiptoaddress()
    {
        return $this->hasMany(Shiptoaddress::class);
    }
}

<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Salesorder;
use App\Models\Groupmastercard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mastercard extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['customer'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function groupmastercard()
    {
        return $this->hasMany(Groupmastercard::class);
    }

    public function salesorder()
    {
        return $this->hasMany(Salesorder::class);
    }
}

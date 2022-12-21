<?php

namespace App\Models;

use App\Models\Delivery;
use App\Models\Invoiceraw;
use App\Models\Mastercard;
use App\Models\Manufacturingorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salesorder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['mastercard', 'invoiceraw'];

    public function mastercard()
    {
        return $this->belongsTo(Mastercard::class);
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }

    public function manufacturingorder()
    {
        return $this->hasMany(Manufacturingorder::class);
    }

    public function invoiceraw()
    {
        return $this->belongsTo(Invoiceraw::class);
    }
}

<?php

namespace App\Models;

use App\Models\Driver;
use App\Models\Salesorder;
use App\Models\Shiptoaddress;
use App\Models\InvoiceDelivery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['salesorder', 'invoicedelivery', 'driver', 'shiptoaddress'];

    public function salesorder()
    {
        return $this->belongsTo(Salesorder::class);
    }

    public function invoicedelivery()
    {
        return $this->belongsTo(InvoiceDelivery::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function shiptoaddress()
    {
        return $this->belongsTo(Shiptoaddress::class);
    }
}

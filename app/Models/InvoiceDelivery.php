<?php

namespace App\Models;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceDelivery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['delivery'];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}

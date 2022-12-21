<?php

namespace App\Models;

use App\Models\InvoiceSlip;
use App\Models\Inquiryproduct;
use App\Models\Manufacturingorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slipfinishgood extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['manufacturingorder', 'invoiceslip'];

    public function manufacturingorder()
    {
        return $this->belongsTo(Manufacturingorder::class);
    }

    public function invoiceslip()
    {
        return $this->belongsTo(InvoiceSlip::class);
    }

    public function inquiryproduct()
    {
        return $this->hasMany(Inquiryproduct::class);
    }
}

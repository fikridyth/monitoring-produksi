<?php

namespace App\Models;

use App\Models\Slipfinishgood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceSlip extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['slipfinishgood'];

    public function slipfinishgood()
    {
        return $this->belongsTo(Slipfinishgood::class);
    }
}

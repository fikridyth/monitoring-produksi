<?php

namespace App\Models;

use App\Models\Purchaseorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoicepr extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['purchaseorder'];

    public function purchaseorder()
    {
        return $this->belongsTo(Purchaseorder::class);
    }
}

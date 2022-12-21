<?php

namespace App\Models;

use App\Models\Invoiceraw;
use App\Models\Rekaporder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rawmaterial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['rekaporder', 'invoiceraw'];

    public function rekaporder()
    {
        return $this->belongsTo(Rekaporder::class);
    }

    public function invoiceraw()
    {
        return $this->belongsTo(Invoiceraw::class);
    }
}

<?php

namespace App\Models;

use App\Models\Salesorder;
use App\Models\Rawmaterial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoiceraw extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['rawmaterial', 'salesorder'];

    public function rawmaterial()
    {
        return $this->belongsTo(Rawmaterial::class);
    }

    public function salesorder()
    {
        return $this->belongsTo(Salesorder::class);
    }
}

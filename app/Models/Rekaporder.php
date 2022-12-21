<?php

namespace App\Models;

use App\Models\Rawmaterial;
use App\Models\Purchaseorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekaporder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['purchaseorder'];

    public function purchaseorder()
    {
        return $this->belongsTo(Purchaseorder::class);
    }

    public function rawmaterial()
    {
        return $this->hasMany(Rawmaterial::class);
    }
}

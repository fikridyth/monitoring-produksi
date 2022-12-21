<?php

namespace App\Models;

use App\Models\Salesorder;
use App\Models\Slipfinishgood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacturingorder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['salesorder'];

    public function salesorder()
    {
        return $this->belongsTo(Salesorder::class);
    }

    public function slipfinishgood()
    {
        return $this->hasMany(Slipfinishgood::class);
    }
}

<?php

namespace App\Models;

use App\Models\Purchaseorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function purchaseorder()
    {
        return $this->hasMany(Purchaseorder::class);
    }
}

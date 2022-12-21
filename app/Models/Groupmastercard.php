<?php

namespace App\Models;

use App\Models\Mastercard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupmastercard extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['mastercard'];

    public function mastercard()
    {
        return $this->belongsTo(Mastercard::class);
    }
}

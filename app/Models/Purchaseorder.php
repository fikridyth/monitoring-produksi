<?php

namespace App\Models;

use App\Models\Supplier;
use App\Models\Invoicepo;
use App\Models\Invoicepr;
use App\Models\Rekaporder;
use App\Models\Rekapsupplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchaseorder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['supplier', 'invoicepo', 'invoicepr'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function invoicepo()
    {
        return $this->belongsTo(Invoicepo::class);
    }

    public function invoicepr()
    {
        return $this->belongsTo(Invoicepr::class);
    }

    public function rekapsupplier()
    {
        return $this->hasMany(Rekapsupplier::class);
    }

    public function rekaporder()
    {
        return $this->hasMany(Rekaporder::class);
    }
}

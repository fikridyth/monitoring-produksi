<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Purchaseorder;
use App\Models\Salesorder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $purchaseorder = Purchaseorder::count();
        $salesorder = Salesorder::count();
        $delivery = Delivery::count();

        return view('home', [
            'title' => 'Dashboard'
        ], compact('purchaseorder', 'salesorder', 'delivery'));
    }
}

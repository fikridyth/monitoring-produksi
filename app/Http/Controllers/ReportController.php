<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchaseorder;
use App\Models\Salesorder;
use App\Models\Delivery;

class ReportController extends Controller
{
    public function indexpos()
    {
        return view('report.indexpos', [
            'title' => 'Report PO & PR'
        ]);
    }

    public function showpos($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : " . $tglawal, "Tanggal Akhir : " . $tglakhir]);

        $reportposdate = Purchaseorder::all()->whereBetween('date', [$tglawal, $tglakhir]);
        return view('report.showpos', ['title' => 'Detail'], compact('reportposdate'));
    }

    public function indexsos()
    {
        return view('report.indexsos', [
            'title' => 'Report Sales Order'
        ]);
    }

    public function showsos($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : " . $tglawal, "Tanggal Akhir : " . $tglakhir]);

        $reportsosdate = Salesorder::all()->whereBetween('date', [$tglawal, $tglakhir]);
        return view('report.showsos', ['title' => 'Detail'], compact('reportsosdate'));
    }
    public function indexdeliveries()
    {
        return view('report.indexdeliveries', [
            'title' => 'Report Delivery'
        ]);
    }

    public function showdeliveries($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : " . $tglawal, "Tanggal Akhir : " . $tglakhir]);

        $reportdeliveriesdate = Delivery::all()->whereBetween('date_delivery', [$tglawal, $tglakhir]);
        return view('report.showdeliveries', ['title' => 'Detail'], compact('reportdeliveriesdate'));
    }
}

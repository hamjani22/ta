<?php

namespace App\Http\Controllers;

use App\irigasi;
use Illuminate\Http\Request;
use Charts;
use DB;

class ChartController extends Controller
{
    public function chart()
    {

        /*$chart = Charts::create('line', 'highcharts')
            ->title('Grafik Realtime Data Sensor')
            ->labels(['Dr.H.Hamjani.Amd', 'Ir.H Jokowiw Marup asyiap'])
            ->values(['20', '10'])
            ->dimensions(1000, 500)
            ->responsive(true);*/
        $irigasi = irigasi::where(DB::raw("(DATE_FORMAT(tanggal,'%Y'))"), date('Y'))
            ->get();
        $chart = Charts::database(Irigasi::all(), 'line', 'highcharts')
            ->title('Grafik Realtime Data Sensor')
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByYear('tanggal');

        return view('admin.chart', ['chart' => $chart]);
    }

    public function suhu()
    {
        $irridentify = \App\Irigasi::all();

        return $irridentify->toJson();
    }
}

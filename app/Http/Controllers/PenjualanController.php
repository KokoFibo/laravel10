<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PenjualanController extends Controller
{
    public function index () {
        $chart = (new LarapexChart)->setTitle('Posts')
                   ->setDataset([150, 120])
                   ->setLabels(['Published', 'No Published']);
        return view('chart', compact('chart'));

    }
}

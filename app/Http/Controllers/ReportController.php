<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class ReportController extends Controller
{

    public function showChartData()
    {
        $chartData = [
            'labels' => ["CS", "IT", "ECE", "EE", "ME", "BE"],
            'datasets' => [
                [
                    'label' => '# of students',
                    'data' => [105, 124, 78, 91, 62, 56],
                    // other dataset properties...
                ],
            ],
            // additional options or data as needed...
        ];

        return Inertia::render('Dashboard', compact('chartData'));
    }
}

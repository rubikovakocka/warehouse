<?php

namespace App\Http\Controllers;

use App\Arrival;
use App\Charts\MonthYearCharts;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $todayDate = Carbon::today();

        //Section For Monthly Chart
        for ($i=1; $i<=12; $i++) {
            $monthDate = Carbon::today();
            $monthBefore = $monthDate->subMonth($i);
            $arrivalMonth[] = Arrival::whereBetween('arrival_date', [$monthBefore, $todayDate])
                ->get('arrival_date')
                ->count();
            $userMonth[] = User::whereBetween('created_at', [$monthBefore, $todayDate])
                ->get('created_at')
                ->count();
        }

        $monthChart = new MonthYearCharts;
        $monthChart->labels(
            ['Januar', 'Februar', 'Mart', 'April', 'Maj', 'Jun',
            'Jul', 'Avgust', 'Septembar', 'Oktobar', 'Novembar', 'Decembar']
        );
        $monthChart->dataset('Mesečna statistika Dostava robe', 'bar', $arrivalMonth);
        $monthChart->dataset('Mesečna statistika Zaposlenih', 'line', $userMonth);
        $monthChart->barWidth(0.6);

        //Section For Year Chart
        for ($n=1; $n<=5; $n++) {
            $yearDate = Carbon::today();
            $yearBefore = $yearDate->subYear($n);
            $arrivalYear[] = Arrival::whereBetween('arrival_date', [$yearBefore, $todayDate])
                ->get('arrival_date')
                ->count();
            $userYear[] = User::whereBetween('created_at', [$yearBefore, $todayDate])
                ->get('created_at')
                ->count();
        }

        $yearChart = new MonthYearCharts;
        $yearChart->labels(['2016', '2017', '2018', '2019', '2020']);
        $yearChart->dataset('Godišnja statistika Dostava robe', 'bar', $arrivalYear);
        $yearChart->dataset('Godišnja statistika Zaposlenih', 'line', $userYear);
        $yearChart->barWidth(0.6);

        return view('home', compact(['monthChart', 'yearChart']));
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        $days = $this->getDays();
        $chart = Charts::multi('line', 'material')
            // Setup the chart settings
            ->title(false)
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 150) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            ->legend(false)
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Regen (mm)', $this->rain())
            ->dataset('Droogte (cijfer)', $this->dry())
            ->dataset('Grondwater (m)', $this->groundwater())
            ->dataset('Grondwater (avg)', $this->avgGroundWater())
            // Setup what the values mean
            ->labels($days);

        return view('dashboard.home', compact('chart'));
    }

    public function getDays() {
        return [
            '26 juni',
            '27 juni',
            '28 juni',
            '29 juni',
            '30 juni',
            '1 juli',
            '2 juli',
            '3 juli',
            '4 juli',
            '5 juli',
            '6 juli',
            '7 juli',
            '8 juli',
            '8 juli',
            '9 juli',
            '10 juli',
        ];
    }

    public function avgGroundWater() {
        $groundwater = $this->groundwater();
        $avg = array_sum($groundwater) / count($groundwater);
        $result = [];
        for($i = 0; $i < count($groundwater); $i++) {
            $result[] = $avg;
        }
        return $result;
    }

    public function groundwater() {
        return [
            '4', '4', '3', '3', '2', '3', '4', '5', '5', '5', '6', '7', '6', '4', '8', '8'
        ];
    }

    public function dry() {
        return [
            '5', '8', '9', '9', '7', '4', '0', '0', '0', '3', '5', '7', '5', '6', '8', '5'
        ];
    }

    public function rain() {
        return [
            '0', '0', '0', '8', '13', '4', '2', '6', '8', '2', '0', '0', '0', '0', '0', '9'
        ];
    }
}

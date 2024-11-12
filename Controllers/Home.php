<?php

namespace App\Controllers;

use App\Models\Vehicle;

class HomeController extends BaseController {

    public static function index() {
        $vehicle = new Vehicle();
        $recentVehicles = $vehicle->getRecentVehicles(3);
        $totalVehicles = $vehicle->getTotalVehicleCount();

        self::loadView('home', [
            'recentVehicles' => $recentVehicles,
            'totalVehicles' => $totalVehicles
        ]);
    }
}


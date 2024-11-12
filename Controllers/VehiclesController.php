<?php

namespace App\Controllers;

use App\Models\Vehicle;

class VehiclesController extends BaseController
{

    public static function index()
    {
        $vehicles = Vehicle::all();

        self::loadView('/vehicles/vehicles', [
            'vehicles' => $vehicles
        ]);
    }

    public static function store()
    {
        $make = $_POST['make'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $license_plate = $_POST['license_plate'];
        $vehicle_type_id = $_POST['vehicle_type_id'];

        $image_path = null;
        if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
            $uuid = uniqid();
            $image_path = 'images/' . $uuid . '-' . basename($_FILES['image_path']['name']);
            move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
        }

        $vehicle = new Vehicle();
        $vehicle->make = $make;
        $vehicle->model = $model;
        $vehicle->year = $year;
        $vehicle->license_plate = $license_plate;
        $vehicle->vehicle_type_id = $vehicle_type_id;
        $vehicle->image_path = $image_path;

        if ($vehicle->save()) {
            header('Location: /vehicles');
            exit();
        } else {
            echo "Failed to save vehicle.";
        }
    }


    public static function edit($id)
    {
        $vehicle = Vehicle::find($id);

        self::loadView('/vehicles/edit', [
            'vehicle' => $vehicle
        ]);
    }

    public static function delete($id)
    {
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $vehicle->delete();
        }

        header('Location: /vehicles');
        exit();
    }

    public static function update($id)
    {
        $make = $_POST['make'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $license_plate = $_POST['license_plate'];
        $vehicle_type_id = $_POST['vehicle_type_id'];

        $vehicle = Vehicle::find($id);

        if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
            $image_path = 'images/' . basename($_FILES['image_path']['name']);
            move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
            $vehicle->image_path = $image_path;
        }

        $vehicle->make = $make;
        $vehicle->model = $model;
        $vehicle->year = $year;
        $vehicle->license_plate = $license_plate;
        $vehicle->vehicle_type_id = $vehicle_type_id;

        if ($vehicle->update()) {
            header('Location: /vehicles');
            exit();
        } else {
            echo "Failed to update vehicle.";
        }
    }
}

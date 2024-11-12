<?php

namespace App\Models;

use App\Models\BaseModel;

class Vehicle extends BaseModel
{
    public function save()
    {
        $sql = "INSERT INTO " . $this->table . " (make, model, year, license_plate, vehicle_type_id, image_path) VALUES (:make, :model, :year, :license_plate, :vehicle_type_id, :image_path)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':make', $this->make);
        $stmt->bindValue(':model', $this->model);
        $stmt->bindValue(':year', (int)$this->year);
        $stmt->bindValue(':license_plate', $this->license_plate);
        $stmt->bindValue(':vehicle_type_id', (int)$this->vehicle_type_id);
        $stmt->bindValue(':image_path', $this->image_path);
        return $stmt->execute();
    }

    public function update()
    {
        $sql = "UPDATE " . $this->table . " SET make = :make, model = :model, year = :year, license_plate = :license_plate, vehicle_type_id = :vehicle_type_id, image_path = :image_path WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':make', $this->make);
        $stmt->bindValue(':model', $this->model);
        $stmt->bindValue(':year', (int)$this->year);
        $stmt->bindValue(':license_plate', $this->license_plate);
        $stmt->bindValue(':vehicle_type_id', (int)$this->vehicle_type_id);
        $stmt->bindValue(':image_path', $this->image_path);
        $stmt->bindValue(':id', (int)$this->id);
        return $stmt->execute();
    }

    public function getRecentVehicles($limit = 3)
    {
        $sql = "SELECT * FROM " . $this->table . " ORDER BY created_at DESC LIMIT :limit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', (int)$limit, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getTotalVehicleCount() {
        $sql = "SELECT COUNT(*) FROM " . $this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}

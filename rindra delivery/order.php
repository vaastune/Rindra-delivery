<?php

class Order {
    private $id;
    private $clientName;
    private $status;
    private $driverId;

    public function __construct($id, $clientName, $status, $driverId) {
        $this->id = $id;
        $this->clientName = $clientName;
        $this->status = $status;
        $this->driverId = $driverId;
    }
    

    public function assignDriver($pdo, $orderId, $driverId) {
        $stmt = $pdo->prepare("UPDATE orders SET driver_id = ? WHERE id = ?");
        return $stmt->execute([$driverId, $orderId]);
    }
}
?>

<?php
function calculateElectricityBill($units) {
    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 100) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    return $bill;
}

// Test with units
$unitsConsumed = 180;
$billAmount = calculateElectricityBill($unitsConsumed);
echo "Units consumed: " . $unitsConsumed . "<br>";
echo "Electricity Bill: Rs. " . $billAmount;
?>

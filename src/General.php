<?php
namespace MercuryHolidays;
class General
{
    public function generalVariables() {
        if(!isset($_SESSION["hotelA"])) {
            $_SESSION["hotelA"] = array (
                array('name' => "Hotel A", 'available' => False, 'floor' => 1, 'room_no' => 1, 'price' => 25.80),
                array('name' => "Hotel A", 'available' => False, 'floor' => 1, 'room_no' => 2, 'price' => 25.80),
                array('name' => "Hotel A", 'available' => True, 'floor' => 1, 'room_no' => 3, 'price' => 25.80),
                array('name' => "Hotel A", 'available' => True, 'floor' => 1, 'room_no' => 4, 'price' => 25.80),
                array('name' => "Hotel A", 'available' => False, 'floor' => 1, 'room_no' => 5, 'price' => 25.80),
                array('name' => "Hotel A", 'available' => False, 'floor' => 2, 'room_no' => 6, 'price' => 30.10),
                array('name' => "Hotel A", 'available' => True, 'floor' => 2, 'room_no' => 7, 'price' => 35.00)
            );
        }

        if(!isset($_SESSION["hotelB"])) {
            $_SESSION["hotelB"] = array (
                array('name' => "Hotel B", 'available' => True, 'floor' => 1, 'room_no' => 1, 'price' => 45.80),
                array('name' => "Hotel B", 'available' => False, 'floor' => 1, 'room_no' => 2, 'price' => 45.80),
                array('name' => "Hotel B", 'available' => True, 'floor' => 1, 'room_no' => 3, 'price' => 45.80),
                array('name' => "Hotel B", 'available' => True, 'floor' => 1, 'room_no' => 4, 'price' => 45.80),
                array('name' => "Hotel B", 'available' => False, 'floor' => 1, 'room_no' => 5, 'price' => 45.80),
                array('name' => "Hotel B", 'available' => False, 'floor' => 2, 'room_no' => 6, 'price' => 49.00),
                array('name' => "Hotel B", 'available' => False, 'floor' => 2, 'room_no' => 7, 'price' => 49.00)
            );
        }

        $hotels = array_merge($_SESSION["hotelA"], $_SESSION["hotelB"]);

        return $_SESSION["hotels"] = $hotels;
    }
}
?>
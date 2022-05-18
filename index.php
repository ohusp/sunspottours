<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

use MercuryHolidays\Search\Searcher;
$searcher = new Searcher();

// ////////////// search
$roomsRequired = isset($_GET['roomsRequired']) ? $_GET['roomsRequired'] : 0;
$minimum = isset($_GET['minimum']) ? $_GET['minimum'] : 0;
$maximum = isset($_GET['maximum']) ? $_GET['maximum'] : 0;
$GLOBALS['searchResult'] = $searcher->search($roomsRequired, $minimum, $maximum);


include('./src/Page/home.php');

// //////////////////// Add
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $hotel      = htmlspecialchars($_POST['hotel']);
    $available  = htmlspecialchars($_POST['available']);
    $floor      = htmlspecialchars($_POST['floor']);
    $room_no    = htmlspecialchars($_POST['room_no']);
    $price      = htmlspecialchars($_POST['price']);

    $available === "True" ? $available = True : False;
    
    $newHotel = array('name' => $hotel, 'available' => $available, 'floor' => $floor, 'room_no' => $room_no, 'price' => $price);

    echo '<script type="text/javascript">
            successful();
        </script>';

    $searcher->add($newHotel);
}

?>
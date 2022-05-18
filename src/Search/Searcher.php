<?php

namespace MercuryHolidays\Search;
use MercuryHolidays\General;

class Searcher
{
    public function add(array $property): void
    {
        if($property['name'] === "Hotel A") {
            array_push($_SESSION['hotelA'], $property);
        }else {
            array_push($_SESSION['hotelB'], $property);
        }
    }

    public function search(int $roomsRequired, $minimum, $maximum): array
    {
        $generalVariable    = new General();
        $generalVariables = $generalVariable->generalVariables();

        $i = 0;
        $new_array = [];
        foreach($generalVariables as $key => $value){
            if($maximum !== 0) {
                if($value['price'] >= $minimum && $value['price'] <= $maximum && $value['available'] === true){
                    $new_array[] = $value;
                    $i ++;
                }
            }else {
                $new_array[] = $value;
                $i ++;
            }
        }

        if (count($new_array) >= 2 && $roomsRequired !== 0) {
           return array_slice($new_array, 0, $roomsRequired);
        }else {
            return $new_array;
        }
    }
}

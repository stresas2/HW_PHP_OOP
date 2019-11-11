<?php declare(strict_types = 1);

namespace nfq;

class room implements ReservableInterface
{

    protected $restroom;
    protected $balcony;
    protected $bedCount;
    protected $extras;
    protected $type;

    private $roomNumber;
    private $price;

    private $reservations = [];

    protected function setRoomAndPrice(int $roomNumberValue, int $priceValue) :void
    {
        $this->roomNumber = $roomNumberValue;
        $this->price = $priceValue;
    }

    public function getRoomNumber():int
    {
        return $this->roomNumber;
    }

    public function addReservation($reservation):void{
        array_push($this->reservations, $reservation);
    }

    public function removeReservation($reservation){
        //Nesukurta
    }

    public function __toString()
    {
        $extrasString = "";

        $counter = 0;
        foreach($this->extras as $extra){
            $counter++;
            if($counter < count($this->extras))
            {
                $extrasString .=  $extra . ', ';
            }
            else{
                $extrasString .=  $extra;
            }
        }

        $cases = [];
        $casesString = "";

        if($this->balcony)
        {
            array_push($cases, 'balcony');
        }
        if($this->restroom)
        {
            array_push($cases, 'restroom');
        }

        $counter = 0;
        foreach($cases as $case){
            $counter++;
            if($counter < count($cases))
            {
                $casesString .=  $case . ', ';
            }
            else{
                $casesString .=  $case;
            }
        }

        return 'Room Number: ' . $this->roomNumber . '; Price: ' . $this->price . '; Type: ' . $this->type . '; Bed Count: ' . $this->bedCount . '; Extras: ' . $extrasString . '; also room has: ' . $casesString . ';';
    }

}
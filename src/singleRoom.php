<?php declare(strict_types = 1);


namespace nfq;


class singleRoom extends room
{
    public function __construct(int $roomNumber, int $price)
    {
        $this->restroom = true;
        $this->bedCount = 1;
        $this->type = "Standard";
        $this->balcony = false;
        $this->extras = ["TV", "air-conditioner"];

        $this->setRoomAndPrice($roomNumber, $price);
    }

    public function __toString()
    {
        return parent::__toString();
    }
}
<?php declare(strict_types = 1);


namespace nfq;


class bedroom extends room
{
    public function __construct(int $roomNumber, int $price)
    {
        $this->restroom = true;
        $this->bedCount = 2;
        $this->type = "Gold";
        $this->balcony = true;
        $this->extras = ["TV", "air-conditioner", "refrigerator", "mini-bar", "bathtub" ];

        $this->setRoomAndPrice($roomNumber, $price);
    }

    public function __toString()
    {
        return parent::__toString();
    }
}
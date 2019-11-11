<?php declare(strict_types = 1);


namespace nfq;


class apartment extends room
{
    public function __construct(int $roomNumber, int $price)
    {
        $this->restroom = true;
        $this->bedCount = 4;
        $this->type = "Diamond";
        $this->balcony = true;
        $this->extras = ["TV", "air-conditioner", "refrigerator", "kitchen box", "mini-bar", "bathtub", "free Wi-fi" ];

        $this->setRoomAndPrice($roomNumber, $price);
    }

    public function __toString()
    {
        return parent::__toString();
    }
}
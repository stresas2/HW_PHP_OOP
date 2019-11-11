<?php declare(strict_types = 1);

namespace nfq;

class reservation
{
    private $starDate;
    private $endDate;
    private $guest;

    public function __construct(guest $guestValue, \DateTime $starDateValue, \DateTime $endDateValue)
    {
        $this->starDate = $starDateValue->format('Y-m-d');
        $this->endDate = $endDateValue->format('Y-m-d');
        $this->guest = $guestValue;
    }

    public function getGuestFullName():string {
        return $this->guest->getName(). ' ' . $this->guest->getSurname();
    }

    public function getStartDate ():string {
        return $this->starDate;
    }

    public function getEndDate ():string {
        return $this->endDate;
    }

    public function __toString()
    {
        return $this->getGuestFullName() . ' ' . $this->starDate . ' ' . $this->endDate;
    }
}
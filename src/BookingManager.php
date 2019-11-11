<?php declare(strict_types = 1);

namespace nfq;


class BookingManager
{
    static function bookRoom(room $room, reservation $reservation) {
        $room->addReservation($reservation);
        echo 'Room <strong>'.$room->getRoomNumber().'</strong> successfully booked for <strong>'
            .$reservation->getGuestFullName().'</strong> from <time>'
            .$reservation->getStartDate() .'</time> to <time>'
            .$reservation->getEndDate().'</time>!';
    }

}
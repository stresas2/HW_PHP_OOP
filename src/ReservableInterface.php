<?php

namespace nfq;

interface ReservableInterface
{
    public function addReservation($reservation);
    public function removeReservation($reservation);
}
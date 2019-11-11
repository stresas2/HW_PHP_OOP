<?php declare(strict_types = 1);

require_once("vendor/autoload.php");

use nfq\singleRoom as singleRoom;
use nfq\apartment as apartment;
use nfq\bedroom as bedroom;

use nfq\guest as guest;
use nfq\reservation as reservation;
use nfq\BookingManager as BookingManager;


$room = new singleRoom(1408, 99);
$guest = new guest("Vardenis", "Pavardenis");


$startDate = new \DateTime("2019-04-20");
$endDate = new \DateTime("2019-04-25");

$reservation = new reservation($guest, $startDate, $endDate);
BookingManager::bookRoom($room, $reservation);




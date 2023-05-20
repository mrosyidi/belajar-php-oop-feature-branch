<?php
  $dateTime = new DateTime();
  $dateTime->setDate(1998, 1, 28);
  $dateTime->setTime(10, 10, 10, 10);
  $dateTime->add(new DateInterval("P1Y"));
  $minusOneMonth = new DateInterval("P1M");
  $minusOneMonth->invert = true;
  $dateTime->add($minusOneMonth);
  var_dump($dateTime);

  $now = new DateTime();
  var_dump($now);

  $now->setTimezone(new DateTimeZone("Asia/Jakarta"));
  var_dump($now);

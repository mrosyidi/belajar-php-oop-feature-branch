<?php
  $matches = [];
  $result = (bool)preg_match_all("/eko|awa|edy/i", "Eko Kurniawan Khannedy", $matches);
  var_dump($result);
  var_dump($matches);

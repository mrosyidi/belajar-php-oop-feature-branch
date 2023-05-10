<?php
  require_once "data/Conflict.php";
  require_once "data/Helper.php";

  use Data\One\{Conflict, Dummy, Sample};
  use function Helper\{helpMe};

  $conflict = new Conflict();
  $dummy = new Dummy();
  $sample = new Sample();

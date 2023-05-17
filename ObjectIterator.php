<?php
  class Data
  {
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator()
    {
      $array = [
        "first" => $this->first,
        "second" => $this->second,
        "third" => $this->third,
        "fourth" => $this->fourth
      ];

      return new ArrayIterator($array);
    }
  }

  $data = new Data();

  foreach($data as $property => $value)
  {
    echo "$property : $value" . PHP_EOL;
  }

<?php

declare(strict_types=1);

class OverrideBasicPractice {
  public function main(): void
  {
    $c1 = new Clock(10, 15, 30);

    $c1->showData();

    $c2 = new AlarmClock(15, 45, 20, 6, 30);

    $c2->showData();
  }
}

class Clock {
  public function __construct(
    public int $hour,
    public int $minute,
    public int $second,
  ) {    
  }

  public function showData(): void
  {
    echo($this->hour . ':' . $this->minute . ':' . $this->second . PHP_EOL);
  }
}

class AlarmClock extends Clock {
  public function __construct(
    public int $hour,
    public int $minute,
    public int $second,
    public int $alarmHour,
    public int $alarmMinute,
  ) {    
  }

  public function showData(): void
  {
    parent::showData();
    echo($this->alarmHour . ':' . $this->alarmMinute . PHP_EOL);
  }
}

$practice = new OverrideBasicPractice();
$practice->main();
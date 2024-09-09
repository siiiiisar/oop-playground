<?php

declare(strict_types=1);

class ClassFirstPractice {
  public function main(): void
  {
    $employee = new Employee();

    $employee->setData(1234, '山田');

    var_dump($employee->getId());
    var_dump($employee->getName());
  }
}

class Employee {

  public int $id;
  public string $name;

  public function setData(int $id, string $name): void
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }
}

$practice = new ClassFirstPractice();
$practice->main();
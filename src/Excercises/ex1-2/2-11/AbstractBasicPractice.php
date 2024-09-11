<?php

declare(strict_types=1);

class AbstractBasicPractice
{
  public function main(): void
  {
    $animals = [];
    $animals[] = new Dog();
    $animals[] = new Cat();
    $animals[] = new Bird();
    foreach ($animals as $animal) {
      print($animal->sing() . PHP_EOL);
    }
  }
}

abstract class Animal
{
  abstract public function sing(): string;
}

class Dog extends Animal
{
  public function sing(): string
  {
    return 'わんわん';
  }
}

class Cat extends Animal
{
  public function sing(): string
  {
    return 'にゃーにゃー';
  }
}

class Bird extends Animal
{
  public function sing(): string
  {
    return 'ぴよぴよ';
  }
}

$practice = new AbstractBasicPractice();
$practice->main();

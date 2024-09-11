<?php

declare(strict_types=1);

class ExceptionInheritancePractice
{
  public function main(): void
  {
    $sub = new Subordinate("有吉");
    $boss = new Boss("上島", $sub);
    $boss->work("得意先との取引");
  }
}

class TroubleException extends Exception
{
}

abstract class Employee
{
  protected string $name;
  
  /**
   * @param string $workName
   * @return void
   * @throws TroubleException
   */
  abstract public function work(string $workName): void;
}

class Boss extends Employee
{
  public function __construct(
    private string $bossName,
    private Subordinate $subordinate
  ) { 
    $this->name = $bossName;
  }

  public function work(string $workName): void
  {
    print("さて、今回の{$workName}は部下の{$this->subordinate->getName()}にまかせよう！\n");
    try {
      $this->subordinate->work($workName);
    } catch (Throwable $e) {
      print("申し訳ございません・・・\n{$this->subordinate->getName()}が大変失礼いたしました・・・\n上司のわたくし{$this->name}の監督不行き届きでございます・・・\n");
    }
    print("{$this->subordinate->getName()}君、よくやった。");
  }
}

class Subordinate extends Employee
{
  public function __construct(
    private string $subName,
  ) { 
    $this->name = $subName;
  }

  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $workName
   * @return void
   * @throws TroubleException
   */
  public function work(string $workName): void
  {
    print("今回の{$workName}はわたくし{$this->name}が担当いたします\n");
    if (rand(0,1)) {
      print("ふざけるな、バカ野郎！\n");
      throw new TroubleException();
    } {
      print("今回の{$workName}はわたくし{$this->name}が無事任務を果たしました\n");
    }
  }
}

$practice = new ExceptionInheritancePractice();
$practice->main();
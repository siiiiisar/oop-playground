<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\AbstructClass;

/**
 * AbstructClass
 */
abstract class AbstructDisplay
{
  /**
   * @param array $data
   */
  public function __construct(
    private array $data
  ) {
  }

  /**
   * template methodに相当する
   *
   * @return void
   */
  public function display(): void
  {
    $this->displayHeader();
    $this->displayBody();
    $this->displayFooter();
  }

  /**
   * @return array
   */
  public function getData(): array
  {
    return $this->data;
  }

  /**
   * @return void
   */
  protected abstract function displayHeader(): void;

  /**
   * @return void
   */
  protected abstract function displayBody(): void;

  /**
   * @return void
   */
  protected abstract function displayFooter(): void;

}

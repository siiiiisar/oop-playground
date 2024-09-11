<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\AbstructClass;

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass\ListDisplay;

class AbstructDisplay
{
  public function __construct() {
    echo (new ListDisplay())->call();
  }
}
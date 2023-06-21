<?php

namespace RectangleHealth\PMBForms\Core\Doctrine\Traits;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

/**
 * Trait Identity
 *
 * @package RectangleHealth\PMBForms\Core\Doctrine\Traits
 * @author DEVŌT <devot.team>
 */
trait Identity
{
  #[Id()]
  #[GeneratedValue()]
  #[Column(name: "id", type: "integer")]
  private int $id;

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }
}

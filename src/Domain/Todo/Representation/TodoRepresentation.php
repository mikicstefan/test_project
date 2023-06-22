<?php

declare(strict_types=1);

namespace App\Domain\Todo\Representation;

use App\Domain\Todo\Entity\Todo;

/**
 * Class TodoRepresentation
 */
class TodoRepresentation
{
  /**
   * @param int       $id
   * @param string    $title
   */
  private function __construct(
    private int $id,
    private string $title
  ) {
  }

  public static function fromEntity(Todo $todo): self
  {
    return new self(
      $todo->getId(),
      $todo->getTitle()
    );
  }
}
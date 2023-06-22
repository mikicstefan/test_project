<?php

declare(strict_types=1);

namespace App\Domain\Todo\Representation;

/**
 * Class TodoCollectionRepresentation
 */
class TodoCollectionRepresentation
{
  /**
   * TodoCollectionRepresentation constructor.
   * @param array<TodoRepresentation> $todos
   * @param int                      $total
   */
  public function __construct(
    private array $todos,
    private int $total
  ) {
  }

  /**
   * @param int                    $total
   * @param TodoRepresentation ...$todos
   * @return self
   */
  public static function fromTodosArray(
    int $total,
    TodoRepresentation ...$todos
  ): self {
    return new self(
      $todos,
      $total
    );
  }
}
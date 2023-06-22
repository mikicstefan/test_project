<?php

declare(strict_types=1);

namespace App\Todo\Handler;

use App\Domain\Todo\Representation\TodoCollectionRepresentation;
use App\Domain\Todo\Representation\TodoRepresentation;
use App\Domain\Todo\Entity\Todo;
use App\Domain\Todo\Repository\TodoRepository;
use App\Todo\Message\GetTodosMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * Class GetTodosHandler
 */
#[AsMessageHandler]
final class GetTodosHandler
{
  /**
   * @param TodoRepository $todoRepository
   */
  public function __construct(
    private TodoRepository $todoRepository
  ) {
  }

  /**
   * @param GetTodosMessage $message
   * @return TodoCollectionRepresentation
   */
  public function __invoke(
    GetTodosMessage $message
  ): TodoCollectionRepresentation {
    $todos = $this->todoRepository->findAll();

    $total = count($todos);

    $todosRepresentations = array_map(
      static fn (Todo $todo) => TodoRepresentation::fromEntity($todo),
      $todos
    );

    return TodoCollectionRepresentation::fromTodosArray(
      $total,
      ...$todosRepresentations
    );
  }
}
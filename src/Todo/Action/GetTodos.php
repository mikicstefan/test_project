<?php

declare(strict_types=1);

namespace App\Todo\Action;

use App\Core\REST\Action\AbstractApiAction;
use App\Core\REST\ValueObject\ApiResponse;
use App\Domain\Todo\Representation\TodoCollectionRepresentation;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Todo\Todo\Message\GetTodosMessage;

/**
 * Class GetTodos
 */
final class GetTodos extends AbstractApiAction
{
  /**
   * @param Request $request
   * @return ApiResponse
   * @throws Exception
   */
  #[Route(
    path: '/todos',
    name: 'todo_get_todos',
    methods: ['GET']
  )]
  public function __invoke(Request $request): ApiResponse
  {
    dd('srecikic moj!');
    /** @var TodoCollectionRepresentation $representation */
    $representation = $this->handle(
      GetTodosMessage::fromRequest($request)
    );

    return ApiResponse::ok($representation);
  }
}
<?php

declare(strict_types=1);

namespace App\Todo\Message;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class GetTodosMessage
 */
final class GetTodosMessage
{
  private function __construct() {}

  /**
   * @param Request $request
   * @return GetTodosMessage
   */
  public static function fromRequest(Request $request): self
  {
    return new self;
  }
}

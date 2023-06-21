<?php

namespace RectangleHealth\PMBForms\Core\ContextDecorator;

use Flagception\Decorator\ContextDecoratorInterface;
use Flagception\Model\Context;

/**
 * Class EnvironmentContextDecorator
 *
 * @package RectangleHealth\PMBForms\Core\ContextDecorator
 * @author DEVŌT <devot.team>
 */
class EnvironmentContextDecorator implements ContextDecoratorInterface
{
  /**
   * @return string
   */
  public function getName(): string
  {
    return 'environment_context_decorator';
  }

  /**
   * @param Context $context
   * @return Context
   * @throws \Flagception\Exception\AlreadyDefinedException
   * @SuppressWarnings(PHPMD.Superglobals)
   */
  public function decorate(Context $context): Context
  {
    $context->add('APP_ENV', $_ENV['APP_ENV']);

    return $context;
  }
}

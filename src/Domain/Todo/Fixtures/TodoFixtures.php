<?php

namespace App\Domain\Todo\Fixtures;

use App\Domain\Todo\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use function Symfony\Component\String\u;

class TodoFixtures extends Fixture implements FixtureGroupInterface
{
  public const TEST_TODO_REFERENCE = 'todo';
  public static function getGroups(): array
  {
    return [self::TEST_TODO_REFERENCE];
  }

  public function load(ObjectManager $manager)
  {
    $todo = new Todo();
    $todo->setTitle(uniqid('Testing todo '));

    $manager->persist($todo);
    $manager->flush();

    $this->addReference(self::TEST_TODO_REFERENCE, $todo);
  }
}
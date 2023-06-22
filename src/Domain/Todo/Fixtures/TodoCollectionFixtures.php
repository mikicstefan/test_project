<?php

namespace App\Domain\Todo\Fixtures;

use App\Domain\Todo\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class TodoCollectionFixtures extends Fixture implements FixtureGroupInterface
{
  public const TARGET_AMOUNT = 3;
  public const TEST_TODO_COLLECTION_REFERENCE = 'todo_collection';

  public static function getGroups(): array
  {
    return [self::TEST_TODO_COLLECTION_REFERENCE];
  }

  public function load(ObjectManager $manager)
  {
    for($i = 1; $i <= self::TARGET_AMOUNT; $i++)
    {
      $todo = new Todo();
      $todo->setTitle(uniqid('User_'));

      $manager->persist($todo);
      $manager->flush();

      $this->addReference(self::TEST_TODO_COLLECTION_REFERENCE . '_' . $i, $todo);
    }
  }
}
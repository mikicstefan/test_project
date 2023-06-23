<?php

namespace App\Domain\VotingSystem\Fixtures;

use App\Domain\VotingSystem\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

/**
 * Class ProjectFixtures
 */
class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
  public const TEST_PROJECT_REFERENCE = 'project';
  public const TEST_PROJECT_TITLE = 'Title ';

  /**
   * @param ObjectManager $manager
   * @return void
   */
  public function load(ObjectManager $manager): void
  {
    $client = $this->getReference(ClientFixtures::TEST_CLIENT_REFERENCE);

    $project = new Project();
    $project->setTitle(self::TEST_PROJECT_TITLE);
    $project->setCreator($client);

    $manager->persist($project);
    $manager->flush();

    $this->addReference(self::TEST_PROJECT_REFERENCE, $project);
  }

  public function getDependencies()
  {
    return [
      ClientFixtures::class,
      VicoFixtures::class
    ];
  }
}

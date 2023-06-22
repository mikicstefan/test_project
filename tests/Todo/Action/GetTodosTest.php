<?php

declare(strict_types=1);

namespace App\Tests\Todo\Action;

use App\Domain\Todo\Fixtures\TodoCollectionFixtures;
use Symfony\Component\HttpFoundation\Request;
use App\Tests\BaseApiWebTestCase;

class GetTodosTest extends BaseApiWebTestCase
{
  public const TARGET_AMOUNT = 3;

  public function setUp(): void
  {
    parent::setUp();
  }

  public function testGettingTodos(): void
  {
    $this->addFixture(new TodoCollectionFixtures());
    $this->executeFixtures();

    // Request a specific page
    $this->client->request(
      Request::METHOD_GET,
      'api/v1/todos'
    );

    $response = json_decode($this->client->getResponse()->getContent(), true);

    $this->assertResponseIsSuccessful();
    $this->assertEquals(self::TARGET_AMOUNT, $response['total']);
  }

  public function tearDown(): void
  {
    parent::tearDown();
  }
}
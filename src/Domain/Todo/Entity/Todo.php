<?php

namespace App\Domain\Todo\Entity;

use App\Core\Doctrine\Traits\Identity;
use App\Core\Doctrine\Traits\Timestampable;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\Table;
use App\Domain\Todo\Repository\TodoRepository;
use JMS\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Todo
 */
#[Table(name: "todo")]
#[Entity(repositoryClass: TodoRepository::class)]
#[HasLifecycleCallbacks]
class Todo
{
  use Identity;
  use Timestampable;

  #[Column(name: "title", type: "string", length: 255, nullable: false)]
  #[Assert\NotBlank]
  private string $title;

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * @param string $title
   * @return Todo
   */
  public function setTitle(string $title): Todo
  {
    $this->title = $title;
    return $this;
  }
}
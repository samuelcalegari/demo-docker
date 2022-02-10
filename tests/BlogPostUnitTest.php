<?php

namespace App\Tests;

use App\Entity\BlogPost;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testIsTrue() : void
    {
        $blogspost = new BlogPost();
        $datetime = new DateTimeImmutable();

        $blogspost->setTitre('titre')
                  ->setCreatedAt($datetime)
                  ->setContenu('contenu')
                  ->setSlug('slug');

        $this->assertTrue($blogspost->getTitre() === 'titre');
        $this->assertTrue($blogspost->getCreatedAt() === $datetime);
        $this->assertTrue($blogspost->getContenu() === 'contenu');
        $this->assertTrue($blogspost->getSlug() === 'slug');
    }

    public function testIsFalse() : void
    {
        $blogspost = new BlogPost();
        $datetime = new DateTimeImmutable();

        $blogspost->setTitre('titre')
            ->setCreatedAt($datetime)
            ->setContenu('contenu')
            ->setSlug('slug');

        $this->assertFalse($blogspost->getTitre() === 'false');
        $this->assertFalse($blogspost->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($blogspost->getContenu() === 'false');
        $this->assertFalse($blogspost->getSlug() === 'false');
    }

    public function testIsEmpty() : void
    {
        $blogspost = new BlogPost();

        $this->assertEmpty($blogspost->getTitre());
        $this->assertEmpty($blogspost->getCreatedAt());
        $this->assertEmpty($blogspost->getContenu());
        $this->assertEmpty($blogspost->getSlug());
    }
}

<?php

namespace App\Tests;

use App\Entity\BlogPost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $commentaire = new Commentaire();
        $datetime = new DateTimeImmutable();
        $blogpost = new BlogPost();
        $peinture = new Peinture();

        $commentaire->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setCreatedAt($datetime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'email@test.com');
        $this->assertTrue($commentaire->getCreatedAt() === $datetime);
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
        $this->assertTrue($commentaire->getPeinture() === $peinture);
    }

    public function testIsFalse(): void
    {
        $commentaire = new Commentaire();
        $datetime = new DateTimeImmutable();
        $blogpost = new BlogPost();
        $peinture = new Peinture();

        $commentaire->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setCreatedAt($datetime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'false@test.com');
        $this->assertFalse($commentaire->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getBlogpost() === new BlogPost());
        $this->assertFalse($commentaire->getPeinture() === new Peinture());
    }

    public function testIsEmpty(): void
    {
        $commmentaire = new Commentaire();

        $this->assertEmpty($commmentaire->getAuteur());
        $this->assertEmpty($commmentaire->getEmail());
        $this->assertEmpty($commmentaire->getCreatedAt());
        $this->assertEmpty($commmentaire->getContenu());
        $this->assertEmpty($commmentaire->getBlogpost());
        $this->assertEmpty($commmentaire->getPeinture());
    }
}

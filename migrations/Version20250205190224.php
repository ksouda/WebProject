<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205190224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscriptionatelier CHANGE id_inscription id_inscription INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id_inscription)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscriptionatelier MODIFY id_inscription INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON inscriptionatelier');
        $this->addSql('ALTER TABLE inscriptionatelier CHANGE id_inscription id_inscription INT NOT NULL');
    }
}

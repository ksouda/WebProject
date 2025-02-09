<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205185242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne CHANGE id_atelier id_atelier INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id_atelier)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne MODIFY id_atelier INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON atelierenligne');
        $this->addSql('ALTER TABLE atelierenligne CHANGE id_atelier id_atelier INT NOT NULL');
    }
}

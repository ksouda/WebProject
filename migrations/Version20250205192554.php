<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205192554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscriptionatelier ADD atelier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inscriptionatelier ADD CONSTRAINT FK_10B78BD982E2CF35 FOREIGN KEY (atelier_id) REFERENCES atelierenligne (id)');
        $this->addSql('CREATE INDEX IDX_10B78BD982E2CF35 ON inscriptionatelier (atelier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscriptionatelier DROP FOREIGN KEY FK_10B78BD982E2CF35');
        $this->addSql('DROP INDEX IDX_10B78BD982E2CF35 ON inscriptionatelier');
        $this->addSql('ALTER TABLE inscriptionatelier DROP atelier_id');
    }
}

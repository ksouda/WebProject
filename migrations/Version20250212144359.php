<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250212144359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP INDEX UNIQ_FFCA422779F37AE5, ADD INDEX IDX_FFCA422779F37AE5 (id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP INDEX IDX_FFCA422779F37AE5, ADD UNIQUE INDEX UNIQ_FFCA422779F37AE5 (id_user_id)');
    }
}

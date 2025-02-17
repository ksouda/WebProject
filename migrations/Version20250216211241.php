<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216211241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP INDEX UNIQ_FFCA422779F37AE5, ADD INDEX IDX_FFCA422779F37AE5 (id_user_id)');
        $this->addSql('ALTER TABLE atelierenligne CHANGE id_user_id id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE inscriptionatelier DROP INDEX UNIQ_10B78BD979F37AE5, ADD INDEX IDX_10B78BD979F37AE5 (id_user_id)');
        $this->addSql('ALTER TABLE inscriptionatelier CHANGE id_user_id id_user_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP INDEX IDX_FFCA422779F37AE5, ADD UNIQUE INDEX UNIQ_FFCA422779F37AE5 (id_user_id)');
        $this->addSql('ALTER TABLE atelierenligne CHANGE id_user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inscriptionatelier DROP INDEX IDX_10B78BD979F37AE5, ADD UNIQUE INDEX UNIQ_10B78BD979F37AE5 (id_user_id)');
        $this->addSql('ALTER TABLE inscriptionatelier CHANGE id_user_id id_user_id INT DEFAULT NULL');
    }
}

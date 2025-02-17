<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216182021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064046A923B55');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640479F37AE5');
        $this->addSql('DROP INDEX UNIQ_CE60640479F37AE5 ON reclamation');
        $this->addSql('DROP INDEX UNIQ_CE6064046A923B55 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD user_id INT NOT NULL, DROP id_reponse_id, DROP id_user_id');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CE606404A76ED395 ON reclamation (user_id)');
        $this->addSql('ALTER TABLE reponse ADD reclamation_id INT NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FB6DEC72D6BA2D9 ON reponse (reclamation_id)');
        $this->addSql('DROP INDEX email ON user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('DROP INDEX IDX_CE606404A76ED395 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD id_reponse_id INT DEFAULT NULL, ADD id_user_id INT DEFAULT NULL, DROP user_id');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064046A923B55 FOREIGN KEY (id_reponse_id) REFERENCES reponse (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640479F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE60640479F37AE5 ON reclamation (id_user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE6064046A923B55 ON reclamation (id_reponse_id)');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC72D6BA2D9');
        $this->addSql('DROP INDEX UNIQ_5FB6DEC72D6BA2D9 ON reponse');
        $this->addSql('ALTER TABLE reponse DROP reclamation_id');
        $this->addSql('DROP INDEX uniq_identifier_email ON user');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
    }
}

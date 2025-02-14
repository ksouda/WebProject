<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250206133439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE atelierenligne ADD CONSTRAINT FK_FFCA422779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FFCA422779F37AE5 ON atelierenligne (id_user_id)');
        $this->addSql('ALTER TABLE commande ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6EEAA67D79F37AE5 ON commande (id_user_id)');
        $this->addSql('ALTER TABLE inscriptionatelier ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inscriptionatelier ADD CONSTRAINT FK_10B78BD979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_10B78BD979F37AE5 ON inscriptionatelier (id_user_id)');
        $this->addSql('ALTER TABLE materiaux ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT FK_97C5662579F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_97C5662579F37AE5 ON materiaux (id_user_id)');
        $this->addSql('ALTER TABLE produit ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29A5EC2779F37AE5 ON produit (id_user_id)');
        $this->addSql('ALTER TABLE reclamation ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640479F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE60640479F37AE5 ON reclamation (id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP FOREIGN KEY FK_FFCA422779F37AE5');
        $this->addSql('DROP INDEX UNIQ_FFCA422779F37AE5 ON atelierenligne');
        $this->addSql('ALTER TABLE atelierenligne DROP id_user_id');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D79F37AE5');
        $this->addSql('DROP INDEX UNIQ_6EEAA67D79F37AE5 ON commande');
        $this->addSql('ALTER TABLE commande DROP id_user_id');
        $this->addSql('ALTER TABLE inscriptionatelier DROP FOREIGN KEY FK_10B78BD979F37AE5');
        $this->addSql('DROP INDEX UNIQ_10B78BD979F37AE5 ON inscriptionatelier');
        $this->addSql('ALTER TABLE inscriptionatelier DROP id_user_id');
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY FK_97C5662579F37AE5');
        $this->addSql('DROP INDEX UNIQ_97C5662579F37AE5 ON materiaux');
        $this->addSql('ALTER TABLE materiaux DROP id_user_id');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2779F37AE5');
        $this->addSql('DROP INDEX UNIQ_29A5EC2779F37AE5 ON produit');
        $this->addSql('ALTER TABLE produit DROP id_user_id');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640479F37AE5');
        $this->addSql('DROP INDEX UNIQ_CE60640479F37AE5 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP id_user_id');
    }
}

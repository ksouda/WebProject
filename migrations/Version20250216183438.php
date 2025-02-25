<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216183438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lignedecommande DROP FOREIGN KEY FK_A4C3DF16AABEFE2C');
        $this->addSql('ALTER TABLE lignedecommande DROP FOREIGN KEY FK_A4C3DF169AF8E3A3');
        $this->addSql('ALTER TABLE lignedecommande ADD CONSTRAINT FK_A4C3DF16AABEFE2C FOREIGN KEY (id_produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE lignedecommande ADD CONSTRAINT FK_A4C3DF169AF8E3A3 FOREIGN KEY (id_commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27305C84E6');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2779F37AE5');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27305C84E6 FOREIGN KEY (id_promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE promotion ADD start_date DATE NOT NULL, ADD end_date DATE NOT NULL, DROP duree_promotion');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lignedecommande DROP FOREIGN KEY FK_A4C3DF169AF8E3A3');
        $this->addSql('ALTER TABLE lignedecommande DROP FOREIGN KEY FK_A4C3DF16AABEFE2C');
        $this->addSql('ALTER TABLE lignedecommande ADD CONSTRAINT FK_A4C3DF169AF8E3A3 FOREIGN KEY (id_commande_id) REFERENCES commande (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lignedecommande ADD CONSTRAINT FK_A4C3DF16AABEFE2C FOREIGN KEY (id_produit_id) REFERENCES produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27305C84E6');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2779F37AE5');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27305C84E6 FOREIGN KEY (id_promotion_id) REFERENCES promotion (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion ADD duree_promotion INT NOT NULL, DROP start_date, DROP end_date');
    }
}

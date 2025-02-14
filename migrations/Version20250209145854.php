<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209145854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, date_commande DATE NOT NULL, montant_total DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, adresse_livraison VARCHAR(255) NOT NULL, paiement VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6EEAA67D79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_produit (commande_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_DF1E9E8782EA2E54 (commande_id), INDEX IDX_DF1E9E87F347EFB (produit_id), PRIMARY KEY(commande_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_materiaux (commande_id INT NOT NULL, materiaux_id INT NOT NULL, INDEX IDX_87C93C6782EA2E54 (commande_id), INDEX IDX_87C93C67806EBBB2 (materiaux_id), PRIMARY KEY(commande_id, materiaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom_fournisseur VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, contact INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscriptionatelier (id INT AUTO_INCREMENT NOT NULL, atelier_id INT DEFAULT NULL, id_user_id INT DEFAULT NULL, dateinscri DATE NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_10B78BD982E2CF35 (atelier_id), UNIQUE INDEX UNIQ_10B78BD979F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lignedecommande (id INT AUTO_INCREMENT NOT NULL, id_commande_id INT DEFAULT NULL, quantite INT NOT NULL, prix_unitaire DOUBLE PRECISION NOT NULL, INDEX IDX_A4C3DF169AF8E3A3 (id_commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiaux (id INT AUTO_INCREMENT NOT NULL, id_fournisseur_id INT DEFAULT NULL, id_user_id INT DEFAULT NULL, nom_materiel VARCHAR(255) NOT NULL, quantite_stock INT NOT NULL, seuil_min INT NOT NULL, prix_unitaire DOUBLE PRECISION NOT NULL, categorie VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_97C566255A6AC879 (id_fournisseur_id), UNIQUE INDEX UNIQ_97C5662579F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, id_promotion_id INT DEFAULT NULL, id_user_id INT DEFAULT NULL, nom_produit VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, stock INT NOT NULL, INDEX IDX_29A5EC27305C84E6 (id_promotion_id), UNIQUE INDEX UNIQ_29A5EC2779F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, code_coupon VARCHAR(255) NOT NULL, duree_promotion DATE NOT NULL, prix_nouv DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, id_reponse_id INT DEFAULT NULL, id_user_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, statut VARCHAR(255) NOT NULL, date_reclamation DATE NOT NULL, UNIQUE INDEX UNIQ_CE6064046A923B55 (id_reponse_id), UNIQUE INDEX UNIQ_CE60640479F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, description LONGTEXT NOT NULL, date_reponse DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, numtel INT NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E8782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E87F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT FK_87C93C6782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT FK_87C93C67806EBBB2 FOREIGN KEY (materiaux_id) REFERENCES materiaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscriptionatelier ADD CONSTRAINT FK_10B78BD982E2CF35 FOREIGN KEY (atelier_id) REFERENCES atelierenligne (id)');
        $this->addSql('ALTER TABLE inscriptionatelier ADD CONSTRAINT FK_10B78BD979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE lignedecommande ADD CONSTRAINT FK_A4C3DF169AF8E3A3 FOREIGN KEY (id_commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT FK_97C566255A6AC879 FOREIGN KEY (id_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT FK_97C5662579F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27305C84E6 FOREIGN KEY (id_promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064046A923B55 FOREIGN KEY (id_reponse_id) REFERENCES reponse (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640479F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE atelierenligne ADD id_user_id INT DEFAULT NULL, DROP id_atelier, DROP formateur, CHANGE niv_difficulte niveau_diff VARCHAR(255) NOT NULL, CHANGE date_cours datecours DATE NOT NULL');
        $this->addSql('ALTER TABLE atelierenligne ADD CONSTRAINT FK_FFCA422779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FFCA422779F37AE5 ON atelierenligne (id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP FOREIGN KEY FK_FFCA422779F37AE5');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D79F37AE5');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E8782EA2E54');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E87F347EFB');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY FK_87C93C6782EA2E54');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY FK_87C93C67806EBBB2');
        $this->addSql('ALTER TABLE inscriptionatelier DROP FOREIGN KEY FK_10B78BD982E2CF35');
        $this->addSql('ALTER TABLE inscriptionatelier DROP FOREIGN KEY FK_10B78BD979F37AE5');
        $this->addSql('ALTER TABLE lignedecommande DROP FOREIGN KEY FK_A4C3DF169AF8E3A3');
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY FK_97C566255A6AC879');
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY FK_97C5662579F37AE5');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27305C84E6');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2779F37AE5');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064046A923B55');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640479F37AE5');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_produit');
        $this->addSql('DROP TABLE commande_materiaux');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE inscriptionatelier');
        $this->addSql('DROP TABLE lignedecommande');
        $this->addSql('DROP TABLE materiaux');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX UNIQ_FFCA422779F37AE5 ON atelierenligne');
        $this->addSql('ALTER TABLE atelierenligne ADD id_atelier INT NOT NULL, ADD formateur INT NOT NULL, DROP id_user_id, CHANGE niveau_diff niv_difficulte VARCHAR(255) NOT NULL, CHANGE datecours date_cours DATE NOT NULL');
    }
}

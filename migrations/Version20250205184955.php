<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205184955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atelierenligne DROP FOREIGN KEY fk_formateur');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY fk_lignecommande');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY fk_user');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY commande_materiaux_ibfk_2');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY fk_cm');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY fk_c');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY fk_cmateriel');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY commande_materiaux_ibfk_1');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY fk_ccmm');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY commande_produit_ibfk_2');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY fk_ccproduit');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY commande_produit_ibfk_1');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY fk_cproduit');
        $this->addSql('ALTER TABLE inscriptionatelier DROP FOREIGN KEY fk_cours');
        $this->addSql('ALTER TABLE inscriptionatelier DROP FOREIGN KEY fk_utilisateur');
        $this->addSql('ALTER TABLE lignecommande DROP FOREIGN KEY fk_materiaux');
        $this->addSql('ALTER TABLE lignecommande DROP FOREIGN KEY fk_commande');
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY fk_fournisseur');
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY fk_usermat');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY fk_userprod');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY fk_produit');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_userrec');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY fk_reclamation');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_materiaux');
        $this->addSql('DROP TABLE commande_produit');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE inscriptionatelier');
        $this->addSql('DROP TABLE lignecommande');
        $this->addSql('DROP TABLE materiaux');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX fk_formateur ON atelierenligne');
        $this->addSql('ALTER TABLE atelierenligne ADD id INT AUTO_INCREMENT NOT NULL, CHANGE ID_atelier id_atelier INT NOT NULL, CHANGE titre titre VARCHAR(255) NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE niv_difficulte niv_difficulte VARCHAR(255) NOT NULL, CHANGE lien lien LONGTEXT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (ligne_commande INT NOT NULL, ID_commande INT AUTO_INCREMENT NOT NULL, date_commande DATE NOT NULL, montant_total DOUBLE PRECISION NOT NULL, statut VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ID_user INT NOT NULL, adresselivraison VARCHAR(300) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, paiement VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_user (ID_user), INDEX fk_lignecommande (ligne_commande), PRIMARY KEY(ID_commande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commande_materiaux (ID_materiel INT NOT NULL, ID_commande INT NOT NULL, INDEX idx_commande (ID_commande), INDEX ID_materiel (ID_materiel), PRIMARY KEY(ID_commande, ID_materiel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commande_produit (ID_produit INT NOT NULL, ID_commande INT NOT NULL, INDEX ID_commande (ID_commande), INDEX ID_produit (ID_produit), PRIMARY KEY(ID_produit, ID_commande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fournisseur (ID_fournisseur INT AUTO_INCREMENT NOT NULL, nom_fournisseur VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, adresse VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, contact INT NOT NULL, PRIMARY KEY(ID_fournisseur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE inscriptionatelier (utilisateur INT NOT NULL, cours INT NOT NULL, ID_inscription INT AUTO_INCREMENT NOT NULL, date_inscription DATE NOT NULL, statut VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_utilisateur (utilisateur), INDEX fk_cours (cours), PRIMARY KEY(ID_inscription)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE lignecommande (commande INT NOT NULL, materiaux INT NOT NULL, ID_lignecommande INT AUTO_INCREMENT NOT NULL, produit INT NOT NULL, quantite INT NOT NULL, prix_unitaire DOUBLE PRECISION NOT NULL, INDEX fk_commande (commande), INDEX fk_materiaux (materiaux), PRIMARY KEY(ID_lignecommande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE materiaux (ID_materiel INT AUTO_INCREMENT NOT NULL, nom_materiel VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, quantite_stock INT NOT NULL, seuil_min INT NOT NULL, prix_unitaire DOUBLE PRECISION NOT NULL, categorie VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ID_fournisseur INT NOT NULL, ID_user INT NOT NULL, INDEX fk_fournisseur (ID_fournisseur), INDEX fk_usermat (ID_user), PRIMARY KEY(ID_materiel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (ID_produit INT AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, categorie INT NOT NULL, prix DOUBLE PRECISION NOT NULL, statut VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, stock INT NOT NULL, ID_user INT NOT NULL, INDEX fk_userprod (ID_user), PRIMARY KEY(ID_produit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE promotion (ID_promotion INT AUTO_INCREMENT NOT NULL, code_coupon VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, duree_promotion DATE NOT NULL, prix_nouv DOUBLE PRECISION NOT NULL, ID_produit INT NOT NULL, INDEX fk_produit (ID_produit), PRIMARY KEY(ID_promotion)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reclamation (ID_reclamation INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description VARCHAR(300) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, statut VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_reclamation DATE NOT NULL, ID_user INT NOT NULL, INDEX fk_userrec (ID_user), PRIMARY KEY(ID_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (ID_reponse INT NOT NULL, description VARCHAR(300) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_reponse DATE NOT NULL, ID_reclamation INT NOT NULL, INDEX fk_reclamation (ID_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (ID_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, photo VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, role VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, num_tel INT NOT NULL, adresse VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(ID_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT fk_lignecommande FOREIGN KEY (ligne_commande) REFERENCES lignecommande (ID_lignecommande) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT fk_user FOREIGN KEY (ID_user) REFERENCES user (ID_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT commande_materiaux_ibfk_2 FOREIGN KEY (ID_materiel) REFERENCES materiaux (ID_materiel) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT fk_cm FOREIGN KEY (ID_materiel) REFERENCES materiaux (ID_materiel)');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT fk_c FOREIGN KEY (ID_commande) REFERENCES commande (ID_commande) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT fk_cmateriel FOREIGN KEY (ID_materiel) REFERENCES materiaux (ID_materiel) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT commande_materiaux_ibfk_1 FOREIGN KEY (ID_commande) REFERENCES commande (ID_commande) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT fk_ccmm FOREIGN KEY (ID_commande) REFERENCES commande (ID_commande)');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT commande_produit_ibfk_2 FOREIGN KEY (ID_commande) REFERENCES commande (ID_commande) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT fk_ccproduit FOREIGN KEY (ID_produit) REFERENCES produit (ID_produit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT commande_produit_ibfk_1 FOREIGN KEY (ID_produit) REFERENCES produit (ID_produit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT fk_cproduit FOREIGN KEY (ID_produit) REFERENCES produit (ID_produit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscriptionatelier ADD CONSTRAINT fk_cours FOREIGN KEY (cours) REFERENCES atelierenligne (ID_atelier) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscriptionatelier ADD CONSTRAINT fk_utilisateur FOREIGN KEY (utilisateur) REFERENCES user (ID_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT fk_materiaux FOREIGN KEY (materiaux) REFERENCES materiaux (ID_materiel) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT fk_commande FOREIGN KEY (commande) REFERENCES commande (ID_commande) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT fk_fournisseur FOREIGN KEY (ID_fournisseur) REFERENCES fournisseur (ID_fournisseur) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT fk_usermat FOREIGN KEY (ID_user) REFERENCES user (ID_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT fk_userprod FOREIGN KEY (ID_user) REFERENCES user (ID_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT fk_produit FOREIGN KEY (ID_produit) REFERENCES produit (ID_produit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_userrec FOREIGN KEY (ID_user) REFERENCES user (ID_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT fk_reclamation FOREIGN KEY (ID_reclamation) REFERENCES reclamation (ID_reclamation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE atelierenligne MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON atelierenligne');
        $this->addSql('ALTER TABLE atelierenligne DROP id, CHANGE id_atelier ID_atelier INT AUTO_INCREMENT NOT NULL, CHANGE titre titre VARCHAR(50) NOT NULL, CHANGE categorie categorie VARCHAR(100) NOT NULL, CHANGE description description VARCHAR(600) NOT NULL, CHANGE niv_difficulte niv_difficulte VARCHAR(50) NOT NULL, CHANGE lien lien VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE atelierenligne ADD CONSTRAINT fk_formateur FOREIGN KEY (formateur) REFERENCES user (ID_user) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fk_formateur ON atelierenligne (formateur)');
        $this->addSql('ALTER TABLE atelierenligne ADD PRIMARY KEY (ID_atelier)');
    }
}

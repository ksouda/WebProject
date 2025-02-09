<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250206133100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_produit (commande_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_DF1E9E8782EA2E54 (commande_id), INDEX IDX_DF1E9E87F347EFB (produit_id), PRIMARY KEY(commande_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_materiaux (commande_id INT NOT NULL, materiaux_id INT NOT NULL, INDEX IDX_87C93C6782EA2E54 (commande_id), INDEX IDX_87C93C67806EBBB2 (materiaux_id), PRIMARY KEY(commande_id, materiaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E8782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E87F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT FK_87C93C6782EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_materiaux ADD CONSTRAINT FK_87C93C67806EBBB2 FOREIGN KEY (materiaux_id) REFERENCES materiaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE atelierenligne DROP formateur');
        $this->addSql('ALTER TABLE commande DROP id_user');
        $this->addSql('ALTER TABLE inscriptionatelier DROP utilisateur');
        $this->addSql('ALTER TABLE lignedecommande ADD id_commande_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lignedecommande ADD CONSTRAINT FK_A4C3DF169AF8E3A3 FOREIGN KEY (id_commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_A4C3DF169AF8E3A3 ON lignedecommande (id_commande_id)');
        $this->addSql('ALTER TABLE materiaux ADD id_fournisseur_id INT DEFAULT NULL, DROP id_user');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT FK_97C566255A6AC879 FOREIGN KEY (id_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_97C566255A6AC879 ON materiaux (id_fournisseur_id)');
        $this->addSql('ALTER TABLE produit ADD id_promotion_id INT DEFAULT NULL, DROP id_user');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27305C84E6 FOREIGN KEY (id_promotion_id) REFERENCES promotion (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27305C84E6 ON produit (id_promotion_id)');
        $this->addSql('ALTER TABLE reclamation ADD id_reponse_id INT DEFAULT NULL, DROP id_user');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064046A923B55 FOREIGN KEY (id_reponse_id) REFERENCES reponse (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE6064046A923B55 ON reclamation (id_reponse_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E8782EA2E54');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E87F347EFB');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY FK_87C93C6782EA2E54');
        $this->addSql('ALTER TABLE commande_materiaux DROP FOREIGN KEY FK_87C93C67806EBBB2');
        $this->addSql('DROP TABLE commande_produit');
        $this->addSql('DROP TABLE commande_materiaux');
        $this->addSql('ALTER TABLE atelierenligne ADD formateur INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD id_user INT NOT NULL');
        $this->addSql('ALTER TABLE inscriptionatelier ADD utilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE lignedecommande DROP FOREIGN KEY FK_A4C3DF169AF8E3A3');
        $this->addSql('DROP INDEX IDX_A4C3DF169AF8E3A3 ON lignedecommande');
        $this->addSql('ALTER TABLE lignedecommande DROP id_commande_id');
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY FK_97C566255A6AC879');
        $this->addSql('DROP INDEX IDX_97C566255A6AC879 ON materiaux');
        $this->addSql('ALTER TABLE materiaux ADD id_user INT NOT NULL, DROP id_fournisseur_id');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27305C84E6');
        $this->addSql('DROP INDEX IDX_29A5EC27305C84E6 ON produit');
        $this->addSql('ALTER TABLE produit ADD id_user INT NOT NULL, DROP id_promotion_id');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064046A923B55');
        $this->addSql('DROP INDEX UNIQ_CE6064046A923B55 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD id_user INT NOT NULL, DROP id_reponse_id');
    }
}

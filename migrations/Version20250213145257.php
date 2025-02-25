<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250213145257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY FK_97C566255A6AC879');
        $this->addSql('DROP INDEX IDX_97C566255A6AC879 ON materiaux');
        $this->addSql('ALTER TABLE materiaux CHANGE id_fournisseur_id id_fournisseur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT FK_97C566252E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_97C566252E8C07C5 ON materiaux (id_fournisseur)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiaux DROP FOREIGN KEY FK_97C566252E8C07C5');
        $this->addSql('DROP INDEX IDX_97C566252E8C07C5 ON materiaux');
        $this->addSql('ALTER TABLE materiaux CHANGE id_fournisseur id_fournisseur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materiaux ADD CONSTRAINT FK_97C566255A6AC879 FOREIGN KEY (id_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_97C566255A6AC879 ON materiaux (id_fournisseur_id)');
    }
}

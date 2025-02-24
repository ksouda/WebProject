<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223211101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wishlistmateriaux DROP FOREIGN KEY FK_94AB7B179F37AE5');
        $this->addSql('DROP INDEX UNIQ_94AB7B179F37AE5 ON wishlistmateriaux');
        $this->addSql('ALTER TABLE wishlistmateriaux CHANGE id_user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wishlistmateriaux ADD CONSTRAINT FK_94AB7B1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_94AB7B1A76ED395 ON wishlistmateriaux (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wishlistmateriaux DROP FOREIGN KEY FK_94AB7B1A76ED395');
        $this->addSql('DROP INDEX UNIQ_94AB7B1A76ED395 ON wishlistmateriaux');
        $this->addSql('ALTER TABLE wishlistmateriaux CHANGE user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wishlistmateriaux ADD CONSTRAINT FK_94AB7B179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_94AB7B179F37AE5 ON wishlistmateriaux (id_user_id)');
    }
}

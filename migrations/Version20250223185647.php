<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223185647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wishlistmateriaux (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, date_ajout DATE NOT NULL, UNIQUE INDEX UNIQ_94AB7B179F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wishlistmateriaux_materiaux (wishlistmateriaux_id INT NOT NULL, materiaux_id INT NOT NULL, INDEX IDX_BAAD119D9F50C1EF (wishlistmateriaux_id), INDEX IDX_BAAD119D806EBBB2 (materiaux_id), PRIMARY KEY(wishlistmateriaux_id, materiaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE wishlistmateriaux ADD CONSTRAINT FK_94AB7B179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE wishlistmateriaux_materiaux ADD CONSTRAINT FK_BAAD119D9F50C1EF FOREIGN KEY (wishlistmateriaux_id) REFERENCES wishlistmateriaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE wishlistmateriaux_materiaux ADD CONSTRAINT FK_BAAD119D806EBBB2 FOREIGN KEY (materiaux_id) REFERENCES materiaux (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wishlistmateriaux DROP FOREIGN KEY FK_94AB7B179F37AE5');
        $this->addSql('ALTER TABLE wishlistmateriaux_materiaux DROP FOREIGN KEY FK_BAAD119D9F50C1EF');
        $this->addSql('ALTER TABLE wishlistmateriaux_materiaux DROP FOREIGN KEY FK_BAAD119D806EBBB2');
        $this->addSql('DROP TABLE wishlistmateriaux');
        $this->addSql('DROP TABLE wishlistmateriaux_materiaux');
    }
}

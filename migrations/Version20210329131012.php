<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329131012 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe_general_user (equipe_id INT NOT NULL, general_user_id INT NOT NULL, INDEX IDX_F349844D6D861B89 (equipe_id), INDEX IDX_F349844DD64E7EE1 (general_user_id), PRIMARY KEY(equipe_id, general_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE general_user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', prenom VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, structure VARCHAR(255) DEFAULT NULL, modif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844D6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844DD64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe_general_user DROP FOREIGN KEY FK_F349844DD64E7EE1');
        $this->addSql('DROP TABLE equipe_general_user');
        $this->addSql('DROP TABLE general_user');
    }
}

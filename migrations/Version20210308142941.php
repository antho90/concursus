<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308142941 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, competition_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_880E0D767B39D312 (competition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_mentor (admin_id INT NOT NULL, mentor_id INT NOT NULL, INDEX IDX_DDDD5327642B8210 (admin_id), INDEX IDX_DDDD5327DB403044 (mentor_id), PRIMARY KEY(admin_id, mentor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competiton (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, date DATETIME NOT NULL, classement LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, acces VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mentor (id INT AUTO_INCREMENT NOT NULL, equipe_id INT DEFAULT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_801562DE6D861B89 (equipe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, is_active TINYINT(1) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D767B39D312 FOREIGN KEY (competition_id) REFERENCES competiton (id)');
        $this->addSql('ALTER TABLE admin_mentor ADD CONSTRAINT FK_DDDD5327642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE admin_mentor ADD CONSTRAINT FK_DDDD5327DB403044 FOREIGN KEY (mentor_id) REFERENCES mentor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mentor ADD CONSTRAINT FK_801562DE6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_mentor DROP FOREIGN KEY FK_DDDD5327642B8210');
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D767B39D312');
        $this->addSql('ALTER TABLE mentor DROP FOREIGN KEY FK_801562DE6D861B89');
        $this->addSql('ALTER TABLE admin_mentor DROP FOREIGN KEY FK_DDDD5327DB403044');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE admin_mentor');
        $this->addSql('DROP TABLE competiton');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE mentor');
        $this->addSql('DROP TABLE user');
    }
}

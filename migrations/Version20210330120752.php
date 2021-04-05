<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330120752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe_general_user (equipe_id INT NOT NULL, general_user_id INT NOT NULL, INDEX IDX_F349844D6D861B89 (equipe_id), UNIQUE INDEX UNIQ_F349844DD64E7EE1 (general_user_id), PRIMARY KEY(equipe_id, general_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844D6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844DD64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id)');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15CF75C952');
        $this->addSql('DROP INDEX IDX_2449BA15CF75C952 ON equipe');
        $this->addSql('ALTER TABLE equipe DROP generaluser_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipe_general_user');
        $this->addSql('ALTER TABLE equipe ADD generaluser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15CF75C952 FOREIGN KEY (generaluser_id) REFERENCES general_user (id)');
        $this->addSql('CREATE INDEX IDX_2449BA15CF75C952 ON equipe (generaluser_id)');
    }
}

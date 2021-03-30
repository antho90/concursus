<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330075457 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA156D861B89');
        $this->addSql('DROP INDEX IDX_2449BA156D861B89 ON equipe');
        $this->addSql('ALTER TABLE equipe CHANGE equipe_id generaluser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15CF75C952 FOREIGN KEY (generaluser_id) REFERENCES general_user (id)');
        $this->addSql('CREATE INDEX IDX_2449BA15CF75C952 ON equipe (generaluser_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15CF75C952');
        $this->addSql('DROP INDEX IDX_2449BA15CF75C952 ON equipe');
        $this->addSql('ALTER TABLE equipe CHANGE generaluser_id equipe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA156D861B89 FOREIGN KEY (equipe_id) REFERENCES general_user (id)');
        $this->addSql('CREATE INDEX IDX_2449BA156D861B89 ON equipe (equipe_id)');
    }
}

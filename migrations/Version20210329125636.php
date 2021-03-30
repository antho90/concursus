<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329125636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15D64E7EE1');
        $this->addSql('DROP INDEX IDX_2449BA15D64E7EE1 ON equipe');
        $this->addSql('ALTER TABLE equipe DROP general_user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe ADD general_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15D64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id)');
        $this->addSql('CREATE INDEX IDX_2449BA15D64E7EE1 ON equipe (general_user_id)');
    }
}

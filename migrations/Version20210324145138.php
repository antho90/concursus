<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210324145138 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competiton_equipe (competiton_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_EC62B3AD626A3C22 (competiton_id), INDEX IDX_EC62B3AD6D861B89 (equipe_id), PRIMARY KEY(competiton_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competiton_equipe ADD CONSTRAINT FK_EC62B3AD626A3C22 FOREIGN KEY (competiton_id) REFERENCES competiton (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competiton_equipe ADD CONSTRAINT FK_EC62B3AD6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe CHANGE acces acces VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE competiton_equipe');
        $this->addSql('ALTER TABLE equipe CHANGE acces acces VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}

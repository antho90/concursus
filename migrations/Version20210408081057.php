<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210408081057 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competiton_equipe DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE competiton_equipe ADD PRIMARY KEY (competiton_id, equipe_id)');
        $this->addSql('ALTER TABLE equipe ADD notes INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe_general_user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE equipe_general_user ADD PRIMARY KEY (general_user_id, equipe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competiton_equipe DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE competiton_equipe ADD PRIMARY KEY (equipe_id, competiton_id)');
        $this->addSql('ALTER TABLE equipe DROP notes');
        $this->addSql('ALTER TABLE equipe_general_user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE equipe_general_user ADD PRIMARY KEY (equipe_id, general_user_id)');
    }
}

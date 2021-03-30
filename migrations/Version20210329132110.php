<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329132110 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe_general_user DROP INDEX IDX_F349844DD64E7EE1, ADD UNIQUE INDEX UNIQ_F349844DD64E7EE1 (general_user_id)');
        $this->addSql('ALTER TABLE equipe_general_user DROP FOREIGN KEY FK_F349844D6D861B89');
        $this->addSql('ALTER TABLE equipe_general_user DROP FOREIGN KEY FK_F349844DD64E7EE1');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844D6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844DD64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe_general_user DROP INDEX UNIQ_F349844DD64E7EE1, ADD INDEX IDX_F349844DD64E7EE1 (general_user_id)');
        $this->addSql('ALTER TABLE equipe_general_user DROP FOREIGN KEY FK_F349844D6D861B89');
        $this->addSql('ALTER TABLE equipe_general_user DROP FOREIGN KEY FK_F349844DD64E7EE1');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844D6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844DD64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id) ON DELETE CASCADE');
    }
}

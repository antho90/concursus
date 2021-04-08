<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407133829 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe_general_user (general_user_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_F349844DD64E7EE1 (general_user_id), INDEX IDX_F349844D6D861B89 (equipe_id), PRIMARY KEY(general_user_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844DD64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_general_user ADD CONSTRAINT FK_F349844D6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE general_user_equipe');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE general_user_equipe (general_user_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_C6603DD8D64E7EE1 (general_user_id), INDEX IDX_C6603DD86D861B89 (equipe_id), PRIMARY KEY(general_user_id, equipe_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE general_user_equipe ADD CONSTRAINT FK_C6603DD86D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE general_user_equipe ADD CONSTRAINT FK_C6603DD8D64E7EE1 FOREIGN KEY (general_user_id) REFERENCES general_user (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE equipe_general_user');
    }
}

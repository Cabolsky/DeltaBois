<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241028142221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE color CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE pub DROP FOREIGN KEY FK_5A443C857ADA1FB5');
        $this->addSql('DROP INDEX UNIQ_5A443C857ADA1FB5 ON pub');
        $this->addSql('ALTER TABLE pub ADD code VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL, DROP color_id, DROP text');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE color CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE pub ADD color_id INT NOT NULL, ADD text LONGTEXT NOT NULL, DROP code, DROP name');
        $this->addSql('ALTER TABLE pub ADD CONSTRAINT FK_5A443C857ADA1FB5 FOREIGN KEY (color_id) REFERENCES color (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5A443C857ADA1FB5 ON pub (color_id)');
    }
}

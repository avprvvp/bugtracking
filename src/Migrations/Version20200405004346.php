<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200405004346 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag_ticket (tag_id INT NOT NULL, ticket_id INT NOT NULL, INDEX IDX_7EE1E48FBAD26311 (tag_id), INDEX IDX_7EE1E48F700047D2 (ticket_id), PRIMARY KEY(tag_id, ticket_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tag_ticket ADD CONSTRAINT FK_7EE1E48FBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_ticket ADD CONSTRAINT FK_7EE1E48F700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tag_ticket DROP FOREIGN KEY FK_7EE1E48FBAD26311');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tag_ticket');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3145EB451');
        $this->addSql('DROP INDEX IDX_97A0ADA3145EB451 ON ticket');
    }
}

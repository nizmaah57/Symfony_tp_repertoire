<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123144836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise_client (entreprise_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_9E52B862A4AEAFEA (entreprise_id), INDEX IDX_9E52B86219EB6921 (client_id), PRIMARY KEY(entreprise_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise_client ADD CONSTRAINT FK_9E52B862A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise_client ADD CONSTRAINT FK_9E52B86219EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entreprise_client DROP FOREIGN KEY FK_9E52B862A4AEAFEA');
        $this->addSql('ALTER TABLE entreprise_client DROP FOREIGN KEY FK_9E52B86219EB6921');
        $this->addSql('DROP TABLE entreprise_client');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210710104134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F3256915B');
        $this->addSql('DROP INDEX IDX_E9E2810F3256915B ON voiture');
        $this->addSql('ALTER TABLE voiture CHANGE relation_id chauffeur_id INT NOT NULL');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F85C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES chauffeur (id)');
        $this->addSql('CREATE INDEX IDX_E9E2810F85C0B3BE ON voiture (chauffeur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F85C0B3BE');
        $this->addSql('DROP INDEX IDX_E9E2810F85C0B3BE ON voiture');
        $this->addSql('ALTER TABLE voiture CHANGE chauffeur_id relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F3256915B FOREIGN KEY (relation_id) REFERENCES chauffeur (id)');
        $this->addSql('CREATE INDEX IDX_E9E2810F3256915B ON voiture (relation_id)');
    }
}

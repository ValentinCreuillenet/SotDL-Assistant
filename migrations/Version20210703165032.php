<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210703165032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE spell_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tag_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE spell (id INT NOT NULL, tradition VARCHAR(255) NOT NULL, rank INT NOT NULL, name VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, area VARCHAR(255) DEFAULT NULL, duration VARCHAR(255) DEFAULT NULL, target VARCHAR(255) DEFAULT NULL, requirement VARCHAR(255) DEFAULT NULL, damage VARCHAR(255) DEFAULT NULL, description VARCHAR(2500) DEFAULT NULL, twenty_plus VARCHAR(1000) DEFAULT NULL, triggered VARCHAR(1000) DEFAULT NULL, sacrifice VARCHAR(1000) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE spell_tag (spell_id INT NOT NULL, tag_id INT NOT NULL, PRIMARY KEY(spell_id, tag_id))');
        $this->addSql('CREATE INDEX IDX_16AB3D64479EC90D ON spell_tag (spell_id)');
        $this->addSql('CREATE INDEX IDX_16AB3D64BAD26311 ON spell_tag (tag_id)');
        $this->addSql('CREATE TABLE tag (id INT NOT NULL, short VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE spell_tag ADD CONSTRAINT FK_16AB3D64479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE spell_tag ADD CONSTRAINT FK_16AB3D64BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE spell_tag DROP CONSTRAINT FK_16AB3D64479EC90D');
        $this->addSql('ALTER TABLE spell_tag DROP CONSTRAINT FK_16AB3D64BAD26311');
        $this->addSql('DROP SEQUENCE spell_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tag_id_seq CASCADE');
        $this->addSql('DROP TABLE spell');
        $this->addSql('DROP TABLE spell_tag');
        $this->addSql('DROP TABLE tag');
    }
}

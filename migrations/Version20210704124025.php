<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704124025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE ancestry_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE character_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE creature_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE level_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE path_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE talent_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE team_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE ancestry (id INT NOT NULL, level_four_id INT NOT NULL, name VARCHAR(255) NOT NULL, starting_attributes VARCHAR(255) NOT NULL, perception VARCHAR(255) NOT NULL, defense INT NOT NULL, health INT NOT NULL, healing_rate INT NOT NULL, size VARCHAR(255) NOT NULL, speed VARCHAR(255) NOT NULL, power VARCHAR(255) NOT NULL, insanity VARCHAR(255) NOT NULL, corruption VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_63FAD02F440425BB ON ancestry (level_four_id)');
        $this->addSql('CREATE TABLE ancestry_talent (ancestry_id INT NOT NULL, talent_id INT NOT NULL, PRIMARY KEY(ancestry_id, talent_id))');
        $this->addSql('CREATE INDEX IDX_EF36A03D89001A93 ON ancestry_talent (ancestry_id)');
        $this->addSql('CREATE INDEX IDX_EF36A03D18777CEF ON ancestry_talent (talent_id)');
        $this->addSql('CREATE TABLE character (id INT NOT NULL, owner_id INT NOT NULL, name VARCHAR(255) NOT NULL, strength INT NOT NULL, agility INT NOT NULL, intellect INT NOT NULL, willpower INT NOT NULL, health INT NOT NULL, healing_rate INT NOT NULL, defense INT NOT NULL, perception INT NOT NULL, insanity INT NOT NULL, insanity_max INT NOT NULL, corruption INT NOT NULL, power INT NOT NULL, size INT NOT NULL, speed INT NOT NULL, level INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_937AB0347E3C61F9 ON character (owner_id)');
        $this->addSql('CREATE TABLE character_talent (character_id INT NOT NULL, talent_id INT NOT NULL, PRIMARY KEY(character_id, talent_id))');
        $this->addSql('CREATE INDEX IDX_B59BC1661136BE75 ON character_talent (character_id)');
        $this->addSql('CREATE INDEX IDX_B59BC16618777CEF ON character_talent (talent_id)');
        $this->addSql('CREATE TABLE character_spell (character_id INT NOT NULL, spell_id INT NOT NULL, PRIMARY KEY(character_id, spell_id))');
        $this->addSql('CREATE INDEX IDX_2EFC2AEF1136BE75 ON character_spell (character_id)');
        $this->addSql('CREATE INDEX IDX_2EFC2AEF479EC90D ON character_spell (spell_id)');
        $this->addSql('CREATE TABLE creature (id INT NOT NULL, name VARCHAR(255) NOT NULL, difficulty INT NOT NULL, size INT NOT NULL, spook VARCHAR(255) DEFAULT NULL, perception INT NOT NULL, sight VARCHAR(255) DEFAULT NULL, defense INT NOT NULL, strength INT NOT NULL, agility INT NOT NULL, intellect INT NOT NULL, willpower INT NOT NULL, health INT NOT NULL, speed INT NOT NULL, move_trait VARCHAR(255) DEFAULT NULL, immune VARCHAR(255) DEFAULT NULL, weakness VARCHAR(255) DEFAULT NULL, defense_trait VARCHAR(500) DEFAULT NULL, other_traits VARCHAR(1000) DEFAULT NULL, insanity INT NOT NULL, corruption INT NOT NULL, attack_options VARCHAR(2500) DEFAULT NULL, special_attacks VARCHAR(2500) DEFAULT NULL, special_actions VARCHAR(2500) DEFAULT NULL, end_of_round VARCHAR(2500) DEFAULT NULL, power INT NOT NULL, race VARCHAR(255) DEFAULT NULL, description VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE creature_spell (creature_id INT NOT NULL, spell_id INT NOT NULL, PRIMARY KEY(creature_id, spell_id))');
        $this->addSql('CREATE INDEX IDX_43AC9E7FF9AB048 ON creature_spell (creature_id)');
        $this->addSql('CREATE INDEX IDX_43AC9E7F479EC90D ON creature_spell (spell_id)');
        $this->addSql('CREATE TABLE creature_tag (creature_id INT NOT NULL, tag_id INT NOT NULL, PRIMARY KEY(creature_id, tag_id))');
        $this->addSql('CREATE INDEX IDX_10558C02F9AB048 ON creature_tag (creature_id)');
        $this->addSql('CREATE INDEX IDX_10558C02BAD26311 ON creature_tag (tag_id)');
        $this->addSql('CREATE TABLE level (id INT NOT NULL, number INT NOT NULL, name VARCHAR(255) NOT NULL, attributes VARCHAR(255) NOT NULL, characteristics VARCHAR(255) NOT NULL, skills VARCHAR(255) NOT NULL, magic VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE level_talent (level_id INT NOT NULL, talent_id INT NOT NULL, PRIMARY KEY(level_id, talent_id))');
        $this->addSql('CREATE INDEX IDX_6F6F63545FB14BA7 ON level_talent (level_id)');
        $this->addSql('CREATE INDEX IDX_6F6F635418777CEF ON level_talent (talent_id)');
        $this->addSql('CREATE TABLE path (id INT NOT NULL, name VARCHAR(255) NOT NULL, rank VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE path_talent (path_id INT NOT NULL, talent_id INT NOT NULL, PRIMARY KEY(path_id, talent_id))');
        $this->addSql('CREATE INDEX IDX_77479F8ED96C566B ON path_talent (path_id)');
        $this->addSql('CREATE INDEX IDX_77479F8E18777CEF ON path_talent (talent_id)');
        $this->addSql('CREATE TABLE spell_creature (spell_id INT NOT NULL, creature_id INT NOT NULL, PRIMARY KEY(spell_id, creature_id))');
        $this->addSql('CREATE INDEX IDX_3E0053FE479EC90D ON spell_creature (spell_id)');
        $this->addSql('CREATE INDEX IDX_3E0053FEF9AB048 ON spell_creature (creature_id)');
        $this->addSql('CREATE TABLE talent (id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(1000) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE talent_tag (talent_id INT NOT NULL, tag_id INT NOT NULL, PRIMARY KEY(talent_id, tag_id))');
        $this->addSql('CREATE INDEX IDX_58F0578518777CEF ON talent_tag (talent_id)');
        $this->addSql('CREATE INDEX IDX_58F05785BAD26311 ON talent_tag (tag_id)');
        $this->addSql('CREATE TABLE team (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE team_character (team_id INT NOT NULL, character_id INT NOT NULL, PRIMARY KEY(team_id, character_id))');
        $this->addSql('CREATE INDEX IDX_247FAED3296CD8AE ON team_character (team_id)');
        $this->addSql('CREATE INDEX IDX_247FAED31136BE75 ON team_character (character_id)');
        $this->addSql('CREATE TABLE team_creature (team_id INT NOT NULL, creature_id INT NOT NULL, PRIMARY KEY(team_id, creature_id))');
        $this->addSql('CREATE INDEX IDX_922EB68A296CD8AE ON team_creature (team_id)');
        $this->addSql('CREATE INDEX IDX_922EB68AF9AB048 ON team_creature (creature_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE user_team (user_id INT NOT NULL, team_id INT NOT NULL, PRIMARY KEY(user_id, team_id))');
        $this->addSql('CREATE INDEX IDX_BE61EAD6A76ED395 ON user_team (user_id)');
        $this->addSql('CREATE INDEX IDX_BE61EAD6296CD8AE ON user_team (team_id)');
        $this->addSql('ALTER TABLE ancestry ADD CONSTRAINT FK_63FAD02F440425BB FOREIGN KEY (level_four_id) REFERENCES level (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ancestry_talent ADD CONSTRAINT FK_EF36A03D89001A93 FOREIGN KEY (ancestry_id) REFERENCES ancestry (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ancestry_talent ADD CONSTRAINT FK_EF36A03D18777CEF FOREIGN KEY (talent_id) REFERENCES talent (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE character ADD CONSTRAINT FK_937AB0347E3C61F9 FOREIGN KEY (owner_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE character_talent ADD CONSTRAINT FK_B59BC1661136BE75 FOREIGN KEY (character_id) REFERENCES character (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE character_talent ADD CONSTRAINT FK_B59BC16618777CEF FOREIGN KEY (talent_id) REFERENCES talent (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE character_spell ADD CONSTRAINT FK_2EFC2AEF1136BE75 FOREIGN KEY (character_id) REFERENCES character (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE character_spell ADD CONSTRAINT FK_2EFC2AEF479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE creature_spell ADD CONSTRAINT FK_43AC9E7FF9AB048 FOREIGN KEY (creature_id) REFERENCES creature (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE creature_spell ADD CONSTRAINT FK_43AC9E7F479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE creature_tag ADD CONSTRAINT FK_10558C02F9AB048 FOREIGN KEY (creature_id) REFERENCES creature (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE creature_tag ADD CONSTRAINT FK_10558C02BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE level_talent ADD CONSTRAINT FK_6F6F63545FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE level_talent ADD CONSTRAINT FK_6F6F635418777CEF FOREIGN KEY (talent_id) REFERENCES talent (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE path_talent ADD CONSTRAINT FK_77479F8ED96C566B FOREIGN KEY (path_id) REFERENCES path (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE path_talent ADD CONSTRAINT FK_77479F8E18777CEF FOREIGN KEY (talent_id) REFERENCES talent (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE spell_creature ADD CONSTRAINT FK_3E0053FE479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE spell_creature ADD CONSTRAINT FK_3E0053FEF9AB048 FOREIGN KEY (creature_id) REFERENCES creature (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE talent_tag ADD CONSTRAINT FK_58F0578518777CEF FOREIGN KEY (talent_id) REFERENCES talent (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE talent_tag ADD CONSTRAINT FK_58F05785BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE team_character ADD CONSTRAINT FK_247FAED3296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE team_character ADD CONSTRAINT FK_247FAED31136BE75 FOREIGN KEY (character_id) REFERENCES character (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE team_creature ADD CONSTRAINT FK_922EB68A296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE team_creature ADD CONSTRAINT FK_922EB68AF9AB048 FOREIGN KEY (creature_id) REFERENCES creature (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_team ADD CONSTRAINT FK_BE61EAD6A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_team ADD CONSTRAINT FK_BE61EAD6296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE ancestry_talent DROP CONSTRAINT FK_EF36A03D89001A93');
        $this->addSql('ALTER TABLE character_talent DROP CONSTRAINT FK_B59BC1661136BE75');
        $this->addSql('ALTER TABLE character_spell DROP CONSTRAINT FK_2EFC2AEF1136BE75');
        $this->addSql('ALTER TABLE team_character DROP CONSTRAINT FK_247FAED31136BE75');
        $this->addSql('ALTER TABLE creature_spell DROP CONSTRAINT FK_43AC9E7FF9AB048');
        $this->addSql('ALTER TABLE creature_tag DROP CONSTRAINT FK_10558C02F9AB048');
        $this->addSql('ALTER TABLE spell_creature DROP CONSTRAINT FK_3E0053FEF9AB048');
        $this->addSql('ALTER TABLE team_creature DROP CONSTRAINT FK_922EB68AF9AB048');
        $this->addSql('ALTER TABLE ancestry DROP CONSTRAINT FK_63FAD02F440425BB');
        $this->addSql('ALTER TABLE level_talent DROP CONSTRAINT FK_6F6F63545FB14BA7');
        $this->addSql('ALTER TABLE path_talent DROP CONSTRAINT FK_77479F8ED96C566B');
        $this->addSql('ALTER TABLE ancestry_talent DROP CONSTRAINT FK_EF36A03D18777CEF');
        $this->addSql('ALTER TABLE character_talent DROP CONSTRAINT FK_B59BC16618777CEF');
        $this->addSql('ALTER TABLE level_talent DROP CONSTRAINT FK_6F6F635418777CEF');
        $this->addSql('ALTER TABLE path_talent DROP CONSTRAINT FK_77479F8E18777CEF');
        $this->addSql('ALTER TABLE talent_tag DROP CONSTRAINT FK_58F0578518777CEF');
        $this->addSql('ALTER TABLE team_character DROP CONSTRAINT FK_247FAED3296CD8AE');
        $this->addSql('ALTER TABLE team_creature DROP CONSTRAINT FK_922EB68A296CD8AE');
        $this->addSql('ALTER TABLE user_team DROP CONSTRAINT FK_BE61EAD6296CD8AE');
        $this->addSql('ALTER TABLE character DROP CONSTRAINT FK_937AB0347E3C61F9');
        $this->addSql('ALTER TABLE user_team DROP CONSTRAINT FK_BE61EAD6A76ED395');
        $this->addSql('DROP SEQUENCE ancestry_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE character_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE creature_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE level_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE path_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE talent_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE team_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE ancestry');
        $this->addSql('DROP TABLE ancestry_talent');
        $this->addSql('DROP TABLE character');
        $this->addSql('DROP TABLE character_talent');
        $this->addSql('DROP TABLE character_spell');
        $this->addSql('DROP TABLE creature');
        $this->addSql('DROP TABLE creature_spell');
        $this->addSql('DROP TABLE creature_tag');
        $this->addSql('DROP TABLE level');
        $this->addSql('DROP TABLE level_talent');
        $this->addSql('DROP TABLE path');
        $this->addSql('DROP TABLE path_talent');
        $this->addSql('DROP TABLE spell_creature');
        $this->addSql('DROP TABLE talent');
        $this->addSql('DROP TABLE talent_tag');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE team_character');
        $this->addSql('DROP TABLE team_creature');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE user_team');
    }
}

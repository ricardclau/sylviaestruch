<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121020175810 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE categorias_pintura (id INT AUTO_INCREMENT NOT NULL, title_ca VARCHAR(255) NOT NULL, title_es VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE categorias_teatro (id INT AUTO_INCREMENT NOT NULL, title_ca VARCHAR(255) NOT NULL, title_es VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE pinturas (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, foto1 VARCHAR(255) NOT NULL, foto2 VARCHAR(255) NOT NULL, foto3 VARCHAR(255) NOT NULL, foto4 VARCHAR(255) NOT NULL, foto5 VARCHAR(255) NOT NULL, foto6 VARCHAR(255) NOT NULL, mini_alignment VARCHAR(2) NOT NULL, INDEX IDX_578EF91A12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE teatros (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, foto1 VARCHAR(255) NOT NULL, foto2 VARCHAR(255) NOT NULL, foto3 VARCHAR(255) NOT NULL, mini_alignment VARCHAR(2) NOT NULL, INDEX IDX_E161374912469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE pinturas ADD CONSTRAINT FK_578EF91A12469DE2 FOREIGN KEY (category_id) REFERENCES categorias_pintura (id)");
        $this->addSql("ALTER TABLE teatros ADD CONSTRAINT FK_E161374912469DE2 FOREIGN KEY (category_id) REFERENCES categorias_teatro (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE pinturas DROP FOREIGN KEY FK_578EF91A12469DE2");
        $this->addSql("ALTER TABLE teatros DROP FOREIGN KEY FK_E161374912469DE2");
        $this->addSql("DROP TABLE categorias_pintura");
        $this->addSql("DROP TABLE categorias_teatro");
        $this->addSql("DROP TABLE pinturas");
        $this->addSql("DROP TABLE teatros");
    }
}

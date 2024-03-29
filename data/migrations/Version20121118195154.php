<?php

namespace Usuario\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121118195154 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "postgresql");
        
        $this->addSql("CREATE TABLE usuarios (id SERIAL NOT NULL, id_tipo_usuario INT DEFAULT NULL, matricula VARCHAR(128) NOT NULL, nombre_usuario VARCHAR(10) NOT NULL, contrasena VARCHAR(64) NOT NULL, nombres VARCHAR(255) NOT NULL, apellido_pat VARCHAR(128) NOT NULL, apellido_mat VARCHAR(128) NOT NULL, rut VARCHAR(64) NOT NULL, email VARCHAR(64) NOT NULL, oficina INT NOT NULL, anexo INT NOT NULL, telefono INT NOT NULL, estado VARCHAR(64) NOT NULL, PRIMARY KEY(id))");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_EF687F215DF1885 ON usuarios (matricula)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_EF687F2D67CF11D ON usuarios (nombre_usuario)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_EF687F2AD145DBA ON usuarios (rut)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_EF687F2E7927C74 ON usuarios (email)");
        $this->addSql("CREATE INDEX IDX_EF687F2125DE48F ON usuarios (id_tipo_usuario)");
        $this->addSql("CREATE TABLE administradores (id SERIAL NOT NULL, id_usuario INT DEFAULT NULL, matricula VARCHAR(128) NOT NULL, nombre_usuario VARCHAR(10) NOT NULL, contrasena VARCHAR(64) NOT NULL, nombres VARCHAR(255) NOT NULL, apellido_pat VARCHAR(128) NOT NULL, apellido_mat VARCHAR(128) NOT NULL, rut VARCHAR(64) NOT NULL, email VARCHAR(64) NOT NULL, oficina INT NOT NULL, anexo INT NOT NULL, telefono INT NOT NULL, estado VARCHAR(64) NOT NULL, PRIMARY KEY(id))");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_BA7CABE615DF1885 ON administradores (matricula)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_BA7CABE6D67CF11D ON administradores (nombre_usuario)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_BA7CABE6AD145DBA ON administradores (rut)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_BA7CABE6E7927C74 ON administradores (email)");
        $this->addSql("CREATE INDEX IDX_BA7CABE6FCF8192D ON administradores (id_usuario)");
        $this->addSql("CREATE TABLE docentes (id SERIAL NOT NULL, id_usuario INT DEFAULT NULL, matricula VARCHAR(128) NOT NULL, nombre_usuario VARCHAR(10) NOT NULL, contrasena VARCHAR(64) NOT NULL, nombres VARCHAR(255) NOT NULL, apellido_pat VARCHAR(128) NOT NULL, apellido_mat VARCHAR(128) NOT NULL, rut VARCHAR(64) NOT NULL, email VARCHAR(64) NOT NULL, oficina INT NOT NULL, anexo INT NOT NULL, telefono INT NOT NULL, estado VARCHAR(64) NOT NULL, fecha_nac DATE NOT NULL, PRIMARY KEY(id))");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_CA48373515DF1885 ON docentes (matricula)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_CA483735D67CF11D ON docentes (nombre_usuario)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_CA483735AD145DBA ON docentes (rut)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_CA483735E7927C74 ON docentes (email)");
        $this->addSql("CREATE INDEX IDX_CA483735FCF8192D ON docentes (id_usuario)");
        $this->addSql("CREATE TABLE secretarios (id SERIAL NOT NULL, id_usuario INT DEFAULT NULL, matricula VARCHAR(128) NOT NULL, nombre_usuario VARCHAR(10) NOT NULL, contrasena VARCHAR(64) NOT NULL, nombres VARCHAR(255) NOT NULL, apellido_pat VARCHAR(128) NOT NULL, apellido_mat VARCHAR(128) NOT NULL, rut VARCHAR(64) NOT NULL, email VARCHAR(64) NOT NULL, oficina INT NOT NULL, anexo INT NOT NULL, telefono INT NOT NULL, estado VARCHAR(64) NOT NULL, fecha_nac DATE NOT NULL, PRIMARY KEY(id))");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_F024DC9815DF1885 ON secretarios (matricula)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_F024DC98D67CF11D ON secretarios (nombre_usuario)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_F024DC98AD145DBA ON secretarios (rut)");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_F024DC98E7927C74 ON secretarios (email)");
        $this->addSql("CREATE INDEX IDX_F024DC98FCF8192D ON secretarios (id_usuario)");
        $this->addSql("CREATE TABLE tipos_usuarios (id SERIAL NOT NULL, nombre VARCHAR(10) NOT NULL, descripcion TEXT DEFAULT NULL, PRIMARY KEY(id))");
        $this->addSql("CREATE TABLE asignaturas (id SERIAL NOT NULL, id_seccion INT DEFAULT NULL, nombre VARCHAR(64) NOT NULL, descripcion TEXT DEFAULT NULL, horas_teoria NUMERIC(9, 1) NOT NULL, horas_practica NUMERIC(9, 1) NOT NULL, estado VARCHAR(64) NOT NULL, PRIMARY KEY(id))");
        $this->addSql("CREATE INDEX IDX_6740636A3E20BCB9 ON asignaturas (id_seccion)");
        $this->addSql("CREATE TABLE secciones (id SERIAL NOT NULL, numero INT NOT NULL, anio INT NOT NULL, semestre INT NOT NULL, PRIMARY KEY(id))");
        $this->addSql("ALTER TABLE usuarios ADD CONSTRAINT FK_EF687F2125DE48F FOREIGN KEY (id_tipo_usuario) REFERENCES tipos_usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE");
        $this->addSql("ALTER TABLE administradores ADD CONSTRAINT FK_BA7CABE6FCF8192D FOREIGN KEY (id_usuario) REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE");
        $this->addSql("ALTER TABLE docentes ADD CONSTRAINT FK_CA483735FCF8192D FOREIGN KEY (id_usuario) REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE");
        $this->addSql("ALTER TABLE secretarios ADD CONSTRAINT FK_F024DC98FCF8192D FOREIGN KEY (id_usuario) REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE");
        $this->addSql("ALTER TABLE asignaturas ADD CONSTRAINT FK_6740636A3E20BCB9 FOREIGN KEY (id_seccion) REFERENCES secciones (id) NOT DEFERRABLE INITIALLY IMMEDIATE");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "postgresql");
        
        $this->addSql("ALTER TABLE administradores DROP CONSTRAINT FK_BA7CABE6FCF8192D");
        $this->addSql("ALTER TABLE docentes DROP CONSTRAINT FK_CA483735FCF8192D");
        $this->addSql("ALTER TABLE secretarios DROP CONSTRAINT FK_F024DC98FCF8192D");
        $this->addSql("ALTER TABLE usuarios DROP CONSTRAINT FK_EF687F2125DE48F");
        $this->addSql("ALTER TABLE asignaturas DROP CONSTRAINT FK_6740636A3E20BCB9");
        $this->addSql("DROP TABLE usuarios");
        $this->addSql("DROP TABLE administradores");
        $this->addSql("DROP TABLE docentes");
        $this->addSql("DROP TABLE secretarios");
        $this->addSql("DROP TABLE tipos_usuarios");
        $this->addSql("DROP TABLE asignaturas");
        $this->addSql("DROP TABLE secciones");
    }
}

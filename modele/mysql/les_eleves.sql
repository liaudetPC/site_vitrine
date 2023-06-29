-- DDL + DML : création des données
DROP database if exists BD_eleves_mjv_alt; 

CREATE database BD_eleves_mjv_alt;
USE BD_eleves_mjv_alt;

CREATE table eleves(
   id integer auto_increment,
   nom varchar(30) not null,
   img varchar(20) not null,
   primary key(id)
) engine innoDB;

INSERT INTO eleves VALUES
   (null, "toto", "toto.png"),
   (null, "titi", "titi.png"),
   (null, "tata", "tata.png");

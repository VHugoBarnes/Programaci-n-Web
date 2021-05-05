CREATE DATABASE claseej;

use claseej;

CREATE TABLE IF NOT EXISTS visitantes(
    id          int auto_increment not null,
    nombre      varchar(255) not null,
    apellidos   varchar(255) not null,
    direccion   varchar(255) not null,
    email       varchar(255) not null,
    telefono    varchar(20) not null,
    sexo        varchar(20) not null,

    CONSTRAINT pk_visitantes PRIMARY KEY(id)
);
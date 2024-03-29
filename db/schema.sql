CREATE TABLE CLIENTE(
    id integer auto_increment primary key,
    nome varchar(100),
    cpf varchar(20),
    email varchar(50),
    telefone varchar(20),
    celular varchar(20),
    data_nascimento date,
    status varchar(10),
    data_cadastro timestamp default CURRENT_TIMESTAMP,
    data_alteracao timestamp default CURRENT_TIMESTAMP
);

CREATE TABLE FORNECEDOR(
    id integer auto_increment primary key,
    nome varchar(100),
    cnpj varchar(20),
    email varchar(50),
    site varchar(50),
    telefone varchar(20),
    celular varchar(20),
    contato varchar(30),
    data_abertura date,
    status varchar(10),
    data_cadastro timestamp default CURRENT_TIMESTAMP,
    data_alteracao timestamp default CURRENT_TIMESTAMP
);
CREATE TABLE USUARIO(
    id integer auto_increment primary key,
    nome varchar(100),
    email varchar(50),
    senha varchar(20),
    celular varchar(20),
    acesso varchar(10),
    status varchar(10),
    data_cadastro timestamp default CURRENT_TIMESTAMP
);
CREATE TABLE PRODUTOS (
       PRO_ID               INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
       PRO_NOME             VARCHAR(40),
       PRO_VALOR            NUMERIC(10,2),
       PRO_FOTO1            VARCHAR(200),
       PRO_FOTO2            VARCHAR(200),
       PRO_FOTO3            VARCHAR(200)
);

CREATE TABLE VENDAS (
       VEN_ID               INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
       VEN_DATA             DATE,
       VEN_TOTAL            NUMERIC(10,2),
       VEN_OBS              VARCHAR(400),
       VEN_STATUS           VARCHAR(20),
       CLI_ID               INTEGER NOT NULL,
        FOREIGN KEY (CLI_ID) REFERENCES CLIENTE (id)
);

CREATE TABLE VENDAS_PRODUTOS (
       PRO_ID               INTEGER NOT NULL UNIQUE,
       VEN_ID               INTEGER NOT NULL UNIQUE,
       VEP_QTDE             NUMERIC(10,2),
       VEP_VLRUNITARIO      NUMERIC(10,2),
    PRIMARY KEY (PRO_ID, VEN_ID),
    FOREIGN KEY (VEN_ID) REFERENCES VENDAS (VEN_ID),
    FOREIGN KEY (PRO_ID) REFERENCES PRODUTOS (PRO_ID)
);


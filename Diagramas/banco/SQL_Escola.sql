-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.


CREATE TABLE Professor (
RP INTEGER PRIMARY KEY,
RPF INTEGER
);

CREATE TABLE Pessoa (
RPF INTEGER PRIMARY KEY,
primeiro_nome VARCHAR(30) not null,
Sobrenome VARCHAR(255),
nascimento DATE,
CPF varchar(14) unique,
RG VARCHAR(20),
Senha VARCHAR(20) not null,
status TINYINT not null,
Estado CHAR(2),
Rua VARCHAR(200),
CEP CHAR(9),
Bairro VARCHAR(50),
Cidade VARCHAR(60),
foto VARCHAR(20)
);

CREATE TABLE FazParte (
RM INTEGER,
RC INTEGER,
dia_semana VARCHAR(30) not null,
turno VARCHAR(30) not null,
horario_inicial TIME not null,
horario_final TIME not null,
turma VARCHAR(30) not null,
Data_inicio DATE,
Data_Final DATE,
PRIMARY KEY(RM,RC,dia_semana)
);

CREATE TABLE Curso (
RC INTEGER PRIMARY KEY,
Status TINYINT not null,
titulo VARCHAR(60) not null,
Descricao VARCHAR(250)
);

CREATE TABLE Matricula (
RA INTEGER,
RC INTEGER,
Data DATE not null,
Status TINYINT not null,
PRIMARY KEY(RA,RC),
FOREIGN KEY(RC) REFERENCES Curso (RC)
);

CREATE TABLE Aluno (
RA INTEGER PRIMARY KEY,
RPF INTEGER,
Qualificacoes VARCHAR(250),
FOREIGN KEY(RPF) REFERENCES Pessoa (RPF)
);

CREATE TABLE Frequenta (
RM INTEGER,
RA INTEGER,
Data DATE not null,
Presenca TINYINT not null,
PRIMARY KEY(RM,RA),
FOREIGN KEY(RA) REFERENCES Aluno (RA)
);

CREATE TABLE Materia (
RM INTEGER PRIMARY KEY,
RP INTEGER,
ExtraClasse VARCHAR(250),
Material VARCHAR(250),
Bibliografia VARCHAR(250),
Titulo VARCHAR(50) not null,
Apresentacao VARCHAR(250),
Ementa VARCHAR(250),
Objetivo VARCHAR(250),
Status TINYINT,
Avaliacoes VARCHAR(250),
FOREIGN KEY(RP) REFERENCES Professor (RP)
);

CREATE TABLE Avaliado (
RA INTEGER,
RM INTEGER,
Data DATE not null,
Nota NUMERIC(2,2) not null,
Tipo VARCHAR(30) not null, 
PRIMARY KEY(RA,RM),
FOREIGN KEY(RA) REFERENCES Aluno (RA),
FOREIGN KEY(RM) REFERENCES Materia (RM),
constraint CheckTipo check(Tipo = 'normal' or Tipo = 'final')
);

CREATE TABLE Administrador (
RAD INTEGER PRIMARY KEY,
RPF INTEGER,
FOREIGN KEY(RPF) REFERENCES Pessoa (RPF)
);

CREATE TABLE Aviso (
RA INTEGER,
RAD INTEGER,
numero INTEGER NOT NULL,
Data DATE NOT NULL,
aviso_text VARCHAR(255) NOT NULL,
PRIMARY KEY(RA,RAD,numero),
FOREIGN KEY(RA) REFERENCES Aluno (RA),
FOREIGN KEY(RAD) REFERENCES Administrador (RAD)
);

CREATE TABLE email (
RPF INTEGER PRIMARY KEY,
email VARCHAR(100) NOT NULL,
FOREIGN KEY(RPF) REFERENCES Pessoa (RPF)
);

CREATE TABLE Telefone (
RPF INTEGER PRIMARY KEY,
tipo VARCHAR(20) NOT NULL,
numero varchar(14) NOT NULL,
FOREIGN KEY(RPF) REFERENCES Pessoa (RPF)
);

ALTER TABLE Professor ADD FOREIGN KEY(RPF) REFERENCES Pessoa (RPF);
ALTER TABLE FazParte ADD FOREIGN KEY(RM) REFERENCES Materia (RM);
ALTER TABLE FazParte ADD FOREIGN KEY(RC) REFERENCES Curso (RC);
ALTER TABLE Matricula ADD FOREIGN KEY(RA) REFERENCES Aluno (RA);
ALTER TABLE Frequenta ADD FOREIGN KEY(RM) REFERENCES Materia (RM);


/* Inserts Administrador */

insert into Pessoa values(1,'Manuel','Saldoso','1960/1/1','444.885.454-79','454548787','1',1,'SP','Das Palmeiras Verdes','54548-784','Dos Lirios Andantes','Americana','');

insert into Administrador values(1,1)




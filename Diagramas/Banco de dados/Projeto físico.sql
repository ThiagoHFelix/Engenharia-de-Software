
CREATE TABLE Pessoa (
  CPF char(14) NOT NULL,
  Nome varchar(250) DEFAULT NULL,
  Data_nasc date DEFAULT NULL,
  RG char(11) DEFAULT NULL,
  numero_resid integer DEFAULT NULL,
  email varchar(100) NOT NULL,
  Rua varchar(150) DEFAULT NULL,
  CEP char(9) DEFAULT NULL,
  Bairro varchar(150) DEFAULT NULL,
  Cidade varchar(150) DEFAULT NULL,
  Estado char(2) DEFAULT NULL,
  sexo tinyint(4) NOT NULL,
  img blob,
  Senha VARCHAR(20) NOT NULL ,
  status TINYINT ,
  PRIMARY KEY (CPF),
  UNIQUE KEY email (email)
) ;


CREATE TABLE administrador (
  senha varchar(20) NOT NULL,
  cpf char(14) DEFAULT NULL,
  KEY fk_adm (cpf),
  CONSTRAINT fk_adm FOREIGN KEY (cpf) REFERENCES pessoa (CPF)
) ;


CREATE TABLE cliente (
  ID int(14) NOT NULL AUTO_INCREMENT,
  CPF char(14) NOT NULL,
  senha varchar(20) NOT NULL,
  status char(2) DEFAULT NULL,
  Patologias varchar(250) DEFAULT NULL,
  Tratamento varchar(250) DEFAULT NULL,
  Gestante tinyint(1) NOT NULL,
  Alergia varchar(250) DEFAULT NULL,
  Cardiaco tinyint(1) NOT NULL,
  Obs varchar(250) DEFAULT NULL,
  Hipertenso tinyint(1) NOT NULL,
  Periodo_Mes_Final date DEFAULT NULL,
  Periodo_Mes_Inicial date DEFAULT NULL,
  lactante tinyint(1) DEFAULT NULL,
  PRIMARY KEY (ID),
  KEY fk_cpf (CPF),
  CONSTRAINT fk_cpf FOREIGN KEY (CPF) REFERENCES pessoa (CPF)
) ;




CREATE TABLE consulta (
  ID_Cliente int(11) DEFAULT NULL,
  ID int(11) NOT NULL AUTO_INCREMENT,
  Data date DEFAULT NULL,
  Status char(1) DEFAULT NULL,
  Servico varchar(250) DEFAULT NULL,
  Hora time DEFAULT NULL,
  PRIMARY KEY (ID),
  KEY ID_Cliente (ID_Cliente),
  CONSTRAINT consulta_ibfk_1 FOREIGN KEY (ID_Cliente) REFERENCES cliente(ID)
) ;




CREATE TABLE diagnostico (
  ID_Cliente int(11) DEFAULT NULL,
  ID int(11) NOT NULL AUTO_INCREMENT,
  Textura varchar(250) DEFAULT NULL,
  Forma varchar(250) DEFAULT NULL,
  Fibra varchar(250) DEFAULT NULL,
  Cuticula varchar(250) DEFAULT NULL,
  Queda varchar(250) DEFAULT NULL,
  Emocional varchar(250) DEFAULT NULL,
  CatacterFisi varchar(250) DEFAULT NULL,
  Funcionario varchar(250) DEFAULT NULL,
  Cor varchar(250) DEFAULT NULL,
  data date DEFAULT NULL,
  PRIMARY KEY (ID),
  KEY ID_Cliente (ID_Cliente),
  CONSTRAINT diagnostico_ibfk_1 FOREIGN KEY (ID_Cliente) REFERENCES cliente (ID)
) ;



CREATE TABLE procedimento (
  ID_Cliente int(11) DEFAULT NULL,
  ID int(11) NOT NULL AUTO_INCREMENT,
  Marca varchar(250) DEFAULT NULL,
  Tipo_OX varchar(250) DEFAULT NULL,
  Resultado varchar(250) DEFAULT NULL,
  Nome_pro varchar(250) DEFAULT NULL,
  Pontuacao varchar(250) DEFAULT NULL,
  Tipo varchar(250) DEFAULT NULL,
  data date DEFAULT NULL,
  PRIMARY KEY (ID),
  KEY ID_Cliente (ID_Cliente),
  CONSTRAINT procedimento_ibfk_1 FOREIGN KEY (ID_Cliente) REFERENCES cliente (ID)
) ;


CREATE TABLE telefone(
  CPF char(14) NOT NULL,
  Telefone varchar(14) NOT NULL,
  tipo VARCHAR(20),
  PRIMARY KEY (CPF,Telefone),
  CONSTRAINT telefone_ibfk_1 FOREIGN KEY (CPF) REFERENCES pessoa (CPF)
) ;


-- Adição de novas tabelas

CREATE TABLE Professor (
RP INTEGER PRIMARY KEY AUTO_INCREMENT,
CPF char(14),
FOREIGN KEY (CPF) REFERENCES pessoa (CPF)
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
RA INTEGER PRIMARY KEY AUTO_INCREMENT,
CPF CHAR(14) not null,
Qualificacoes VARCHAR(250),
FOREIGN KEY(CPF) REFERENCES Pessoa (CPF)
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
CPF CHAR(14),
ExtraClasse VARCHAR(250),
Material VARCHAR(250),
Bibliografia VARCHAR(250),
Titulo VARCHAR(50) not null,
Apresentacao VARCHAR(250),
Ementa VARCHAR(250),
Objetivo VARCHAR(250),
Status TINYINT,
Avaliacoes VARCHAR(250),
FOREIGN KEY(CPF) REFERENCES pessoa (CPF)
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


CREATE TABLE AVISO(

  mensagem varchar(255) PRIMARY KEY,
  type char(1),
  data date not null

);


ALTER TABLE FazParte ADD FOREIGN KEY(RM) REFERENCES Materia (RM);
ALTER TABLE FazParte ADD FOREIGN KEY(RC) REFERENCES Curso (RC);
ALTER TABLE Matricula ADD FOREIGN KEY(RA) REFERENCES Aluno (RA);
ALTER TABLE Frequenta ADD FOREIGN KEY(RM) REFERENCES Materia (RM);





--- insert into pessoa (CPF,email,sexo,senha) values ('449.405.618-95','thiagoacdc12@gmail.com',1,'senha')
--- insert into telefone values ('449.405.618-95','(19)3467-1053','Residencia')

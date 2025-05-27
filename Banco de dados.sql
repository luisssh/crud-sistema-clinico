CREATE TABLE consulta (
  id_consulta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  paciente_id_paciente INTEGER UNSIGNED NOT NULL,
  medico_id_medico INTEGER UNSIGNED NOT NULL,
  data_consulta DATE NULL,
  hora_consulta TIME NULL,
  descricao_consulta TEXT NULL,
  PRIMARY KEY(id_consulta),
  INDEX consulta_FKIndex1(medico_id_medico),
  INDEX consulta_FKIndex2(paciente_id_paciente)
);

CREATE TABLE medico (
  id_medico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_medico VARCHAR(100) NULL,
  crm_medico VARCHAR(10) NULL,
  especialidade VARCHAR(20) NULL,
  PRIMARY KEY(id_medico)
);

CREATE TABLE paciente (
  id_paciente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_paciente VARCHAR(100) NULL,
  cpf_paciente VARCHAR(14) NULL,
  dt_nasc_paciente DATE NULL,
  sexo_paciente CHAR(1) NULL,
  fone_paciente VARCHAR(20) NULL,
  email_paciente VARCHAR(100) NULL,
  endereco_paciente VARCHAR(100) NULL,
  PRIMARY KEY(id_paciente)
);

CREATE TABLE exame (
  id_exame INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  paciente_id_paciente INTEGER UNSIGNED NOT NULL,
  medico_id_medico INTEGER UNSIGNED NOT NULL,
  tipo_exame VARCHAR(100) NOT NULL,
  data_exame DATE NULL,
  hora_exame TIME NULL,
  resultado_exame TEXT NULL,
  PRIMARY KEY (id_exame),
  INDEX exame_FKIndex1 (paciente_id_paciente),
  INDEX exame_FKIndex2 (medico_id_medico),
  CONSTRAINT FK_exame_paciente FOREIGN KEY (paciente_id_paciente) 
    REFERENCES paciente (id_paciente) 
    ON DELETE SET NULL,
  CONSTRAINT FK_exame_medico FOREIGN KEY (medico_id_medico) 
    REFERENCES medico (id_medico) 
    ON DELETE SET NULL
);


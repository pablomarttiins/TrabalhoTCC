-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema maxfitt
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema maxfitt
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `maxfitt` DEFAULT CHARACTER SET utf8 ;
USE `maxfitt` ;

-- -----------------------------------------------------
-- Table `maxfitt`.`enderecoaluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`enderecoaluno` (
  `codEnderecoAl` INT(11) NOT NULL AUTO_INCREMENT,
  `cidadeAluno` VARCHAR(45) NULL DEFAULT NULL,
  `estadoAluno` VARCHAR(2) NULL DEFAULT NULL,
  `ruaAluno` VARCHAR(45) NULL DEFAULT NULL,
  `bairroAluno` VARCHAR(45) NULL DEFAULT NULL,
  `numeroEndAluno` VARCHAR(45) NULL DEFAULT NULL,
  `cepAluno` VARCHAR(14) NULL DEFAULT NULL,
  PRIMARY KEY (`codEnderecoAl`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`aluno` (
  `codAluno` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeAluno` VARCHAR(50) NOT NULL,
  `sobrenomeAluno` VARCHAR(50) NOT NULL,
  `sexoAluno` CHAR(1) NULL DEFAULT NULL,
  `emailAluno` VARCHAR(80) NOT NULL,
  `CPF` DECIMAL(11,0) NULL DEFAULT NULL,
  `RG` DECIMAL(8,0) NULL DEFAULT NULL,
  `codEnderecoAl` INT(11) NOT NULL,
  PRIMARY KEY (`codAluno`),
  UNIQUE INDEX `emailAluno_UNIQUE` (`emailAluno` ASC),
  UNIQUE INDEX `CPF_UNIQUE` (`CPF` ASC),
  UNIQUE INDEX `RG_UNIQUE` (`RG` ASC),
  INDEX `fk_ALUNO_ENDERECOALUNO1_idx` (`codEnderecoAl` ASC),
  CONSTRAINT `fk_ALUNO_ENDERECOALUNO1`
    FOREIGN KEY (`codEnderecoAl`)
    REFERENCES `maxfitt`.`enderecoaluno` (`codEnderecoAl`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`objetivotipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`objetivotipo` (
  `codObjetivoTipo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  `nivel` CHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`codObjetivoTipo`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`aluno_objetivotipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`aluno_objetivotipo` (
  `codAluno` INT(11) NOT NULL,
  `codObjetivoTipo` INT(11) NOT NULL,
  PRIMARY KEY (`codAluno`, `codObjetivoTipo`),
  INDEX `fk_ALUNO_has_OBJETIVOTIPO_OBJETIVOTIPO1_idx` (`codObjetivoTipo` ASC),
  INDEX `fk_ALUNO_has_OBJETIVOTIPO_ALUNO1_idx` (`codAluno` ASC),
  CONSTRAINT `fk_ALUNO_has_OBJETIVOTIPO_ALUNO1`
    FOREIGN KEY (`codAluno`)
    REFERENCES `maxfitt`.`aluno` (`codAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ALUNO_has_OBJETIVOTIPO_OBJETIVOTIPO1`
    FOREIGN KEY (`codObjetivoTipo`)
    REFERENCES `maxfitt`.`objetivotipo` (`codObjetivoTipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`avaliacao` (
  `codAvaliacao` INT(11) NOT NULL AUTO_INCREMENT,
  `circunferenciaTricepsDireitoContraido` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaTricepsDireitoAlongado` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaTricepsEsquerdoContraido` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaTricepsEsquerdoAlongado` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaBicepsDireitoContraido` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaBicepsDireitoAlongado` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaBicepsEsquerdoContraido` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaBicepsEsquerdoAlongado` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaPeito` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaCoxaDireita` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaCoxaEsquerda` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaPanturrilhaDireita` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaPanturrilhaEsquerda` VARCHAR(45) NULL DEFAULT NULL,
  `circunferenciaGluteo` VARCHAR(45) NULL DEFAULT NULL,
  `percentGordura` DECIMAL(10,0) NULL DEFAULT NULL,
  `peso` DECIMAL(45,0) NULL DEFAULT NULL,
  `dataAvaliacao` DATE NULL DEFAULT NULL,
  `codAluno` INT(11) NOT NULL,
  PRIMARY KEY (`codAvaliacao`),
  INDEX `fk_AVALIACAO_ALUNO1_idx` (`codAluno` ASC),
  CONSTRAINT `fk_AVALIACAO_ALUNO1`
    FOREIGN KEY (`codAluno`)
    REFERENCES `maxfitt`.`aluno` (`codAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`ci_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`ci_sessions` (
  `id_sessao` VARCHAR(40) NOT NULL DEFAULT '0',
  `endereco_ip` VARCHAR(16) NOT NULL DEFAULT '0',
  `user_agent` VARCHAR(50) NOT NULL,
  `ultima_atividade` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_sessao`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`enderecoeducador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`enderecoeducador` (
  `codEnderecoEd` INT(11) NOT NULL AUTO_INCREMENT,
  `cidadeEducador` VARCHAR(45) NULL DEFAULT NULL,
  `estadoEducador` VARCHAR(2) NULL DEFAULT NULL,
  `bairroEducador` VARCHAR(45) NULL DEFAULT NULL,
  `numeroEndEducador` VARCHAR(45) NULL DEFAULT NULL,
  `cepEducador` VARCHAR(8) NULL DEFAULT NULL,
  PRIMARY KEY (`codEnderecoEd`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`educadorfisico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`educadorfisico` (
  `codEducador` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeEducador` VARCHAR(50) NOT NULL,
  `sobrenomeEducador` VARCHAR(50) NOT NULL,
  `sexoEducador` CHAR(1) NULL DEFAULT NULL,
  `emailEducador` VARCHAR(80) NOT NULL,
  `CPF` DECIMAL(11,0) NULL DEFAULT NULL,
  `RG` DECIMAL(8,0) NULL DEFAULT NULL,
  `numeroCref` VARCHAR(40) NOT NULL,
  `estadoRegistroCref` VARCHAR(2) NOT NULL,
  `statusCref` TINYINT(1) NULL DEFAULT NULL,
  `codEnderecoEd` INT(11) NOT NULL,
  PRIMARY KEY (`codEducador`),
  UNIQUE INDEX `emailEducador_UNIQUE` (`emailEducador` ASC),
  UNIQUE INDEX `numeroCref_UNIQUE` (`numeroCref` ASC),
  INDEX `fk_EDUCADORFISICO_ENDERECOEDUCADOR1_idx` (`codEnderecoEd` ASC),
  CONSTRAINT `fk_EDUCADORFISICO_ENDERECOEDUCADOR1`
    FOREIGN KEY (`codEnderecoEd`)
    REFERENCES `maxfitt`.`enderecoeducador` (`codEnderecoEd`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`musculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`musculo` (
  `codMusculo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codMusculo`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`exercicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`exercicio` (
  `codExercicio` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  `codMusculo` INT(11) NOT NULL,
  PRIMARY KEY (`codExercicio`),
  INDEX `fk_EXERCICIO_MUSCULO1_idx` (`codMusculo` ASC),
  CONSTRAINT `fk_EXERCICIO_MUSCULO1`
    FOREIGN KEY (`codMusculo`)
    REFERENCES `maxfitt`.`musculo` (`codMusculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`fichatreino`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`fichatreino` (
  `codFichaTreino` INT(11) NOT NULL AUTO_INCREMENT,
  `tempoUtil` VARCHAR(45) NULL DEFAULT NULL,
  `codObjetivoTipo` INT(11) NOT NULL,
  `codEducador` INT(11) NOT NULL,
  PRIMARY KEY (`codFichaTreino`),
  INDEX `fk_FICHATREINO_OBJETIVOTIPO1_idx` (`codObjetivoTipo` ASC),
  INDEX `fk_FICHATREINO_EDUCADORFISICO1_idx` (`codEducador` ASC),
  CONSTRAINT `fk_FICHATREINO_EDUCADORFISICO1`
    FOREIGN KEY (`codEducador`)
    REFERENCES `maxfitt`.`educadorfisico` (`codEducador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FICHATREINO_OBJETIVOTIPO1`
    FOREIGN KEY (`codObjetivoTipo`)
    REFERENCES `maxfitt`.`objetivotipo` (`codObjetivoTipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 28
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`grupo` (
  `codGrupo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoGrupo` VARCHAR(45) NULL DEFAULT NULL,
  `codFichaTreino` INT(11) NOT NULL,
  PRIMARY KEY (`codGrupo`),
  INDEX `fk_GRUPO_FICHATREINO1_idx` (`codFichaTreino` ASC),
  CONSTRAINT `fk_GRUPO_FICHATREINO1`
    FOREIGN KEY (`codFichaTreino`)
    REFERENCES `maxfitt`.`fichatreino` (`codFichaTreino`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`grupo_exercicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`grupo_exercicio` (
  `codGrupo` INT(11) NOT NULL,
  `codExercicio` INT(11) NOT NULL,
  `serie` DECIMAL(10,0) NOT NULL,
  `repeticao` DECIMAL(10,0) NOT NULL,
  `tempoIntervalo` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`codGrupo`, `codExercicio`),
  INDEX `fk_grupo_has_exercicio_exercicio2_idx` (`codExercicio` ASC),
  INDEX `fk_grupo_has_exercicio_grupo2_idx` (`codGrupo` ASC),
  CONSTRAINT `fk_grupo_has_exercicio_exercicio2`
    FOREIGN KEY (`codExercicio`)
    REFERENCES `maxfitt`.`exercicio` (`codExercicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupo_has_exercicio_grupo2`
    FOREIGN KEY (`codGrupo`)
    REFERENCES `maxfitt`.`grupo` (`codGrupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`tipotelefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`tipotelefone` (
  `codTipoTelefone` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`codTipoTelefone`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`telefonealuno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`telefonealuno` (
  `codTelefoneAl` INT(11) NOT NULL AUTO_INCREMENT,
  `numeroTelefone` DECIMAL(11,0) NULL DEFAULT NULL,
  `codAluno` INT(11) NOT NULL,
  `codTipoTelefone` INT(11) NOT NULL,
  PRIMARY KEY (`codTelefoneAl`),
  INDEX `fk_TELEFONEALUNO_ALUNO_idx` (`codAluno` ASC),
  INDEX `fk_TELEFONEALUNO_TIPOTELEFONE1_idx` (`codTipoTelefone` ASC),
  CONSTRAINT `fk_TELEFONEALUNO_ALUNO`
    FOREIGN KEY (`codAluno`)
    REFERENCES `maxfitt`.`aluno` (`codAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TELEFONEALUNO_TIPOTELEFONE1`
    FOREIGN KEY (`codTipoTelefone`)
    REFERENCES `maxfitt`.`tipotelefone` (`codTipoTelefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`telefoneeducador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`telefoneeducador` (
  `codTelefoneEd` INT(11) NOT NULL AUTO_INCREMENT,
  `numeroTelefone` VARCHAR(45) NULL DEFAULT NULL,
  `codEducador` INT(11) NOT NULL,
  `codTipoTelefone` INT(11) NOT NULL,
  PRIMARY KEY (`codTelefoneEd`),
  INDEX `fk_TELEFONEEDUCADOR_EDUCADORFISICO1_idx` (`codEducador` ASC),
  INDEX `fk_TELEFONEEDUCADOR_TIPOTELEFONE1_idx` (`codTipoTelefone` ASC),
  CONSTRAINT `fk_TELEFONEEDUCADOR_EDUCADORFISICO1`
    FOREIGN KEY (`codEducador`)
    REFERENCES `maxfitt`.`educadorfisico` (`codEducador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TELEFONEEDUCADOR_TIPOTELEFONE1`
    FOREIGN KEY (`codTipoTelefone`)
    REFERENCES `maxfitt`.`tipotelefone` (`codTipoTelefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maxfitt`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`administrador` (
  `codAdm` INT NOT NULL AUTO_INCREMENT,
  `nomeAdm` VARCHAR(45) NULL,
  `emailAdm` VARCHAR(45) NULL,
  PRIMARY KEY (`codAdm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `maxfitt`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `maxfitt`.`usuario` (
  `codUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `status` INT(11) NULL DEFAULT NULL,
  `nivel` INT(11) NULL DEFAULT NULL,
  `codEducador` INT(11) NULL DEFAULT NULL,
  `codAluno` INT(11) NULL DEFAULT NULL,
  `codAdm` INT NOT NULL,
  PRIMARY KEY (`codUsuario`),
  INDEX `fk_USUARIO_educadorfisico1_idx` (`codEducador` ASC),
  INDEX `fk_USUARIO_aluno1_idx` (`codAluno` ASC),
  INDEX `fk_usuario_administrador1_idx` (`codAdm` ASC),
  CONSTRAINT `fk_USUARIO_aluno1`
    FOREIGN KEY (`codAluno`)
    REFERENCES `maxfitt`.`aluno` (`codAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIO_educadorfisico1`
    FOREIGN KEY (`codEducador`)
    REFERENCES `maxfitt`.`educadorfisico` (`codEducador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_administrador1`
    FOREIGN KEY (`codAdm`)
    REFERENCES `maxfitt`.`administrador` (`codAdm`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

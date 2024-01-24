-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.34 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6749
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para projeto_full
CREATE DATABASE IF NOT EXISTS `projeto_full` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projeto_full`;

-- Copiando estrutura para tabela projeto_full.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo_cbo` int DEFAULT NULL,
  `desc_servico` varchar(200) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.categoria_servico
CREATE TABLE IF NOT EXISTS `categoria_servico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `id_cli` int DEFAULT NULL,
  `id_categ` int DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prof` (`id_prof`),
  KEY `id_cli` (`id_cli`),
  KEY `id_categ` (`id_categ`),
  CONSTRAINT `categoria_servico_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profissionais` (`id`),
  CONSTRAINT `categoria_servico_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id`),
  CONSTRAINT `categoria_servico_ibfk_3` FOREIGN KEY (`id_categ`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.cidades_atend
CREATE TABLE IF NOT EXISTS `cidades_atend` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `cod_mun` int DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prof` (`id_prof`),
  CONSTRAINT `cidades_atend_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profissionais` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `tipo_p` char(1) DEFAULT NULL,
  `razao_social` varchar(100) DEFAULT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `foto` varchar(256) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nome` (`nome`),
  KEY `cpf_cnpj` (`cpf_cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `id_cli` int DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rede_social` varchar(100) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prof` (`id_prof`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profissionais` (`id`),
  CONSTRAINT `contatos_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.dias_horas
CREATE TABLE IF NOT EXISTS `dias_horas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `dias_semana` char(1) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.enderecos
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `id_cli` int DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cplt_end` varchar(100) DEFAULT NULL,
  `ponto_ref` varchar(100) DEFAULT NULL,
  `numero_end` varchar(20) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `cod_mun` int DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prof` (`id_prof`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profissionais` (`id`),
  CONSTRAINT `enderecos_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.formas_recebimentos
CREATE TABLE IF NOT EXISTS `formas_recebimentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `id_cli` int DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prof` (`id_prof`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `formas_recebimentos_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profissionais` (`id`),
  CONSTRAINT `formas_recebimentos_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.fotos_servicos
CREATE TABLE IF NOT EXISTS `fotos_servicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int DEFAULT NULL,
  `foto` varchar(256) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prof` (`id_prof`),
  CONSTRAINT `fotos_servicos_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profissionais` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.perguntas
CREATE TABLE IF NOT EXISTS `perguntas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.profissionais
CREATE TABLE IF NOT EXISTS `profissionais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `tipo_p` char(1) DEFAULT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `cnae` int DEFAULT NULL,
  `razao_social` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `placa_veicular` varchar(8) DEFAULT NULL,
  `descricao_prof` text,
  `foto` varchar(256) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  `id_serv` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nome` (`nome`),
  KEY `cpf_cnpj` (`cpf_cnpj`),
  KEY `id_serv` (`id_serv`),
  CONSTRAINT `profissionais_ibfk_1` FOREIGN KEY (`id_serv`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela projeto_full.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

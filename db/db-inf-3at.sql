CREATE DATABASE  IF NOT EXISTS `db-inf-3at` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db-inf-3at`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: db-inf-3at
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_id` int NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_questions_types_idx` (`type_id`),
  CONSTRAINT `fk_questions_types` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (6,1,'Quais métodos de pagamento são aceitos na sua loja online?','Aceitamos uma variedade de métodos de pagamento para tornar sua experiência de compra mais conveniente. Aceitamos cartões de crédito (Visa, MasterCard, American Express), transferência bancária e pagamento através de plataformas online como PayPal.'),(7,1,'Como posso rastrear o meu pedido após a compra?','Após a confirmação da compra, você receberá um e-mail com os detalhes do seu pedido, incluindo um link de rastreamento. Esse link o direcionará para a página de rastreamento, onde você poderá monitorar o status e a localização atualizada do seu pedido em tempo real.'),(8,1,'Qual é a política de devolução da sua loja?','Garantimos a satisfação dos nossos clientes. Se por algum motivo você não estiver satisfeito com sua compra, aceitamos devoluções dentro de 30 dias após o recebimento do produto. Consulte nossa página de política de devolução para obter mais detalhes sobre como proceder com a devolução.'),(9,1,'Há garantia nos produtos vendidos em sua loja?','Sim, oferecemos garantia em muitos dos nossos produtos. Cada produto terá informações específicas sobre a garantia na página do produto. Em caso de dúvidas ou problemas, entre em contato com nossa equipe de atendimento ao cliente, que ficará feliz em ajudar a resolver qualquer questão relacionada à garantia.'),(10,1,'Vocês oferecem frete grátis para determinadas regiões ou valores de compra?','Sim, frequentemente oferecemos frete grátis para pedidos acima de um determinado valor, bem como promoções especiais para regiões específicas. Essas ofertas podem variar, por isso recomendamos verificar a página de frete e promoções para informações atualizadas sobre frete grátis e outras ofertas especiais.'),(11,2,'Como posso me inscrever para o evento de ciências?','A inscrição para o evento de ciências pode ser feita diretamente em nosso site. Visite a página de inscrição, preencha o formulário com suas informações e siga as instruções fornecidas para concluir o processo de inscrição.'),(12,2,'Quais são as datas limite para as inscrições?','As datas de inscrição e suas respectivas prorrogações são divulgadas em nossa página oficial e nas redes sociais. Recomendamos que os interessados verifiquem regularmente essas informações para garantir que não percam as datas importantes de inscrição.'),(13,2,'Existe alguma taxa de inscrição para participar do evento de ciências?','Sim, há uma taxa de inscrição para participar do evento de ciências. Os detalhes sobre as taxas, métodos de pagamento aceitos e prazos de pagamento podem ser encontrados na seção de taxas e pagamentos da página de inscrição.'),(14,2,'Posso fazer alterações nas informações da minha inscrição após a submissão?','Após a submissão da inscrição, algumas informações podem ser alteradas entrando em contato com nossa equipe de suporte. No entanto, recomendamos revisar cuidadosamente todas as informações antes de enviar a inscrição para evitar problemas futuros.'),(15,2,'Como receberei a confirmação da minha inscrição?','Após o processamento da sua inscrição, você receberá uma confirmação por e-mail. Certifique-se de verificar sua caixa de entrada regularmente. A confirmação incluirá detalhes importantes, como a identificação única da sua inscrição e informações sobre o evento de ciências.');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Vendas'),(2,'Inscrições'),(3,'Sobre o Evento'),(4,'Organização');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-11 10:50:49

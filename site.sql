-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2018 às 04:03
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES
(1, 'Android'),
(2, 'Pc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE `curtidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_j` bigint(20) UNSIGNED NOT NULL,
  `id_u` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curtidas`
--

INSERT INTO `curtidas` (`id`, `id_j`, `id_u`) VALUES
(2, 4, 1),
(7, 4, 26);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jogo` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id`, `id_jogo`, `nome`) VALUES
(1, 4, 'img01.webp'),
(2, 4, 'img02.webp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id_jogo` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data_lanca` date NOT NULL,
  `descri` text NOT NULL,
  `linkk` varchar(80) NOT NULL,
  `id_cat` bigint(20) UNSIGNED NOT NULL,
  `imagem` varchar(20) NOT NULL,
  `caminho` varchar(30) NOT NULL,
  `curtidas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `nome`, `data_lanca`, `descri`, `linkk`, `id_cat`, `imagem`, `caminho`, `curtidas`) VALUES
(3, 'Sprite Box Coding', '2018-05-10', 'SpriteBox Coding é um jogo de aventura completo que permite a você codificar.\r\n\r\nAprenda a codificar do zero, começando com o código de ícone e, em seguida, avançando lentamente para o uso da sintaxe real do Java.\r\n\r\nEmbarque em uma jornada para encontrar as peças do seu foguete quebrado. Você vai explorar mundos diferentes, conhecer novos personagens, resolver quebra-cabeças e desbloquear roupas legais.\r\n\r\nO SpriteBox Coding abrange os seguintes conceitos de programação:\r\n\r\nSequenciamento\r\n* Parâmetros\r\n* Loops (e Loops Aninhados)\r\n* Procedimentos\r\n* Sintaxe Java Básica\r\n\r\nVem com 70 puzzles para resolver e 500 estrelas para colecionar.\r\n\r\nVocê está pronto para o desafio?', 'https://play.google.com/store/apps/details?id=com.spritebox.coding', 1, 'spriteboxcoding.webp', '\\spritebox\\', 1),
(4, 'Coddy: World on Algorithm', '2018-05-10', '<p>Welcome to the robotech world of Coddy!<br />New interpretation of a famous logic game about robots and algorithms!<br />Challenge your logic in 120 unique levels in wich you must help Coddy the bot, to collect all stars and reach the exit!<br />You will help Coddy, and he will help you not only understand the basics of programming, but also to train your wits.<br />You will:<br />- Learn how to create algorithms and programs<br />- Learn interesting things such as procedures, recursion and constructors<br />- Understand the principles of the cycles and conditions<br />And then, will the real test of your logic:<br />- Writie intricate program up to three robots on the level and watch their funny synchronous execution<br />- Devise and manage complex relationships<br />- Overcome various obstacles<br />- Use teleporters and breakpoints<br />All this awaits you in the exciting world of Coddy!<br />In the world on algorithm!<br />!!!Limitation of the free version: 48 levels!!!</p>\r\n', 'https://play.google.com/store/apps/details?id=com.SimplyProjects.CoddyFree', 1, 'coddyworld.webp', '\\CoddyWorldAlgorithm\\', 2),
(5, 'Code Karts', '2018-05-10', 'Preparar, apontar, programar! O Code Karts introduz a pré-programação para crianças a partir dos 4 anos de idade, através de uma série de quebra-cabeças lógicos apresentados na forma de uma pista de corrida. E mais, ele ensina os princípios básicos da programação às crianças enquanto elas jogam! \r\n\r\nCom mais de 70 níveis, uma variedade de obstáculos complexos e dois modos de jogo diferentes, não faltará conteúdo educacional para os seus filhos. Em Code Karts, o objetivo é usar tijolos de direção para fazer com que o carro de corrida alcance a linha de chegada. Através da observação cuidadosa da pista à frente e um pouco de raciocínio lógico, as crianças irão encontrar soluções rapidamente para quebra-cabeças cada vez mais difíceis, e irão começar a absorver elementos-chave do raciocínio baseado em código.\r\n\r\nCARACTERÍSTICAS:\r\n- 2 modos: Clássico ou Competição (corrida contra o dispositivo)\r\n- Interface de usuário muito intuitiva para crianças a partir dos 4 anos de idade\r\n- Desenvolvimento de sequências, resolução de problemas e lógica\r\n- 10 níveis GRÁTIS\r\n- Mais de 70 níveis na versão completa\r\n- 21 idiomas', 'https://play.google.com/store/apps/details?id=com.edokiacademy.babycoding', 1, 'codekarts.webp', '\\CodeKarts\\', 1),
(6, 'Lightbot : Code Hour', '2018-05-10', 'Lightbot é um jogo de quebra-cabeças de programação; Ele usa mecânicas de jogo que estão firmemente enraizadas em conceitos de programação. O Lightbot permite que os jogadores adquiram uma compreensão prática de conceitos básicos, como sequenciamento de instruções, procedimentos e loops, apenas guiando um robô para acender telhas e resolver níveis.\r\n\r\nOs professores de todo o mundo estão escolhendo o Lightbot primeiro ao apresentar seus alunos à programação.\r\n\r\nLightbot - Code Hour possui 20 níveis. A versão completa do Lightbot possui 50 níveis para quando você quer mais um desafio!\r\n\r\nEsta versão do Lightbot foi traduzida para 28 idiomas diferentes! Basta acertar um ícone de bandeira correspondente ao idioma do jogo!', 'https://play.google.com/store/apps/details?id=com.lightbot.lightbothoc', 1, 'lightbot.webp', '\\LighbotCodeHour\\', 1),
(7, 'Circuit Scramble Computer', '2018-05-15', 'O Circuit Scramble coloca você no mundo da lógica baseada em circuitos que aciona computadores reais! Navegue pelo seu caminho através de um campo de portas lógicas enquanto tenta encontrar as entradas corretas para completar o nível neste quebra-cabeças único e fascinante.\r\n\r\nSiga o fluxo da corrente ao passar por um campo de portas lógicas - descubra a combinação correta de entradas para resolver cada quebra-cabeça. Complete cada nível no menor número de movimentos para obter a melhor pontuação!\r\n\r\nCaracterísticas:\r\n- Desafios desafiadores baseados em portas lógicas do mundo real\r\n- Modo Clássico - com 135 níveis personalizados para você explorar\r\n- Endless Mode - um suprimento ilimitado de níveis gerados aleatoriamente, então a diversão baseada em circuitos nunca precisa parar!\r\n\r\nO Circuit Scramble é totalmente gratuito, sem compras no aplicativo. Apenas muito pensamento provocante, prazer cheio de circuito!', 'https://play.google.com/store/apps/details?id=com.Suborbital.CircuitScramble', 1, 'circuitscramble.webp', '\\CircuitScramble\\', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Klebher', 'kteteco', 'aa23e912cff5f58e19411cd8ab7bc433'),
(26, 'Murilo', 'murilo', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD UNIQUE KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `curtidas`
--
ALTER TABLE `curtidas`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_j` (`id_j`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD UNIQUE KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD CONSTRAINT `curtidas_ibfk_1` FOREIGN KEY (`id_j`) REFERENCES `jogo` (`id_jogo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curtidas_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `id_jogo` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id_jogo`);

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

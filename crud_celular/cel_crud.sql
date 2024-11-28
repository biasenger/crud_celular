CREATE DATABASE IF NOT EXISTS `cel_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `cel_crud`;

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` varchar(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `ie` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `celulares` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `datacadastro` datetime NOT NULL,
  `lancamento` datetime NOT NULL,
  `condicao` text DEFAULT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE usuarios(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    nome varchar(50) not null,
    user varchar(50) not null,
    password varchar(100) not null,
    foto varchar(50) );

INSERT INTO 
`usuarios`(`nome`, `user`, `password`)
VALUES
('admin', 'admin', '$2a$08$CflfllePArKlBJomM0F6a.e9wMGIXjP.shQQi7ABJAW3X.ep8BNru');

ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `celulares`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `celulares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

COMMIT;
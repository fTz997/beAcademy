CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL
);

CREATE TABLE tb_product (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL,
  picture VARCHAR(255) NOT NULL,
  value FLOAT(6,2) NOT NULL,
  category_id INT(11) NOT NULL, 
  quantity INT (5) NOT NULL, 
  created_at DATETIME NOT NULL
);

INSERT INTO tb_category (name, description)
VALUES ('Informática', 'Produtos de informática e acessorios para computador'), ('Escritório', 'Canetas, cadernos, folhas etc'), ('Eletronicos', 'TVs, Som portatil');

DROP TABLE tb_product;

INSERT INTO tb_product (name, description, picture, value, category_id, quantity, created_at) VALUES ('Teclado', 'Teclado mecanico', 'https://ae01.alicdn.com/kf/Sf9b66dfa9f0c4ab39ac1d5958c73e764i/Bm40rgb-bm40-rgb-40-quente-swappable-personalizado-teclado-mec-nico-pcb-programado-qmk-firmware-rgb-interruptor.jpg_Q90.jpg_.webp', 200.00 , 1, 50, '2022-05-10 09:30:43'), ('Monitor', 'Monitor gamer 24 polegadas', 'https://images.kabum.com.br/produtos/fotos/155193/monitor-gamer-samsung-odyssey-g5-34-curvo-165hz-1ms-ultra-wqhd-hdmi-displayport-amd-freesync-premium-preto-lc34g55twwlxzd_1617796497_gg.jpg', 200.00 , 1, 50, '2022-03-18 12:43:43');
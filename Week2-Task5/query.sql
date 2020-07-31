--
-- DATA DEFINITION LANGUAGE (DDL) for myshop
--
-- SOAL 1
--

CREATE DATABASE myshop;

USE myshop;

--
-- SOAL 2
--

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description VARCHAR(255),
    price INT,
    stock INT,
    categories_id INT ,
    FOREIGN KEY (categories_id) 
    REFERENCES categories(id) ON UPDATE CASCADE ON DELETE CASCADE
);

--
-- SOAL 3
--
-- Data for Name: users; Type: TABLE DATA
--

INSERT INTO users VALUES ('','John Doe', 'john@doe.com', 'john123');
INSERT INTO users VALUES ('','Jane Doe', 'jane@doe.com', 'jenita123');

--
-- Data for Name: categories; Type: TABLE DATA
--

INSERT INTO categories VALUES ('', 'gadget');
INSERT INTO categories VALUES ('', 'cloth');
INSERT INTO categories VALUES ('', 'men');
INSERT INTO categories VALUES ('', 'women');
INSERT INTO categories VALUES ('', 'branded');

--
-- Data for Name: items; Type: TABLE DATA
--

INSERT INTO items VALUES('', 'Sumsang b50', 'hape keren dari merek sumsang', 4000000, 100, 1);
INSERT INTO items VALUES('', 'Uniklooh', 'baju keren dari brand ternama', 500000, 50, 2);
INSERT INTO items VALUES('', 'IMHO Watch', 'jam tangan anak yang jujur banget', 2000000, 10, 1);\

--
-- END OF DDL
--
-- SOAL 4 : QUERY SET 
--

--
-- a. Mengambil data users
--
SELECT id, name, email, password FROM users;

--
-- b. Mengambil data items
--
SELECT * FROM items WHERE price>1000000;
SELECT * FROM items WHERE name LIKE '%sang%';

--
-- c. Menampilkan data items join dengan kategori
--
-- query jenis 1
SELECT * FROM items i, categories c WHERE i.categories_id=c.id;
-- query jenis 2
SELECT * FROM items i INNER JOIN categories c ON i.categories_id = c.id;

--
-- SOAL 5 : Mengubah Data dari Database
--
UPDATE items
SET price = 2500000
WHERE name LIKE '%Sumsang%';
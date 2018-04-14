CREATE DATABASE verano;
USE verano;
CREATE TABLE tabla( id INT, nombre VARCHAR(20) );
INSERT INTO tabla VALUES ( 1, 'Ricardo' );
INSERT INTO tabla VALUES ( 2, 'Daniel' );
INSERT INTO tabla VALUES ( 3, 'Pepe' );
INSERT INTO tabla VALUES ( 4,'Juan' );
INSERT INTO tabla VALUES ( 5, 'Elias' );

/* AREAS */
CREATE TABLE areas (clave VARCHAR(40) PRIMARY KEY, area VARCHAR(200));
INSERT INTO areas VALUES ( '1', 'Ciencias de la tierra' );
INSERT INTO areas VALUES ( '2', 'Sistemas y computación' );
INSERT INTO areas VALUES ( '3', 'Ciencias básicas' );
INSERT INTO areas VALUES ( '4', 'Ciencias económicas' );
INSERT INTO areas VALUES ( '5', 'Ciencias administrativas' );

/* CARRERAS */
CREATE TABLE carreras (clave VARCHAR(40) PRIMARY KEY, carrera VARCHAR(200));
INSERT INTO carreras VALUES ( '1', 'Contabilidad' );
INSERT INTO carreras VALUES ( '2', 'Gestión empresarial' );
INSERT INTO carreras VALUES ( '3', 'Ingeniería informatica' );
INSERT INTO carreras VALUES ( '4', 'Ingeniería civil' );
INSERT INTO carreras VALUES ( '5', 'Ingeniería en sistemas computacionales' );

/* SEMESTRES */
CREATE TABLE semestres (clave INT PRIMARY KEY, semestre VARCHAR(200));
INSERT INTO semestres VALUES ( 1, '1' );
INSERT INTO semestres VALUES ( 2, '2' );
INSERT INTO semestres VALUES ( 3, '3' );
INSERT INTO semestres VALUES ( 4, '4' );
INSERT INTO semestres VALUES ( 5, '5' );
INSERT INTO semestres VALUES ( 6, '6' );
INSERT INTO semestres VALUES ( 7, '7' );
INSERT INTO semestres VALUES ( 8, '8' );
INSERT INTO semestres VALUES ( 9, '9' );
INSERT INTO semestres VALUES ( 10, '10' );
INSERT INTO semestres VALUES ( 11, '11' );
INSERT INTO semestres VALUES ( 12, '12' );
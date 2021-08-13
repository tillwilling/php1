-- SELECT (Datensätze auswählen)
-- * steht für alle Spalten
SELECT * FROM city;
-- Nur die Spalten name und population auswählen
SELECT name,population FROM city;

-- WHERE-Klausel 
SELECT * FROM city WHERE countrycode = 'AFG';

-- Vergleichsoperatoren: <, <=, >, >=, =, !=
-- Verknüpfungsoperatoren: AND (&&), OR (||) 
SELECT * FROM city WHERE countrycode = 'DEU' AND population > 300000;

-- Sortierung (ORDER BY)
-- Aufsteigende Sortierung (ASC)
SELECT * FROM city ORDER BY name;
-- Absteigende Sortierung (DESC)
SELECT * FROM city ORDER BY population DESC;
-- Sortierung mehrerer Spalten
SELECT * FROM kunde ORDER BY nachname, vorname;

-- Limitierung von Datensätzen (LIMIT) 
-- Die ersten 5 Datensätze 
SELECT * FROM city LIMIT 5;
-- Ab dem dritten Datensatz, 5 Datensätze auswählen 
SELECT * FROM city LIMIT 2,5;

-- SELECT ... FROM ... [WHERE ...] [ORDER BY ...] [LIMIT ...]

-- IN-Operator 
SELECT * FROM country WHERE continent IN('asia','europe','north america'); 
-- ohne IN-Operator
SELECT * 
FROM country 
WHERE continent = 'asia' 
OR continent = 'europe' 
OR continent = 'north america';

-- BETWEEN-Operator 
SELECT * FROM country WHERE population BETWEEN 10000000 AND 30000000;
-- ohne BETWEEN-Operator 
SELECT * 
FROM country 
WHERE population >= 10000000
AND population <= 30000000;

-- LIKE-Operator 
-- % Steht für eine beliebige Anzahl beliebiger Zeichen 
-- _ Steht für genau ein beliebiges Zeichen 

-- Muss mit B beginnen
SELECT * FROM country WHERE name LIKE 'b%';
-- Muss mit UM enden
SELECT * FROM country WHERE name LIKE '%um';
-- Muss RU enthalten
SELECT * FROM country WHERE name LIKE '%ru%';
-- Muss an der 2. Stelle den Buchstaben E enthalten
SELECT * FROM country WHERE name LIKE '_e%';

-- MySQL-Funktionen 
-- count() Liefert die Anzahl der ausgewählten Datensätze
SELECT count(*) FROM country; -- 239
SELECT count(name) FROM country; -- 239
SELECT count(indepyear) FROM country; -- 192
-- max() Liefert den größten Wert der Spalte
SELECT max(population) FROM country;
-- min() Liefert den kleinsten Wert der Spalte
SELECT min(population) FROM country;
-- sum() Liefert die Summe einer Spalte 
SELECT sum(population) FROM country;
-- avg() Liefert den Durchschnittswert einer Spalte
SELECT avg(lifeexpectancy) FROM country;
-- rand() Liefert eine Zufallszahl von 0 bis kleiner 1
SELECT rand(); 
-- Liefert einen zufälligen Datensatz zurück
SELECT * FROM country ORDER BY rand() LIMIT 1;

-- Übersicht über alle MySQL-Funktionen:
-- https://dev.mysql.com/doc/refman/8.0/en/functions.html
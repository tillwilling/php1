-- Alle nachfolgenden Aufgaben gelten für die world-Datenbank.

-- a) Alle Städte mit einer Einwohnerzahl von über 1 Mio.
SELECT * FROM country WHERE population >10000000;

-- b) Die sieben Länder mit der höchsten Lebenserwartung.
SELECT * FROM country ORDER BY lifeexpectancy DESC LIMIT 7;

-- c) Welche Länder wurden nach 1920 unabhängig? Sortiert nach dem Jahr der Unabhängigkeit absteigend.
SELECT * FROM country WHERE indepyear >1920 ORDER BY indepyear DESC;

-- d) Alle Städte mit dem CountryCode NLD und einer Bevölkerungszahl von über 100.000
SELECT * FROM city WHERE countrycode = 'NLD' AND population > 100000;

-- e) Nur die Städtenamen, deren Städte eine Einwohnerzahl von 200.000 bis 300.000 besitzen
SELECT * FROM city WHERE population BETWEEN 200000 AND 300000;

-- f) Welche Länder haben die Regierungsform "Republic" oder "Federal Republic" oder "Monarchy"?
SELECT * FROM country WHERE governmentform = "Republic" OR governmentform = "Monarchy";

-- g) In welchem afrikanischen Land ist die Lebenserwartung am höchsten?
SELECT * FROM country WHERE continent IN('africa') ORDER BY lifeexpectancy DESC;

-- h) Welche 3 Länder in Süd-Amerika haben die höchste Einwohnerzahl?
SELECT * FROM country WHERE continent IN('south america') ORDER BY population DESC LIMIT 3;

-- i) Welche Länder wurden von 1900 bis 1910 oder von 1960 bis 1970 unabhängig?
SELECT * FROM country WHERE indepyear BETWEEN 1910 AND 1910 OR indepyear BETWEEN 1960 AND 1970;

-- j) Welche Länder aus Nord-Amerika und Süd-Amerika haben eine Bevölkerungszahl von über 8 Mio.
SELECT * FROM country WHERE continent IN('south america', 'north america') AND population > 8000000;

-- k) Welche Länder in Europa und welche Länder in Afrika haben eine durchschnittliche 
--    Lebenserwartung von 60 bis 70 Jahren?


-- l) Wie viele Länder gibt es auf dem Kontinent Europa?
-- m) Welche Ländernamen enden mit "um"?


-- Alle nachfolgenden SQL-Aufgaben beziehen sich auf die sakila-Datenbank, Tabelle film

-- a) Alle Filme auswählen, die eine Ausleihgebühr (rental_rate) von 0.99 - 2.99 haben und mit dem Buchstaben B beginnen.
-- b) Alle Filme mit einer Länge von 50 bis 70 Minuten. Sortiert nach der Filmlänge (length) aufsteigend.
-- c) Welche Filme besitzen das Special Feature "Trailers"?
-- d) Welche Filme haben eine Länge von 40 bis 60 Minuten und haben eine Ausleihgebühr von genau 4.99? Sortieren Sie die Ausgabe nach der Filmlänge aufsteigend.
-- e) Welche 15 Filme haben die höchste Ausleihgebühr (rental_rate)?
-- f) Wie viele Filme besitzen das Rating "G"?
-- g) Wie hoch ist die durchschnittliche Leihgebühr (rental_rate) aller Filme?
-- h) Einen zufälligen Filmtitel auswählen.
















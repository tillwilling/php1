-- Aufgaben mit Join für die Sakila-Datenbank
 
-- a) Welche Schauspieler haben mitgespielt in dem Film "ACE GOLDFINGER"?
SELECT actor.first_name, actor.last_name
FROM film 
JOIN film_actor 
ON film.film_id = film_actor.film_id
JOIN actor
ON film_actor.actor_id = actor.actor_id 
WHERE film.title = "ACE GOLDFINGER";

-- b) Welche Filme befinden sich in der Kategorie "Sci-Fi"? Nutzen Sie die Alias-Schreibweise!
SELECT f.title
FROM film AS f
JOIN film_category AS fc
ON f.film_id = fc.film_id
JOIN category AS c
ON c.category_id = fc.category_id 
WHERE c.name = "Sci-Fi";


-- c) Welche Filme befinden sich merkwürdigerweise in der Kategorie Children,
--    obwohl Sie keine Altersfreigabe (rating = "NC-17") besitzen 
SELECT f.title
FROM film AS f
JOIN film_category AS fc
ON f.film_id = fc.film_id
JOIN category AS c
ON c.category_id = fc.category_id 
WHERE c.name = "Children" AND f.rating = "NC-17";


-- d) Wie viele Schauspieler haben mitgespielt in einem Film der Kategorie 'Drama'?
SELECT count(*)
FROM actor AS a
JOIN film_actor AS fa
ON a.actor_id = fa.actor_id
JOIN film AS f
ON f.film_id = fa.film_id
JOIN film_category AS fc
ON fc.film_id = f.film_id
JOIN category AS c
ON c.category_id = fc.category_id
WHERE c.name = "Drama";


-- e) Welche Kunden aus Germany sind in der Datenbank sakila enthalten?
SELECT *
FROM customer AS cus
JOIN address AS a
ON a.address_id = cus.address_id
JOIN city AS c
ON c.city_id = a.city_id
JOIN country
ON country.country_id = c.country_id
WHERE country.country = "Germany";


-- Datensatz einfügen
INSERT INTO login (benutzer,passwort) VALUES ('karlheinz','geheim');
INSERT INTO login VALUES (NULL,'susi','bekannt');

-- Datensatz aktualisieren
UPDATE login
SET passwort='neu'
WHERE benutzer='susi';

-- Datensatz löschen
DELETE FROM login WHERE benutzer='susi';
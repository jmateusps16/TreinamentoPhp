--Create DB
CREATE SCHEMA phppdo;
ALTER ROLE postgres SET search_path TO phppdo;

--Create Table
SET search_path TO phppdo;
create table if not exists videoplay (
	id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url TEXT NOT NULL
);
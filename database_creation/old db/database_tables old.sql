DROP TABLE if EXISTS editions;
DROP TABLE if EXISTS related_boardgames;
DROP TABLE if EXISTS boardgame_user;
DROP TABLE if EXISTS comments;
DROP TABLE if EXISTS files;
DROP TABLE if EXISTS videos;
DROP TABLE if EXISTS forums;
DROP TABLE if EXISTS video_categories;
DROP TABLE if EXISTS forum_categories;
DROP TABLE if EXISTS media;
DROP TABLE if EXISTS microbadge_user;
DROP TABLE if EXISTS microbadges;
DROP TABLE if EXISTS boardgame_person_publisher;
DROP TABLE if EXISTS boardgame_person_artist;
DROP TABLE if EXISTS boardgame_person_designer;
DROP TABLE if EXISTS boardgame_user_like;
DROP TABLE if EXISTS boardgame_category;
DROP TABLE if EXISTS award_boardgame;
DROP TABLE if EXISTS awards;
DROP TABLE if EXISTS boardgame_alternative_names;
DROP TABLE if EXISTS boardgames;
DROP TABLE if EXISTS boardgame_categories;
DROP TABLE if EXISTS users;
DROP TABLE if EXISTS people;
DROP TABLE if EXISTS countries;
DROP TABLE if EXISTS languages;

CREATE TABLE languages (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	code VARCHAR(10) NOT NULL
);

CREATE TABLE countries (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL
);


CREATE TABLE people (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	is_real_person BOOL NOT NULL,
	birth_date DATE,
	biography TEXT,
	country_id INT,
	created_at TIMESTAMP NOT NULL DEFAULT 0,
	updated_at TIMESTAMP NOT NULL DEFAULT 0,
	FOREIGN KEY (country_id) REFERENCES countries(id)
);


CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	user_description VARCHAR(1000),
	first_name VARCHAR(100),
	last_name VARCHAR(100),
	last_login VARCHAR(255),
	website VARCHAR(255),
	avatar_url VARCHAR(500),
	country_id INT,
	n_published_media INT DEFAULT 0,
	created_at TIMESTAMP NOT NULL DEFAULT 0,
	updated_at TIMESTAMP NOT NULL DEFAULT 0,
	FOREIGN KEY (country_id) REFERENCES countries(id)
);


CREATE TABLE tags (
	id INT PRIMARY KEY AUTO_INCREMENT,
	category_type VARCHAR(10),
	name VARCHAR(100) NOT NULL
);


CREATE TABLE boardgames (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    year_published INT,
    small_description VARCHAR(255),
    min_players INT,
    max_players INT,
    playing_time INT,
    min_age INT,
    description TEXT,
    complexity_rating FLOAT,
    average_rating FLOAT,
    bgg_ELO INT,
    num_ratings INT DEFAULT 0,
    num_comments INT DEFAULT 0,
    image_url VARCHAR(500),
    thumbnail_url VARCHAR(500),
    official_link VARCHAR(255),
    official_link_alt VARCHAR(255),
    owners INT,
	n_likes INT DEFAULT 0,
	n_expansions INT DEFAULT 0,
	n_versions INT DEFAULT 0,
	created_at TIMESTAMP NOT NULL DEFAULT 0,
	updated_at TIMESTAMP NOT NULL DEFAULT 0
);

CREATE TABLE boardgame_alternative_names (
	boardgame_id INT,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY (boardgame_id, name),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id)
);

CREATE TABLE awards (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	description TEXT
);


CREATE TABLE award_boardgame (
	boardgame_id INT,
	award_id INT,
	year_won INT,
	PRIMARY KEY (boardgame_id, award_id),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (award_id) REFERENCES awards(id)
);

CREATE TABLE boardgame_tag (
	boardgame_id INT,
	tag_id INT,
	PRIMARY KEY (boardgame_id, tag_id),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (tag_id) REFERENCES tags(id)
);

CREATE TABLE boardgame_person_designer (
	boardgame_id INT,
	person_id INT,
	PRIMARY KEY (boardgame_id, person_id),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (person_id) REFERENCES people(id)
);

CREATE TABLE boardgame_person_artist (
	boardgame_id INT,
	person_id INT,
	PRIMARY KEY (boardgame_id, person_id),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (person_id) REFERENCES people(id)
);

CREATE TABLE boardgame_person_publisher (
	boardgame_id INT,
	person_id INT,
	PRIMARY KEY (boardgame_id, person_id),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (person_id) REFERENCES people(id)
);


CREATE TABLE microbadges (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	description VARCHAR(255),
	image_url VARCHAR(500)
);

CREATE TABLE user_microbadge (
	user_id INT,
	microbadge_id INT,
	PRIMARY KEY (user_id, microbadge_id),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (microbadge_id) REFERENCES microbadges(id)
);


CREATE TABLE media (
	id INT PRIMARY KEY AUTO_INCREMENT,
	boardgame_id INT,
	title VARCHAR(1000),
	media_type VARCHAR(255),
	description TEXT,
	uri VARCHAR(500),
	upload_date VARCHAR(255),	/* dovrei togliere questo campo dato che c'è già created_at */
	uploader_user_id INT,
	n_likes INT DEFAULT 0,
	n_comments INT DEFAULT 0,
	language_id INT NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT 0,
	updated_at TIMESTAMP NOT NULL DEFAULT 0,
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (uploader_user_id) REFERENCES users(id),
	FOREIGN KEY (language_id) REFERENCES languages(id)
);


CREATE TABLE forum_categories (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	description TEXT
);

CREATE TABLE video_categories (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	description TEXT
);


CREATE TABLE forums (
	id INT PRIMARY KEY AUTO_INCREMENT,
	media_id INT,
	forum_category_id INT,
	FOREIGN KEY (media_id) REFERENCES media(id),
	FOREIGN KEY (forum_category_id) REFERENCES forum_categories(id)
);

CREATE TABLE videos (
	id INT PRIMARY KEY AUTO_INCREMENT,
	media_id INT,
	video_category_id INT,
	thumbnail_url VARCHAR(500),
	FOREIGN KEY (media_id) REFERENCES media(id),
	FOREIGN KEY (video_category_id) REFERENCES video_categories(id)
);

CREATE TABLE files (
	id INT PRIMARY KEY AUTO_INCREMENT,
	media_id INT,
	file_size INT,
	format VARCHAR(6),
	FOREIGN KEY (media_id) REFERENCES media(id)
);

CREATE TABLE news (
	id INT PRIMARY KEY AUTO_INCREMENT,
	media_id INT,
	sources VARCHAR (1023),
	FOREIGN KEY (media_id) REFERENCES media(id)
);

CREATE TABLE images (
	id INT PRIMARY KEY AUTO_INCREMENT,
	media_id INT,
	file_size INT,
	width INT,
	height INT,
	format VARCHAR(6),
	FOREIGN KEY (media_id) REFERENCES media(id)
);

CREATE TABLE comments (
	id INT PRIMARY KEY AUTO_INCREMENT,
	media_id INT,
	user_id INT,
	text_comment TEXT NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT 0,
	updated_at TIMESTAMP NOT NULL DEFAULT 0,
	FOREIGN KEY (media_id) REFERENCES media(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);


CREATE TABLE user_boardgame_interaction (
	user_id INT,
	boardgame_id INT,
	owns BOOLEAN DEFAULT FALSE,
	rating INT,
	liked BOOLEAN DEFAULT FALSE,
	PRIMARY KEY (user_id, boardgame_id),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (boardgame_id) REFERENCES boardgames(id)
);

CREATE TABLE related_boardgames (
	main_boardgame_id INT,
	related_boardgame_id INT,
	PRIMARY KEY (main_boardgame_id, related_boardgame_id),
	FOREIGN KEY (main_boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (related_boardgame_id) REFERENCES boardgames(id)
);


CREATE TABLE editions (
	edition_boardgame_id INT,
	base_boardgame_id INT,
	edition_type VARCHAR(255),
	PRIMARY KEY (edition_boardgame_id, base_boardgame_id),
	FOREIGN KEY (edition_boardgame_id) REFERENCES boardgames(id),
	FOREIGN KEY (base_boardgame_id) REFERENCES boardgames(id)
);


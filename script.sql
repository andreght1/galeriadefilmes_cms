CREATE TABLE categories (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE genres (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    original_title VARCHAR(255) NOT NULL,
    rating INT,
    amount_votes INT,
    filename VARCHAR(255) NOT NULL,
    released DATETIME,
    created DATETIME,
    modified DATETIME,
    UNIQUE KEY (original_title),
    FOREIGN KEY category_key (category_id) REFERENCES categories(id)
);

CREATE TABLE genres_movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    genre_id INT NOT NULL,
    movie_id INT NOT NULL,
    FOREIGN KEY genre_key (genre_id) REFERENCES genres(id),
    FOREIGN KEY movie_key (movie_id) REFERENCES movies(id)
);


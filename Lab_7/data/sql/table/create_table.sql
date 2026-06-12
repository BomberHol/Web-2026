CREATE TABLE users (
	user_id INT PRIMARY KEY,
    user_name VARCHAR(200),
    user_avatar VARCHAR(200)
);

CREATE TABLE posts (
   post_id INT PRIMARY KEY,
   post_description MEDIUMTEXT,
   counter_heart INT,
   post_time DATE,
   user_id INT,
   FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE photos (
	post_id INT,
    photo VARCHAR(200),
    FOREIGN KEY(post_id) REFERENCES posts(post_id)
);



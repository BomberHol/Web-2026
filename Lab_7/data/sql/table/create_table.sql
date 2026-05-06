CREATE TABLE post (
   id INT UNSIGNED AUTO_INCREMENT,
   post_photo VARCHAR(200),
   post_description MEDIUMTEXT,
   counter_heart INT,
   post_time DATE,
   PRIMARY KEY (id)
);

CREATE TABLE user (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(200),
    user_avatar VARCHAR(200)
);

### create tables
```
CREATE TABLE users(
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);
```


```
CREATE TABLE comments(
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    users_id INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);
```

### insert users
```
INSERT INTO users (username, pwd, email) VALUES ("Nithin", "nit123", "nithin@mail.com");

INSERT INTO users (username, pwd, email) VALUES ("Homelander", "homefree", "homelander@vought.corp");

INSERT INTO users (username, pwd, email) VALUES ("Delete", "delete", "delete@mail.com");
```

### update
```
UPDATE users SET username = "GodHomelander", pwd = "freehome" WHERE id = 2;

UPDATE users SET username = "GodHomelander", pwd = "freehome" WHERE username = "homelander OR  pwd = "homefree";
```

### delete
```
DELETE FROM users WHERE username = "Delete";
```

### insert comments
```
-- Comments for Nithin
INSERT INTO comments (username, comment_text, users_id) VALUES 
("Nithin", "Just finished my first SQL project!", 1),
("Nithin", "Learning about foreign keys today.", 1),
("Nithin", "Database design is fascinating!", 1),
("Nithin", "Anyone have tips for optimizing queries?", 1),
("Nithin", "Excited to start my internship next week!", 1);

-- Comments for Homelander
INSERT INTO comments (username, comment_text, users_id) VALUES 
("Homelander", "I'm the best superhero, period.", 2),
("Homelander", "Vought International: saving the world, one hero at a time.", 2),
("Homelander", "Who needs kryptonite when you have laser eyes?", 2),
("Homelander", "Just did a flyby over New York. The view is always spectacular.", 2),
("Homelander", "Remember, citizens: I can do whatever I want.", 2);
```

### select
1. Retrieve all users:
```sql
SELECT * FROM users;
```

2. Get the total number of users:
```sql
SELECT COUNT(*) AS total_users FROM users;
```

3. Find the most recent user:
```sql
SELECT * FROM users ORDER BY created_at DESC;
```

4. Get all comments containing the word "SQL":
```sql
SELECT username, comment_text
FROM comments
WHERE comment_text LIKE '%Just%';
```

5. Retrieve comments of particular users:
```sql
SELECT comment_text FROM comments WHERE users_id=2;
```
### insert

```sql
INSERT INTO users (username, pwd, email) VALUES
('john_doe', 'password123', 'john@example.com'),
('jane_smith', 'securepass', 'jane@example.com'),
('sarah_lee', 'sarahpass', 'sarah@example.com'),
```


```sql
INSERT INTO comments (username, comment_text, users_id) VALUES
('john_doe', 'Great post!', 1),
('jane_smith', 'I disagree with this.', 2),
('john_doe', 'Okay?', 1),
('anonymous', 'Just passing by.', NULL),
```

### joins

1. INNER JOIN:
   An INNER JOIN returns only the rows where there's a match in both tables based on the join condition. In our example:

   ```sql
   SELECT u.username, c.comment_text
   FROM users u
   INNER JOIN comments c ON u.id = c.users_id;
   ```
   
   This query will return all comments along with the username of the user who made the comment, but only for comments that have a valid user_id. If there's a comment with a NULL users_id or a users_id that doesn't exist in the users table, it won't be included in the result.

   Result:
   ```
   username    | comment_text
   john_doe    | Great post!
   jane_smith  | I disagree with this.
   john_doe  | Okay?
   ```

2. LEFT JOIN:
   A LEFT JOIN returns all rows from the left table (users in our case) and the matching rows from the right table (comments). If there's no match, NULL values are returned for the right table's columns.

   ```sql
   SELECT u.username, c.comment_text
   FROM users u
   LEFT JOIN comments c ON u.id = c.users_id;
   ```

   This query will return all users, even if they haven't made any comments. For users without comments, the comment_text will be NULL.
   
   Result:
   ```
   username    | comment_text
   john_doe    | Great post!
   jane_smith  | I disagree with this.
   john_doe  | Okay?
   sarah_lee  | NULL 
   ```
   Note: In this case, the result is the same as INNER JOIN because all users have comments.

3. RIGHT JOIN:
   A RIGHT JOIN is similar to a LEFT JOIN, but it returns all rows from the right table and the matching rows from the left table.

   ```sql
   SELECT u.username, c.comment_text
   FROM users u
   RIGHT JOIN comments c ON u.id = c.users_id;
   ```

   This query will return all comments, including those made by users not in the users table (if any). For comments without a matching user, the username will be NULL.
   
   Result:
   ```
   username    | comment_text
   john_doe    | Great post!
   jane_smith  | I disagree with this.
   john_doe  | Okay?
   NULL  | Just passing by. 
   ```
   Note: The 'anonymous' comment appears with a NULL username.

4. FULL OUTER JOIN:
   A FULL OUTER JOIN combines the results of both LEFT and RIGHT JOINs. It returns all rows from both tables, with NULL values for non-matching rows. MySQL doesn't directly support FULL OUTER JOIN, so we simulate it:

   ```sql
   SELECT u.username, c.comment_text
   FROM users u
   LEFT JOIN comments c ON u.id = c.users_id
   UNION
   SELECT u.username, c.comment_text
   FROM users u
   RIGHT JOIN comments c ON u.id = c.users_id
   WHERE u.id IS NULL;
   ```

   This query will return all users (even those without comments) and all comments (even those without a matching user).
   
   Result:
   ```
   username    | comment_text
   john_doe    | Great post!
   jane_smith  | I disagree with this.
   john_doe  | Okay?
   sarah_lee  | NULL 
   NULL  | Just passing by. 
   ```

5. CROSS JOIN:
   A CROSS JOIN returns the Cartesian product of both tables, meaning each row from the first table is combined with each row from the second table.

   ```sql
   SELECT u.username, c.comment_text
   FROM users u
   CROSS JOIN comments c
   LIMIT 10; -- Limiting to 10 rows for brevity
   ```

   This will produce a result with (number of users × number of comments) rows, which can be very large for big tables.
   
   Result (first 10 rows):
   ```
   username 	| comment_text 	
   john_doe 	| Great post!
   jane_smith 	| Great post!
   sarah_lee 	| Great post!
   john_doe 	| I disagree with this.
   jane_smith 	| I disagree with this.
   sarah_lee 	| I disagree with this.
   john_doe 	| Okay?
   jane_smith 	| Okay?
   sarah_lee 	| Okay?
   john_doe 	| Just passing by.
   ```
   Note: This produces 12 rows (3 users × 4 comments) in total.

6. SELF JOIN:
   A SELF JOIN is used to join a table with itself. It's useful when you want to compare rows within the same table.

   ```sql
   SELECT u1.username AS user1, u2.username AS user2
   FROM users u1
   JOIN users u2 ON u1.id < u2.id;
   ```

   This self join essentially creates all possible pairs of users, without repeating pairs or pairing users with themselves.
   
   Result:
   ```
   user1 	   | user2 	
   john_doe 	| jane_smith
   john_doe 	| sarah_lee
   jane_smith 	| sarah_lee
   ```
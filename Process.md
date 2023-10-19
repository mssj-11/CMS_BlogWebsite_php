#   Process

#   Add Table
```sql
CREATE TABLE categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
```

#   SQL relational
```sql
ALTER TABLE posts
ADD category_id INT,
ADD FOREIGN KEY (category_id) REFERENCES categories(id);
```

####    Insert Information relational
```sql
INSERT INTO categories(name) VALUES ('Technology'), ('Trips'), ('Feeding'), ('Sports');
```

####    Update POST Information
```sql
UPDATE posts SET category_id=7 WHERE id=7;
UPDATE posts SET category_id=9 WHERE id=9;
UPDATE posts SET category_id=10 WHERE id=10;
UPDATE posts SET category_id=11 WHERE id=11;
```




```sql
ALTER TABLE users 
ADD FOREIGN KEY(role_id) REFERENCES rol(id);
```
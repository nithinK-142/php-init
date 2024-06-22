<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        form {
            display: flex;
            justify-content: center;
        }

        input {
            padding: 0.25rem 0.5rem;
        }
    </style>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="text" name="usersearch" placeholder="Search" />
    </form>
</body>
</html>
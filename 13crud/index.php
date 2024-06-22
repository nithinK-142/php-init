<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #212121;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: black;
            padding: 20px;
            margin-inline: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h3 {
            color: #333;
            margin-bottom: 20px;
        }
        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="includes/formhandler.inc.php" method="post">
        <h3>Signup</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="E-Mail">
        <button>submit</button>
    </form>
    
    <form action="includes/updatehandler.inc.php" method="post">
        <h3>Update Details</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="E-Mail">
        <button>submit</button>
    </form>
    
    <form action="includes/deletehandler.inc.php" method="post">
        <h3>Delete User</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>submit</button>
    </form>
</body>
</html>
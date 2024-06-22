<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbhandler.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query); 

        $stmt->bindParam(':usersearch', $userSearch);
        $stmt->execute();

        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

        // die();
    } catch (PDOException $e) {
        die("Query Failed!! ". $e->getMessage());
    }
}
else { 
    header("Location: ./index.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            color: white;
        }

        h1 {
            text-align: center;
        }

        div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 0.25rem;

            width: 40%;
            margin: 0.5rem auto;
            background: #000;
            padding: 0.5rem;
        }
    </style>
</head>
<body>
    <h1>Search Results</h1>
    <?php
    if(!empty($comments)){
        foreach($comments as $comment){
            echo "<div>";
            echo "<h3>". htmlspecialchars($comment["username"]) ."</h3>";
            echo "<p>". htmlspecialchars($comment["comment_text"]) ."</p>";
            echo "<p>". htmlspecialchars($comment["created_at"]) ."</p>";
            echo "</div>";
        }
    }
    else {
        echo "<div><p>No users found!</p></div>";
    }
    ?>
</body>
</html>
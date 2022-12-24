<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="guestbook.css">
    <title>guestbook</title>
</head>

<body>
    <h1>Guestbook</h1>
    <form action="skript.php" method="post">
        Name: <input type="text" name="name"> <br> <br>
        Email: <input type="email" name="email"> <br> <br>
        Tel: <input type="number" name="tel"> <br> <br>
        Comment: <input type="text" name="comment"> <br> <br>
        <input type="submit" value="Lägg till">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webbserverprogrammering";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM Guestbook;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<hr>";
            echo "Posts: <br> <br>";
            echo "Time:" . " " . $row["time"] . "<br>";
            echo "From:" . " " . $row["name"] . "<br>";
            echo "Email:" . " " . $row["email"] . "<br>";
            echo "Tel:" . " " . $row["tel"] . "<br><br>";
            echo "Comment: " . $row["comment"] . "<br>";
        }
    }
    $conn->close();
    ?>
</body>

</html>
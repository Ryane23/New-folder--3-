<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table border="i">
            <tr>
                <th>username</th>
                <th>content</th>
            </tr>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "facebook");
            $query = 'SELECT * FROM user CROSS JOIN comment On user.id= comment.user_id';
            $result = mysqli_query($connection, $query);
            // if($result)
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>";
                echo $row['username'];
                echo "</td>";
                echo "<br>";
                echo "<td>";
                echo $row['content'];
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>
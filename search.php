<?php
require_once("settings.php");

$link = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);

// Check connection
if (!$link) {
	die("Connection failed: " . mysqli_connect_error());
}
?>

<form method="post" action="">
Search: <input type="text" name="title" placeholder="Article" maxlength="40" required="true"/>
<input type="submit" name="submit" value="Search"/>
</form>

<?php

if (isset($_POST["submit"]))
{
    echo "<table><tr><th>Title</th><th>Description</th><th>Date</th><th>";
    $result = mysqli_query($link, "SELECT Title, Description, Date FROM articles WHERE Title = '".$_POST['title']."'");
    while ($row = mysqli_fetch_array($result))
    {
        echo "<tr><td>".$row['Title']."</td><td>".$row['Description']."</td><td>".$row['Date']."</td>";
    }

    echo "</table>";
}

?>

<?php echo "<p><a href='index.html'> Return to Home Page </a></p>";?>

</body>
</html>
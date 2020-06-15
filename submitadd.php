<?php
require_once("settings.php");

$link = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);

// Check connection
if (!$link) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "CREATE TABLE IF NOT EXISTS articles (
    article_id INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(40),
    Description VARCHAR(40),
    Date DATE NOT NULL
);");

if (isset($_POST["submit"]))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $query = mysqli_query($link, "INSERT INTO articles (Title, Description, Date) VALUES ('".$_POST["title"]."', '".$_POST["description"]."', '".$_POST["date"]."');");

    if ($query)
    {
        echo "Article has been added to the query";
    }
    else
    {
        echo "Failed to add an Article.";
    }
}

?>

<?php echo "<p><a href='index.html'> Return to Home Page </a></p>";?>
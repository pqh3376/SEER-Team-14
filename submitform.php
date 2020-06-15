<head>
  <title> Article Submission System </title>
</head>

<style>
ul.noBulletPoint
{
  list-style-type: none;
  margin: 0;
  padding: 0;
}
div.lineheight 
{
  line-height: 1.6;
}
</style>

<h1>Submit Article</h1>

<form method="post" action="submitadd.php">

<?php $currentday = date("d/m/Y");?>

<div class = "lineheight">
<ul class = "noBulletPoint">

<li>Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="title" maxlength="40" required="true"/></li>
<li>Description: <input type = "text" name = "description" size = "50" required="true"></li></br>
<li>Date: <input type = "date" name = "date" maxlength="10" size = "8" value = "<?php echo $currentday;?>"></li></br>
</form>

<input type="submit" name="submit" value="Submit"/>
<input type = "reset" value = "Reset"/>

<?php echo "<p><a href='index.html'> Return to Main Menu </a></p>";?>
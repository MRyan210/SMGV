<!-- display_page.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <h1>Displayed Data</h1>
    <p>Name: <?php echo isset($_POST["name"]) ? htmlentities($_POST["name"]) : "No name provided"; ?></p>
</body>
</html>

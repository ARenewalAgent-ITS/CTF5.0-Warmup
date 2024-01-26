<?php
$url = $_POST['url'] ?? ''; 

$output = system(escapeshellcmd("curl " . $url));

echo "<pre>$output</pre>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Website Curl</title>
</head>
<body>
    <h1>Website Tester</h1>
    <form method="post">
        Command: <input type="text" name="url"><br>
        <input type="submit" value="Send Request">
    </form>
</body>
</html>

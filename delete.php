
<?php
    if (isset($_GET["file"]))
    {
		$filePath = $_GET["file"];
		if (strcmp($filePath, ".htaccess") != 0)
		{
			if (file_exists($filePath))
			{
				unlink($filePath);
			}
		}
    }
    
    header('Location: index.php');
    die();
	
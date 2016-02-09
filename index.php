<!DOCTYPE html>
<html>
    <head>
        <title>Khiem Doan's Mini USB</title>
    </head>
    
    <body>
        <form id="form1" enctype="multipart/form-data" method="post" action="upload.php">
            <label for="fileToUpload">Select a File to Upload</label><br />
            <input type="file" name="fileToUpload" id="fileToUpload" accept="*" />
            <input type="submit" name="submit" value="Upload" />
        </form>
      
        <?php
            $files = glob("Data/*");
            if ($files != null) {
                foreach ($files as &$filename) {
					if (strcmp($filename, ".htaccess") != 0) {
						?>
						<br/>
						<a href="<?php echo $filename ?>" download><?php echo ltrim($filename, "Data/"); ?></a>
						&nbsp;&nbsp;&nbsp;
						<a href="delete.php?file=<?php echo $filename ?>">Delete</a>
						<br/>
						<?php
					}
                }
            } else {
                echo "Folder is empty!";
            }
        ?>
      
    </body>
</html>

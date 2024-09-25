<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Select file:
        <br> <br>
        <input type="file" name="FileToUpload" id="FileToUpload">
        <br> <br>
        <input type="submit" value="Upload" name="submit">
    </form>

    <?php

    if (isset($_FILES['FileToUpload'])) {
        $path = $_FILES['FileToUpload']['name'];
        $uploadTo = ',/upload/' . $path;
        $imageType = pathinfo($path, PATHINFO_EXTENSION);

        # Checks If File Is Empty
        if (empty($path)) {
            echo "<p style=color:red>*Please upload file</p";
        } else {

            #Check File Format
            if ($imageType != 'jpg' && $imageType != 'png') {
                echo "<p style=color:red>*Only JPG and PNG files are allowed</p";
            } else {

                #Checking Size
                if ($_FILES['FileToUpload']['size'] > 50000) {
                    echo "<p style=color:red>*Max 5kb allowed</p";
                } else {

                    #Check If File Already Exists
                    if (file_exists($path)) {
                        echo "<p style=color:red>*File already exist in folder<p>";
                    } else {

                        #Uploading File
                        if (move_uploaded_file($_FILES["FileToUpload"]["tmp_name"], $path)) {
                            echo "<p style=color:green>Image uploaded<p>";
                        }
                    }
                }
            }
        }
    }

    ?>


</body>

</html>
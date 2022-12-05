<?php

// file form is submited check ...
if(isset($_POST['submit'])){

    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    // if file is not empty display file name
 if(!empty($_FILES['upload']['name'])){

        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        // get file ext
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate file ext
        if(in_array($file_ext, $allowed_ext)){

// if file is less than or equal to 1000000 bit= 1mb 
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);

                $message = '<p style="color: green; border-bottom: 1px solid green; width: 9rem;">File uploaded.</p>';

            } else{
                $message = '<p style="color: red; border-bottom: 1px solid red; width: 9rem;">File is too large.</p>';
            }

        } else{
            $message = '<p style="color: red; border-bottom: 1px solid red; width: 9rem;">Invalid image type.</p>';
        }


 } else{
// if file is empty display ...
        $message = '<p style="color: red; border-bottom: 1px solid red; width: 9rem;">Please Choose a file.</p>';

    }
    ;
}
;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- display message from else statement if file is empty -->
    <?php echo $message ?? null; ?>

    <!-- form -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

<h1>Select image to upload:</h1>
<!-- file -->
<input type="file" name="upload"><br><br>
<!-- submit -->
<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>
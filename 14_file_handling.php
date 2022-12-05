<?php
// <---- FILE HANDLING ---->

/*
File handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files.
*/

// fetching a file from the extras folder
$file = 'extras/users.txt';

if(file_exists($file)){

    // displays all data in the file
    // echo readfile($file);

    // call data + ('r') = reading
    $handle = fopen($file, 'r');
    // read data
    $contents = fread($handle, filesize($file));
    // close data being called
    fclose($handle);

    echo $contents;
} else{
// doing this will create a new file called users.txt if the file is deleted.

    // ('w') = write
    $handle = fopen($file, 'w');
    // PHP_EOL is a php line break
    $contents = 'Shane' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}

?>
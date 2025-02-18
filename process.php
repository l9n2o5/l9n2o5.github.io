<?php
if ($_POST) {
    $filename = 'results.txt';

    $new_content = '';
    foreach ($_POST as $key => $value) {
        $new_content .= $key . ' : ' . $value . PHP_EOL;
    }

    # Get the existing content if the file exists and is readable
    if (is_readable($filename)) {
        $existing_content = file_get_contents($filename);
    } else {
        $existing_content = '';
    }

    /*
    Join the new content with the existing content
    PHP_EOL is short for PHP End of Line and it's a constant that represents a line break
    Using this prevents all your text from showing up on one line in the file
    */
    $content = $new_content . '--------' . PHP_EOL . $existing_content;

    # Write the final $content string to the file
    file_put_contents($filename, $content);
}
?>
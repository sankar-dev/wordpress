<?php
$myfile = fopen("urlfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST['List_URL']);
fwrite($myfile, PHP_EOL);
fwrite($myfile, $_POST['Des_URL']);
fwrite($myfile, PHP_EOL);
fwrite($myfile, $_POST['Comments_URL']);
fwrite($myfile, PHP_EOL);
fclose($myfile);
header("Location: /wordpress/wp-admin/admin.php?page=Testplugin-settings");
?>
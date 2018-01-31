<?php

$output = shell_exec('./check.sh');
$output=explode('AOR', $output);
array_shift($output);
//print_r($output);
echo "<table border='1'>";
foreach ($output as $key => $value) {
    echo "<tr><td>".$key."<td>".$value."</tr>";
}

?>


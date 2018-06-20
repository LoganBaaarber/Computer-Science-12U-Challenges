
<?php
header('Content-Type: text/plain');


function passwordGen() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()_+~>';
    $result = '';
    for ($i = 0; $i < 8; $i++)
        $result .= $characters[mt_rand(0, 61)];
        
        echo $result;
        return $result;
}
function userNameGen() {
    echo substr('$output', 3);
}
$output = file('cc5_in.txt');
$fileOut = fopen('cc5_output.txt', 'w');


foreach ($output as $loop) {
    echo $loop;
    $password = passwordGen();
   $result = $loop . "\t" . $password . "\n";
   fwrite($fileOut, $result);
}
fclose($output);
fclose($fileOut);
?>
<?php
$Password = $_GET['pw'];
$Target = $_GET['port'];
switch ($Password)
{
    case "EeAldRyyvjUQRBZ9yoc3J4Jv";
        if (filter_var($Target, FILTER_VALIDATE_INT)) {
        exec('screen -dm zmap -p {$Target} -o /var/www/html/$Target.txt 2>&1',$Beans); foreach ($Beans as $Bean) echo $Bean;
        echo "Executed scan on port:$Target http://".$_SERVER['SERVER_ADDR']."/$Target";
    } else {
        echo("Variable is not an integer");
    }
    break;
    default;
    echo "failed security challenge";
    break;
}
?>

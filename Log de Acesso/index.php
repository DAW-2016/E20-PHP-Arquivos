<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
    /**
     * Created by PhpStorm.
     * User: lucas
     * Date: 14/07/16
     * Time: 16:33
     */

    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

    $myfile = fopen("log.txt","a+") or die("Unable to open file!");


    $loog = $_SERVER['REMOTE_ADDR']." ".strftime('%A, %d de %B de %Y', strtotime('today'))." ".date("H:i:s")."\n";

    echo $myFile;

    fwrite($myfile, $loog);

    fclose($myfile);
    ?>

    </body>
</html>



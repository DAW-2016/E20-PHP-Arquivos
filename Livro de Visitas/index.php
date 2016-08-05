<!DOCTYPE html>
<html>
  <head>
    <title>Livro de Visitas</title>
    <meta charset="utf-8" />

  </head>
  <body>
    <form action="index.php" method="post">
      Nome: <input type="text" name="nome" /><br/>
      Local: <input type="text" name="local" /><br />
      <input type="submit" />
    </form>

    <?php

      if(isset($_POST["nome"]) && isset($_POST["local"])){
        $myfile = fopen("log.txt","a+") or die("Unable to open file!");
        fwrite($myfile,$_POST["nome"]." ".$_POST["local"]."\n");
        fclose($myfile);
      }

      setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
      date_default_timezone_set('America/Sao_Paulo');

      $myfile = fopen("log.txt","a+") or die("Unable to open file!");

      while(!feof($myfile)) {
        $linha = fgets($myfile);
        echo "$linha <br>";
      }
    ?>
  </body>

</html>

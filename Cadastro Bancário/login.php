<?php
  require_once 'Pessoa.php';
  $identificador = $_POST["identificador"];
  //echo "$identificador";
  $myfile = fopen("login.txt","a+") or die("Unable to open file!");

  while(!feof($myfile)) {
    $linha = fgets($myfile);

    $linha = explode(" ", $linha);

    $linha[1] = rtrim($linha[1]);
    if($linha[0] == "Cliente:"){

      if($linha[1]==$identificador){

        $dados["nome"] = fgets($myfile);

        $dados["cpf"] = fgets($myfile);
        $dados["endereco"] = fgets($myfile);
        $dados["agencia"] = fgets($myfile);
        $dados["contaCorrente"] = fgets($myfile);
        $conta = new Pessoa($dados);

        echo $conta->nome."<br />";
        echo $conta->cpf."<br />";
        echo $conta->endereco."<br />";
        echo $conta->agencia."<br />";
        echo $conta->contaCorrente."<br />";
      }
      else{
        // echo "daw";
        // echo $linha[1];
        // echo "daw";
      }
    }
  }


?>

<?php


    require_once 'Pessoa.php';

    $myfile = fopen("login.txt","a+") or die("Unable to open file!");

    $info["nome"] = $_POST["nome"];
    $info["cpf"] = $_POST["cpf"];
    $info["endereco"] = $_POST["endereco"];
    $info["agencia"] = $_POST["agencia"];
    $info["contaCorrente"] = $_POST["contaCorrente"];
    $info["identificador"] = $_POST["identificador"];


    $daw = new Pessoa($info);

    fwrite($myfile, "Cliente: ".$daw->identificador."\n");
    fwrite($myfile, $daw->nome."\n");
    fwrite($myfile, $daw->cpf."\n");
    fwrite($myfile, $daw->endereco."\n");
    fwrite($myfile, $daw->agencia."\n");
    fwrite($myfile, $daw->contaCorrente."\n\n");


    fclose($myfile);
    header('Location: index.html');

?>

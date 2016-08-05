<?php

   class Pessoa{

    public $nome;
    public $cpf;
    public $endereco;
    public $agencia;
    public $contaCorrente;
    public $identificador;

    function __construct($data) {

      $this->nome = $data["nome"];
      $this->cpf = $data["cpf"];
      $this->endereco = $data["endereco"];
      $this->agencia = $data["agencia"];
      $this->contaCorrente = $data["contaCorrente"];
      $this->identificador = $data["identificador"];
    }

  }

 ?>

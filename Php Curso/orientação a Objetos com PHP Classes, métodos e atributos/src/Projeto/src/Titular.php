<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNome(string $nome)
    {
        if(mb_strlen($nome) < 5){
            echo "Nome precisa ter mais de 5 caracteres";
            exit();
        }
        $this->nome = $nome;


    }
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
}

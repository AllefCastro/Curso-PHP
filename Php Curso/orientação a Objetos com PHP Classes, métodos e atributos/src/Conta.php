<?php


class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar)
    {
        if($valorASacar > $this->saldo){
            echo "Saldo indisponivel";
        } else{
            $this->saldo -= $valorASacar;
        }
    }
    public function depositar(float $valorADepositar)
    {
        if($valorADepositar <=0){
            echo "Valor precisa ser maior que 0";
        } else{
            $this->saldo += $valorADepositar;
        }
    }


}




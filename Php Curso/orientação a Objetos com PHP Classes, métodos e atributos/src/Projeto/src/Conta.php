<?php


class Conta
{
    private $titular;
    private float $saldo = 0;

    private static int $quantContas = 0;



    public function __construct(Titular $titular)
    {

        $this->titular = $titular;
        $this->saldo = 0;

        echo "Conta criada com Sucesso" . PHP_EOL;

        self::$quantContas++;
        //Conta::$quantContas++;

    }
    public function __destruct()
    {

        self::$quantContas--;


    }
    public function sacar(float $valorASacar):void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo indisponivel";
            return;
        }
            $this->saldo -= $valorASacar;
     
    }
    public function deposite(float $valorADepositar):void
    {
        if($valorADepositar <= 0){
            echo "Valor precisa ser maior que 0";
            return;
        }
            $this->saldo = $this->saldo + $valorADepositar;
        
    }
    public function transfere(float $valorAtransferir, Conta $contaDestinho):void
    {       
        if($valorAtransferir > $this->saldo){   
            echo "Saldo indisponível";
            return;
        }
            $this->sacar($valorAtransferir);
            $contaDestinho->deposite($valorAtransferir);


    }
 
    public function recuperaSaldo():float
    {

        return $this->saldo;
    
    }
    public static function recuperaQuantContas(){

        return self::$quantContas;
    }

    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }
}




<?php


class ContaBancaria // entidade model
{
    //public  + ||private -(dentro da classe)||  protecte #(so os filhos)

    private $nomeTitular;  // varchar  150
    private $numeroAgencia; // int
    private $numeroConta;  // int
    private $saldo;        // decimal
    private $banco;        // varchar 150

    //construtot
    /**
     * ContaBancaria constructor.
     * @param $nomeTitular
     * @param $numeroAgencia
     * @param $numeroConta
     * @param $saldo
     * @param $banco
     */
    public function __construct(
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo,
        string $banco)
    {
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->banco = $banco;
        echo "Conta Criada com sucesso!!... <hr>";
    }

    // obiter saldo
    public function obiterSaldo()
    {
        return "saldo .. R$ ". $this->saldo;
    }
    // sacar
    public function depositar($valor)
    {
        //busca salso  e adiciaona valor
        $this->saldo += $valor;
        echo "Valor R$ $valor depositado com sucesso";
    }

    public function saca($saque)
    {
        $this->saldo -= $saque;
        echo "Saque de $saque realizado com susseco seu ".$this->obiterSaldo();
    }


public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

public function setNomeTitular($nomeTitular): void
{
    $this->nomeTitular = $nomeTitular;
}
public function getNumeroAgencia()
{
    return $this->numeroAgencia;
}
public function setNumeroAgencia($numeroAgencia): void
{
    $this->numeroAgencia = $numeroAgencia;
}
public function getNumeroConta()
{
    return $this->numeroConta;
}
public function setNumeroConta($numeroConta): void
{
    $this->numeroConta = $numeroConta;
}
public function getSaldo()
{
    return $this->saldo;
}
public function setSaldo($saldo): void
{
    $this->saldo = $saldo;
}
public function getBanco()
{
    return $this->banco;
}
public function setBanco($banco): void
{
    $this->banco = $banco;
}

}

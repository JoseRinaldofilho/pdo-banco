<!-- cria um classe venda
  com at
  -data -produto -quantidade -valortotal
  + exibirDadosvendas()
  instaciar atravez do construtor
  invoca o metodo

  -->
<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valortotal;
    //construotor

    /**
     * Venda constructor.
     * @param $data
     * @param $produto
     * @param $quantidade
     * @param $valortotal
     */
    public function __construct($dataf, $produto, $quantidade, $valortotal)
    {
        $this->data = $dataf;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valortotal = $valortotal;
    }

    public function exibirVendas()
    {
        echo "Data ". $this->data."<hr>";
        echo "Produdo: ".$this->produto."<hr>";
        echo "Quantidade: ".$this->quantidade."<hr>";
        echo "Valor R$ ".$this->valortotal."<hr>";
    }



}
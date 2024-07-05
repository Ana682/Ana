<?php 
    class Caderno {
        //Atributos
     public $tipo;
     public $cor;
     public $nfolhas;
     public $aberto;
    //Metodos  e metodos especiais (Getters e Setters)
    
    public function __construct()// para construção automaticamente 
    { 
       $this->tipo = "Espiral";
       $this->cor = "Azul";

    }
    public function getTipo(){ //Getters - permite acesso, dificultando acesso direto, garantindo segurança
        return $this->tipo;
    }
    public function setTipo($t){ //Setters - modificam coisas dentro dos objetos, com parâmetros
        $this->tipo = $t;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    public function folhear(){
        if ($this->aberto = true) {
            echo "<p>É possível folhear o livro A Rainha Vermelha!</p>";
        } else {
            echo "<p>Não é possível folhear o livro A Rainha Vermelha, estou fechado!!</p>";
        }
    }

    public function abrir (){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;

 
    }
    }
?>
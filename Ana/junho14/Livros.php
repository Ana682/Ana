<?php 
    class Livros {
        //Atributos
     public $titulo;
     public $cor;
     public $nfolhas;
     public $aberto;
    //Metodos e metodos especiais (Getters e Setters)
    public function __construct()// para construção automaticamente 
    { 
       $this->titulo = "Terror";
       $this->cor = "Verde";

    }
    public function getTitulo(){ //Getters - permite acesso, dificultando acesso direto, garantindo segurança
        return $this->titulo;
    }
    public function setTitulo($t){ //Setters - modificam coisas dentro dos objetos, com parâmetros
        $this->titulo = $t;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    function folhear(){
        if ($this->aberto = true) {
            echo "<p>É possível folhear o livro A Rainha Vermelha!</p>";
            echo "<p>É possível folhear o livro Mulheres que correm com os lobos!!</p>";

        } else {
            echo "<p>Não é possível folhear o livro A Rainha Vermelha, estou fechado!!</p>";
            echo "<p>Não é possível folhear o livro Mulheres que correm com os lobos, estou fechado!!</p>";

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
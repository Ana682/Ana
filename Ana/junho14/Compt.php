<?php 
    class Compt {
        //Atributos
     public $tipo;
     public $formato;
     public $cor;
     public $teclado;
     public $aberto;
       //Metodos  e metodos especiais (Getters e Setters)
    
       public function __construct()// para construção automaticamente 
       { 
          $this->tipo = "Sansung";
          $this->formato = "Retangulo";
   
       }
       public function getTipo(){ //Getters - permite acesso, dificultando acesso direto, garantindo segurança
           return $this->tipo;
       }
       public function setTipo($t){ //Setters - modificam coisas dentro dos objetos, com parâmetros
           $this->tipo = $t;
       }
       public function getFormato(){
           return $this->formato;
       }
       public function setFormato($c){
           $this->formato = $c;
       }
 
        public function folhear (){
        if ($this->aberto == true) {
            echo "<p>É possível abrir o computador!</p>";
            echo "<p>É possível abrir o celular !!</p>";

        } else {
            echo "<p>É possível fechar o computador!!</p>";
            echo "<p>É possível fechar o celular!!</p>";

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
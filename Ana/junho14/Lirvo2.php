<?php 
    class Livro2 {
        //Atributos
     var $titulo;
     var $cor;
     var $categoria;
     var $autor;
     var $nfolhas;
     var $capitulos;
     var $aberto;
    //Metodos
    function folhear(){
        if ($this->aberto = true) {
            echo "<p>É possível folhear o livro A Rainha Vermelha!</p>";
        } else {
            echo "<p>Não é possível folhear o livro A Rainha Vermelha, estou fechado!!</p>";
        }
    }

    function abrir (){
        $this->aberto = true;
    }

    function fechar(){
        $this->aberto = false;

 
    }
    }
?>
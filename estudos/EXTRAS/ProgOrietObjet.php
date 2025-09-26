<?php
class Post {
    // O construtor sempre vai ser publico e vai fazer processos assim que a class for definida
    public function __construct($t, $c) {
        $this->setTitulo($t);
        $this->setCorpo($c);
    }

    private $titulo;
    private $nome;
    private $descricao;
    private $data;
    private $corpo;

     public function getTitulo(){
        return $this->titulo;
     }

    public function setTitulo($t){
        if(is_string($t)){
            $this->titulo = $t;
        }
    }

    public function getCorpo(){
        return $this->corpo;
     }

    public function setCorpo($c){
        if(is_string($c)){
            $this->corpo = $c;
        }
   }
 
}

class Pessoa{
    public $nome;
    private $cor;
    
}

$post = new Post("Este é o titulo da Minha página","Olá, este é o corpo da página!");

echo $post->getTitulo()."<br>".$post->getCorpo();
?>
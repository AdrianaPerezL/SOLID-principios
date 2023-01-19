<?php
//El principio de LiskovSustitution 

class Libro{
    public function númPags(){
    //Código
    }

    public function minDuración(){
    //Código
    }

    public function tipoDePasta(){
    //Código
    }

    public function formatoAudio(){
    //Código
    }
}

class AudioLibroLaIliada extends Libro{

    public function tipoDePasta(){
    //Código
    }
}

class LibroFísicoElPrincipito extends Libro{
    
    public function minDuración(){
    //Código
    }
}
?>
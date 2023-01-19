<?php
//El principio de LiskovSustitution nos ayuda para retomar características de una opción a otras pero de forma 
//las caracteristicas de la opción principal no afecten a las demás opciones 

class Libro{//La opción del libro y las tareas o características que posee
    public function númPags(){//cuantas pags.
    //Código
    }

    public function minDuración(){//Cuanto es su contenido en minutos
    //Código
    }

    public function tipoDePasta(){//que tipo de pasta posee
    //Código
    }

    public function formatoAudio(){//cual es el formato de audio
    //Código
    }
}

class AudioLibroLaIliada extends Libro{//Se crea una clase con la información del audio libro de la Iliada, tomando en cuenta las caracteristicas del libro creado

    public function tipoDePasta(){//Pero esta característica no forma parte de un audiolibro
    //Código
    }
}

class LibroFísicoElPrincipito extends Libro{//Información del libro del principito toma las características de la clase libro
    
    public function minDuración(){//Pero la característica no corresponde
    //Código
    }
}

//
?>

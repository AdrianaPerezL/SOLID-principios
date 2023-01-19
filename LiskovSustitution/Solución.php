<?php


//La solución es que podemos crear opciones con funciones únicas y parecidas, que sean especificas para no generalizar
class AudioLibro{//creamos una opción solo para los audiolibros

    public function minDuración(){//posee la función de conocer la duración en minutos
        //Código
    }

    public function formatoAudio(){//posee la función de conocer el formato
        //Código
 
    }
}

class LibroFísico{//opción solo para libros físicos

    public function númPags(){//para saber número de págs.
        //Código
    }

    public function tipoDePasta(){//para saber el tipo de pasta 
        //Código
    }
}

//Al agregar un audiolibro estaremos ocupando con la palabra 'extends' las características ya planteadas en la clase de audiolibro
class AudioLibroLaIliada extends LibroFísico{

    //Se vuelven a escribir dichas funciones
    public function númPags(){
        //Código
    }
    
    //Cuando ocupamos las opciones de una clase podemos tomar todas o solo que necesitemos, y el código siempre estará bien
    public function tipoDePasta(){
        //Código
    }
}
?>

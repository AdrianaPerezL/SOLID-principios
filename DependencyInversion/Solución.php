<?php
 
 //para solucionarlo debemos crear una interface que se llame cursoInterface donde colocaremos el código para que nos
 //muestre el curso
interface cursoInterface{
    //Código
}


class Estudiante{
    protected $curso;

    public function __construct(cursoInterface $curso)
    {//Ahora la clase estudiante ya no depende de una clase pequeña sino que toma el valor de la interface
        $this->curso = $curso;
    }

}


//Y a su vez las clases implementan la interface creada
class Primero implements cursoInterface{
//Código
}

class Segundo implements cursoInterface{
//Código
}

?>

<?php

//El principio de dependency inversion nos dice que las clases principales, o sea las opciones generales
//No pueden depender de las específicas

//Por ejemplo tenemos la opción de estudiantes, necesitamos que nos imprima el curso
//Pero esta clase general retoma valores de una clase más pequeña que ella, es decir la clase Primero
//Asi que esta clase depende de las mas pequeñas y tendremos que editarla constantemente.
class Estudiante{
    protected $curso;
  


    public function __construct()
    {
        $this->curso = new Primero();
    }

}


//soy una clase más pequeñita
class Primero{
 //Código de estudiante de primer curso
}

//Yo también soy una clase pequeñita
class Segundo{
 //Código de estudiante de segundo curso
}

?>

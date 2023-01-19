<?php


/* Los principios SOLID son reglas que ayudan a desarrollar mejor el diseño de una aplicación, ayudan a entender mejor el código
y son buenas prácticas que se deben tomar en cuenta al programar

El principio de responsabilidad única es cuando algo posee metodos para realizarse dentro de su mismo entorno
por ejemplo si existe una libreria, esta posee diversos grupos de cosas que se relacionan, no pondremos en su
tipo dentro de esta ya que se refiere 
*/


class Libreria{
    protected $libros;

    public function mostrarLibros(){
        //código
    }

    public function impresos(){
        //código
    }

    public function audiolibros(){
        //código
    }

    public function cocina(){
        //código
    }

    public function educación(){
        //código
    }

    public function autoayuda(){
        //código
    }

    public function salud(){
        //código
    }

    public function literatura(){
        //código
    }

    public function agregarLibros(){
        //código
    }

    public function quitarLibros(){
        //código
    }

}

class Usuario{
    public function logIn(){
        //código
    }

    public function signUp(){
        //código
    }
}

class pagoLibros{

    public function tarjetaDébito(){
        //código
    }

    public function tarjetaCrédito(){
        //código
    }
}
?>
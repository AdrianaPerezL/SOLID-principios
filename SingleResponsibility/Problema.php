<?php


/* Los principios SOLID son reglas que ayudan a desarrollar mejor el diseño de una aplicación, ayudan a entender mejor el código
y son buenas prácticas que se deben tomar en cuenta al programar

El principio de responsabilidad única es cuando algo posee metodos para realizarse dentro de su mismo entorno
por ejemplo al ingresar a la página de una libreria podemos realizar diferentes opciones como los siguientes
*/


class Libreria{ //La libreria
    protected $libros; 

    public function mostrarLibros(){ //Podemos observar los libros
        //código
    }

    public function impresos(){ //Podemos ver cuales están disponibles fisicamente
        //código
    }

    public function audiolibros(){//Podemos ver cuales están disponibles en audiolibros
        //código
    }

    public function cocina(){ //Sus tipos 
        //código
    }

    public function educación(){ //Sus tipos 
        //código
    }

    public function autoayuda(){//Sus tipos 
        //código
    }

    public function salud(){//Sus tipos 
        //código
    }

    public function literatura(){ //Sus tipos 
        //código
    }

    public function agregarLibros(){//La opción de agregar libros a nuestro pedido
        //código
    }

    public function quitarLibros(){//La opción de quitar libros a nuestro pedido
        //código
    }
//Pero si vemos hay muchas opciones que se pueden hacer en la parte de la pagina principal de la página
//Por tal razón, necesitamos agruparlas para que cada opción realice una tarea en especifico de acuerdo a su responsabilidad
//Para esto ocupamos el principio y agrupamos las tareas(funciones) en diferentes opciones(clases)
}


class Usuario{//Accedemos la parte de nuestro perfil
    public function logIn(){//Para entrar a nuestra cuenta
        //código
    }

    public function signUp(){//Para registrarnos
        //código
    }
}

class pagoLibros{//La opción de pagar los libros

    public function tarjetaDébito(){//Opción para pagar con tarjeta de débito
        //código
    }

    public function tarjetaCrédito(){//Opción para pagar con tarjeta de crédito
        //código
    }
}
?>

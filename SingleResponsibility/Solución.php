<?php

//Es así como en la solución vemos que se ha colocado diversas opciones dentro de la página
//Estos pueden ser botones y cada uno posee responsabilidades especificas de acuerdo a su nombre

class Libreria{ //Opción de libreria, lo que se muestra en la pág.principal
    protected $libros;

    public function mostrarLibros(){//Tarea que se realiza al elegir dicha opción es mostrar los libros
        //código
    }
}

class Tipos{ //Al elegir el botón de tipos
    
    public function impresos(){//Tarea de mostrar los impresos
        //código
    }

    public function audiolibros(){//Tarea de mostrar los audiosLibros
        //código
    }
}

class Categorías{//Al elegir categorías

    public function cocina(){//Tarea de mostrar los de tipo cocina
        //código
    }

    public function educación(){//Tarea de mostrar los de tipo educación
        //código
    }

    public function autoayuda(){//Tarea de mostrar los de tipo autoayuda
        //código
    }

    public function salud(){//Tarea de mostrar los de tipo salud
        //código
    }

    public function literatura(){//Tarea de mostrar los de tipo literatura
        //código
    }
}

class obtenerLibros{ //Al elegir un botón para obtener el libro
    public function agregarLibros(){//Agrega los libros 
        //código
    }

    public function quitarLibros(){//Quita los libros escogidos
        //código
    }
}

class Usuario{//Al ingresar a nuestra cuenta

    public function logIn(){//Ingresaremos a una cuenta que hemos guardado
        //código
    }

    public function signUp(){//Nos registrará por primera vez
        //código
    }
}

class pagoLibros{//Al elegir pagar los libros

    public function tarjetaDébito(){//Realiza la tarea de pagar con tarjeta de débito
        //código
    }

    public function tarjetaCrédito(){//Realiza la tarea de pagar con tarjeta de crédito
        //código
    }
}


?>

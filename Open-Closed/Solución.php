<?php

//Se crea una clase Empleados donde se compara el salario según el cargo que la persona tenga
class Empleados{
    public function salario(CalcSalario $cargo){
        $cargo->calculoSalario();
    }
}


//Es una clase exclusiva para el cargo de gerente
class Gerente implements CalcSalario{ //Se ocupa "implements" para implementar la interface con el método de calcular el salario en esta clase
    public function calculoSalario(){ //ocupa la misma función declarada en la interface CalcSalario

    }
}

//Es una clase exclusiva para el cargo de diseñador
class Diseñador implements CalcSalario{ //Se ocupa "implements" para implementar la interface con el método de calcular el salario

    public function calculoSalario(){ //ocupa la misma función declarada en la interface CalcSalario

    }
}

//Es una clase exclusiva para el cargo de Administrador
class Administrador implements CalcSalario{ //Se ocupa "implements" para implementar la interface con el método de calcular el salario
    public function calculoSalario(){//ocupa la misma función declarada en la interface CalcSalario

    }
}

// Se ha creado una interface CalcSalario para que se implemente en cualquier clase que se desee ocupar
// se ocupan para no modificar el código de todas las clases
// Todas las tareas o funciones que se asigne a la interface deben agregarse en la clase que haga uso de dicha interface
interface CalcSalario{
    public function calculoSalario();
}
?>
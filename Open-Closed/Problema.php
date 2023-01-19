<?php
//El principio de Open-closed nos ayuda a modificar cierta parte del código sin afectar más opciones (clases) o funciones(tareas)

//La clase Empleados emplea un método llamado calculo Salario para calcular el salario de los empleados
// pero dicho método ira modificando a la clase a medida se agreguen otras
//Es decir que si se agrega asistente por ejemplo, debemos modificar y afectar por ende la función 'calculoSalario'
class Empleados{

    function calculoSalario($cargo){//Se agrega una tarea que evalue el sueldo del empleado:
        if($cargo === "Gerente"){//Sí es gerente, calculará salario
            //código de pago
        }else if($cargo === "Diseñador"){//Sí es diseñador
            //código de pago
        }else if($cargo === "Administrador"){//Sí es administrador
            //código de pago
        }
    }
}

class Gerente{//Código para mostrar la información del gerente, el nuevo empleado que se ha agregado
    //Código
}

class Diseñador{//Información del diseñador
    //Código
}

class Administrador{//Administrador
    //Código
}

//Pero si se agrega otro empleado, la función para calcular salario también se ira modificando 

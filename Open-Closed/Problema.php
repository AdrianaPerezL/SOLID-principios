<?php
//El principio de Open-closed nos ayuda a modificar cierta parte del código sin afectar más clases o funciones

//La clase Empleados emplea un método llamado calculo Salario para calcular el salario de los empleados
// pero dicho método ira modificando a la clase a medida se agreguen otras
class Empleados{

    function calculoSalario($cargo){
        if($cargo === "Gerente"){
            //código de pago
        }else if($cargo === "Diseñador"){
            //código de pago
        }else if($cargo === "Administrador"){
            //código de pago
        }
    }
}

class Gerente{
    //Código
}

class Diseñador{
    //Código
}

class Administrador{
    //Código
}
?>
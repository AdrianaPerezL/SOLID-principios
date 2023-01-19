<?php 

//El principio de InterfaceSegregation nos dice que al crear interfaces se y retomarlas en otro lugar 
//se deben colocar todo el contenido que tenga la interface
//Como vimos en el Liskov sustitution, la clase o opción que contiene tareas asignadas podemos tomar una tarea de esas
//pero para las interfaces debemos tomar todas las tareas que se asignen

//Por ejemplo hacemos una interface que contenga 3 tipos de menú de un restaurante
interface Menús{
    public function menú1();
    public function menú2();
    public function menú3();

}

//y el cliente solo nos pide el menú1
class Cliente1 implements Menús{
    public function menú1();
    //como estamos ocupando la interface menú y ahí estarán agregados 3 menús, en esta función se deberan agregar los otros 2
    //Y si no se agregan el código esta incorrecto
}

//Lo mismo con un cliente dos 
class Cliente2 implements Menús{

    public function menú3();
}
?>

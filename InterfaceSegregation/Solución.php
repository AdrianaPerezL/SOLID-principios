<?php 

//Para solucionarlo debemos crear la interface que contenga cada menu
interface Menú1{//Interface para menú1
    public function opción1();
}

interface Menú2{//Interface para menú2
    public function opción2();
}

interface Menú3{//Interface para menú3
    public function opción3();
}

//Así cuando el cliente pida el menú3, llamaremos las interface (con laa palabra "implements")que contiene dicho menú
class Cliente1 implements Menú3{
    public function opción3();
}

class Cliente2 implements Menú1{
    public function opción1();

}

class Cliente3 implements Menú2{
    public function opción2();
}

class Cliente4 implements Menú1{
    public function opción1();
}
?>

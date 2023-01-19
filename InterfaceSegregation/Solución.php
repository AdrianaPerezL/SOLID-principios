<?php 
interface Menú1{
    public function opción1();
}

interface Menú2{
    public function opción2();
}

interface Menú3{
    public function opción3();
}


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
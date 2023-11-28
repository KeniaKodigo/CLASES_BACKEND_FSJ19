<?php

#clase Padre
class TaskDeveloper{

    public function code(){
        //code..
    }

    public function unitTest(){
        //code..
    }

    public function dataAnalysis(){
        //code..
    }

    public function design(){
        //code..
    }
}

class FrontEndDeveloper extends TaskDeveloper{

    public function unitTest(){
        throw new Exception("Unable to perform the test action");
    }

    public function dataAnalysis(){
        throw new Exception("");
    }
}

class FullSatck extends TaskDeveloper{

}

class Tester extends TaskDeveloper{

}

$frontEnd = new FrontEndDeveloper();
$frontEnd->code(); //
$frontEnd->unitTest();

//aplicando el principio LISKOV (clases abstractas, interfaz)
/**
 * PHP NO PERMITE LA HERENCIA MULTIPLE entre clases
 * PHP permite implementar varias interfaces
 */

interface taskFront{
    public function design();
}



interface taskBackend{
    public function code();
}

interface taskBD{
    public function dataAnalysis();
}

interface taskTest{
    public function testing();
}

class FrontEn implements taskFront, taskBackend{
    public function design()
    {
        
    }

    public function code()
    {
        
    }
}

class FullStack implements taskFront, taskBackend, taskBD{
    public function design()
    {
        
    }

    public function code()
    {
        
    }

    public function dataAnalysis()
    {
        
    }
}

?>
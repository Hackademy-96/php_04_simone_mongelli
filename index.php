<?php 
//creare una macchina di batman composta da 2 parti 
//una parte anteriore che avrà lo scopo di attaccare 
//una parte posteriore  che avrà lo scopo di difendere 

// class Batmobile {
//     public $parteAnteriore;
//     public $partePosteriore;

//     public function __construct(ParteAnteriore $_parteAnteriore,PartePosteriore $_partePosteriore) //Dependency Injection
//     { 
//         $this->parteAnteriore = $_parteAnteriore;
//         $this->partePosteriore = $_partePosteriore;
//     }
    
//     public function pulstanteAttacca(){

//         $this->parteAnteriore->attacca();
    
//     }
//     public function pulstanteDifendi(){

//         $this->partePosteriore->difendi();
    
//     }
// }



//  abstract class ParteAnteriore{
//     abstract public function attacca();
// }

// class Razzi extends ParteAnteriore{
//     public function attacca(){
//         echo"pum pum! \n";
//     }
// }

// class Laser extends ParteAnteriore{
//     public $color;

//     public function __construct($_color)
//     {
//         $this->color = $_color;
//     }
//     public function attacca(){
//         echo"pew pew! Di colore $this->color  \n";
//     }
// }



// abstract class PartePosteriore{ 
//     abstract public function difendi();

// }

//   class Scudo extends PartePosteriore{
//     public function difendi(){
//         echo" non mi fai male! \n";
//     }


// }

// class Fumo extends PartePosteriore{
//     public function difendi(){
//         echo"non mi vedi! \n";
//     }
// } 




// $razzi1 = new Razzi();

// $scudo1 = new Scudo();

// $batman1= new Batmobile($razzi1, $scudo1);  //Object Composition 

// $batman1->pulstanteAttacca();
// $batman1->pulstanteDifendi();

// $batman2 = new Batmobile(new Laser("verde"), new Scudo());


// $batman2->pulstanteAttacca();


// $batman3 = new Batmobile(new Laser("giallo"), new Scudo());

// $batman3->pulstanteAttacca();


 class Computer{
    
    public $ram;
    public $schedaMadre;
    public $cpu;
    public $schedaVideo;
    public $dissipatore;
    public function __construct( Ram $_ram, SchedaMadre $_schedaMadre, Cpu $_cpu, SchedaVideo $_schedaVideo, Dissipatore $_dissipatore )
    {
        
        $this->ram = $_ram;
        $this->schedaMadre = $_schedaMadre;
        $this->cpu = $_cpu;
        $this->schedaVideo = $_schedaVideo;
        $this->dissipatore = $_dissipatore;
    }

    public function stampaComponenti(){
        $this->ram->componenti();
        $this->schedaMadre->componenti();
        $this->schedaVideo->componenti();
        $this->dissipatore->componenti();
        $this->cpu->componenti();
    }
    
}

 abstract class Ram {
    abstract public function componenti();
       
    
}
class ModelloRam8 extends Ram{
    public function componenti(){
        echo"io ho una potenza di basso livello 8Gb";
    }
}

class ModelloRam16 extends Ram{
    public function componenti(){
        echo"io ho una potenza di medio livello 16Gb";
    }
}

abstract class SchedaMadre {
    abstract public function componenti();
}

class ModelloShedaMadreI3 extends SchedaMadre{
    public function componenti(){
        echo"io ho una potenza di basso livello Intel Core I3 \n";
    }
}
class ModelloShedaMadreI5 extends SchedaMadre{
    public function componenti(){
        echo"io ho una potenza di medio livello Intel Core I5 \n";
    }
}
class ModelloShedaMadreI9 extends SchedaMadre{
    public function componenti(){
        echo"io ho una potenza di alto livello Intel Core I9 \n";
    }
}

class Cpu {
    public function componenti(){
        echo "io sono l'unità centrale di elaborazione \n";
    }
}

class SchedaVideo {
    public function componenti(){
        echo"io sono responsabile della rappresentazione delle immagini sullo schermo \n";
    }
}

class Dissipatore {
    public function componenti(){
        echo"io ti raffreddo tutto ";
    }
}


$builtPc1 = new Computer(new ModelloRam8,new ModelloShedaMadreI3, new Cpu, new SchedaVideo, new Dissipatore);
$builtPc1->stampaComponenti();
$builtPc2 = new Computer(new ModelloRam16,new ModelloShedaMadreI5, new Cpu, new SchedaVideo, new Dissipatore);
$builtPc2->stampaComponenti();

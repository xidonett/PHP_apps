<?php
/**

Cars class documentation example.

*/
class Cars{
    
    public $wheels = 4;
    public $engine = true;
    public $colors = array('green', 'yellow', 'cyan', 'grey', 'white', 'black', 'blue', 'beige');


    /**
        
     BMW method documentation example.

    */
     public function BMW()
     {
       echo "<p><span class='function-parametres' id='function-invoked'>The 'BMW' method of the Cars class has been executed.</span></p><br />";
     }

    /**
        
     DeLorean method documentation example.

    */
     public function DeLorean()
     {
       echo "<p><span class='function-parametres' id='function-invoked'>The 'DeLorean' method of the Cars class has been executed.</span></p><br />";
     }

    /**
        
     Toyota method documentation example.

    */
     public function Toyota()
     {
       echo "<p class='function-parametres' id='function-invoked' >The 'Toyota' method of the Cars class has been executed.</p><br />";
     }  

    /**
        
     Tesla method documentation example.

    */
     public function Tesla()
     {
       echo "<p class='function-parametres' id='function-invoked' >The 'Tesla' method of the Cars class has been executed.</p><br />";
     } 

    /**
        
     Nissan method documentation example.

    */
     public function Nissan()
     {
       echo "<p class='function-parametres' id='function-invoked' >The  'Nissan' method of the Cars class has been executed.</p><br />";
     }

    /**
        
     Pontiac method documentation example.

    */
     public function Pontiac()
     {
       echo "<p class='function-parametres' id='function-invoked' >The 'Pontiac' method of the Cars class has been executed.</p><br />";
     }
    
}

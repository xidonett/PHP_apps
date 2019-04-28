<?php

/**

Fruits class documentation example.

*/

 class Fruits{
    
    public $is_vegetable = 'no';
    public $is_rotten    = 'no';
    public $condition    = 'fresh'; 


     /**
        
        Prints out the 'banana' word on the screen.

     */
     public function Banana()
     {
       echo "<p><span class='function-parametres' id='function-invoked'>The 'banana' method of the Fruits class has been executed.</span></p><br />";
     }

     /**
        
        Prints out the 'pineapple' word on the screen.

     */
     public function Pineapple()
     {
       echo "<p><span class='function-parametres' id='function-invoked'>The 'pineapple' method of the Fruits class has been executed.</span></p><br />";
     }

     /**
        
        Prints out the 'apple' word on the screen.

     */
     public function Apple()
     {
       echo "<p class='function-parametres' id='function-invoked' >The 'apple' method of the Fruits class has been executed.</p><br />";
     }  
    
}
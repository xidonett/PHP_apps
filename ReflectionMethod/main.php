<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn1.iconfinder.com/data/icons/competitive-strategy-and-corporate-training/512/597_Command_computer_function_process_progress_game_gaming_genres_programing-256.png" rel="icon">
    <title> PHP reflections: ReflectionMethod and error-capturing</title>
  </head>
  <body>
    <p align="center"><img src="https://cdn1.iconfinder.com/data/icons/competitive-strategy-and-corporate-training/512/597_Command_computer_function_process_progress_game_gaming_genres_programing-256.png" alt="user functions calling" title="The property of iconfinder.com"></p>
    <form method="post" id="function-form">
      <fieldset>
        <legend align="center">ReflectionMethod class in PHP</legend>
        <p align="center">Available functions: <b>apple, banana, pineapple</b><br /><br />
          <input type="text" placeholder="Function name" name="form[func_name]">
        </p>
        <p align="center">
          <button type="submit" name="form[submit]"><i class="fas fa-print"></i> Print info</button>
          <button type="submit" name="form[clear]"><i class="fas fa-eraser"></i> Clear</button>
        </p>
      </fieldset>
    </form>
    
    <?php 

  if(!empty($_REQUEST)){

    if(isset($_REQUEST['form']['submit'])){
   
      $func_name = $_REQUEST['form']['func_name'];
      
      try{
      
      $func = new ReflectionMethod('Fruits', $func_name);

      echo "<div id='method-reflection-info'>";
      echo "<fieldset>";
      echo "<legend align='center'>ReflectionMethod Information</legend>";
      echo "<h2 align='center'>".$func->name." method</h2>";
      echo "<p>Name: <span class='function-parametres'> ".$func->name." </span> <br />Class: <span class='function-parametres'>".$func->class."</span>"."</p>";
      echo "<pre> Documentation: <br /> <span id='function-doc-comment' class='function-parametres'>".$func->getDocComment()."</span></pre>";
      echo "<p>Filename: <span class='function-parametres'>".$func->getFilename()."</span></p>";
      echo "<p>Method invokation:</p>";
      $func->invoke(new Fruits());
      echo "</fieldset>";
      echo "</div>";
      
      }catch(ReflectionException $ex){
        echo "<div id='function-error'>";
        echo "<fieldset>";
        echo "<legend align='center'>ReflectionException error</legend>";
        echo "<p style='color: red;'>";
        echo $ex->getMessage();
        echo "</p>";
        echo "</fieldset>";
        echo "</div>";
        
        
      }//end of catch block
    }//end of 'Get function' button trigger block

  if(isset($_REQUEST['form']['clear']))
    echo '<script>location.href="main.php";</script>';


  }//end of !empty($_REQUEST) check block

  //Our sample class for experiments
  class Fruits{
    
     /**
        
        Prints out the 'banana' word on the screen.

     */
     public function banana()
     {
       echo "<p><span class='function-parametres' id='function-invoked'>The method 'banana' of the Fruits class has been executed.</span></p><br />";
     }

     /**
        
        Prints out the 'pineapple' word on the screen.

     */
     public function pineapple()
     {
       echo "<p><span class='function-parametres' id='function-invoked'>The method 'pineapple' of the Fruits class has been executed.</span></p><br />";
     }

     /**
        
        Prints out the 'apple' word on the screen.

     */
     public function apple()
     {
       echo "<p class='function-parametres' id='function-invoked' >The method 'apple' of the Fruits class has been executed.</p><br />";
     }  
    
    }

    ?>
  </body>
</html>
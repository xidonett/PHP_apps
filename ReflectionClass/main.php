<?php 

require_once('includes/Fruits.php');
require_once('includes/ProgrammingLanguages.php');
require_once('includes/Cars.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn1.iconfinder.com/data/icons/competitive-strategy-and-corporate-training/512/597_Command_computer_function_process_progress_game_gaming_genres_programing-256.png" rel="icon">
    <title> PHP reflections: ReflectionClass and error-capturing</title>
  </head>
  <body>
    <p align="center"><img src="https://cdn1.iconfinder.com/data/icons/competitive-strategy-and-corporate-training/512/597_Command_computer_function_process_progress_game_gaming_genres_programing-256.png" alt="user functions calling" title="The property of iconfinder.com"></p>
    <form method="post" id="class-form">
      <fieldset>
        <legend align="center">ReflectionClass class in PHP</legend>
        <p align="center">Available classes: <b>Fruits, Cars, ProgrammingLanguages</b><br /><br />
          <input type="text" placeholder="Class name" name="form[class_name]">
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
   
      $class_name = $_REQUEST['form']['class_name'];
      
      try{
      
      $class_reflection = new ReflectionClass($class_name);

      echo "<div id='class-reflection-info'>";
      echo "<fieldset>";
      echo "<legend align='center'>ReflectionMethod Information</legend>";
      echo "<h2 align='center'>".$class_reflection->name." class</h2>";
      echo "<p>Class Name: <span class='class-parametres'>".$class_reflection->name."</span>"."</p>";
      echo "<pre> Documentation: <br /> <span id='class-doc-comment' class='class-parametres'>".$class_reflection->getDocComment()."</span></pre>";
      echo "<p>Filename: <span class='class-parametres'>".$class_reflection->getFilename()."</span></p>";
      echo "<p>Class Functions: ";
      echo "<ul>";
      $class_methods = $class_reflection->getMethods();
      foreach ($class_methods as $method) {
        echo "<li class='method-list'>$method</li>";
        echo "<br />";
      }
      echo "</ul></p>";
      echo "<p>This class contains <span class='class-parametres'>".count($class_methods)." methods</span>.</p>";
      echo "<p>Public variables: </p>";
      echo "<ul>";
      foreach ($class_reflection->getDefaultProperties() as $key => $value) {
        echo "<li class='variable-list'>".$key." = ";
        if(is_array($value)){
          echo print_r($value)."</li>";

        }
        else{
        echo $value."</li><br />";
        }
      }
      echo "</ul>";
      echo "<p>This class contains <span class='class-parametres'>".count($class_reflection->getDefaultProperties())."</span> public variables.</p>";
      echo "</fieldset>";
      echo "</div>";
      
      }catch(ReflectionException $ex){
        echo "<div id='class-error'>";
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
  if(isset($_REQUEST['info']['execute'])){

  }

  }//end of !empty($_REQUEST) check block

    
    ?>
  </body>
</html>

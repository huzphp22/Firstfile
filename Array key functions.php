<!DOCTYPE html>
<html lang="lang">
<head>
   <meta charset="{#2 charset}"/>
   <title>{#3 Document}</title>
</head>
<body>
   <?php  
      // $fruits  = ['a' => 'Apple', 'b' => 'banana'];
      
      // $N_array = array_keys($fruits);
      
      // echo "<pre>";
      // print_r($N_array);
      // echo "</pre>";
      
// =======================================================================================

      // $fruits  = ['a' => 'Apple', 'b' => 'banana'];
      
      // $N_array = array_key_first($fruits);
      
      // echo "<pre>";
      // print_r($N_array);
      // echo "</pre>";
 // =====================================================================================

      // $fruits  = ['a' => 'Apple', 'b' => 'banana'];
      
      // $N_array = array_key_last($fruits);
      
      // echo "<pre>";
      // print_r($N_array);
      // echo "</pre>";
// =====================================================================================

     $fruits  = ['a' => 'Apple', 'b' => 'banana'];
      
     $N_array = array_key_exists('a',$fruits);
      
     echo "<pre>";
     print_r($N_array);
     echo "</pre>";    
   ?>

    <!-- <p>array_key_exists is used with if else</p> -->
    <!-- <p>array_keys is used with associative array</p>  -->

</body>
</html>
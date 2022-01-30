<?php include('globals/header.php')?>

<?php 

    $table = [
      "row1" => [1,'Pete','Andersen','peter@gmail.com'],
      "row2" => [2,'John', 'Miller', 'john@gmail.com'],
      "row3" => [3, 'Thomas', 'Swift', 'thomas@gmail.com']
    ];

      $tableStrig = '';
      
      $tableStrig .= '
  <div class="mein"> 
  
    <div id="asigment_table">
    <h1>Manipularea sirurilor</h1>
    <div id = "asigment_thead">
      <div class="th">id</div>
        <div class="th">fname</div>
        <div class="th">lname</div>
        <div class="th">email</div>
      </div>
        <div id="div_body">
      ';

          foreach($table as $row) 
          {
            $tableStrig .= '<div class = "tr">';
              for($i=0; $i< count($row); $i++)
              {
                  $tableStrig.= '<div class = "td">'.$row[$i].'</div>';
              }
            $tableStrig .= '</div>'; 
          }
    
     $tableStrig .= '
        </div>
   </div>   
 </div>';
      
     echo $tableStrig;
  
?>

<?php include('globals/footer.php');

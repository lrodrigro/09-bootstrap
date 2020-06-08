<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>09-bootstrap - findThePrecious.com</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-1 dark-gray eye-color">
              </div> 
              <?php for($cnt = 1; $cnt <= 9; $cnt++) : ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php endfor ?>                                
              <div class="col-lg-1 dark-gray eye-color">                
              </div>                
          </div>
          <div class="row">
              <div class="col-lg-1 dark-gray eye-color">                
              </div> 
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>  
              <div class="col-lg-1 orange eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 orange eye-color">                
              </div>  
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?> 
              <div class="col-lg-1 dark-gray eye-color">                
              </div>                            
          </div>
          <div class="row">
              <div class="col-lg-1 dark-gray eye-color">                
              </div> 
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>  
              <div class="col-lg-1 orange eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 black eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 orange eye-color">                
              </div>  
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?> 
              <div class="col-lg-1 dark-gray eye-color">                
              </div>                            
          </div>
          <div class="row">
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>  
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 orange eye-color">
                </div>
              <?php } ?> 
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 black eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 orange eye-color">
                </div>
              <?php } ?> 
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>                          
          </div>
          <div class="row">               
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>  
              <div class="col-lg-1 eye-white">                
              </div>
              <div class="col-lg-1 orange eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 black eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 orange eye-color">                
              </div>  
              <div class="col-lg-1 eye-white">                
              </div>
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>                           
          </div>
          <div class="row">               
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>  
              <div class="col-lg-1 eye-white">                
              </div>
              <div class="col-lg-1 orange eye-color">                
              </div>
              <div class="col-lg-1 yellow eye-color">                
              </div>
              <div class="col-lg-1 orange eye-color">                
              </div>  
              <div class="col-lg-1 eye-white">                
              </div>  
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>                         
          </div>
          <div class="row">  
              <div class="col-lg-1 eye-white">                
              </div>             
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>  
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>
              <div class="col-lg-1 eye-white">                
              </div>                         
          </div>
          <div class="row">
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 7; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 2; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>                                
          </div>
          <div class="row">
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 5; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>                                
          </div>
          <div class="row">
              <?php for($cnt = 1; $cnt <= 4; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 4; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>                                
          </div>
          <div class="row">
              <?php for($cnt = 1; $cnt <= 4; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 3; $cnt++) { ?>
                <div class="col-lg-1 dark-gray eye-color">
                </div>
              <?php } ?>
              <?php for($cnt = 1; $cnt <= 4; $cnt++) { ?>
                <div class="col-lg-1 eye-white">
                </div>
              <?php } ?>                                
          </div>
      </div>
  </body>
</html>
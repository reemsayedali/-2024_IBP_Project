
<!DOCTYPE html>
<html>
<head>
    
    <title>READ Library</title>
</head>
  
      <body>
        <center>
   <?php
     include 'list.php';
     include 'css.css';
   ?>
           
         <div id="d3" style=" width: 100%; height: 500PX;"> 
        <br><br>
            <h2>sign up</h2>
        <form style="width: 80%;"action="fun/test.php" method="post"> 
            <div>
                <label class="f25"> user name </label>
                <input class="f75" type=""name="n1">
                
            </div>
            <div>
                <label class="f25"> password </label>
                <input class="f75" type=""name="n2">
            </div>
           
            <div>
                <input type="submit" name="" value="enter">
            </div>
        </form>
        <a href="sign_up.php">I Don't have an account</a>
    </div>
         
        
    </center>
</body>
</html>
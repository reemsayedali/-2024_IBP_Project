
<!DOCTYPE html>
<html>
<head>
    
    <title>READ Library</title>
</head>
     
<body>
<center>
    <?php
   include'css.css';
   include'list.php';
    ?>
    <div style="width: 100%; position:fixed; top:0;">
    <ul>
        <li><a href="#d3">contact us</a></li>
        <li><a href="#d2">BOOKS</a></li>
        <li><a href="#d2">ABOUT</a></li>
        <li><a href="#">HOME</a></li>
        <li style="float: right;"><a href="login.php">LOG IN</a></li>
    </ul>
    </div>
    
          
         <div id="d3" style="background: #ac929a; width: 100%; height: 500PX;"> 
        <br><br>
            <h2>contact us</h2>
        <form>
            <div>
                <label class="f25"> name </label>
                <input class="f75" type="name">
               
            </div>
            <div>
                <label class="f25"> e-mail </label>
                <input class="f75" type="name">
               
            </div>
            <div>
                <label class="f25"> phone number </label>
                <input class="f75" type="name">
               
            </div>
            <div>
                <label class="f25"> the message </label>
                <input class="f75" type="name">
               
                
            </div>
            <div>
                <input style="width: 50%;" type="submit" name="" value="SEND">
            </div>
        </form>
    </div>      
    </center>
</body>
</html>
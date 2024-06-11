

<!DOCTYPE html>
<html>
<head>
    
    <title>READ Library</title>
</head>
    
<body>
   
    <center>
    <?php
   include'list.php';
   include'css.css';
   $re=$_GET['re'];
   ?>
        <div id="d3" style="background: #b6a5a5; width: 100%; height: 500px;"> 
            <br><br><br><br>
           <?php
           if($re=='1'){
            echo"false";
           }
           ?>
            <h2>NEW ACCOUNT</h2>
            <form style="width: 80%;" method="get" action="fun/add_user.php">
                <div>
                    <label class="f25"> your name</label>
                    <input class="f75" type=""name="your name" placeholder="your name">
                    
                </div>
                <div>
                    <label class="f25"> password</label>
                    <input class="f75" type="password"name="password" placeholder="password">
                </div>
                <div>
                    <label class="f25">reset the password</label>
                    <input class="f75" type="password"name="resrt the password" placeholder="reset the password">
                </div>
                <div>
                    <label class="f25">number</label>
                    <input class="f75" type=""name="number" placeholder="number">
                </div>
                <div>
                    <label class="f25">Age</label>
                    <select class="f75" name="age">
                        <option value="1900_2000">1900_2000</option>
                        <option value="2000_2010">2000_2010</option>
                        <option value="2010_2015">2010_2015</option>
                        <option value="2015_2020">2015_2020</option>
                    </select>
    
                </div>
                <div>
                    <input type="submit" name="" value="send">
                </div>
            </form>
            
        </div>
             
            
        </center>
    </body>
    </html>
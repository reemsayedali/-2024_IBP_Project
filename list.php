
<!DOCTYPE html>
<html>
<head>
    
    <title>READ Library</title>
</head>
       <style type="text/css">
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: darksalmon;
        }
        li{
            float: left;
            border-right: 1px solid #251515;
        }
        li a{
            color: aliceblue;
            text-align: center;
            padding: 15px ;
            text-decoration: none;
            display: block;

        }

        li{
        font-size: 24px;
        color: #dac9ce;
        text-align: left;
        float: left;
         padding: 5px;     
        } 
      .f25{
        width: 24%;
        color: rgb(10, 9, 7);
        text-align: left;
       padding: 5px;
      }
      .f75{
        width: 73%;
        color: rgb(19, 9, 7);
       text-align: left;
        padding: 5px;
      }

       </style>
    
<body>
    <php?
  include='css.css';
    ?>
    <div style="width: 100%; position:fixed; top:0;">
    <ul>
        <li><a href="contact_us.php">contact us</a></li>
        <li><a href="books.php">BOOKS</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="index.php">HOME</a></li>
       <?php
        session_start();
        if(!isset($_SESSION['libraryy'])){
        
      
        ?>
        <li style="float: right;"><a href="login.php">LOG IN</a></li>
        <?php
         }
         ?>
    </ul>
    </div>
    </body>
    </html>
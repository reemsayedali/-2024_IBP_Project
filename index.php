
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
    <?php
   include 'css.css';
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
    <center>
           <br><br>
           <div id="d1" class="d1"> 
              <h1>READ LIBRARY</h1></div>
                   
              <div id="d2" style="background: #c49fab; width: 100%; height: 500PX;"> 
                <h2>ABOUT THE LIBRARY</h2>
               <div style="width: 45%; float: left;">
                <p>
                  <h1>Here You Can Find<h1>
                    <h2>RELAX</h2>
                    <h2>CALM</h2>
                    <h2>KNOWLEDGE</h2>
                    <h2>FUN</h2>
                  <h1> and more</h1>
               </p>
            </div>
            <div style="width: 45%; float: right;">
               <img style="width: 50%;height: 300px;" src="img/lib1.jpeg">
            </div>
              </div>
         <div  id="d3" style="background: #dac9ce; width: 100%; height: 500PX;"> 
              <br><br>
            <h2>BEST SELLER BOOKS</h2>
            <div style="float: left; width: 25%;">
                <img src="books/atomic.jpeg" style="width:200px; height:200px;">
                      <h2>author: JAMES CLEAR</h2>
                      <label>price: 35$</label>
                     </div>
            <div style="float: left; width: 25%;">
                <img src="books/four.jpeg" style="width:200px; height:200px;">
                <h2>author: NICK BRADLY</h2>
                <label>price: 50$</label>
            </div>

            <div style="float: left; width: 25%;">
                <img src="books/poordad (1).jpeg" style="width:200px; height:200px;">
                <h2>author: ROBERT T.KIOSAKY</h2>
                <label>price: 40$</label>
            </div>

        




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
                                                         
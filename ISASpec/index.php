<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="actions.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>
        <form action="" id="frm">
            <div class="imgcontainer">
            </div>
            <div class="container">
                    <label><b>Username</b></label> &nbsp;
                    <input type="text" placeholder="Enter Username" name="uname" required><br/><br/>
                    <label><b>Password</b></label> &nbsp;
                    <input type="password" placeholder="Enter Password" name="psw" required><br/><br/>

                <button type="submit" name="submit" onclick="myLogin()">Login</button>
                <input type="checkbox" checked="checked"> Remember me
                </div><br/>

              <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div><br/>
              <a href="Registration.php.html">Register?</a>
        </form><br/><br/>
        
        <?php
        // put your code here

        ?>
    </body>
</html>

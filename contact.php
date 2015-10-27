<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Website Yuhan Shi</title>
        <link rel="stylesheet" type="text/css" href="css/base.css">
        <meta name="authors" content="WANG Yihe" />        
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="viewport" content="width=device-length,initial-scale=1" />
    </head>
    <body>
        <div class="navigateur">
           
            <div><a class="href" href="home.php">Home</a></div>
            <div><a class="href" href="me.html">Me</a></div>
            <div><a class="href" href="interest.html">Interest</a></div>
            <div><a class="href" href="research.html">Research</a></div>
            <div><a class="href" href="project.html">Projects</a></div>
            <div><a class="href" href="contact.php">Contact</a></div><br /><br />
        </div>
        
        <div class="main_contact">
            <div id="contact">
                <h1>Contact Yuhan</h1>
                <p>To reach Yuhan,please email shiy5@rpi.edu or bjxxshyh55@126.com or send a message using form below</p>
                <p>You can also find her via Facebook or Sina Weibo</p>
                <form id="formilaire" method="post" action="contact_action.php">
                <label for="name">Name:*</label><br />
                <input type="text" name="name" size="39" /> <br />
                
                <label for="mail">E&minus;Mail Address:*</label><br />
                <input type="text" name="mail" size="39"/><br />
                
                <label for="subject">Subject:*</label><br />
                <input type="text" name="subject"size="39"/><br />
                
                <label for="message">Message:*</label><br />
                <textarea name="message"cols="31"></textarea><br />
                
                <input id="button-submit" type="button" value="submit"/>
            </form>
          </div> 
            <div id="image">
                <img src="image/circuits.gif" />
            </div>
        </div>
  
        <div class="pied">
            <div id="left">
            &copy;Copytight Yuhan Shi 2014<br />
            web design by Yuhan Shi<br />
            </div>
            <div id="right">
                F.Scott Fitzgerald - 'So we beat on, boats against the current,<br />
                borne back ceaselessly into the past.'
            </div>
        </div>
    </body>
</html>

                <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script type="text/javascript">
                    $('#button-submit').on('click', function() {
                        var message = $('textarea[name="message"]').val();
                        console.log(message);
                        if (message.length===0){
                            alert("Please write some message.");
                        }
                        else{
                            $('#formilaire').submit();
                        }
                    })
                </script>
<<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>form e-mail</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <form action="send.php" method="post" >

       <div>
            <input type="email" name="email" placeholder="E-mail">
        </div>

       <div>
            <input type="text" name="subject" placeholder="subject">
        </div>

        <div>
            <textarea name="message"></textarea>
        </div>

        <input type="submit" name="send">



       </form>
        
        <script src="" async defer></script>
    </body>
</html>
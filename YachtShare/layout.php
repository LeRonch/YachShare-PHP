<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <script>
        if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/layout.css" >
    
    <title>Yacht Share</title>
</head>

<body>
<?php include "partials/header.php"?>

<main id="port">

    <h3>Welcome on Board</h3>

    <h4>I want to be notified</h4>

        
        <input class="mail" type="text" placeholder="Enter your mail address" name="cd-mail" id="cd-mail" required><button class="btn1">Send</button>
        

    <h4>or sign-up</h4>

    <button class="btn2">Create an account</button>
  
    
</main>


<?php include "partials/footer.php"?>

</body>

</html>
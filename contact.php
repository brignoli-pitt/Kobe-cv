<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV of Kobe Bryant</title>
    <link rel="stylesheet" href="assets/CSS/contact.css">
</head>

<body>
<?php include("header.php") ?>
    <main>
    <section class="contact">
        <div class="email">
            </div>  
        <div>
        <h2>Contact</h2>
</div>
            <form>
          
              <label for="fname">First Name</label>
              <input class="textzone" type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input class="textzone" type="text" id="lname" name="lastname" placeholder="Your last name..">
          
              <label for="email">Your e-mail</label>
              <input class="textzone" type="text" id="email" name="email" placeholder="Give me your e-mail..">

              <label for="message">Your message</label>
              <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit" value="Envoyer">
          
            </form>
    </section>
</main>
<?php include("footer.php") ?>
</body>
</html>
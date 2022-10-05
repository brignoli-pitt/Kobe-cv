
<?php include("header.php") ?>
    <main>
    <section class="contact">
        <div class="email">
            </div>  
        <div>
        <h2 id="title2">Contact</h2>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="text/css">
    <link rel="stylesheet" href="wedding.css">
    <title>Wedding</title>
</head>
<body>
   
    <header>
         <div class="countainer">
       <span>INTERNATIONAL LUXERY WEDDING </span>
    </header>
    <img src="images/partie5.webp" alt="cover" width="100%">
</div>
</body>
<section>
    <div class="countainer">
        <div class="wedding-planning">
            <h1>Comprehensive Wedding Planning</h1>
            <h2>We believe that it is all about the big dreams and the small details  </h2>
            <p>We take charge of every aspect of your wedding planning journey.
             From venue selection to vendor coordination,  we ensure that every detail 
             is meticulously planned to create the perfect event.</p>
                <div class="first"><img src="images/w1.jpg" id="img1"></div> 
               <div class="first"> <img src="images/w2.jpg"id="img"></div> 
                <div class="first"><img src="images/w3.jpg" id="img"></div>
                <div class="clear"></div>
                <div class="images"><img src="images/w4.jpg" id="img"></div>
                <div class="images"><img src="images/w5.jpg" id="img"></div>
                <div class="images"><img src="images/w6.jpg" id="img"></div>
             <div class="clear"></div>
             </div>
             <div class="day-of-Coordination">
                <h1>Day-of Coordination</h1>
                <h2>Your important day </h2>
                <p>
                    On your special day, leave the logistics to us. 
                    Our day-of coordination service ensures a seamless celebration. 
                    From managing schedules to overseeing setup, we handle every detail,
                     allowing you to revel in every moment without stress. Trust us to bring your
                      vision to life while you cherish the magic of your wedding day.
                </p>
                <img src="images/specialday.png" alt="image not found" >
             </div>
             <div class="Personalized-Consultations">
                <h1>Personalized Consultations</h1>
                <h2> Always Together</h2>
                <p>Crafting your dream wedding starts with understanding your unique desires. 
                    Our personalized consultations delve deep into your vision, preferences,
                    and aspirations. We take the time to listen, offering tailored advice and 
                    creative ideas that align perfectly with your style. Together, we'll transform 
                    your dreams into a meticulously planned and unforgettable celebration, ensuring
                    every detail reflects your story and essence.
                </p>
                <img src="images/White Aesthetic Typography Happy Wedding Instagram Story.png" alt="Together" id="Together" >
                </div>
                <div class="design-decor">
                    <h1>Design&Décor</h1>
                    <h2>Curating Your Aesthetic Essence</h2>
                    <p>Your wedding's visual story is our passion. We specialize in creating 
                     stunning color palettes and intricate design elements that resonate with your unique style.
                     Let us transform your vision into a captivating reality, where every hue and detail reflects 
                     the essence of your love story.</p>
                     <div class="one"> <img src="images/decor1.jfif"  id="img"></div>
                     <div class="one"><img src="images/decor2.jfif"  id="img"></div>
                     <div class="one"><img src="images/decor3.jpg"  id="img" height="150px"></div>
                     <div class="one"><img src="images/decor4.jfif" id="img" alt=""></div>
                     <div class="clear"></div>
                     <div class="two"><img src="images/e6fc3520da20fbc97ceb1a0d7847a245.jpg"  id="img"></div>
                     <div class="two"><img src="images/decor6.jpg"  id="img"></div>
                     <div class="two"><img src="images/e.jpg"  id="img"></div>
                     <div class="two"><img src="images/decor8.jpg"  id="img"></div>
                </div>
                <div class="clear"></div>
                <div class="Guest-Management">
                    <h1>Guest Management</h1>
                    <h2>Elevating Every Guest Experience</h2>
                    <p> At <b>Luxe Wedding</b>, we specialize in making guest management effortless for your big day. 
                        From elegant invitations to RSVP tracking and accommodation coordination, we handle the details. 
                        Our aim is to ensure every guest feels valued, allowing you to focus on creating unforgettable
                        moments with your loved ones.</p>
                        <div class="imageone"> <img src="images/Light Grayish Orange and Dark Grayish Pink Wedding Invitation Announcement3.png" alt=""></div>
                        <div class="imageone"><img src="images/Light Grayish Orange and Dark Grayish Pink Wedding Invitation Announcement (2).png" alt=""></div>
                        <div class="imageone"> <img src="images/Light Grayish Orange and Dark Grayish Pink Wedding Invitation Announcement (1).png" alt=""></div>
                </div>
                <div class="clear"></div>
             <div class="contact-us">
                <h2> </h2>
                <img id="imgf" src="images/fete1.jpg" alt="">
                <form action="" method="POST">
                    <legend>GEt in touch </legend>
                    <input type="text" id="name " placeholder="Enter Your Name " name="name"> <br>
                    <input type="email" name="email" id="email" placeholder="Enter a valid email adress" > <br>
                    <textarea name="text" id="text" cols="30" rows="10" aria-valuetext="Enter your message" ></textarea><br>
                    <input type="submit" name="send" id="send" value="send">
                </form>
             </div>

    </div>
</section>
<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
        include("Fonction.php");
        connexion();

        // Récupération des valeurs du formulaire
        $nom = $_POST['name'];
        $message = $_POST['text'];
        $email = $_POST['email'];

        // Création de la requête SQL avec des variables (attention aux potentielles failles de sécurité ici)
        $sql = "INSERT INTO message (nom, email, message) VALUES ('$nom', '$email', '$message')";

        // Exécution de la requête
        $bdd->exec($sql);
        "<script>alert('Message envoyé avec succès')</script>" ;  } 
        else {
        echo "Veuillez remplir tous les champs du formulaire";
    }
}
?>


</body>

</html>
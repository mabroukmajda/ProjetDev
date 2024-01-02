<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Parties</title>
    <link rel="icon" href="images/logo.png" type="text/css">
    <link rel="stylesheet" href="parties.css">
    <script langage ="javascript" src="parties.js"></script>
</head>
<body>
    <header>
        <nav>
           <ul>
            <li> <a href="projet.php">HOME</a></li>
            <li><a href="#parties">PARTIES</a></li>
            <li><a href="#date">DATE</a></li>
            <li><a href="#contact">CONTACT</a></li>
           </ul>
        </nav>
    </header>
    <section>
        <video controls autoplay>
            <source src="images/Purple And White Creative Music Event Promotion Mobile Video.mp4" type="video/mp4">
            <source src="images/Purple And White Creative Music Event Promotion Mobile Video.webm" type="video/webm">
            Le texte à afficher si la vidéo ne se charge pas
        </video>
            <div class="countainer">
                <!-- partie band -->
                <div id="band" class="band">
                    <h1 >Luxe Party </h1>
                    <h2>"Crafting Unforgettable Evenings: Where Every Detail Sparks Magic!"
                    </h2>
                    <p>
                        Welcome to our realm dedicated to exceptional soirées! Evenings are the perfect time to escape,
                         entertain, and create magical moments with those we cherish. Our passion lies in helping you 
                         orchestrate sensational soirées where every detail contributes to an unforgettable experience. 
                         Dive into our array of ideas and tips to craft an enchanting ambiance. From captivating theme suggestions
                        to advice on stunning decorations, along with engaging games and delightful culinary treats to tantalize taste buds,
                        explore our resources to bring your wildest and most creative soirées to life. No matter the type of evening you envision, 
                        let yourself be inspired to make each moment a vibrant and unique celebration shared with your loved ones.
                    </p>
                </div>
                <!-- partie images pour  la band  -->
                    <div class="image" id="parties">
                       
                        <img src="images/party1.jpeg" alt=" party 1 "id="img">

                    </div>
                    <div class="image">
            
                        <img src="images/party2.jpg" alt="party 2"id="img">
                    </div>
                    <div class="image">
            
                        <img src="images/party3.jfif" alt="party 3" id="img">
                    </div>
            </div>
            <div class="clear"></div>

               <div class="tour" id="date">
                <div class="countainer">
                    <div class="zero">
                        <h1>Party DATES </h1>
                        <h2>Remember to book your tickets! </h2>
                        <p> November <span id="red"> Sold out </span></p>
                        <p> December<span id="red"> Sold out </span></p>
                        <p> Janvier <span id="black"> 3 </span></p>
                    </div>
                      <div class="clear"></div>
                    <div class="tickets">
                        <img src="images/newyork.jpg "alt="New York" id="img"  height="300px">
                        <h3>New York</h3>
                        <h4>Fri 27 Jan 2024</h4>
                        <p>New York—the city that sets the bar for unforgettable parties. 
                            From glamorous rooftop affairs to intimate gatherings, each event 
                            encapsulates the city's vibrant energy and inimitable style.</p>
                           <button id="button" > Buy Tickets </button> 
                        </div>
                    <div class="tickets">
                        <img src="images/paris.jpeg" alt="Paris" id="img">
                        <h3>Paris </h3>
                        <h4>Sat 28 Jan 2024 </h4>
                        <p> the City of Lights, sets the stage for unforgettable soirées.
                             From chic rooftop gatherings to intimate affairs, every party 
                             in Paris promises an elegant encapsulating the essence of joie de vivre.
                          </p>
                           <button id="button" > Buy Tickets </button> 
                        </div>
                    <div class="tickets">
                        <img src="images/seoul.jpg" alt="San Francisco" id="img">
                        <h3>Seoul </h3>
                        <h4>Sun 29 Jan 2024</h4>
                        <p> Seoul's party scene is magnetic, offering everything from rooftop revelries 
                            to hidden hotspots, each capturing the city's lively spirit and trendsetting
                            allure.</p>
                         <button id="button" > Buy Tickets </button> 
                    </div>
                </div>
               </div>
               <div class="clear"></div>
              <div class="contact" id="contact">
                <div class="countainer">
                    <h1>CONTACT</h1>
                    <h2>You want to know more ? Drop a note!</h2>
                    <div class="info">
                        Casablanca, Morocco <br>
                        Phone: +212 617612187 <br>
                        Email: Luxeevents@gmail.com <br>
                    </div>
                    <div class="info">
                        <input type="text" name="name " id="name" placeholder="Name "> 
                        <input type="email" name="email" id="email" placeholder="Email"> <br>
                        <input type="text" name="message" id="message" placeholder="Message "> <br>
                        <button> Send </button>
                    </div>

                </div>
              </div>
              <img src="images/map.jpg" alt="photofinal" width="100%">


    </section>
    <div class="countainer">
    </div>

    <footer>
        <h2>
            LUXE Party <br>
               <img src="images/youtube.png" class="sociaux">
               <img src="images/instagram.png" class="sociaux">
               <img src="images/facebook.png" class="sociaux">
               <img src="images/twiter.png" class="sociaux">
           </h2>

    </footer>
</body>
</html>
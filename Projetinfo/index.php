<!-- Coding by Cod Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/design.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Maraîstraß</title> 
</head>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/logo.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Maraîstraß</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                  <!--   <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search..."> -->
                </li>

             <ul class="menu-links">
                    <li class="nav-link2">
                        <a href="index.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Acceuil</span>
                        </a>
                    </li>

                    <li class="nav-link1">
                        <a href="#">
                            <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Jours de marché</span>
                        </a>
                    </li>

                    <li class="nav-link" id="lundi">
                        <a href="lundi.php">
                            <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Lundi</span>
                        </a>
                    </li>

                   <li class="nav-link" id="mardi">
                        <a href="mardi.php">
                             <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Mardi</span>
                        </a>
                    </li>
                   <li class="nav-link" id="mercredi">
                        <a href="mercredi.php">
                           <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Mercredi</span>
                        </a>
                    </li>
                        <li class="nav-link" id="jeudi">
                        <a href="jeudi.php">
                           <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Jeudi</span>
                        </a>
                    </li>

                       <li class="nav-link" id="vendredi">
                        <a href="vendredi.php">
                            <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Vendredi</span>
                        </a>
                    </li>

                           <li class="nav-link" id="samedi">
                        <a href="samedi.php">
                            <i class="icon"><ion-icon name="calendar-outline"></ion-icon></i>
                            <span class="text nav-text">Samedi</span>
                        </a>
                    </li>

                              <li class="contact" id="contact">
                        <a href="#">
                            <i class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon> </ion-icon></i>
                            <span class="text nav-text"> Nous contacter</span>
                        </a>

                </ul>
            </div>

            <div class="bottom-content">
             
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
            <div class="banner-bg" id="top">
             

                    <h1 class="al" align="center"> Bienvenue chez Maraîstraẞ </h1>
                    <h4  class="el" align="center">Trouves les fruits et légumes les plus frais de ta région .</h4>
                </div>
            </div><br><br><br>

            <div class="intro">
                <h4 align="center"> PLUS DE 31 MARCHES A VOTRE DISPOSITION A STRASBOURG</h4><br>
            </div>

            <div class="map">
           <iframe  class="map1" src="https://www.google.com/maps/d/embed?mid=1L6ASAmmd2-tWfpMP1cqKC-O5HOU0SH8e&ehbc=2E312F" height="500" width="1000" >                               
                    </iframe>  
            </div>


                     <div class="box2">
                                <p class="text_color" align="center"> Dites nous comment nous pouvons vous aider</p>
    
                                <form action="index.php" method="post">

                                   <p class="text_color">Nom et Prénom:</p>
                                    <input id="input" class="name"  type="text" name="name" ><br><br>


                                    <p class="text_color">Email:</p>
                                    <input id="input" class="email"  type="email" name="email" ><br><br>

                                <p class="text_color">Message:</p>

                                <textarea class="input" id="text2" type="text" name="message"></textarea>
                                    <input class="input" type="submit" value="Envoyer">
                                </form>
                  
                            </div>




                </div><br><br>

                 <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p align="center" class="copyright-text">Copyright &copy; 2022 MaraîStraß </p>
                        </div>
                    </div><br><br>


    </section>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.js"> </script>
        <script type="text/javascript">


            $('.nav-link').hide();
            $('.nav-link1').mouseenter(function(){
                $('.nav-link').slideToggle(1000);
        });



         $('.box2').hide();
            $('.contact').mouseenter(function(){
                $('.box2').slideToggle(1000);
        });








const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});

        </script>
</body>
</html>




<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $destinataire = "gedeon.projinfo@gmail.com";
        $sujet =  "Maraîstraß" ;
        $message = $_POST['message' ];
        $name = $_POST['name'];
        $header = "From: ".$name."  ". "<" .$email. "> \r\n";
         $email = $_POST['email'];
        mail($destinataire, $sujet, $message, $header ) ;
        // echo "Mail Envoyé !";

}
    
?>


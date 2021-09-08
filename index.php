<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboar Confeccion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="sidemenu" class="menu-collapsed">
        <!--  HEADER -->
        <div id="header">
            <div id="title"><span>SUWEBYA</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>

        </div>

        <!--  PROFILE -->
        <div id="profile">
            <div id="photo"><img src="img/a5.jpg" alt=""></div>
            <div id="name"><span>Carlos Ibarra</span></div>
        </div>

        <!-- ITEMS -->
        <div id="menu-items">
            <div class="item">
                <a href="#">
                    <div class="icon"><img src="img/logo.png" alt=""></div>
                    <div class="title"><span>Modulos</span></div>
                </a></div>
        
            <div class="item separator"></div>
            <div class="item">
                <a href="#">
                    <div class="icon"><img src="img/logo.png" alt=""></div>
                    <div class="title"><span>Modulos</span></div>
                </a></div>
        </div>


    </div>
    <div class="main-container">
        Lorem, ipsum.
    </div>
    <script>
        const btn= document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click',e=>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        })
    </script>
</body>

</html>
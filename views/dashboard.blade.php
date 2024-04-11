<DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.pfontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <style> 
        body {
            font-family: Roboto;
            background-color: #ccf2ff;
        }
        .logo {
            display: flex;
            margin-bottom: 10px;
            margin-top: 10px;
            max-width: 40%;
            height: 40%;
            border: none;
        }
        .openSidebtn{
            display: flex;
            margin-top: 10px;
            margin-bottom: 10px;
            max-width: 80%;
            height: auto;
            border: none;
            background-color: white;
        }
        .toggle-btn span {
            display: block;
        }
        button:hover {
            background-color: lightgray;
        }         
        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color:  #ccf2ff;
            overflow-x: auto;
            font-size: 115%;
            display: none;
            border-color: lightgray;
            border-radius: 5%;
            margin-left: 1%;
        }
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        
        }
        .sidenav a:hover {
            color: #f1f1f1;
        }
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }  
        @media screen and (max-width: 9999px){
            #mySidenav {
                width: 15%;
            }
        }
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            font-size: 3vw;
            text-align: center;
        }
        .flex-forms{
            flex: 100%;
            background-color: white;
            margin-top: 4%;
            display: flex;
            padding: 10% ;
            border: none;
            border-radius: 5%;
            margin-left: 7%;
            margin-right: 7%;
        }
        .flex-people{
            flex: 100%;
            background-color: white;
            margin-top: 4%;
            display: flex;
            padding: 10% ;
            border: none;
            border-radius: 5%;
            margin-left: 7%;
            margin-right: 7%;
    
        }
        .closeSidebtn {
            flex: 100%;
            margin: 10px 10px 10px 10px;
            max-width: 40%;
            max-height: 20%;
            padding: 10px;
            background-color: white;
        }
        .sideTitle {
            padding: 10px;
            flex: 100%;
        }
        .container {
            font-size: 5vw;
            text-align: center;
        }
        .navbar-toggler-icon {
            padding: 0px;
        }
        .col-sm {
            font-size: 4vw;
            display: flex;
            flex: 100;
            padding: 10px;
            background-color: white;
        }
        .viewFormsBtn {
            font-size: 4vw;
            display: flex;
            flex: 100;
            padding: 10% ;
            background-color: white;
            border: none;
            border-radius: 5%;
        }
        .viewPeopleBtn {
            font-size: 4vw;
            display: flex;
            padding: 10% ;
            flex: 100;
            background-color: white;
            border: none;
            border-radius: 5%;
        }
        .mainpage {
            padding-top: 3%;
        }
        </style>
    </head>
    <body>
        <div class="sidenav sidenav-light sidenav-expand shadow" id="mySidenav">
            <div class= "flex-container">
                <button class="closeSidebtn" onclick="closeNav()" aria-label="Site navigation>
                    <span class="navbar-toggler-icon"></span>
                    <span class="sr-only">Side panel</span>
                </button>
                <header class="sideTitle" style="font-size: 2vw; padding-bottom: 20%">SCALe Hub</header>
                <button class= "flex-forms">Forms</button>
                <button class= "flex-people">People</button>
            </div>
        </div>

        <div id="page-wrapper" class="d-print-block">
            <div class="navbar navbar-light bg-white navbar-expand shadow" aria-label="Site navigation">
                <button class="openSidebtn" onclick="openNav()">
                    <span class="navbar-toggler-icon"></span>
                    <span class="sr-only">Side panel</span>
                </button>
                <img src="//khub.clc.pshs.edu.ph/pluginfile.php/1/theme_moove/logo/1705109989/moodle-lg.png" class="logo mr-1" alt="PSHS-CLC">
            </div>

            <div id="page-content" class="mainpage">
                <div class="welcomeBar">
                    <div class="col-sm">Welcome, &nbsp;</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 justify-content-center logo">
                        <button class= "viewFormsBtn" onclick="window.location.href='//localhost/view_students.php';"><a  style="text-decoration: none; color: black;">View Forms</a></button>
                    </div>
                    <div class="col-sm-6 justify-content-center logo">
                        <button class= "viewPeopleBtn"><a href = "" style="text-decoration: none; color: black;">View People</a></button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }

        function displayValues() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            localStorage.setItem('name', name);
            localStorage.setItem('email', email);
            ...
        }
        function showWelcomeMessage() {
            const name = localStorage.getItem('name');
            const email = localStorage.getItem('email');
            if (name && email) {
                const welcomeText = `Welcome, ${name} (${email})!`;
                document.getElementById('welcome-text').innerText = welcomeText;
            }
        }
        showWelcomeMessage();
        </script>
    </body>
</html>

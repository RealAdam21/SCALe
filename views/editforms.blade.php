<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS.css">
    <style> 
        body {
            font-family: Source Sans Pro;
            background-color: lightgray;
            margin: 0;
            padding: 0;
        }
        .logo {
            display: flex;
            margin-bottom: 10px;
            margin-top: 10px;
            max-width: 40%;
            height: auto;
            border: none;
        }
        .sidebar-btn {
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
            width: 0; /* Initially hidden */
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: auto;
            overflow-y: auto;
            transition: 0.5s;
            padding-top: 60px;
            font-size: 22px;
            display: none; /* Initially hidden */
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
        @media screen and (max-height: 900px) {
            .sidenav {padding-top: 15px; width:20%; height:100%; font-size:2.15vw;}
            .sidenav a {font-size: 2.15vw;}
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px; width:15%; height:30%;}
        }

        @media screen and (min-width: 768px){
            #mySidenav {
                width: 20%;
            }
        }

        @media screen and (max-width: 767px){
            #mySidenav {
                width: 95%;
            }
        }

        /* Centering the buttons */
        .centered-buttons {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        /* Adjusted size and color for the buttons */
        .centered-buttons button {
            margin: 20px; /* Increased margin */
            padding: 30px 60px; /* Increased padding */
            font-size: 24px; /* Increased font size */
            background-color: #0078d4; /* Lighter shade of blue */
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .centered-buttons button:hover {
            background-color: #005cb2; /* Darker shade of blue on hover */
        }

        /* Responsive button size */
        @media screen and (max-width: 767px) {
            .centered-buttons button {
                padding: 20px 40px; /* Adjusted padding for smaller screens */
                font-size: 18px; /* Adjusted font size for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <header>SCALe Hub</header>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Forms</a>
        <a href="#">People</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <div id="page-wrapper" class="d-print-block">
        <div class="navbar navbar-light bg-white navbar-expand shadow" aria-label="Site navigation">
            <button class="sidebar-btn" onclick="openNav()">
                <span class="navbar-toggler-icon"></span>
                <span class="sr-only">Side panel</span>
            </button>

            <img src="//khub.clc.pshs.edu.ph/pluginfile.php/1/theme_moove/logo/1705109989/moodle-lg.png" class="logo mr-1" alt="PSHS-CLC">
        </div>
    </div>

    <!-- Centered buttons -->
    <div class="centered-buttons">
        <button onclick="window.location.href='/forms/view';">View</button>
        <button onclick="window.location.href='/forms/edit';">Edit</button>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block"; // Show sidebar
            document.getElementById("mySidenav").style.width = "250px"; // Expand width
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0"; // Collapse width
            document.getElementById("mySidenav").style.display = "none"; // Hide sidebar
        }

        function view() {
            // Functionality for the "View" button
            console.log("View button clicked");
        }

        function edit() {
            // Functionality for the "edit" button
            console.log("People button clicked");
        }
    </script>
</body>
</html>

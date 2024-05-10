<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins';
        }
        form {
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            margin-top: 50px;
            height: 600px;
            overflow: auto;
        }
        header {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
        }
        input {
            border-right: none;
            border-left: none;
            border-top: none;
            text-align: center;
        }
        #Grade {
            float: right;
        }
        #club {
            border: none;
            padding: 3px;
        }
        td input, td button {
            box-sizing: border-box;
            display: block;
            width: 100%;
        }
        input[type="button"], input[type="submit"] {
            color: black;
            border: none;
            padding: 10px;
            border-radius: 1px;
            cursor: pointer;
        }
        #submit {
            float: right;
        }
        ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .center {
            margin-left: auto;
            margin-right: auto;
        }
        .club-row {
            display: flex;
        }
        .club-cell {
            flex: 1;
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="add_students_info_process.php" method="POST" class="form1">
    <header>Philippine Science High School <br> Campus: <br> <br> SCALE PERSONAL INFORMATION SHEET </header>
    <table class="center">
        <tr>
            <th>Name: </th>
            <td><input type="text" name="txtFname" class="profileStyle" placeholder="First Name"></td>
            <td><input type="text" name="txtMname" class="profileStyle" placeholder="Middle Initial"></td>
            <td><input type="text" name="txtLname" class="profileStyle" placeholder="Last Name"></td>
        </tr>
        <tr>
            <th>Batch: </th>
            <td><input type="text" name="txtBatch" class="profileStyle"></td>
            <th>Grade: </th>
            <td id="Grade"><input type="text" name="txtGrade" class="profileStyle"></td>
        </tr>
    </table>
    <br>
    <table id="club-table" class="center">
        <tr>
            <td class="club-cell">Name of club/association joined in PSHS</td>
            <td class="club-cell">Position / Designation</td>
            <td class="club-cell">Length of Membership</td>
            <td class="club-cell"><button type="button" id="add-row">Add Row</button></td>
        </tr>
        <tr class="club-row">
           
        </tr>
    </table>
    <br>
    <table id="club-table-external" class="center">
        <tr>
            <td class="club-cell">Name of club/association joined outside of PSHS</td>
            <td class="club-cell">Position / Designation</td>
            <td class="club-cell">Length of Membership</td>
            <td class="club-cell"><button type="button" id="add-row-external">Add Row</button></td>
        </tr>
        <tr class="club-row">
           
        </tr>
    </table>
    <br>
    <table border="2px" class="center">
        <tr>
            <td border="2px" width="470px">Sports you have played: <br> <br> <br> <br> <input id="club" type="text" name="txtsports" class="profileStyle"></td>
            <td border="2px" width="200px">Musical Instruments you have played: <br> <br> <br> <br> <input id="club" type="text" name="txtinstruments" class="profileStyle"></td>
            <td border="2px" width="220px">Arts and crafts you have skill in: <br> <br> <br> <br> <input id="club" type="text" name="txtarts" class="profileStyle"></td>
            <td border="2px" width="220px">Other hobbies/interests: <br> <br> <br> <br> <input id="club" type="text" name="txthobbies" class="profileStyle"></td>
        </tr>
    </table>
    <br>
    <table border="2px" class="center">
        <tr>
            <td border="2px" width="900px">Activities that you are interested in learning about (could be a sport, art, music, skill, etc.): <br> <br> <br> <input id="club" type="text" name="txtinterests" class="profileStyle"></td>
        </tr>
    </table>
    <br>
    <table border="2px" class="center">
        <tr>
            <td border="2px" width="900px">Activities that you have spearheaded (give a brief description of each activity): <br> <br> <br> <input id="club" type="text" name="txtactivities" class="profileStyle"></td>
        </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <td>Prepared by:</td>
            <td><input type="text" name="Signature" class="profileStyle" placeholder="Signature of student"></td>
            <td><input type="date" name="Date" class="profileStyle" placeholder="Date prepared"></td>
        </tr>
    </table>
    <br>
<table>
        <tr>
            <td><a href="view_students.php"><input type="button" value="BACK"></a></td>
            <td id="submit" style="align-items: right;"><input type="SUBMIT"></td>
        </tr>
    </table>
</form>
<script>
    document.getElementById('add-row').addEventListener('click', function() {
        var table = document.getElementById('club-table');
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.className = 'club-cell';
        cell2.className = 'club-cell';
        cell3.className = 'club-cell';
        cell1.innerHTML = '<input type="text" name="txtpshsclubs[]" class="profileStyle">';
        cell2.innerHTML = '<input type="text" name="txtpshsclubposs[]" class="profileStyle">';
        cell3.innerHTML = '<input type="text" name="txtpshsclublengths[]" class="profileStyle">';
    });
    document.getElementById('add-row-external').addEventListener('click', function() {
        var table = document.getElementById('club-table-external');
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.className = 'club-cell';
        cell2.className = 'club-cell';
        cell3.className = 'club-cell';
        cell1.innerHTML = '<input type="text" name="txtoutsideclubs[]" class="profileStyle">';
        cell2.innerHTML = '<input type="text" name="txtoutsideclubposs[]" class="profileStyle">';
        cell3.innerHTML = '<input type="text" name="txtoutsideclublengths[]" class="profileStyle">';
    });
</script>
</body>
</html>
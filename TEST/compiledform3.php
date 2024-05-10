<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCALE Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        h2 {
            color: #333;
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }
        h3 {
            color: #333;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>SCALE Individual Activity Plan Form</h2>
        <form action="add_form3_process.php" method="post">
            <label for="student_name">Name of Student:</label>
            <input type="text" id="student_name" name="student_name" required><br><br>

            <label for="adviser_name">Name of Adviser:</label>
            <input type="text" id="adviser_name" name="adviser_name" required><br><br>

            <label for="campus">Campus:</label>
            <input type="text" id="campus" name="campus" required><br><br>

            <label for="batch">Batch:</label>
            <input type="text" id="batch" name="batch" required><br><br>

            <table>
                <tr>
                    <tr>
                    <th>Title of Activity:</th>
                    <td colspan="3">
                        <input type="text" name="title" required>
                    </td>
                </tr>
                    <th>
                        <div class="dropdown-checkbox">
                            <label for="strand-select">Strand</label>
                           
                            <ul>
                                <li><label for="strand-S">Service</label><input type="checkbox" name="strand[]" id="strand-S" value="S" /></li>
                                <li><label for="strand-C">Creativity</label><input type="checkbox" name="strand[]" id="strand-C" value="C" /></li>
                                <li><label for="strand-A">Action</label><input type="checkbox" name="strand[]" id="strand-A" value="A" /></li>
                                <li><label for="strand-L">Leadership</label><input type="checkbox" name="strand[]" id="strand-L" value="L" /></li>
                            </ul>
                        </div>
                    </th>
                    <th>Type</th>
                    <td>
                        <select name="type" required>
                            <option value="">Select a type</option>
                            <option value="I">Individual</option>
                            <option value="G">Group</option>
                       </select>
                    </td>
                    
                </tr>
				<tr>
				 <th>Planning Dates</th>
                    <td>
                        <input type="date" name="planning_start_date" required>
                        <input type="date" name="planning_end_date" required>
                    </td>
					</tr>
					
                <tr>
				 <th>Implementation Dates</th>
                    <td colspan="5">
                        <input type="date" name="implementation_start_date" required>
						<input type="date" name="implementation_end_date" required>
                    </td>
                </tr>
                <tr>
				<th>Venue</th>
                    <td colspan="5">
					 
                       <input type="text" name="venue" required>
                    </td>
                </tr>
            </table>
            <h3>Learning Outcomes:</h3>
            <p>
                <input type="checkbox" name="learning_outcomes[]" value="1"> Increased awareness of their own strengths and areas for growth<br>
                <input type="checkbox" name="learning_outcomes[]" value="2"> Undertaken new challenges<br>
                <input type="checkbox" name="learning_outcomes[]" value="3"> Introduced and managed activities<br>
                <input type="checkbox" name="learning_outcomes[]" value="4"> Contributed actively in group activities<br>
                <input type="checkbox" name="learning_outcomes[]" value="5"> Demonstrated perseverance and commitment in their activities<br><input type="checkbox" name="learning_outcomes[]" value="6"> Engaged with issues of global importance<br>
                <input type="checkbox" name="learning_outcomes[]" value="7"> Reflected on the ethical consequence of their actions<br>
                <input type="checkbox" name="learning_outcomes[]" value="8"> Developed new skills<br>
            </p>

            <label for="general_description">General Description:</label>
            <textarea id="general_description" name="general_description" rows="4" cols="50" required></textarea><br><br>

            <h3>Objectives:</h3>
            <textarea name="objectives" rows="4" cols="50" required></textarea><br><br>

          
        </form>
    </div>

    <div class="container">
        <form action="add_form3_process.php" method="post">
            <section>
                <h3>Persons Involved</h3>
                <table>
                    <tr>
                        <td colspan="4">
                            <label for="other_collaborators">Other PSHS students involved (at most 5 students):</label>
                            <table id="other_collaborators_table">
                                <tr>
                                    <th>Adult Supervisor/ Collaborators</th>
                                    <th>Designation/Position</th>
                                    <th>Affiliation</th>
                                    <th>Contact Number and Email</th>
                                </tr>
                                <!-- Dynamically add rows here -->
                            </table>
                            <button type="button" id="add_collaborator">Add Collaborator</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <label for="other_students">Other PSHS students involved (at most 5 students):</label>
                            <table id="other_students_table">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Adviser</th>
                                </tr>
                                <!-- Dynamically add rows here -->
                            </table>
                            <button type="button" id="add_student">Add Student</button>
                        </td>
                    </tr>
                </table>
            </section>
            <section>
                <h3>Materials and Resources Needed</h3>
                <table>
                    <tr>
                        <td colspan="4">
                            <label for="resources_materials">Resources and Materials:</label>
                            <table id="resources_materials_table">
                                <tr>
                                    <th>Qty</th>
                                    <th>Items</th>
                                    <th>Unit Cost</th>
                                    <th>Amount</th>
                                </tr>
                                <!-- Dynamically add rows here -->
                            </table>
                            <button type="button" id="add_resource">Add Resource</button>
                        </td>
                    </tr>
                </table>
            </section>
            
        </form>
        <script>
            document.getElementById('add_student').addEventListener('click', function() {
                var table = document.getElementById('other_students_table');
                if (table.rows.length < 6) {
                    var row = table.insertRow(-1);
                    var nameCell = row.insertCell(0);
                    var roleCell = row.insertCell(1);
                    var adviserCell = row.insertCell(2);
                    nameCell.innerHTML = '<input type="text" name="other_student_name[]" required>';
                    roleCell.innerHTML = '<input type="text" name="other_student_role[]" required>';
                    adviserCell.innerHTML = '<input type="text" name="other_student_adviser[]" required>';
              } else {
                    alert('You can only add up to 5 students.');
                }
            });

            document.getElementById('add_collaborator').addEventListener('click', function() {
                var table = document.getElementById('other_collaborators_table');
                if (table.rows.length < 6) {
                    var row = table.insertRow(-1);
                    var collaboratorsCell = row.insertCell(0);
                    var designationCell = row.insertCell(1);
                    var affiliationCell = row.insertCell(2);
                    var contactCell = row.insertCell(3);
                    collaboratorsCell.innerHTML = '<input type="text" name="collaborators[]" required>';
                    designationCell.innerHTML = '<input type="text" name="designation[]" required>';
                    affiliationCell.innerHTML = '<input type="text" name="affiliation[]" required>';
                    contactCell.innerHTML = '<input type="text" name="contact[]" required>';
                } else {
                    alert('You can only add up to 5 collaborators.');
                }
            });

            document.getElementById('add_resource').addEventListener('click', function() {
                var table = document.getElementById('resources_materials_table');
                var row = table.insertRow(-1);
                var qtyCell = row.insertCell(0);
                var itemCell = row.insertCell(1);
                var unit_costCell = row.insertCell(2);
                var amountCell = row.insertCell(3);
                qtyCell.innerHTML = '<input type="text" name="qty[]" required>';
                itemCell.innerHTML = '<input type="text" name="item[]" required>';
                unit_costCell.innerHTML = '<input type="text" name="unit_cost[]" required>';
                amountCell.innerHTML = '<input type="text" name="amount[]" required>';
            });
        </script>
    </div>
	
	 <div class="container">
        <form action="add_form3_process.php" method="post">
            <section>
                <h3>Potential Hazards/Risks Identified</h3>
                <textarea name="hazards" required></textarea>
            </section>
            <section>
                <h3>Safety Precautions</h3>
                <textarea name="safety_precautions" required></textarea>
            </section>
            <section>
                <h3>Certification</h3>
                <p>I certify that I have understood the potential hazards and risks that may be encountered by my child/
ward, as well as the benefits that my child/ward will be getting from the said SCALE activity.
I certify that I have understood the projected expenses that will be incurred, as well as the benefits
that my child/ward will be getting from the said SCALE activity.
With these knowledge, I am allowing him/her to undertake the said SCALE activity as part of his/her
SCALE program.</p>
                <label for="parent_guardian">Name and Signature of Parent/Guardian:</label>
                <input type="text" name="parent_guardian" required><br>
                <label for="date_reviewed">Date Reviewed:</label>
                <input type="date" name="date_reviewed" required><br>
            </section>
            <section>
                <h3>Reviewed and Approved by:</h3>
                <label for="adult_supervisor">Name and Signature of Adult Supervisor:</label>
                <input type="text" name="adult_supervisor" required><br>
                <label for="date_approved">Date Approved:</label>
                <input type="date" name="date_approved" required><br>
            </section>
            <section>
                <h3>Signature of SCALE Adviser</h3>
                <label for="scale_adviser">Name and Signature of SCALE Adviser:</label>
                <input type="text" name="scale_adviser" required><br>
                <label for="date_approved">Date Approved:</label>
                <input type="date" name="date_approved" required><br>
            </section>
<input type="submit" value="Submit ">
        </form>
    </div>
</body>
</html>
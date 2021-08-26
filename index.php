<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Handling</title>
    </head>
    <body>
        <form action="Form_handling2.php" method="post">
         <center><h2>Test Assignment</h2>
             <label for="First Name"> First Name</label>
             <input type="text" name="First"><br>
             <label for="Last Name"> Last Name</label>
             <input type="text" name="Last"><br>
             <label for="Email">E-mail </label>
             <input type="email" name="email"><br>
             <label for="birthday">DOB:</label>
             <input type="date" id="birthday" name="birthday"><br>
             <label for="phone">Telephone/Mobile</label>
             <input type="tel" id="phone" name="phone" placeholder="123-45-678" required><br>
             <label for="Designation"> Designation</label>
             <input type="text" name="Designation"><br>
             <input type="radio" name="gender" id="male"> 
             <label for="m">Male</label>
             <input type="radio" name="gender" id="female"> 
             <label for="f">Female</label><br>
             <label for="Hobbies">Hobbies</label>
             <label> <input type="checkbox"> :Football</label>
             <label> <input type="checkbox"> :Music</label>
             <label> <input type="checkbox"> :Cricket</label><br>
             <input type="submit"/>
         </cente>
        </form>
    </body>
</html>

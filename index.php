<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel="stylesheet" href="formcss.css">
    
</head>
<body>
    <div class="container">
    <form action="addinguser.php" method="post">

    <h2><u>REGISTERATION FORM</u></h2>
    
    <div class="form">
            <label for="name">NAME:</label>
            <input type="text" id="s_name" name="s_name" oninput="convertToUppercase(this)" required >
            
        </div>

    <div class="form">
        <label for="DOB"> Date of Birth:</label>
        <input type="date" id="DOB" name="DOB" required>
    </div>
        
    <div class="form">
            <label for="reg_id">REG NO:</label>
            <input type="number" id="reg_id" name="reg_id" required>
        </div>
        
    <div class="form">
            <label for="phoneno">PHONE NO:</label>
            <input type="number" id="phoneno" name="phoneno" placeholder="Enter 10 digit number" oninput="phonenovalidate(this)"required>
            
        </div>
        
    <div class="form">
            <label for="email">EMAIL :</label>
            <input type="email" id="email" name="email" oninput="emailvalidate(this)" required>
        </div>
       
    <div class="formup">
            <label for="photo">Upload PHOTO:</label>
            <input style="border: none;" type="file" name="photo" id="photo"  required><br>            
        </div>
    
    <div class="formup">
        <label for="CV">Upload CV:</label>
        <input style="border: none;"  type="file" name="CV" id="CV" required>
    </div>
    <div class="button">
        <button type="submit" value="submit">Submit</button>
    </div>
</form>
</div>
<script src="data.js"></script>   
</body>
</html>
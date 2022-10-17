<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form. </title>
</head>

<?php 
$errFN = "";
$errLn = "Enter Your Last Name.";
$errFN = "Enter Your First Name.";
$errSd = "Enter Your Sibling Details";
$errFfn = "Enter Your Father's Name."; 
$errFln = "Enter father's Surname.";
$errFq = "Enter Your father's Qualification."; 
$errFo = "Enter Father's Occupation"; 
$errFp = "Enter 10 digit Mobile Number"; 
$errFe = "Enter Father's Email";
$errFo = "Enter Father's Occupation";
$errMfn = "Enter Mother's Name";
$errMln = "Enter Mother's Surname";
$errMq = "Enter Mother's Qualification";
$errMsg = "Enter Your Mother's Occupation"; 
$errMp = "Only numeric value is allowed.";
$errMo = "Enter Your Mother's Occupation";
$errMe = "Email is not valid.";
$errA = "Enter Valid Adress";
if (isset($_POST['submitDetials'])) {
    $er  = "error";
  $first_Name=$_POST['firstName'];
  $last_Name=$_POST['lastName'];
  $dob =$_POST['dateOfBirth'];
  $gender=$_POST['Gender'];
  $sibling_Details=$_POST['sbilingDetails'];
  $father_First_Name=$_POST['fatherFirstName'];
  $father_Last_Name=$_POST['fatherLastName'];
  $father_Qualification=$_POST['fatherQualification'];
  $father_Occupation=$_POST['fatherOccupation'];
  $father_PhoneNumber=$_POST['fatherPhone'];
  $father_Email=$_POST['fatherEmail'];
  $mother_FirstName=$_POST['motherFirstName'];
  $mother_LastName=$_POST['motherLastName'];
  $mother_Qualification=$_POST['motherQualification'];
  $mother_Phone=$_POST['motherPhone'];
  $mother_Email=$POST['motherEmail'];
  $mother_Occupation=$POST['motherOccupation'];
  $applicant_Adress=$POST['applicantAdress'];

if (empty($_POST["firstName"])) {  
    $errFN = "Enter Your First Name.";

             echo $errFN;  
             echo "<br>";
     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $first_Name) ) {  
          $errFN = "Only alphabets and whitespace are allowed.";  
             echo $errFN;  
             echo "<br>";
       } else {  
         echo $first_Name; 
         echo "<br>";
       }    
}  
if (empty($_POST["lastName"])) {  
    $errLn = "Enter Your Last Name.";  
             echo $errLn;  
             echo "<br>";
      } else {  
            if (!preg_match ("/^[a-zA-z]*$/", $last_Name) ) {  
            $errLn = "Only alphabets and whitespace are allowed.";  
             echo $errLn;  
             echo "<br>";
            } else {  
              echo $last_Name;
              echo "<br>";  
            }    
}  
if (!empty($sibling_Details)) {  
    $errSd = "Sibling details either should be blank or valid details should be entered";  
             echo $errSd; 
             echo "<br>"; 
      } else {  
            if (!preg_match ("/[^0-9a-zA-Z]/", $sibling_Details) ) {  
            $errSd = "Only alphabets and whitespace are allowed.";  
             echo $errSd;  
             echo "<br>";
            } else {  
              echo $sibling_Details;  
              echo "<br>";
            }    
}  
if (empty($_POST["fatherFirstName"])) {  
    $errFfn = "Enter Your Father's Name.";  

     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $father_First_Name) ) {  
          $errFfn = "Only alphabets and whitespace are allowed.";  
       } else {  
         echo $father_First_Name; 
         echo "<br>"; 
       }    

}  
if (empty($_POST["fatherLastName"])) {  
    $errFln = "Enter father's Surname.";  
 
     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $father_Last_Name) ) {  
          $errFln = "Only alphabets and whitespace are allowed.";  

       } else {  
         echo $father_Last_Name;  
         echo "<br>";
       }    
}
if (empty($_POST["fatherQualification"])) {  
    $errFq = "Enter Your father's Qualification.";  

     } else {  
       if (!preg_match ("/[^0-9a-zA-Z]/", $father_Qualification) ) {  
          $errFq = "Only alphabets , numbers and whitespace are allowed.";  

       } else {  
         echo $father_Qualification;  
         echo "<br>";
       }    
}
if (empty($_POST["fatherOccupation"])) {  
    $errFo = "Enter Father's Occupation";  

     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $father_Occupation) ) {  
          $errFo = "Only alphabets and whitespace are allowed.";  

       } else {  
         echo $father_Occupation;  
         echo "<br>";
       }    
}
if (!preg_match ("/^[0-9]*$/", $father_PhoneNumber) ){  
    $errFp = "Only numeric value is allowed.";  

    } else {  
    echo $father_PhoneNumber;
    echo "<br>";  
} 
if (!preg_match ( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $father_Email) ){  
    $errFe = "Email is not valid.";  

    } else {  
    echo "Your valid email address is: " .$father_Email;  echo "<br>";
}  
if (empty($_POST["motherFirstName"])) {  
    $errMfn = "Enter Mother's Name";  

     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $mother_FirstName) ) {  
          $errMfn = "Only alphabets and whitespace are allowed.";  

       } else {  
         echo $mother_FirstName;  echo "<br>";
       }    

} 
if (empty($_POST["motherLastName"])) {  
    $errMln = "Enter Mother's Surname";  

     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $mother_LastName) ) {  
        $errMln = "Only alphabets and whitespace are allowed.";  
 
       } else {  
         echo $mother_LastName;  echo "<br>";
       }    

} 
if (empty($_POST["motherQualification"])) {  
    $errMq = "Enter Correct Qualification";  

     } else {  
       if (!preg_match ("/[^0-9a-zA-Z]/", $mother_Qualification) ) {  
          $errMq = "Only alphabets , numbers and whitespace are allowed.";  
 
       } else {  
         echo $mother_Qualification;  
       }    
}
if (empty($_POST["motherOccupation"])) {  
    $errMo = "Enter Your Mother's Occupation";  

     } else {  
       if (!preg_match ("/^[a-zA-z]*$/", $mother_Occupation) ) {  
          $ErrMsg = "Only alphabets and whitespace are allowed.";  

       } else {  
         echo $mother_Occupation;  echo "<br>";
       }    
}
if (!preg_match ("/^[0-9]*$/", $mother_Phone) ){  
    $errMp = "Only numeric value is allowed.";  

    } else {  
    echo $mother_Phone; echo "<br>"; 
} 
if (!preg_match ( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $mother_Email) ){  
    $errMe = "Email is not valid.";  

    } else {  
    echo "Your valid email address is: " .$mother_Email;  
}  
if (!empty($_POST["applicantAdress"])) {  
    $errA = "Enter Valid Adress";  

      } else {  
            if (!preg_match ("/[^0-9a-zA-Z]/", $applicant_Adress) ) {  
            $errA = "Only alphabets and whitespace are allowed.";  

            } else {  
              echo $applicant_Adress;  echo "<br>";
            }    
} 
}
?>
<style>
    .error::placeholder {
  color: red;
  opacity: 1; 
}
</style>

<body>
    <div id="form_details">
    <h2>Student Registration Form</h2>
    <form action ="" method = "post">

        <p>Name of the Applicant :</p>

        <p> <input type="text" name="firstName" class="<?php echo $er; ?>"  placeholder="<?php echo $errFN;?>"   required="required"
        pattern="[A-Za-z]{1,20}"  title="Name can not contain Numbers and should include on Capital Letter and one Small Letter">

        <input type="text" name="lastName" placeholder="<?php echo $errLn;?>"  class="<?php echo $er; ?>" required="required"
         pattern="[A-Za-z]{1,20}"  title="Name can not contain Numbers and should include on Capital Letter and one Small Letter"></p>

        <p>Date of Birth:</p>
        <input type="date" name="dateOfBirth" class="<?php echo $er; ?>" required="required">

        <p >Gender:<br>
               <input type="radio" name="Gender"  value="Male" style="margin-left:-0.5%" required="required">
               <label for="male">Male</label><br>
               <input type="radio" name="Gender"  value="Female" style="margin-left:-0.5%" required="required">
               <label for="female">Female</label><br>
        </p>


        <p>Details of Siblings:</p>
        <textarea name="sbilingDetails" name="sbilingDetails" class="<?php echo $er; ?>" placeholder="<?php echo $errSd;?>"></textarea>

        <h3>Parent Information:</h3>

        <p>Father's Name</p>
        <p><input type="text" name="fatherFirstName" required="required" class="<?php echo $er; ?>"  placeholder="<?php echo $errFfn;?>" pattern="[A-Za-z]{1,20}" >

        <input type="text" name="fatherLastName" required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errFln;?>" pattern="[A-Za-z]{1,20}"></p>

        <p>Father's Qualification:</p>
        <input type="text" name="fatherQualification" required="required" class="<?php echo $er; ?>" style="width:370px" style="width:370px" placeholder="<?php echo $errFq; ?>" pattern="[A-Za-z]{1,50}">


        <div class="row"><p><label for="phone">Phone:</label> 
        <label for="email" style="margin-left:140px">Email:</label></p>

        <input type="text" maxlength="13"  required="required" pattern="((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}"  
        title="Only numbers and '+' are accepted" class="<?php echo $er; ?>" name="fatherPhone" placeholder="<?php echo $errFp; ?>" required="required" >

        <input type="email" name="fatherEmail" required="required" class="<?php echo $er; ?>"  placeholder="<?php echo $errFe; ?>" required="required" >
        </div>
        <p>Father's Occupation:</p>
        <input type="text" name="fatherOccupation" required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errFo;?>" style="width:370px" style="width:370px" pattern="[A-Za-z]{1,50}">



        <p>Mother's Name</p>
        <p><input type="text" name=" motherFirstName"required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errMfn;?>" pattern="[A-Za-z]{1,20}" >
        <input type="text" name="motherLastName" required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errMln;?>" pattern="[A-Za-z]{1,20}" ></p>

        <p>Mother's Qualification:</p>
        <input type="text" name="motherQualification" required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errMq;?>" style="width:370px" pattern="[A-Za-z]{1,50}">

        <div class="row"><p><label for="phone">Phone:</label> 
        <label for="email" style="margin-left:140px">Email:</label></p>

        <input type="text" maxlength="13" required="required" class="<?php echo $er; ?>" pattern="((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}"  
         title="Only numbers and '+' are accepted" name="motherPhone"placeholder="<?php echo $errMp;?>" >

        <input type="email" name="motherEmail" required="required" placeholder="<?php echo $errMe;?>">
        </div>

        <p>Mother's Occupation:</p>
        <input type="text" name="motherOccupation" required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errMo;?>" style="width:370px" pattern="[A-Za-z]{1,50}">

        <p>Adress:</p>
        <input type="text" name="applicantAdress" required="required" class="<?php echo $er; ?>" placeholder="<?php echo $errA;?>" style="width:370px" >
        <br>
        <br>
        <button style="margin-left:140px" type="submit" name="submitDetials" >Submit</button>
</form>

</div>
</body>
</html>
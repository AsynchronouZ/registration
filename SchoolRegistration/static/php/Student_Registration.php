<?php
include_once "include/header.inc.php";
?>
<link rel="stylesheet" href="../css/Student_Registration.css">
<title>Student Registration</title>
</head>

<body>

   <div class="l-form">
      <form class="form" name="form" onsubmit="return authentication()">
         <div class="logo"><img src="../assets/img/Virtual_School_logo.png"></div>
         <h1 class="form_title">Student Registration</h1>
         <!---------------------------Personal Information------------------------------------>
         <p class="Sub_title">Personal Information</p>

         <div class="form_div">
            <input class="form_input" list="Admission_Type" name="Admission Type" placeholder=" " required><label for=""
               class="form_label">Admission Type</label>
            <datalist id="Admission_Type">
               <option value="Transferee"></option>
               <option value="New Student"></option>
            </datalist>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">First Name</label>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Middle Name</label>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Last Name</label>
         </div>
         <p class="Sub_title">Date of Birth</p>
         <div class="form_div">
            <input type="date" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Date of Birth</label>
         </div>
         <div class="form_div">
            <input list="Gender" name="Gender" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Gender</label>
            <datalist id="Gender">
               <option value="Male"></option>
               <option value="Female"></option>
            </datalist>
         </div>
         <!---------------------------guardian------------------------------------>
         <p class="Sub_title">Guardian</p>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Name</label>
         </div>
         <div class="form_div">
            <input type="text" name="number" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Contact Number</label>
         </div>
         <!---------------------------CURRENT OR LAST SCHOOL ATTENDED------------------------------------>
         <p class="Sub_title">CURRENT OR LAST SCHOOL ATTENDED</p>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">School Name</label>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">School Year</label>
         </div>
         <div class="form_div">
            <input list="School_Type" name="School_Type" class="form_input" placeholder=" " required>
            <label for="" class="form_label">School Type</label>
            <datalist id="School_Type">
               <option value="Public"></option>
               <option value="Private"></option>
            </datalist>
         </div>
         <!---------------------------ADDRESS------------------------------------>
         <p class="Sub_title">ADDRESS</p>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">Street Address</label>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" ">
            <label for="" class="form_label">Street Address(Optional)</label>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">CITY/MUNICIPALITY</label>
         </div>
         <div class="form_div">
            <input type="text" class="form_input" placeholder=" " required>
            <label for="" class="form_label">PROVINCE</label>
         </div>
         <div class="form_div">
            <input type="text" name="number" class="form_input" placeholder=" " required>
            <label for="" class="form_label">POSTAL CODE</label>
         </div>
         <!---------------------------CONTACT INFORMATION------------------------------------>
         <p class="Sub_title">CONTACT INFORMATION</p>
         <div class="form_div">
            <input type="text" name="number" class="form_input" placeholder=" " required>
            <label for="" class="form_label">CONTACT NUMBER</label>
         </div>
         <div class="form_div">
            <input type="text" name="email" class="form_input" placeholder=" " required>
            <label for="" class="form_label">EMAIL ADDRESS</label>
         </div>
         <input type="submit" class="form_button">
      </form>

      <!---------------------------requirements------------------------------------>
      <div class="requirements_form">
         <div class="header">
            <h2>Requirements</h2>
            <p>Admission Requirements for College</p>
         </div>

         <div class="requirements_title">
            <p>New/Freshmen requirements</p>
         </div>

         <div class="requirements">
            <hr>
            <p>Original Copy of the following documents:</p><br>
            <p>Form 138 (Report Card)</p>
            <p>Form 137</p>
            <p>Certificate of Good Moral</p>
            <p>PSA Authenticated Birth Certificate</p>
            <p>Passport Size ID Picture (White Background, Formal Attire) - 2pcs.</p>
            <p>Barangay Clearance</p>
         </div>

         <div class="requirements_title">
            <p>Transferee Requirements</p>
         </div>

         <div class="requirements">
            <hr>
            <p>Original Copy of the following documents:</p><br>
            <p>Transcript of Records from Previous School</p>
            <p>Honorable Dismissal</p>
            <p>Certificate of Good Moral</p>
            <p>PSA Authenticated Birth Certificate</p>
            <p>Passport Size ID Picture (White Background, Formal Attire) - 2pcs.</p>
            <p>Barangay Clearance</p>
         </div>

      </div>
   </div>

</body>

</html>
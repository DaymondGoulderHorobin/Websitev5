<!-- HTML Code -->
<?php

session_start();

if(isset($_SESSION['id'])) {

  $id = $_SESSION['id'];

} else { header("location: login.php?msg=login_required");
exit();
}

require_once 'headerlogged.php';
//require_once 'php/logged.php';




?>

<head>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf@1.5.3/dist/jspdf.min.js"></script>
    <script src="https://unpkg.com/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf.plugin.autotable.min.js"></script>
</head>

<style>
  input[id="citizen"] {
    margin-left: 25px;
  }

  input[id="permanent"] {
    margin-left: 25px;
  }

  input[id="other"] {
    margin-left: 25px;
  }

</style>

<div class="container my-5">

  <h1 class="mb-4">Application form to join the Aotearoa Party </h1>
  <h5>ID Number <?php echo $_SESSION['id']; ?></h5>

  
  <form id="form" action="includes/fullmembership.inc.php" method="post">
      <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">

    <div class="mb-3">  
      <label for="name" class="form-label">Name:</label>
      <input type="text" id="name" name="name" class="form-control"><br>  
    </div>   
   
    <div class="mb-3">
      <label for="address">Residential street address, Suburb, town, city or locality 
                              [not a PO Box address]</label>
      <textarea id="address" name="address" class="form-control"></textarea>
    </div>

    <div class="mb-3">
      <label for="phone">Phone:</label><br>
      <input type="text" id="phone" name="phone" class="form-control" required><br>
    </div> 

  <div class="mb-3">  
      <label for="dob">Date of Birth:</label><br>
      <input type="date" id="dob" name="dob" class="form-control"><br>
  </div>

  <br>
  <div class="mb-3">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control"><br>
  </div>
<br>
<br>
<br>
  <input type="checkbox" id="elector" name="elector" value="yes">
  <label for="elector">I am a registered elector</label><br>
    
    <div id="registeredvoter" style="display:none;" class="mb-3">
    <label for="electorate" id="electorate">Registered in what electorate if you are registered?, if you are unsure you can use follow this <a href="https://vote.nz/maps/find-your-electorate/" target="_blank" rel="noreferrer noopener"> link </a> to find your electorate</label><br>
    <input type="text" id="electorate" name="electorateinput" ><br>
    </div>
  <input type="checkbox" id="eligible" name="eligible" value="yes">
      
  <label for="eligible">I am not a registered elector but I am eligible to enrol as one of the following</label><br>
      <div id="notregistered" style="display:none;">
        <input type="checkbox" id="citizen" name="citizen" value="yes">
        <label for="citizen">New Zealand citizen</label><br>
        <input type="checkbox" id="permanent" name="permanent" value="yes">
        <label for="permanent">Permanent resident of New Zealand</label><br>
        <input type="checkbox" id="other" name="other" value="yes">
        <label for="other">other</label><br>

          <div id="otherreason" style="display:none;">
              <label for="reason">please specify</label><br />
              <textarea id="reason" name="reason" class="form-control"></textarea><br/>
          </div>
                

      <label for="years">How many Years have you lived in NZ</label><br />
      <input type="text" id="years" name="yearsinput" class="form-control" /><br/>

       <label for="months">How many Months have you lived in NZ</label><br />
       <input type="text" id="months" name="monthsinput" class="form-control">

      </div>

<p>Read the below and sign if you agree to all the terms and conditions<p>
<p>I will pay my membership fee of $5 as a monthly membership with this application<p>
<p>I authorise The Aotearoa Party to record my name as a financial member of The Aotearoa Party<p>
<p>I authorise the secretary of The Aotearoa Party to release this application form and subsequent financial 
  membership details to the Electoral Commission for the purposes of The Aotearoa Party registration under the Electoral Act 1993.<p><br>

<canvas id="signature-pad" width="300" height="150" style="border:1px solid black;"></canvas>
<button id="clear-button">Clear</button>
<button type="submit" id="save-button">Save</button>


</form>





<!-- JavaScript Code -->
<script>

//signature pad
const canvas = document.getElementById('signature-pad');
const signaturePad = new SignaturePad(canvas);

//Ensuring the user only sees and fills out what they need to

//Registered to Vote
const electorateCheckbox = document.getElementById("elector");
    const electorateTag = document.getElementById("registeredvoter");
    const electorateInput = document.querySelector('input[name="electorateInput"]');

electorateCheckbox.addEventListener("change", function() {
  if (this.checked) {
      electorateTag.style.display = "block";
      electorateInput.required = true;
  } else {
      electorateTag.style.display = "none";
      electorateInput.required = false;
  }
});

// Not registered to vote but eligible
const eligibleCheckbox = document.getElementById("eligible");
const unregisteredTag = document.getElementById("notregistered");

eligibleCheckbox.addEventListener("change", function() {
  if (this.checked) {
    unregisteredTag.style.display = "block";
  } else {
      unregisteredTag.style.display = "none";

  }
});

document.getElementById('clear-button').addEventListener('click', function () {
  signaturePad.clear();
});


// The PDF form is generated here
const generatePdfButton = document.getElementById('save-button');

generatePdfButton.addEventListener('click', function () {
  // Get the values of the form elements
  const name = document.getElementById('name').value;
  const phone = document.getElementById('phone').value;
  const address = document.getElementById('address').value;
  const dob = document.getElementById('dob').value;
  const email = document.getElementById('email').value;
    const elector = document.getElementById('elector').checked ? 'YES' : 'NO';
    const eligible = document.getElementById('eligible').checked ? 'YES' : 'NO';
    const electorate = document.getElementById('electorate').value;
    const citizen = document.getElementById('citizen').checked ? 'YES' : 'NO';
    const permanent = document.getElementById('permanent').checked ? 'YES' : 'NO';
    const other = document.getElementById('other').checked ? 'YES' : 'NO';
    const reason = document.getElementById('reason').value;
    const years = document.getElementById('years').value;
    const months = "NA";

      //if (name === "" || phone === "" || address === "" || dob === "" || email === "") {
    //alert("Please fill out all required fields.");
    //return;
    //}



  // Get the data URL of the signature image
  const dataURL = signaturePad.toDataURL();

  // Create a new PDF with the signature and form data
    const doc = new jsPDF();
    var x = 20;
    var y = 105;
    var lineWidth = 0.5;

  // Draw boxes around the questions  
    doc.setFillColor(248,244,244);
    doc.setDrawColor(37, 150, 190);
    doc.setLineWidth(1);
    doc.rect(17, 25, 70, 10, 'FD');
    doc.rect(17, 35, 70, 20, 'FD');
    doc.rect(17, 55, 70, 10, 'FD');
    doc.rect(17, 65, 70, 10, 'FD');
    doc.rect(17, 75, 70, 10, 'FD');

    //boxes around details collected
    doc.rect(87, 25, 100, 10, 'FD');
    doc.rect(87, 35, 100, 20, 'FD');
    doc.rect(87, 55, 100, 10, 'FD');
    doc.rect(87, 65, 100, 10, 'FD');
    doc.rect(87, 75, 100, 10, 'FD');

    doc.rect(17, 100, 170, 15, 'FD');
    doc.rect(17, 115, 170, 60, 'FD');
    doc.rect(17, 175, 170, 10, 'FD');


 
    doc.setFontSize(11);
    doc.text(20, 20, 'Application form to join the Aotearoa Party');
    doc.text(20, 30, 'Full Name: '); 
    doc.text(90, 30, name);

    doc.text(20, 40, 'Residential street address suburb,');
    doc.text(20, 45, 'town, city of locality ');
    doc.text(90, 40, address);
    doc.text(20, 50, '[not a PO Box address]');

    doc.text(20, 60, 'Date of birth: ');
    doc.text(90, 60, dob);
    doc.text(20, 70, 'Telephone number/s: ');
    doc.text(90, 70, phone);
    doc.text(20, 80, 'Email address: ');
    doc.text(90, 80, email);

    doc.text(20, 95, 'Enrolment details');
    doc.text(20, 105, 'I am a registered elector');
    doc.text(80, 105, elector);
    doc.text(20, 110, 'enrolled in ');
    //doc.text(50, 110, electorate);
    doc.text(110, 110, 'electorate');

    doc.text(20, 120, 'Complete if you are not a registered elector');
    doc.text(20, 130, 'I am not a registered elector but I am eligile to enrol');
    doc.text(150, 130, eligible);

    doc.setFontSize(11);
    doc.text(20, 140, 'I am eligible to enrol as a New Zealand parliamentary elector as I am a (select one):');
    doc.text(40, 150,'New Zealand citizen');
         doc.setLineWidth(0.5);
         doc.setDrawColor(0, 0, 0);
          doc.rect(32, 147, 4, 4);
            if (citizen === 'YES') {
              doc.line(32, 147, 36, 151);
              doc.line(32, 151, 36, 147);
            }
    doc.text(40, 155, 'Permanent resident of New Zealand');
            doc.rect(32, 152, 4, 4);
            if (permanent === 'YES') {
              doc.line(32, 152, 36, 156);
              doc.line(32, 156, 36, 152);
            }
    doc.text(40, 160, 'other - please specify: ');
            doc.rect(32, 157, 4, 4);
            if (other === 'YES') {
              doc.line(32, 157, 36, 161);
              doc.line(32, 161, 36, 157);
            }
    doc.text(120, 165, reason);
    doc.text(20, 170, 'and I have lived continuously in New Zealand for ' + years + ' years ' + months + ' months.');
    doc.text(20, 180, 'If you live overseas provide the date last in New Zealand');

    doc.text(21, 195, 'Membership details')
    doc.text(20, 200, 'I have paid my membership fee of at least $5.00 for a 1 month membership and have set up a');
    doc.text(20, 205, 'subscription with this application.');

    doc.text(20, 210, 'I authorise Aotearoa Party to record my name as a financial member of Aotearoa Party.');
    doc.text(20, 215, 'I authorise the secretary of Aotearoa Party to release this application form and');
    doc.text(20, 220, 'subsequent financial membership details to the Electoral Commission for the purposes of');
    doc.text(20, 225, 'Aotearoa Party\'s registration under the Electoral Act 1993.');
    doc.text(20, 265, 'Signed:')

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;


    doc.text(120, 265, 'Date:' + today);

  doc.addImage(dataURL, 'JPEG', 40, 235, 75, 32.5);




  // underlines in certain different area places
  doc.setDrawColor(0, 0, 0);
  doc.setLineWidth(0.5);
    doc.line(47, 111, 95, 111);
    doc.line(33, 267, 100, 267);
    doc.line(130, 267, 180, 267);

    // Line under years
    doc.line(104.5, 171, 110, 171);

    // Line under months
    doc.line(121.5, 171, 127, 171);


    // Digitally 

    
  doc.save('form.pdf');
});

</script>

    <?php

    include_once 'footer.php'

    ?>
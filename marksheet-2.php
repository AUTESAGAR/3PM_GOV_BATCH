<?php
  $grade="";
  $total = $_POST['marathi']+$_POST['automotive']+$_POST['english']+$_POST['maths']+$_POST['science']+$_POST['social'];
  $percentage = $total/600*100;
  if($percentage>=35){
    $result = "Pass";
  }
  else{
    $result = "Fail";
  }
  if($percentage>=65 && $percentage<=70){
    $grade="C";
  }
  else if($percentage>=75 && $percentage<=80){
    $grade="B";
  }
  else if($percentage>=85 && $percentage<=100){
    $grade="A";
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SSC Marksheet</title>
  <link rel="stylesheet" href="marksheet.css" />
</head>
<body>
  <div class="marksheet">
    <h2>Maharashtra State Board Of Secondary and Higher Secondary Education, Pune</h2>
    <h3>Aurangabad Divisional Board</h3>
    <h1>Secondary School Certificate Examination - Statement of Marks</h1>

    <div class="details">
      <p><strong>Seat No:</strong> <?php echo $_POST['seat_no']; ?> </p>
      <p><strong>Centre No:</strong> <?php echo $_POST['center_no']; ?></p>
      <p><strong>School No:</strong> <?php echo $_POST['school']; ?></p>
      <p><strong>Year of Exam:</strong> <?php echo $_POST['exam_year']; ?> </p>
      <p><strong>Sr. No. of Statement:</strong> <?php echo $_POST['sr_no']; ?> </p>
      <p><strong>Candidate Name:</strong> <?php echo $_POST['student_name']; ?></p>
      <p><strong>Mother's Name:</strong><?php echo $_POST['mother_name']; ?></p>
    </div>

    <table>
      <thead>
        <tr>
          <th>Subject</th>
          <th>Max Marks</th>
          <th>Marks Obtained</th>
          <th>In Words</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Marathi (1st Language)</td>
          <td>100</td>
          <td>0<?php echo $_POST['marathi'] ?></td>
          <td>Eighty Nine</td>
        </tr>
        <tr>
          <td>Automotive Service Technician</td>
          <td>100</td>
          <td>0<?php echo $_POST['automotive']; ?></td>
          <td>Ninety Six</td>
        </tr>
        <tr>
          <td>English (2/3 Lang)</td>
          <td>100</td>
          <td>0<?php echo $_POST['english']; ?></td>
          <td>Seventy One</td>
        </tr>
        <tr>
          <td>Mathematics</td>
          <td>100</td>
          <td>0<?php echo $_POST['maths']; ?></td>
          <td>Eighty Seven</td>
        </tr>
        <tr>
          <td>Science & Technology</td>
          <td>100</td>
          <td>0<?php echo $_POST['science']; ?></td>
          <td>Eighty Six</td>
        </tr>
        <tr>
          <td>Social Sciences</td>
          <td>100</td>
          <td>0<?php echo $_POST['social']; ?></td>
          <td>Eighty Two</td>
        </tr>
        <tr>
          <td>Health & Physical Education</td>
          <td>*</td>
          <td>A</td>
          <td></td>
        </tr>
        <tr>
          <td>Defence Studies</td>
          <td>*</td>
          <td>A</td>
          <td></td>
        </tr>
        <tr>
          <td>Self Development & Art Appreciation</td>
          <td>*</td>
          <td>A</td>
          <td></td>
        </tr>
        <tr>
          <th>Grade</th>
          <td>*</td>
          <td><?php echo $grade; ?></td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <div class="summary">
      <p><strong>Total Marks:</strong> <?php echo $total ?></p>
      <p><strong>Percentage:</strong> <?php echo $percentage ?>%</p>
      <p><strong>Result:</strong> <?php echo $result ?> </p>
    </div>

    <div class="signature">
      <p><strong>Divisional Secretary</strong></p>
      <p>S213051113</p>
      <p>3221449065421</p>
    </div>
  </div>
  <center>
    <button onclick="window.print()">Print</button>
  </center>
</body>

</html>
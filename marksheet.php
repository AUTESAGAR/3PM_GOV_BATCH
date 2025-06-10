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
        <tr><td>Marathi (1st Language)</td><td>100</td><td>089</td><td>Eighty Nine</td></tr>
        <tr><td>Automotive Service Technician</td><td>100</td><td>096</td><td>Ninety Six</td></tr>
        <tr><td>English (2/3 Lang)</td><td>100</td><td>071</td><td>Seventy One</td></tr>
        <tr><td>Mathematics</td><td>100</td><td>087</td><td>Eighty Seven</td></tr>
        <tr><td>Science & Technology</td><td>100</td><td>086</td><td>Eighty Six</td></tr>
        <tr><td>Social Sciences</td><td>100</td><td>082</td><td>Eighty Two</td></tr>
        <tr><td>Health & Physical Education</td><td>*</td><td>A</td><td></td></tr>
        <tr><td>Defence Studies</td><td>*</td><td>A</td><td></td></tr>
        <tr><td>Self Development & Art Appreciation</td><td>*</td><td>A</td><td></td></tr>
      </tbody>
    </table>

    <div class="summary">
      <p><strong>Total Marks:</strong> 440 / 500</p>
      <p><strong>Percentage:</strong> 88.00%</p>
      <p><strong>Result:</strong> PASS</p>
    </div>

    <div class="signature">
      <p><strong>Divisional Secretary</strong></p>
      <p>S213051113</p>
      <p>3221449065421</p>
    </div>
  </div>
</body>
</html>

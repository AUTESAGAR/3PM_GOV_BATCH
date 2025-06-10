  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f4f4f4;
    }

    h2 {
      text-align: center;
      color: #a11858;
    }

    form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 700px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .subject-row {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .subject-row input {
      flex: 1;
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      background: #a11858;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #87104b;
    }
  </style>

  <h2>Create SSC Marksheet</h2>
  <form action="marksheet-2.php" method="POST">
    <label>Seat Number</label>
    <input type="text" name="seat_no">
    <label>Center Number</label>
    <input type="text" name="center_no">
    <label>School Number</label>
    <input type="text" name="school">
    <label>Year of Exam</label>
    <input type="text" name="exam_year">
    <label>Sr. No. of Statement</label>
    <input type="text" name="sr_no">
    <label>Student Full Name</label>
    <input type="text" name="student_name">
    <label>Mother's Name</label>
    <input type="text" name="mother_name">
    <label>Marathi Marks</label>
    <input type="number" name="marathi" id="marathi" max="100" min="0">
    <label>Automotive Service Technician Marks</label>
    <input type="number" name="automotive" id="automotive" max="100" min="0">
    <label>English Marks</label>
    <input type="number" name="english" id="english" max="100" min="0">
    <label>Mathematics Marks</label>
    <input type="number" name="maths" id="maths" max="100" min="0">
    <label>Science & Technology Marks</label>
    <input type="number" name="science" id="science" max="100" min="0">
    <label>Social Science Marks</label>
    <input type="number" name="social" id="social" max="100" min="0">
    <label>Health & Physical Education Grade</label>
    <input type="text" name="health" maxlength="1" value="A">
    <label>Defence Studies Grade</label>
    <input type="text" name="defence" maxlength="1" value="A">
    <label>Self Development & Art Apprn. Grade</label>
    <input type="text" name="art" maxlength="1" value="A">    
    <button type="submit">Generate Marksheet</button>
  </form>
<!DOCTYPE html>
<html>
<head>
  <title>Multi-page Survey Form</title>
  <link rel="stylesheet" type="text/css" href="A.css">
</head>
<body>
<form id="survey-form" action="" method="POST">
    <fieldset id="page1" class="active">
      <h2>Personal Details</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="mobile">Mobile:</label>
      <input type="tel" id="mobile" name="mobile" required><br>

      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea><br>

      <label>Gender:</label>
      <input type="radio" id="male" name="gender" value="male" required>
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label><br>
    </fieldset>

    <fieldset id="page2">
      <h2>Studies</h2>
      <label for="college">College:</label>
      <input type="text" id="college" name="college" required><br>

      <label for="education">Education:</label>
      <input type="text" id="education" name="education" required><br>

      <label for="branch">Branch:</label>
      <input type="text" id="branch" name="branch" required><br>
    </fieldset>

    <fieldset id="page3">
      <h2>Other Details</h2>
      <label for="alternate-contact">Alternate Contact:</label>
      <input type="tel" id="alternate-contact" name="alternateContact"><br>

      <label for="interest">Interest:</label>
      <input type="text" id="interest" name="interest"><br>
    </fieldset>

    <button id="prev-button" type="button">Previous</button>
    <button id="next-button" type="button">Next</button>
    <button id="submit-button" type="submit" name="submit-button">Submit</button>
  </form>

  <script src="script.js"></script>

</body>
</html>


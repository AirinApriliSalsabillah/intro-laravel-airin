<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up form</title>
</head>
<body>

<h1>Sign up form</h1>

<form action="/welcome" method="get">
  <label for="first name">fisrt name:</label><br>
  <br>
  <input type="text" id="first_name" name="first_name" required><br>
  <br>

  <label for="last name">last name:</label><br>
  <br>
  <input type="last name" id="last_name" name="last_name" required><br>
  <br>
  <p>Gender;</p>
  <div>
        <input type="radio" id="Male" name="Male" value "Mael">
        <label for="Male">Male</label><br>
        <input type="radio" id="female" name="female" value "famela">
        <label for="famela">famela</label><br>
        <input type="radio" id="other" name="other" value "other">
        <label for="other">other</label><br>
        <p>nationality;</p>

<div>
    <label for="gender">Gender:</label><br>
    <select id="gender" name="gender">
      <option value="male">Indonesia</option>
      <option value="female">English</option>
      <option value="other">Lainnya</option>
    </select><br><br>
<h1>Language Spoken</h1>
<div>
  <label for="checkbox1">
    <input type="checkbox" id="checkbox1" name="checkbox1">
    Indonesia
  </label><br>
  <label for="checkbox2">
    <input type="checkbox" id="checkbox2" name="checkbox2">
    English
  </label><br>
  <label for="checkbox3">
    <input type="checkbox" id="checkbox3" name="checkbox3">
    Other
    <p>Bio</p>
    <textarea name="Bio" rows="5" cols="20"> </textarea>
      <div>
        <h1>
          <button type="submit">Sign In</button>
        </h1>
      </form>
</body>
</html>
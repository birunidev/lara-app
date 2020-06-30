<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Sign Up</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <form action="/welcome" method="POST">
    @csrf
      <h3>Sign Up Form</h3>
      <p>First Name:</p>
      <input type="text" id="first_name" name="first_name" />
      <p>Last Name:</p>
      <input type="text" id="last_name" name="last_name" />
      <p>Gender:</p>
      <input type="radio" name="gender" id="male" />
      <label for="male">Male</label>

      <input type="radio" name="gender" id="femal" />
      <label for="femal">Female</label>

      <input type="radio" name="gender" id="other" />
      <label for="other">Other</label>

      <p>Nationality:</p>
      <select name="nationality" id="nationality">
        <option value="Indonesian" selected>Indonesian</option>
        <option value="Indonesian">American</option>
        <option value="Indonesian">Australian</option>
      </select>
      <p>Language Spoken :</p>
      <div>
        <input type="checkbox" name="spoken" id="indonesia" />
        <label for="indonesia">Indonesia</label>
      </div>
      <div>
        <input type="checkbox" name="spoken" id="english" />
        <label for="english">English</label>
      </div>

      <div>
        <input type="checkbox" name="spoken" id="other" />
        <label for="other">Other</label>
      </div>

      <p>Bio</p>
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
      <div>
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </body>
</html>

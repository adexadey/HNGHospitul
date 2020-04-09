<?php include('lib/header.php'); ?>

<h1>Register here</h1>
<!-- Registration Form -->
<p>Welcome. Please register</p>
<p><em>All fields are *required</em></P>

<form method="POST" action="processregister.php">
  <p>
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" placeholder="First Name" required>
  </p>
  <p>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" placeholder="Last Name" required>
  </p>
  <p>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="E-mail Address" required>
  </p>
  <p>
    <label for="password">Last Name</label>
    <input type="password" name="user_pw" placeholder="Password"required>
  </p>
  <p>
    <label for="sex">Gender</label>
    <select type="text" name="sex" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </p>
  <p>
    <label for="designation">Gender</label>
    <select type="text" name="designation" required>
    <option value="">Choose</option>
      <option value="patient">Patient</option>
      <option value="medical-team">Medical Team(MT)</option>
    </select>
  </p><hr/>
  <p>
    <label for="department">Department</label>
    <input type="text" name="department" placeholder="Department" required>
  </p>

  <input type="submit" value="Register">


   
</form>


<?php include('lib/footer.php'); ?>
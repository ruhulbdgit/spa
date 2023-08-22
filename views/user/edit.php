<h2>Edit field</h2>

<form action="" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" class="nameInput" id="first_name" name="firstName" required value="<?php echo $data['firstName']; ?>"><br>

    <label for="last_name">Last Name:</label>
    <input type="text" class="emailInput" id="last_name" name="lastName" value="<?php echo $data['lastName']; ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?php echo $data['password']; ?>" required><br>

    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
    <input type="submit" name="updateuser" value="Update">
</form>
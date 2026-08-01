<?php if (is_logged_in()): ?>
  <a href="profile.php">Profile</a>
  <a href="logout.php">Logout</a>
<?php else: ?>
  <a href="login.php">Login</a>
<?php endif; ?>

<?php if (($_SESSION["role_type"] ?? null) === "admin"): ?>
  <a href="users.php">Users</a>
<?php endif; ?>

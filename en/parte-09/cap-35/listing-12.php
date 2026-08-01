<?php if (auth_id()): ?>
  <form method="post" action="/logout">
    <button>Logout</button>
  </form>
<?php else: ?>
  <a href="/login">Login</a>
<?php endif; ?>

<?php
echo '<a href="edit.php?id=' . (int) $user["id"] . '">Edit</a>';
echo '<form method="post" action="delete.php" style="display:inline">';
echo '<input type="hidden" name="id" value="' . (int) $user["id"] . '">';
echo '<button type="submit">Delete</button>';
echo '</form>';

<?php
echo '<a href="edit.php?id=' . (int) $user["id"] . '">Modifica</a>';
echo '<form method="post" action="delete.php" style="display:inline">';
echo '<input type="hidden" name="id" value="' . (int) $user["id"] . '">';
echo '<button type="submit">Elimina</button>';
echo '</form>';

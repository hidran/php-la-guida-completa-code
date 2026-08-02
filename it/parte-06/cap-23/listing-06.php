case 'delete':
    if (!user_can_delete()) {
        redirect('../login.php');
    }

    $id = (int)getParam('id', 0);
    $user = getUserById($id);

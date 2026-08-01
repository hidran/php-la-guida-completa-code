switch ($money) {
    case 0:
        echo 'Non hai soldi';
    case 1:
        echo 'Hai 1 euro';
        break;
    case 2:
        echo 'Hai 2 euro';
        break;
    default:
        echo 'Valore non valido';
}

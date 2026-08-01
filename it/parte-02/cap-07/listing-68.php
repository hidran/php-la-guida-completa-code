<?php

const PROVINCES = ['Torino', 'Milano'];

// PROVINCES[2] = 'Roma';   // ERRORE: non si può modificare una costante
// const PROVINCES = [];    // ERRORE: già definita

define('REGIONS', ['Piemonte', 'Lombardia']);
var_dump(REGIONS);

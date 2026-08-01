<?php

const PROVINCES = ['Madrid', 'Barcelona'];

// PROVINCES[2] = 'Sevilla';   // ERROR: no se puede modificar una constante
// const PROVINCES = [];    // ERROR: ya definida

define('REGIONS', ['Comunidad de Madrid', 'Cataluña']);
var_dump(REGIONS);

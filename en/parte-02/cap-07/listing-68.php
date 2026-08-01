<?php

const PROVINCES = ['London', 'Manchester'];

// PROVINCES[2] = 'Edinburgh';   // ERROR: you cannot modify a constant
// const PROVINCES = [];    // ERROR: already defined

define('REGIONS', ['England', 'Scotland']);
var_dump(REGIONS);

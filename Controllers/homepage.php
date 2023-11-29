<?php
// controllers/homepage.php

require_once('models/model.php');

function homepage() {
	$presentation = getPresentation();
    $explications = getExplications();
    $tarifs = getTarification();
	require('templates/homepage.php');
}
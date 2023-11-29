<?php

function dbConnect()
{
	$database = new PDO('mysql:host=localhost;dbname=cartomancie;charset=utf8', 'root', 'root');

    return $database;

}


function getPresentation()
{
    $database = dbConnect();
	$statement = $database->query(
    	"SELECT id_presentation, img_presentation, text_presentation, DATE_FORMAT(date_presentation, '%d/%m/%Y') AS date_presentation FROM presentation"
	);
	$presentation = [];
	while (($row = $statement->fetch())) {
    	$presentation = [
        	'img_presentation' => $row['img_presentation'],
        	'date_presentation' => $row['date_presentation'],
        	'text_presentation' => $row['text_presentation'],
        	'identifier' => $row['id_presentation'],
    	];

	}

	return $presentation;
}

function getExplications()
{
    $database = dbConnect();
	$statement = $database->query(
    	"SELECT id_explication, nom_explication, text_explication, DATE_FORMAT(date_explication, '%d/%m/%Y') AS date_explication FROM explication"
	);
	$explications = [];
	while (($row = $statement->fetch())) {
    	$explication = [
        	'nom_explication' => $row['nom_explication'],
        	'date_explication' => $row['date_explication'],
        	'text_explication' => $row['text_explication'],
        	'identifier' => $row['id_explication'],
    	];

        $explications[] = $explication;

	}

	return $explications;
}

function getTarification()
{
    $database = dbConnect();
	$statement = $database->query(
    	"SELECT c.id_cate_prestation, c.cate_prestation, t.id_tarification, t.nom_prestation, t.presentation_prestation, 
		t.prix_prestation, t.date_prestation, t.id_cate_prestation 
		FROM tarification t 
		INNER JOIN categorie_prestation c 
		ON t.id_cate_prestation = c.id_cate_prestation
		ORDER BY t.prix_prestation ASC"
	);
	$tarifications = [];
	while (($row = $statement->fetch())) {
    	$tarification = [
        	'id_cate_prestation' => $row['id_cate_prestation'],
			'cate_prestation' => $row['cate_prestation'],
        	'nom_prestation' => $row['nom_prestation'],
        	'presentation_prestation' => $row['presentation_prestation'],
            'prix_prestation' => $row['prix_prestation'],
            'date_prestation' => $row['date_prestation'],
        	'identifier' => $row['id_tarification'],
    	];

        $tarifications[] = $tarification;

	}

	return $tarifications;
}

<?php

function getAllArtists()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM artistes');
	$artists =  $query->fetchAll();

    return $artists;
}

function delete($id)
{
    $db = dbConnect();
	$query = $db->prepare('DELETE FROM artistes WHERE id = ?');
	$result = $query->execute(
		[
			$id
		]
	);
	
	return $result;
}
function add($informations){

    $db= dbConnect();
    $query = $db->prepare("INSERT INTO artistes (name, biography) VALUES( :name, :biography)");
    $result = $query->execute([
        'name' => $informations["name"],
        'biography' => $informations["biography"]
    ]);
    return $result;
}
<?php
function getArtists($artistId = null){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM artistes ');
    $query->execute();
    $artists = $query->fetchAll();
    return $artists;
}

function getArtist($id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM artistes WHERE id = ?');
    $result = $query->execute([$id]);
    if($result){
        return $query->fetch();
    }
    else {
        return false;
    }
}

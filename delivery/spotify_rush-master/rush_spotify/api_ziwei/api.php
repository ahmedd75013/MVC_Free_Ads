<?php

class Api{
    public function __construct(){
        header("Content-type: text/html; charset=utf-8");
        $this->dbh = new PDO('mysql:host=localhost;charset=utf8mb4', "fiona", "straykids");
        $this->dbh->query('USE spotify');
    }

    public function artistes(){
        $arr_artists = array();
        $select = $this->dbh->query('SELECT * FROM `artists`');
        while($result = $select->fetch()){
            $add = array("id"=>$result['id'], "name"=>$result['name'], "description"=>$result['description'], "bio"=>$result['bio'], "photo"=>$result['photo']);
            array_push($arr_artists, $add);
        }
        echo json_encode($arr_artists);
    }

    public function albums(){
        $arr_albums = array();
        $select = $this->dbh->query('SELECT * FROM `albums`');
        while($result = $select->fetch()){
            $list_albums = '';
            $artist_albums = $this->dbh->query('SELECT `name` FROM `albums` WHERE `artist_id`='.$result['id']);
            while($row = $artist_albums->fetch()){
                $list_albums .=$row['name'].', '; 
            }
            $list_albums = substr($list_albums,0,strlen($list_albums)-2); 
            $add = array("id"=>$result['id'], "artist_id"=>$result['artist_id'], "name"=>$result['name'], "description"=>$result['description'], "cover"=>$result['cover'], "cover_small"=>$result['cover_small'], "release_date"=>$result['release_date'], "popularity"=>$result['popularity'], "artist_albums"=>$list_albums);
            array_push($arr_albums, $add);
        }
        echo json_encode($arr_albums);
    }

    public function tracks(){
        $arr_tracks = array();
        $select = $this->dbh->query('SELECT * FROM `tracks`');
        while($result = $select->fetch()){
            $add = array("id"=>$result['id'], "album_id"=>$result['album_id'], "name"=>$result['name'], "track_no"=>$result['track_no'], "duration"=>$result['duration'], "mp3"=>$result['mp3']);
            array_push($arr_tracks, $add);
        }
        echo json_encode($arr_tracks);
    }

    public function genres(){
        $arr_genres = array();
        $select = $this->dbh->query('SELECT * FROM `genres`');
        while($result = $select->fetch()){
            $list_albums_id = "";
            $genre_albums = $this->dbh->query('SELECT `album_id` FROM `genres_albums` WHERE `genre_id`='.$result['id']);
            while($row = $genre_albums->fetch()){
                $list_albums_id .= $row['album_id'].', ';
            }
            $list_albums_id = substr($list_albums_id,0,strlen($list_albums_id)-2); 
            $add = array("id"=>$result['id'], "name"=>$result['name'], "albums_id"=>$list_albums_id);
            array_push($arr_genres, $add);
        }
        echo json_encode($arr_genres);
    }
}

//Pour tester:

$o = new Api();
$o->albums();
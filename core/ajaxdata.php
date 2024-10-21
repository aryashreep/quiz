<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("dbclass.php");
$conn = new Query("localhost", "root", "", "scriptures_quiz");

if(!empty($_POST["sid"])) {
    $chapters = $conn->select("chapters", "*", "WHERE sid=" . $_POST["sid"] . " ORDER BY chapter_no ASC");
    echo '<option value="" selected>Please select the Chapter</option>';
    foreach($chapters as $chapter){
        echo "<option value='".$chapter['chapter_id']."'>".$chapter['chapter_no']."</option>";
    }
} elseif(!empty($_POST["chapter_id"])) { 
    $verses = $conn->select("verse", "*", "WHERE chapter_id=" . $_POST["chapter_id"] . " ORDER BY verse_no ASC");
    echo '<option value="" selected>Please select the Verse</option>';
    foreach($verses as $verse){
        echo "<option value='".$verse['vid']."'>".$verse['verse_no']."</option>";
    }
} 
?>
<?php
$result;
function setComments($conn){
    if(isset($_POST['commentSubmit'])||isset($_POST['message'])){
        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];

        $sql="INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        // $result= $conn -> query($sql);
        $result = $conn -> query($sql);
    }
}

function getComments($conn){
    $sql="SELECT * FROM comments";
    $result = $conn -> query($sql);
    while($row=$result->fetch_assoc()){
        echo "<div>";
        echo $row['uid']."<br style=border-top:unset>";
        echo $row['message']."<br>";
                echo "<div>";
    }
    
}
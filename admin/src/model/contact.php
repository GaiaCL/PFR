<?php 

function requestContactManagement() {
$stmt = dbconnect()->prepare('SELECT*FROM contact');
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $contacts;
}
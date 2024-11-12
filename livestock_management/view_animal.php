<?php
include 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM animals WHERE id = $id";
$result = mysqli_query($conn, $query);
$animal = mysqli_fetch_assoc($result);

echo "<h2>Animal: {$animal['name']}</h2>";
echo "<p>Breed: {$animal['breed']}</p>";
echo "<p>Age: {$animal['age']}</p>";
echo "<p>Added on: {$animal['date_added']}</p>";

// Display health records
$query_health = "SELECT * FROM health_records WHERE animal_id = $id";
$result_health = mysqli_query($conn, $query_health);
echo "<h3>Health Records</h3>";
while ($record = mysqli_fetch_assoc($result_health)) {
    echo "<p>{$record['health_status']} - {$record['treatment']} ({$record['date_of_record']})</p>";
}
?>

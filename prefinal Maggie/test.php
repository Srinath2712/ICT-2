 <?php


// Create connection
$conn = new mysqli(localhost, root, root, Maggie);
// Check connection

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT hyp_d, hyp_f from fees";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
      echo " Duration : ".$row['hyp_d']."fees ".$row['hyp_f']. "<br>";
    }
}
else {
    echo "0 results";

$conn->close(); 

?>

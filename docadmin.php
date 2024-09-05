<!DOCTYPE html>
<head>
    <title>admin</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";

$connect = mysqli_connect($servername, $username);

if(!$connect){
    die("Error connection:" . mysqli_connect_error());
}
echo "Connection established!";

mysqli_select_db($connect, 'test');
$query = "select * from test.properties;";

$change = 'UPDATE test.properties set name = "Shangisha Fully Ensuite" where price = 2000000';
mysqli_query($connect, $change);


$fetch = mysqli_query($connect, $query);

if($fetch){
    echo "yes";
} else {
    echo 'no';};
    while($dt = mysqli_fetch_array($fetch)){
        echo $dt[0] . " \n". $dt[1] . "\t". $dt[2] . "<br>";
    }
?>


<?php
class Komputer {
    public $type;
    public $model;
    public $color;
    
    function computer($type, $model, $color){
        $this->type = $type;
        $this->model = $model;
        $this->color = $color;
        return $color." ".$model." ".$type;
    }
};

$sheriffpc = new Komputer();
$femipc = new Komputer();

echo $femipc->computer("Laptop", "HP", "Grey");
echo "<br>";
echo strtoupper($sheriffpc->computer("Laptop", "Dell Latitude", "Black"));

?>

</body>
</html>
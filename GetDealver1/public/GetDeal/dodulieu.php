<meta charset="utf-8">
<?php 
require('data_access_helper.php');

//insert into database
$db = new DataAccessHelper;
$db->connect();
mysqli_set_charset($conn, 'UTF8');
$product_number = $db->executeQuery("SELECT * FROM sanpham");
$db->close();
if (mysqli_num_rows($product_number) > 0) {
	//output data each row
	while($row = mysqli_fetch_assoc($product_number)){
		if(strpos(strtolower($row['title']),strtolower($_GET['search']))!==false)
		{
			echo "<br>";
		echo "- ten: ". $row['title']."<br>"
		 ." - giaban: " . $row['price']. "<br>"
		 ." - giathat: ". $row['cost']. "<br>"
		 ." - khuyenmai: ". $row['sale'] . "<br>"
		 ." - link: ". $row['link']. "<br>" ;
		}
	}
	# code...
}else {
		echo "no result";
	}
echo "<pre>";
print_r($product_number);
echo"</pre>";
// if(isset($_GET['search']))
// echo $_GET['search'];
// echo strlen($_GET['search']);
?>
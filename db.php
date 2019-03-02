<?php
	$servername="localhost";
	$username="root";
	$database="gudang";
	$password="";

	$con=mysqli_connect("localhost","root","","gudang");
	if (! $con){
	echo "gagal konek database";
	}
	else {
	echo "sukses konek database <br>";
	}

	$sql='select id, category_name, products from categoryproduct';
	$query=mysqli_query($con, $sql);
	if (! $query){
	echo "query gagal";
	}
	else {
	echo "query sukses";
	}

	echo "<table>
		<thead>
		<tr>
			<th>id</th>
			<th>category_name</th>
			<th>products</th>
		</tr>
		</thead>
	<tbody>";
	while ($row=mysqli_fetch_array($query)){
		echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['category_name']."</td>
			<td>".$row['products']."</td>
		     </tr>";
	}
echo "</tbody>
</table>";
?>
	
<?php
	require_once 'conn.php';
	if(ISSET($_POST['res'])){
		$query = $conn->query("SELECT * FROM `giangvien`");
		$i = 1;
		while($fetch = $query->fetch_array()){
			echo
				"
					<tr>
						<td>".$i."</td>
						<td>".$fetch['maGV']."</td>
						<td>".$fetch['hotenGV']."</td>
						<td>".$fetch['ngaySinh']."</td>
						<td>".$fetch['diaChi']."</td>
						<td><center><button class='btn btn-warning edit' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-edit'></span>Sửa </button> | <button class='btn btn-danger delete' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></center></td>
					</tr>
				";
			$i++;
			
		}
	}
	
?>
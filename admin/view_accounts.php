
		<?php
		include 'header.php';
		require_once('../config.php');
		?>

		<?php
			if(isset($_COOKIE['auth_accountID'])){ ?>
				<div  class="d">
				<a href="index.php"><button>back to main</button></a>
			<? 

				if($_COOKIE['auth_permission']=="admin"){ 		 ?>
				<a href="add_account.php"><button>add admin account</button></a>
		<?		}
				echo "<BR>Admins<BR>";
				//-----------------------
				$sqlcmd="SELECT * FROM AdminAccount";
				$rs=DB::query($sqlcmd);
				if(DB::getNumRows()>0){
					echo "<table class='grid' border=1><tr>";
					echo "<th>ID</th>";
					echo "<th colspan='2'>Full Name</th>";
					echo "<th>UserName</th>";
					echo "<th>Permission</th><tr>";
					while ($row=$rs->fetch_object()) {
						echo "<td>".$row->AdminAccountID."</td>";
						echo "<td>".$row->AdminAccountName."</td>";
						echo "<td>".$row->AdminAccountLastName."</td>";
						echo "<td>".$row->AdminAccountUserName."</td>";
						echo "<td>".$row->permission."</td>";
						echo "</tr><tr>";
					}
					echo "</tr></table>";
				}
				//------------------
				echo "<BR>Users<BR>";
				$sqlcmd="SELECT * FROM UserAccount";
				$rs=DB::query($sqlcmd);
				if(DB::getNumRows()>0){
					echo "<table border=1><tr>";
					echo "<th>ID</th>";
					echo "<th>First name</th>";
					echo "<th>Last name</th>";
					echo "<th>Gender</th></tr><tr>";
					while ($row=$rs->fetch_object()) {
						echo "<td>".$row->UserAccountID."</td>";
						echo "<td>".$row->UserAccountLastName."</td>";
						echo "<td>".$row->UserAccountFisrtName."</td>";
						echo "<td>".$row->UserAccountGender."</td>";
						echo "</tr><tr>";
					}
					echo "</tr></table>";
				}
				echo "</div>";
			}
			else
				header("Location: index.php");
		?>
		
	</body>
</html>


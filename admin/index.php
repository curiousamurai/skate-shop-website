<?php
/**
 * @author Lloric Garcia
 * @copyright 2015
 */


		include 'header.php';
		if(!isset($_COOKIE['auth_accountID']))
		{
			?>
			<form method="POST" action="login.php">
				<input type="text" placeholder="Username" name="user" />
				<input type="password" placeholder="Password" name="pass" />
				<input type="submit" value="Login" />
			</form>
			<?php
		}
		else
		{?>
			<div  class="d">
			<a href="view_accounts.php"><button>view accounts</button></a><BR>
			<a href="view_product.php"><button>view product</button></a><BR>
			<a href="../SKATESHOP.pdf" target=""><button>view documentation</button></a>
			</div>
			<?
		}
	?>
	</body>
</html>

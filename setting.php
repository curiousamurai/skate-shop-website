<?php
	include 'main_style.php';
	include 'header.php';
	include 'menu.php';
?>
		<center>
			<div class="main_body" style="margin-top:1px;">
				<BR><BR><BR>
				<?php
					if(isset($_COOKIE['authFn'])){ ?>
						<p>Hello! <?=$_COOKIE['authFn']." ".$_COOKIE['authLn']?>!</p>
						<?php 
						if(isset($_COOKIE['tmp']))
							 echo $_COOKIE['tmp']."<BR>";
						echo "<img src='./img/UserImage/".$_COOKIE['authImg']."' alt='' height='300' >";
						echo "<form action='updateimage.php' method='post' enctype='multipart/form-data'>
							<label>Browse image</label><input type='file' name='imgfile'>
							<input type='submit' value='update image'>
						</form>";
					}
					else
						echo "please log in first.."; 
				?>
			</div>
		</center>
<?php
	include 'footer.php';
?>
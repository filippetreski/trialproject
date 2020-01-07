
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include('functions.php');

if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
$x = 0;
$user_num = CountUsers();
print($user_num);
?>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
        <?php $sql = "SELECT id, name,username FROM students";
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()) { ?>
        <div class="profile_info">
            <img src="images/user_profile.png"  >

            <div>
                <?php  if (isset($_SESSION['user'])) : ?>
                    <p> Default User</p>
                    <strong><?php echo   $row["name"]. " "."<br>"; ?>
                    </strong>
                <br>
                    <small><i  style="color: #888;"><?php echo   $row["username"]. " "."<br>"; ?></i>
                    </small>
                    <small>
                        <i style="color: #FFFF;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    </small>
                <?php endif ?>
            </div>
        <?php }  ?>
		</div>
	</div>
    <div>
        Click here to <a href="logout.php" tite="Logout">Logout.
    </div>
</body>
</html>
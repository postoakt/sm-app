<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div id="header-container">
			<div id="header-wrapper">
				<div id="header-icon-and-search">
					<i id="header-icon" class="fa fa-users" aria-hidden="true"></i>
					<div id="header-app-title">Social Media App</div>
					<div id="search-bar"><input type="text" id="search-field" placeholder="Type here to search"></div>
				</div>
				<div id="header-prof-notif">
					<div class="welcome-message">Hello, <b><?php echo $first_name . " " . $last_name . ""; ?></b></div>
					<div class="prof-notif-second">
						<div class="profile-picture-small">
							<img src="<?php echo base_url() . "assets/uploads/" . $prof_pic; ?>" alt="<?php echo base_url(); ?>assets/uploads/default.png">
						</div>
						<a href="<?php echo base_url(); ?>login/logout_user" class="logout-btn">Logout</a>
					</div>
				</div>
			</div>
		</div> 
		<div id="timeline-container">
			<div id="welcome-container">
				<h3 class="welcome-big">Welcome!</h3>
				<div class="welcome-detail">Have anything to share?</div>
			</div>
			<div id="user-info-container">
				<div class="profile-picture-large" class="prof-pic-sidebar">
					<img src="<?php echo base_url() . "/assets/uploads/" . $prof_pic;  ?>" alt="<?php echo base_url(); ?>default.png">
				</div>
				<div class="sidebar-user-info">
					
				</div>
				<div id="notifications-info">
					2 New Messages
					4 Friends
					0 New Friend Requests
				</div>
			</div>
			<div id="create-post-container">
				<div class="profile-picture-medium" class="create-post-prof-pic">
					<img src="<?php echo base_url() . "/assets/uploads/" . $prof_pic; ?>" alt="<?php echo base_url(); ?>assets/uploads/default.png">
				</div>
				<div id="create-post-text-container">
					<textarea id="create-post-textarea" placeholder="What's on your mind?"></textarea>
					<div></div><div class="submit-post-btn">Submit Post</div></div>
				</div>			
			</div>
			<div id="posts-container">
				
			</div>
		</div>
	</body>
</html>
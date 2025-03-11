<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Chat</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">...</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>Soeng Souy</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> <a class="dropdown-item" href="profile.html">My Profile</a> <a class="dropdown-item" href="settings.html">Account Settings</a> <a class="dropdown-item" href="login.html">Logout</a> </div>
				</li>
			</ul>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
					
						
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row mt-5">
					<div class="col-sm-12">
						<div class="chat-window">
							<div class="chat-cont-left">
								<div class="chat-header"> <span>Chats</span>
									<a href="javascript:void(0)" class="chat-compose"> <i class="material-icons">control_point</i> </a>
								</div>
								<form class="chat-search">
									<div class="input-group">
										<div class="input-group-prepend"> <i class="fas fa-search"></i> </div>
										<input type="text" class="form-control" placeholder="Search"> </div>
								</form>
								<div class="chat-users-list">
									<div class="chat-scroll">
										<a href="javascript:void(0);" class="media">
											<div class="media-img-wrap">
												<div class="avatar avatar-away"> <img src="assets/img/profiles/avatar-03.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
											</div>
											<div class="media-body">
												<div>
													<div class="user-name">Justin Lee</div>
													<div class="user-last-chat">Hey, How are you?</div>
												</div>
												<div>
													<div class="last-chat-time block">2 min</div>
													<div class="badge badge-success badge-pill">15</div>
												</div>
											</div>
										</a>
										
									</div>
								</div>
							</div>
							<div class="chat-cont-right">
								<div class="chat-header">
									<a id="back_user_list" href="javascript:void(0)" class="back-user-list"> <i class="material-icons">chevron_left</i> </a>
									<div class="media">
										<div class="media-img-wrap">
											<div class="avatar avatar-online"> <img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
										</div>
										<div class="media-body">
											<div class="user-name">John Doe</div>
											<div class="user-status">online</div>
										</div>
									</div>
									<div class="chat-options">
										
										<a href="javascript:void(0)"> <i class="material-icons">more_vert</i> </a>
									</div>
								</div>
								<div class="chat-body">
									<div class="chat-scroll">
										<ul class="list-unstyled">
											<li class="media sent">
												<div class="media-body">
													<div class="msg-box">
														<div>
															<p>Hello. What can I do for you?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:30 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media received">
												<div class="avatar"> <img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
												<div class="media-body">
													<div class="msg-box">
														<div>
															<p>I'm just looking around.</p>
															<p>Will you tell me something about yourself?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:35 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<p>Are you there? That time!</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:40 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<div class="chat-msg-attachments">
																<div class="chat-attachment"> <img src="assets/img/product/product-01.jpg" alt="Product Image">
																	<div class="chat-attach-caption">placeholder.jpg </div>
																	<a href="" class="chat-attach-download"> <i class="fas fa-download"></i> </a>
																</div>
																<div class="chat-attachment"> <img src="assets/img/product/product-01.jpg" alt="Product Image">
																	<div class="chat-attach-caption">placeholder.jpg </div>
																	<a href="" class="chat-attach-download"> <i class="fas fa-download"></i> </a>
																</div>
															</div>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:41 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media sent">
												<div class="media-body">
													<div class="msg-box">
														<div>
															<p>Where?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:42 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:42 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<div class="chat-msg-attachments">
																<div class="chat-attachment"> <img src="assets/img/product/product-01.jpg" alt="Product Image">
																	<div class="chat-attach-caption">placeholder.jpg </div>
																	<a href="" class="chat-attach-download"> <i class="fas fa-download"></i> </a>
																</div>
															</div>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:50 AM</span> </div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media received">
												<div class="avatar"> <img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
												<div class="media-body">
													<div class="msg-box">
														<div>
															<p>You wait for notice.</p>
															<p>Consectetuorem ipsum dolor sit?</p>
															<p>Ok?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>8:55 PM</span> </div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="chat-date">Today</li>
											<li class="media received">
												<div class="avatar"> <img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
												<div class="media-body">
													<div class="msg-box">
														<div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>10:17 AM</span> </div>
																</li>
																<li><a href="#">Edit</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media sent">
												<div class="media-body">
													<div class="msg-box">
														<div>
															<p>Lorem ipsum dollar sit</p>
															<div class="chat-msg-actions dropdown">
																<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fe fe-elipsis-v"></i> </a>
																<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#">Delete</a> </div>
															</div>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time"> <span>10:19 AM</span> </div>
																</li>
																<li><a href="#">Edit</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media received">
												<div class="avatar"> <img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
												<div class="media-body">
													<div class="msg-box">
														<div>
															<div class="msg-typing"> <span></span> <span></span> <span></span> </div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="chat-footer">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="btn-file btn"> <i class="fas fa-paperclip" aria-hidden="true"></i>
												<input type="file"> </div>
										</div>
										<input type="text" class="input-msg-send form-control" placeholder="Type something">
										<div class="input-group-append">
											<button type="button" class="btn msg-send-btn"><i class="fas fa-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>
	const chatAppTarget = $('.chat-window');
	(function() {
		if($(window).width() > 991) chatAppTarget.removeClass('chat-slide');
		$(document).on("click", ".chat-window .chat-users-list a.media", function() {
			if($(window).width() <= 991) {
				chatAppTarget.addClass('chat-slide');
			}
			return false;
		});
		$(document).on("click", "#back_user_list", function() {
			if($(window).width() <= 991) {
				chatAppTarget.removeClass('chat-slide');
			}
			return false;
		});
	})();
	</script>
</body>

</html>
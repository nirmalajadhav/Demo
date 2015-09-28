<div id="mobilesdk">
	<div class="feature_container">
		<?php include 'fsubmenu.php'; ?>
		<div class="container">	
			<div class="row-fluid separat sect_cont video">
				<div class="span6">
					<div class="dm_header">
						<h1 class="mobilesdkh1">CometChat Mobile SDK</h1>
						<h2 class="mobilesdkh2">Mobile Chat SDK for iOS and Android Platform</h2>
						<p>
							The CometChat SDK is designed so that it can be seamlessly integrated and used with your existing application. The simple mobile chat API has an intuitive flow which makes the entire process hassle-free. Now add CometChat SDK to your application and send/receive messages in your existing mobile application.
						</p>
					</div>
				</div>
				<div class="span1 hidden-phone">
				</div>			
				<div class="span5">
					<div class="sdk_image">
							<img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/cometchat-mobile-chat-sdk.png"; ?>" alt="CometChat Mobile SDK"/>
					</div>
				</div> 			
			</div>
				<div class="row-fluid separat sect_cont ">
				<div class="span6">
					<div class="dm_header">
						<h2>Features of Mobile Chat SDK</h2>
						<div class="container">
								<div class="row-fluid icon_row">
							<div class="span5 sdk_icon">
								<img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/mobile-chat-sdk-seamless-integration.png"; ?>" alt="Seamless integration of Mobile Chat SDK"/>
								<h4>Seamless Integration</h4>
								<p>The CometChat SDK seamlessly integrates with your existing app, thus providing endless functionalities.</p>
							</div>
							<div class="span2"></div>
							<div class="span5 sdk_icon">
								<img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/avchat.png"; ?>" alt="Audio/Video chat"/>
								<h4>Audio/Video/Text Chat & Conference</h4>
								<p>Enable Voice, Video and Text Chat & Conference (one-on-one and chatrooms) in your existing app in minutes!</p>
							</div>
							
						</div>
						<div class="row-fluid icon_row">
							<div class="span5 sdk_icon">
								<img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/mobile-chat-sdk-easy-api.png" ?>" alt="Mobile Chat Easy API"/>
								<h4>Easy API</h4>
								<p>Easy API allows sharing of data efficiently. It allows developers to access the functionality of software modules through well-defined data structures.</p>
							</div>
							<div class="span2"></div>
							<div class="span5 sdk_icon">
								<img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/standalone-mobile-chat-sdk.png"; ?>" alt="Standalone Mobile Chat SDK"/>
								<h4>No external dependency</h4>
								<p>The mobile chat SDK is a standalone package and does not require you to include or refer any other library. It will simply work out of the box.</p>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="span1 hidden-phone">
				</div>					
			</div>

			<h2 class="cmsdkhead">CometChat Mobile SDK Code Snippet</h2>	
			<div class="row-fluid  sect_cont container">
				<div class="span5">
				<h3>One-on-one Chat</h3>	
				<p class="codebox-title">CometChat runs a single instance of itself inside your application and the instance can be initialized using</p>
				<ul class="nav nav-tabs oto1-div">
			  	<li role="presentation" class="active"><a href="#android" class="oto1">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="oto1">iOS</a></li>
				</ul>
				<div class="oto1-code">
					<div class="android-oto1"><pre><code>CometChat cometchat = CometChat.getInstance(context);</code></pre></div>
					<div class="ios-oto1 hide"><pre><code>CometChat *cometchat = [[CometChat alloc] init];</code></pre></div>
				</div>
			</div>
			<div class="span2"></div>
			<div class="span5">
				<h3>Group Chat</h3>
				<p class="codebox-title">CometChatroom also runs a single instance of itself inside your application and the instance can be obtained using</p>
				<ul class="nav nav-tabs grp1-div">
			  	<li role="presentation" class="active"><a href="#android" class="grp1">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="grp1">iOS</a></li>
				</ul>
				<div class="grp1-code">
					<div class="android-grp1"><pre><code>CometChatroom cometChatroom = CometChatroom.getInstance(context);</code></pre></div>
					<div class="ios-grp1 hide"><pre><code>CometChatChatroom *cometchatchatroom = [[CometChatChatroom alloc] init];</code></pre></div>
				</div>
			</div>
		</div>	

		<div class="row-fluid  ">
			<div class="span5">
				<p class="codebox-title">Login to CometChat using a valid userId on your website. (The chatLogin function in your CometChat's integration.php should be configured to handle userIds.)</p>
				<ul class="nav nav-tabs oto2-div">
			  	<li role="presentation" class="active"><a href="#android" class="oto2">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="oto2">iOS</a></li>
				</ul>
				<div class="oto2-code">
					<div class="android-oto2"><pre>
						<code>
cometchat.login(SITE_URL, USER_ID, new Callbacks() {
	@Override
	public void successCallback(JSONObject success) {}
	@Override
	public void failCallback(JSONObject fail) {}
});
			</code></pre></div>
					<div class="ios-oto2 hide"><pre><code>
[cometchat loginWithURL:siteURL userID:userID 
	success:^(NSDictionary *response) {
    } failure:^(NSError *error) {
}];
    		</code></pre></div>
				</div>
			</div>
			<div class="span2"></div>
			<div class="span5">
				<p class="codebox-title">Subscribe to start receiving Chatroom list, chatroom members and messages</p>
				<ul class="nav nav-tabs grp2-div">
			  	<li role="presentation" class="active"><a href="#android" class="grp2">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="grp2">iOS</a></li>
				</ul>
				<div class="grp2-code">
					<div class="android-grp2"><pre><code>
cometChatroom.subscribe(true, new SubscribeChatroomCallbacks() {
	@Override
	public void onMessageReceived(JSONObject receivedMessage, int messageType) {}
	@Override
	public void onLeaveChatroom(JSONObject leaveResponse) {}
	@Override
	public void onKicked(JSONObject kickResponse) {}
	@Override
	public void onError(JSONObject errorResponse) {}
	@Override
	public void onChatroomCreated(JSONObject chatroomId) {}
	@Override
	public void onBanned(JSONObject banResponse) {}
	@Override
	public void gotChatroomMembers(JSONObject chatroomMembers) {}
	@Override
	public void gotChatroomList(JSONObject chatroomList) {}
});</code></pre></div>
					<div class="ios-grp2 hide"><pre><code>
[cometchatchatroom subscribeToChatroomWithMode:YES
	onChatroomMessageReceived:^(NSDictionary *response, NSNumber *type){
 	} onKicked:^(NSDictionary *response) {
 	} onBanned:^(NSDictionary *response) {
 	} chatroomsListReceived:^(NSDictionary *response) {
 	} failure:^(NSError *error) {   
 }];
	</code></pre></div>
				</div>
			</div>
			</div>

			<div class="row-fluid  ">
			<div class="span5">
				<p class="codebox-title">Now simply subscribe to start receiving messages, user list and profile updates from CometChat. It is strongly recommended to subscribe only after logging in successfully.</p>
				<ul class="nav nav-tabs oto3-div">
			  	<li role="presentation" class="active"><a href="#android" class="oto3">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="oto3">iOS</a></li>
				</ul>
				<div class="oto3-code">
					<div class="android-oto3"><pre><code>	
cometchat.subscribe(true, new SubscribeOneOnOneCallbacks() {
	@Override
	public void onMessageReceived(JSONObject receivedMessage, int messageType) {}
	@Override
	public void gotProfileInfo(JSONObject profileInfo) {}
	@Override
	public void gotOnlineList(JSONObject onlineUsers) {}
	@Override
	public void onError(JSONObject errorResponse) {}
});
		</code></pre></div>
					<div class="ios-oto3 hide"><pre><code>
[cometchat subscribeWithMode:mode onMyInfoReceived:^(NSDictionary
 *response){
	} onGetOnlineUsers:^(NSDictionary *response) {
 	} onMessageReceived:^(NSDictionary *response, NSNumber *type) {
  	} onAnnouncementReceived:^(NSDictionary *response) {
	} failure:^(NSError *error) {
}];
    		</code></pre></div>
				</div>
			</div>
			<div class="span2"></div>
			<div class="span5">
				<p class="codebox-title">You have to join a Chatroom to be able to send/receive messages. Only one Chatroom can be joined at a time.</p>
				<ul class="nav nav-tabs grp3-div">
			  	<li role="presentation" class="active"><a href="#android" class="grp3">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="grp3">iOS</a></li>
				</ul>
				<div class="grp3-code">
					<div class="android-grp3"><pre><code>	
cometChatroom.joinChatroom(roomId, roomName, roomPassword, new Callbacks() {
	@Override
	public void successCallback(JSONObject response) {}
	@Override
	public void failCallback(JSONObject response) {}
});
			</code></pre></div>
					<div class="ios-grp3 hide"><pre><code>		
[cometchatchatroom joinChatroom:chatroomName 
	chatroomID:chatroomID 
	chatroomPassword:chatroomPassword 
	success:^(NSDictionary *response) {
    } failure:^(NSError *error) {
}];</code></pre></div>
				</div>
			</div>
			</div>


			<div class="row-fluid  ">
			<div class="span5">
				<p class="codebox-title">You can send a message using</p>
				<ul class="nav nav-tabs oto4-div">
			  	<li role="presentation" class="active"><a href="#android" class="oto4">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="oto4">iOS</a></li>
				</ul>
				<div class="oto4-code">
					<div class="android-oto4"><pre><code>	
cometchat.sendMessage(RECEIVER_USER_ID, “Hi! How are you?”, new Callbacks() {
	@Override
	public void successCallback(JSONObject response) {}
	@Override
	public void failCallback(JSONObject response) {}
});
			</code></pre></div>
					<div class="ios-oto4 hide"><pre><code>
[cometchat sendMessage:message toUser:userID success:^(NSDictionary 
*response) {  
   } failure:^(NSError *error) {
}];
    		</code></pre></div>
				</div>
			</div>
			<div class="span2"></div>
			<div class="span5">
				<p class="codebox-title">You can send a message using</p>
				<ul class="nav nav-tabs grp4-div">
			  	<li role="presentation" class="active"><a href="#android" class="grp4">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="grp4">iOS</a></li>
				</ul>
				<div class="grp4-code">
					<div class="android-grp4"><pre><code>	
cometChatroom.sendMessage(“Hello Chatroom!”, new Callbacks() {
	@Override
	public void successCallback(JSONObject response) {}
	@Override
	public void failCallback(JSONObject response) {}
});
			</code></pre></div>
					<div class="ios-grp4 hide"><pre><code>		
[cometchatchatroom sendChatroomMessage:message
    withsuccess:^(NSDictionary *response) {
   	} failure:^(NSError *error) {
}];
	</code></pre></div>
				</div>
			</div>
			</div>

		<div class="row-fluid separat sect_cont1">
			<div class="span5">
				<p class="codebox-title">Logout of CometChat</p>
				<ul class="nav nav-tabs oto5-div">
			  	<li role="presentation" class="active"><a href="#android" class="oto5">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="oto5">iOS</a></li>
				</ul>
				<div class="oto5-code">
					<div class="android-oto5"><pre><code>	
cometchat.logout(new Callbacks() {
	@Override
	public void successCallback(JSONObject response) {}
	@Override
	public void failCallback(JSONObject response) {}
});
			</code></pre></div>
					<div class="ios-oto5 hide"><pre><code>
[cometchat logoutWithSuccess:^(NSDictionary *response) {
   	} failure:^(NSError *error) {
}];
    		</code></pre></div>
				</div>
			</div>
			<div class="span2"></div>
			<div class="span5">
				<p class="codebox-title">You can create a Chatroom using</p>
				<ul class="nav nav-tabs grp5-div">
			  	<li role="presentation" class="active"><a href="#android" class="grp5">Android</a></li>
			  	<li role="presentation"><a href="#ios" class="grp5">iOS</a></li>
				</ul>
				<div class="grp5-code">
					<div class="android-grp5"><pre><code>	
cometChatroom.createChatroom(roomName, roomPassword, roomType, new Callbacks() {
	@Override
	public void successCallback(JSONObject response) {}
	@Override
	public void failCallback(JSONObject response) {}
});
			</code></pre></div>
					<div class="ios-grp5 hide"><pre><code>		
[cometchatchatroom createChatRoom:chatroomName OfType:roomType 
	withPassword:chatroomPassword 
  	success:^(NSDictionary *response) {
   } failure:^(NSError *error) {
}];
	</code></pre></div>
				</div>
			</div>
			</div>	
	


			
		<div id="sdkpurchase">
				<div  class="row-fluid separat sect_bot hidden-phone">
					<div class="span6"><img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/ios-android-mobile-chat-sdk.png"; ?>" alt="iOS and Android Mobile Chat SDK"/></div>
					<div class="span1"></div>
					<div class="span5 feature_list">
							<h4>Our Mobile SDK includes...</h4>
								<ul class="list">
									<li>Mobile SDK for iOS </li>
									<li>Mobile SDK for Android</li>
									<li>Sample App for iOS</li>
									<li>Sample App for Android</li>
									<li>Documentation</li>
								</ul>
						<div class="button">
							<a href="<?php echo SSL_LINK_BASE_URL . "buy/add-ons"; ?>" class="mobile_btn">
								 Get your CometChat Mobile SDK 
							</a>
						</div>
						<div class="labels">Any CometChat Edition can be used with the Mobile SDK.</div>
					</div>		
				</div>
			</div>
					
			<div  class="row-fluid separat sect_bot visible-phone">
					<div class="span5 feature_list">
							<h4>Our Mobile SDK includes...</h4>
								<ul class="list">
									<li>Mobile SDK for iOS</li>
									<li>Mobile SDK for Android</li>
									<li>Sample App for iOS </li>
									<li>Sample App for Android</li>
									<li>Documentation</li>
									</ul>
							<div class="button">
							<a href="<?php echo SSL_LINK_BASE_URL . "buy/add-ons"; ?>" class="mobile_btn">
								 Get your CometChat Mobile SDK 
							</a>
						</div>
						<div class="labels">Any CometChat Edition can be used with the Mobile SDK.</div>
						</div>
					<div class="span1"></div>
					<div class="span6"><img src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/ios-android-mobile-chat-sdk.png"; ?>" alt="iOS and Android Mobile Chat SDK"/></div>			
				</div>
				<div class="row-fluid sect_cont1 lastsect">
							<h2 class="develphead">Are you a Developer?</h2>
				</div>
				<div class="row-fluid sect_cont1">	
						<div class="span2"></div>
							<div class="span4">
								<div class="button">
									<a href="<?php echo BASE_URL . "documentation/android-chat-sdk/"; ?>" class="mobile_btn android_btn "><img class="android_btnimg" src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/android-logo.png"; ?>" alt="Android Mobile Chat SDK Guide"/><span>Android Mobile Chat SDK <span>Integration Guide</span></span></a>
								</div>
							</div>	
							<div class="span4">
								<div class="button">	
									<a href="<?php echo BASE_URL . "documentation/ios-chat-sdk/"; ?>" class="mobile_btn ios_btn"><img class="ios_imgbtn"src="<?php echo LINK_BASE_URL . "public/img/mobilesdk/ios-logo.png"; ?>" alt="iOS Mobile Chat SDK Guide"/><span>iOS Mobile Chat SDK <span>Integration Guide</span></span></a>
								</div>
							</div>
						<div class="span2"></div>
				</div>	
			</div>
				<div class="row-fluid">
			<div class="container">
				<div class="nextpage">
				<div class="span4">
						<a href="<?php echo BASE_URL . "features/desktop"; ?>" class="mobile_btn">
							<div class="nexttab">
								<div class="next_sprite next_desktop"></div><span>Desktop</span>
							</div>
						</a>
					</div>
					<div class="span4">
						<a href="<?php echo BASE_URL . "features/plugins"; ?>" class="mobile_btn">
							<div class="nexttab">
								<div class="next_sprite next_plugins"></div><span>Plugins</span>
							</div>
						</a>
					</div>
					<div class="span4">
						<a href="<?php echo BASE_URL . "features/administration"; ?>" class="mobile_btn">
							<div class="nexttab">
								<div class="next_sprite next_admin"></div><span>Admin</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>	
			</div>
		</div>
	</div>	
	</div>
		</div>

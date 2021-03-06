@extends('layouts.app')

@section('content')

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="image/two_library.jpg" alt="Los Angeles"/>
			<div class="carousel-text library">
				<div>
				<h3 class="impact">APPLY TODAY!</h3>
				<p>A mentor is just a few clicks away! Apply, complete the online training, and start chatting with a mentor.</p>
				</div>
				<a href="GetMentor.html"><button class="fom">FOUND OUT MORE</button></a>
			</div>
		</div>
		<div class="item">
		  <img src="image/book_stack.jpg" alt="New York"/>
			<div class="carousel-text girls">
				<div>
					<h3 class="impact">GET THE MENTORSHIP YOU NEED</h3>
					<p>Join the Communability mentorship program and get the support you need to reach your goals. It’s FREE, so sign-up today!</p>
				</div>
				<a href="GetMentor.html"><button class="fom">Apply Now</button></a>
			</div>
		</div>		
	  </div>
	</div>
	<div class="clr"></div>
	
	<article class="three-areas">
		<div class="panel-group" id="accordion">			
			<div class="panel">
				
				<section style="padding-bottom:0px;">
					<h1 class="three-areas-heading">A GREAT WAY TO <br>GET THE MENTORSHIP <br>YOU NEED</h1>
					<p class="three-areas-paragraph">We believe that individuals with disabilities supporting other individuals with disabilities is powerful and empowering. Our mentorship program serves post-secondary education students with disabilities. Students have access to mentors, who are university or college graduates with disabilities, to support them in meeting their goals.</p>
					<div class="three-areas-column three-areas-column-1">
						<img src="image/imac_yellow.svg" alt="beacon">
						<h3>ONLINE<br>MENTORSHIP</h3>
						<p class="three-areas-column-paragraph" style="height:100px;">Our virtual mentorship program puts mentoring at your fingertips.</p>
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><button class="fom" style="margin:0px; margin-bottom:15px;" >Find Out More</button></a>
					</div>
					
					<div class="three-areas-column three-areas-column-2">
						<img src="image/cal_teal.svg" alt="beacon">
						<h3>SCHEDULE<br>APPOINTMENTS</h3>
						<p class="three-areas-column-paragraph" style="height:100px;">Our integrated calendar makes it easy to schedule real time, online meetings.</p>
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><button class="fom" style="margin:0px; margin-bottom:15px;" >Find Out More</button></a>
					</div>
					
					<div class="three-areas-column three-areas-column-3">
						<img src="image/chat_blue.svg" alt="beacon">
						<h3>CHAT WITH<br>YOUR MENTOR</h3>
						<p class="three-areas-column-paragraph" style="height:100px;">Each mentor-mentee pair has access to their own chatroom for private, real time communication.</p>
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><button style="margin:0px; margin-bottom:15px;" class="fom">Find Out More</button></a>
					</div>
					<div class="clr"></div>
				</section>
					
					<div class="panel-body panel-collapse collapse up-down" id="collapse1">
					<section style="padding:10px; border-top:20px solid #004F71;">	
						<div class="clr"></div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/settings.svg" alt="beacon">
							<p class="three-areas-column-paragraph">Complete our mentorship program online with an easy-to-use timeline to help guide you along the way!</p>
						</div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/chart.svg" alt="beacon">
							<p class="three-areas-column-paragraph">Use the timeline to track your progress, activities and meetings with your mentor or mentee.</p>
						</div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/rocket.svg" alt="beacon">
							<p class="three-areas-column-paragraph">You’ll always know what activities are recommended at each stage of the cycle.</p>
						</div>
					</section>
				</div>
				<div class="clr"></div>
				 
				<div class="panel-body panel-collapse collapse up-down" id="collapse2">
					<section style="padding:10px; border-top:20px solid #00C7B1;">	
						<div class="clr"></div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/notebook.svg" alt="beacon">
							<p class="three-areas-column-paragraph">Mentors can use the calendar to let their mentee know exactly when they’ll be available.</p>
						</div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/cal_green.svg" alt="beacon">
							<p class="three-areas-column-paragraph">You will receive appointment notifications and reminders to help keep your schedule on track</p>
						</div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/coffee.svg" alt="beacon">
							<p class="three-areas-column-paragraph">Mentees can choose the meeting time they find most convenient.</p>
						</div>
					</section>
				</div>
				<div class="clr"></div>
				
				<div class="panel-body panel-collapse collapse up-down" id="collapse3">
					<section style="padding:10px; border-top:20px solid #FFB81C;">	
						<div class="clr"></div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/chat_blue.svg" alt="beacon">
							<p class="three-areas-column-paragraph">Your communications are encrypted, so only you and your match can see them.</p>
						</div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/lock.svg" alt="beacon">
							<p class="three-areas-column-paragraph">To ensure your information is secure, your chats will be password protected.</p>
						</div>
						<div class="three-areas-column three-areas-column-4">
							<img src="image/imac.svg" alt="beacon">
							<p class="three-areas-column-paragraph">As a security feature, the system will automatically log you out if you forget.</p>
						</div>
					</section>
				</div>
				<div class="clr"></div>
				  
			</div>
		</div>
		
	</article>
	
	<div class="clr"></div>
	
	<article class="two-areas">
		<section>
			<h1 class="three-areas-heading">RESOURCES AND <br> MUCH MORE</h1>
			<p class="three-areas-paragraph">Once you join the CommunAbility e-Mentorship Program, you’ll be able to access a variety of tools and resources to help guide you along the way.</p>
			
			<div class="two-areas-column two-areas-column-1">
				<img src="image/books_grey.svg" alt="beacon">
				<h3>EDUCATIONAL <br> RESOURCES</h3>
				<p class="two-areas-column-paragraph">You’ll gain access to a variety of different learning resources and modules.</p>				
			</div>
			
			<div class="two-areas-column two-areas-column-2">
				<img src="image/search_blue.svg" alt="beacon">
				<h3>COMMUNITY<br> SEARCH TOOLS</h3>
				<p class="two-areas-column-paragraph">Find the answers you’re looking for from your fellow mentors and mentees in the community forum.</p>
			</div>
			
		</section>
		<div class="clr"></div>
	</article>
	<div class="clr"></div>
	<article class="ribbon-2">
		<section>
		<img src="image/Activity.svg" alt="rocket">
		<h3> READY TO GET STARTED?</h3>
		<a href="SignUp.html" class="fom">SIGN UP TO APPLY</a>
		</section>
	</article>
	<div class="clr"></div>
	<article class="match">
		<section>
		<h1>FIND YOUR<br> PERFECT MATCH</h1>
		<p>Once you apply, we’ll be able to match you with a mentor that best suits your needs, background and education.</p>
		<img src="image/perfect_match.svg" alt="match">
		
		</section>
	</article>
	<div class="clr"></div>
	<article style="margin-bottom:-100px;" class="android">
		<section>
		
		<img class="android-image" src="image/android.svg">
		
		<h1>JOIN THE <br>MENTORSHIP <br>PROGRAM</h1>
		<p>Experience the power of mentorship – join the CommunAbility e-Mentorship Program and begin an enriching relationship that provides opportunities for personal growth and development for all involved.</p>
		<a href="SignUp.html" class="fom">SIGN UP TO APPLY</a>
	
		</section>
	</article>
	
	<div class="clr"></div>

@endsection
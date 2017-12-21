@extends('layouts.app')

@section('content')	
	<article style="position:relative;top:45px; margin-top:-40px;"  class=" contact">
	<section>
		<h1>CONTACT US</h1>
		<img src="image/computer.svg">
		<p>We’re here to answer any questions you may have about our website, the materials located here, or the CommunAbility project. Contact us and we’ll respond as soon as we can.</p>
		<form>
		<select>
			<option disabled selected>Message Subject</option>
			<option>Question</option>
			<option>Concern</option>
			<option>Praise</option>
		</select>
		<br><br>
		<textarea class="text-area" placeholder="first name" ></textarea><br>
		<input class="text-box" placeholder="first name" type="text"><br>
		
		<div><input type="checkbox" style="margin:8px 7px 8px 12px;"> I would prefer to remain anonymous (no return address)</div>
		<input type="submit" value="SUBMIT" class="fom">
		</form>						
	</section>
	</article>
	<div class="clr"> </div>

	<article style="margin-top:-30px;" class="three-areas mail-phone-email">
		<section>		
		<div class="three-areas-column">
			<h1>MAIL</h1>
			<img src="image/letter.svg" alt="">
			<p>RM-701 
				George Brown College 
				51 Dockside Dr. 
				M5T 2T9
			</p>
		</div>
		<div class="three-areas-column">
			<h1>PHONE</h1>
			<img src="image/headset.svg" alt="">
			<p>416-415-5000 ext. 6038</p>
		</div>
		<div class="three-areas-column">
			<h1>EMAIL</h1>
			<img src="image/imac.svg" alt="">
			<p>info@communability.ca</p>
		</div>
		</section>
	</article>
	
	<article class="interest">
		<section>
		<h1>INTERESTED IN OUR MENTORSHIP PROGRAM?</h1>
		<img src="image/rocket.svg" alt="" >
		<p>We value your feedback! You can let us know what you like about our website, and what we could do better, by using our contact form. You can also provide us with formal feedback by participating in research that evaluates the CommunAbility project. Find out more about by visiting our Research Information page.</p>
			<a href="LearningModules.html"><button class="fom">LEARN MORE</button></a>
		</section>
	</article>
	<article class="other-question">
		<section>
		<h1>HAVE OTHER QUESTIONS?</h1>
		<img src="image/rocket.svg" alt="" >
		<p>Check out our FAQs as a starting place to find more information.</p>
			<a href="Faqs.html"><button class="fom">READ FAQS</button></a>
		</section>
	</article>
	<div class="clr"></div>


	<div class="clr"></div>
	@endsection
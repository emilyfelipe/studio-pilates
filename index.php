<?php include('perch/runtime.php'); ?>
<?php $page="home"; ?>
<?php include 'common/head.php'; ?>

<title>Studio Pilates</title>


</head>
<body>
<?php include 'common/header.php'; ?>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="container-fluid">
<div class="padding-mobile"
	<!-- OPENING CAROUSEL -->
	<div class="row">
		<div id="introCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
		<!-- 	<ol class="carousel-indicators">
				<li data-target="#introCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#introCarousel" data-slide-to="1"></li>
				<li data-target="#introCarousel" data-slide-to="2"></li>
				<li data-target="#introCarousel" data-slide-to="3"></li>
			</ol> -->

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/homeStudio1.jpg" alt="Studio Pilates Cadillac" class="img100">
					<div class="carousel-caption">
					    <p class="carousel-title">Studio Pilates - Keeping the South Bay fit since 2006!</p> 	
					 </div>
				</div>
				<div class="item">
					<img src="img/homeStudio2.jpg" alt="Studio Pilates Reformers" class="img100">
					<div class="carousel-caption">
					    <p class="carousel-title">We offer more than 20 small group classes per week on the Reformer, Tower and Mat!</p> 	
					 </div>
				</div>
				<div class="item">
					<img src="img/homeStudio3.jpg" alt="Studio Pilates Wall Tower" class="img100">
					<div class="carousel-caption">
					    <p class="carousel-title">Our Private Sessions are customized for your needs from rehabilitation to sports specific fitness.</p> 	
					 </div>
				</div>
				<div class="item">
					<img src="img/homeStudio4.jpg" alt="Studio Pilates Exterior" class="img100">
					<div class="carousel-caption">
					    <p class="carousel-title">Pilates benefits everyone: men, women, young people, and seniors, the strong and the injured.</p> 	
					 </div>
				</div>
				
				<!-- Controls -->
				<a class="left carousel-control" href="#introCarousel" role="button" data-slide="prev">
					<span class="fa fa-angle-left carouselLeft" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#introCarousel" role="button" data-slide="next">
					<span class="fa fa-angle-right carouselRight" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- END OPENING CAROUSEL -->

	<!-- EVENTS SECTION -->
	<div class="row">
		<div id="events">	
			<div class="col-md-offset-6 col-md-6 col-lg-4 col-lg-offset-8 changeOfHeart">
				<p class="eventMonth"><?php perch_content('Month of event'); ?></p>
			</div>
			<div class="col-md-8 col-lg-7 eventInfo changeOfHeart">
				<p class="eventTitle"><?php perch_content('Title Caption'); ?></p>
				<p class="eventDescription"><?php perch_content('Body Copy'); ?></p>
				<div class="btn btnRed whiteLink"> 
				<?php perch_content('outlink'); ?>
				</div>
			</div>
			<div class="eventMobile"><?php perch_content('Mobile Image'); ?></div>
			<div class="eventDesktop"><?php perch_content('Desktop Image'); ?></div>
			
		</div>
	</div>
	<!-- END EVENTS SECTION -->

	<!-- CLASS SCHEDULE SECTION -->
	<div class="row">
		<div id="classes">
			<div class="col-md-12 classSchedule">
				<img src ="img/studioPilatesLogoWhite.svg" class="studioPilatesWhite">
				<p class="classCopy">Come join us for&nbsp;a&nbsp;class. To&nbsp;view&nbsp;full&nbsp;schedule, please&nbsp;click&nbsp;below</p>
				<a href="https://clients.mindbodyonline.com/classic/home?studioid=8979" target="_blank" type="button" class="btn btnClear">View Schedule</a>
			</div>
			<img src="img/classSchedule.jpg" class="img100">
		</div>
	</div>
	<!-- END CLASS SCHEDULE SECTION -->

	<!-- PRICING SECTION -->
	<div class="row">
		<div id="pricing">
			<!-- PRIVATE SESSIONS -->
			<div class="col-md-3 col-sm-6 firstCol">
				<table class="table">
					<p class="tableHeader"><span class="redColumnLine">Private Sessions</span></p>
					<thead>
						<tr class="trRedD">
							<th class="topTable"><span class="bold">$50</span> First session</th>
						</tr>
					</thead>
					<tbody>
						<tr class="trRedL">
							<th><span class="bold">$80</span> Single session</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trRedD">
							<th><span class="bold">$375</span> Five sessions</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trRedL">
							<th class="bottomTable"><span class="bold">$700</span> Ten sessions</th>
						</tr>
					</tbody>
				</table>
				<p class="srInstructor">Senior Instructor</p>
				<table class="table">
					<thead>
						<tr class="trRedD">
							<th class="topTable"><span class="bold">$85</span> Single session</th>
						</tr>
					</thead>
					<tbody>
						<tr class="trRedL">
							<th><span class="bold">$400</span> Five sessions</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trRedD">
							<th class="bottomTable"><span class="bold">$750</span> Ten sessions</th>
						</tr>
					</tbody>
				</table>
				<a href="https://clients.mindbodyonline.com/classic/home?studioid=8979" target="_blank" type="button" class="btn btnRed btnTable">Sign Up</a>
			</div>

			<!-- SEMI-PRIVATE SESSIONS -->
			<div class="col-md-3 col-sm-6 firstCol">
				<table class="table">
					<p class="tableHeader"><span class="redColumnLine">Semi-Private</span></p>
					<thead>
						<tr class="trRedD">
							<th class="topTable"><span class="bold">$35</span> First session</th>
						</tr>
					</thead>
					<tbody>
						<tr class="trRedL">
							<th><span class="bold">$55</span> Single session</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trRedD">
							<th><span class="bold">$265</span> Five sessions</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trRedL">
							<th class="bottomTable"><span class="bold">$500</span> Ten sessions</th>
						</tr>
					</tbody>
				</table>
				<p class="srInstructor">Senior Instructor</p>
				<table class="table">
					<thead>
						<tr class="trRedD">
							<th class="topTable"><span class="bold">$60</span> Single session</th>
						</tr>
					</thead>
					<tbody>
						<tr class="trRedL">
							<th><span class="bold">$290</span> Five sessions</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trRedD">
							<th class="bottomTable"><span class="bold">$550</span> Ten sessions</th>
						</tr>
					</tbody>
				</table>
				<a href="https://clients.mindbodyonline.com/classic/home?studioid=8979" target="_blank" type="button" class="btn btnRed btnTable">Sign Up</a>
			</div>

			<!-- EQUIPMENT CLASSES -->
			<div class="col-md-3 col-sm-6 firstCol">
				<table class="table">
					<p class="tableHeader"><span class="blueColumnLine">Equipment Classes</span></p>
					<thead>
						<tr class="trBlueD">
							<th class="topTable"><span class="bold">$40</span> for First Three classes</th>
						</tr>
					</thead>
					<tbody>
						<tr class="trBlueL">
							<th><span class="bold">$35</span> Single class</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trBlueD">
							<th><span class="bold">$165</span> Five classes</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trBlueL">
							<th class="bottomTable"><span class="bold">$300</span> Ten classes</th>
						</tr>
					</tbody>
				</table>
				<a href="https://clients.mindbodyonline.com/classic/home?studioid=8979" target="_blank" type="button" class="btn btnBlue btnTable">Sign Up</a>
			</div>

			<!-- MAT CLASSES -->
			<div class="col-md-3 col-sm-6 firstCol">
				<table class="table">
					<p class="tableHeader"><span class="blueColumnLine">Mat Classes</span></p>
					<thead>
						<tr class="trBlueD">
							<th class="topTable"><span class="bold">Free</span> First Mat class</th>
						</tr>
					</thead>
					<tbody>
						<tr class="trBlueL">
							<th><span class="bold">$20</span> Single class</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trBlueD">
							<th><span class="bold">$90</span> Five classes</th>
						</tr>
					</tbody>
					<tbody>
						<tr class="trBlueL">
							<th class="bottomTable"><span class="bold">$150</span> Ten classes</th>
						</tr>
					</tbody>
				</table>
				<a href="https://clients.mindbodyonline.com/classic/home?studioid=8979" target="_blank" type="button" class="btn btnBlue btnTable">Sign Up</a>
			</div>

			<!-- APPRENTICE SESSION -->
			<div class="col-md-6 col-sm-6 firstCol pricingBottom"">
				<table class="table">
					<p class="tableHeader apprenticeAdjust"><span class="blueColumnLine" data-toggle="tooltip" data-placement="top"
					 title="" data-original-title="The apprentice level classes offer the option of helping a practicing instructor become certified. 
					 If you are interested in learning more about our program or signing up for the class, see our “Apprentice&nbsp;Session”." 
					 data-animation="true">APPRENTICE SESSION</span></p>
					<thead>
						<tr class="trBlueD">
							<th class="roundedCorners"><span class="bold">$25</span> per session</th>
						</tr>
					</thead>
				</table>
				<a href="https://clients.mindbodyonline.com/classic/home?studioid=8979" target="_blank" type="button" class="btn btnBlue btnTable">Sign Up</a>
			</div>
			<div class="clearfix"></div>

		</div> <!-- pricing -->
	</div>
	<!-- END PRICING SECTION -->

	<!-- EDUCATION SECTION -->
	<div class="row">
		<div id="education">
			<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="pp">
					<img src ="img/ppHorz.png" class="ppHorz">
					<p class="ppText">
					We offer comprehensive and advanced teacher training through Polestar Pilates Education.  Polestar is an international authority in Pilates  that makes whole body health available to everyone through science-based techniques, critical thinking and the development of one's own intention.</p>
					<a href="http://www.polestarpilates.com/" target="_blank" type="button" class="btn btnClearBlk">Polestar Pilates</a>
				</div>
			</div>
			<img src="img/education.jpg" class="img100">
		</div>
	</div>
	<!-- END CLASS SCHEDULE SECTION -->

	<!-- ABOUT US SECTION -->
	<div class="row">
		<div id="aboutUs">
			<div class="col-md-12">
				<div class="row">
					<div role="tabpanel">
						<!-- The Tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#ourVision" aria-controls="Our Vision" role="tab" data-toggle="tab"><span class="tabTitle">Our Vision</span></a></li>
							<li role="presentation"><a href="#whoWeAre" aria-controls="Our Vision" role="tab" data-toggle="tab"><span class="tabTitle">Who We Are</span></a></li>
							<li role="presentation"><a href="#ourEquipment" aria-controls="Our Equipment" role="tab" data-toggle="tab"><span class="tabTitle">Our Equipment</span></a></li>
							<li role="presentation"><a href="#affiliations" aria-controls="Affiliations" role="tab" data-toggle="tab"><span class="tabTitle">Affiliations</span></a></li>
						</ul>
						<!-- The Guts -->
						<div class="tab-content">
							<!-- OUR VISION -->
							<div role="tabpanel" class="tab-pane fade in active" id="ourVision">
								<img src="img/aboutOurVision.jpg" class="img50">
								<div class="aboutUsContent">
									<p class="aboutTitle">Our Vision</p>
									<p class="aboutText">We believe in living with integrity and taking responsibility for our own well being, inspiring growth at all fitness levels from the novice to the professional, and supporting your personal journey through the Pilates discipline of mindful movement.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="whoWeAre">
								<img src="img/aboutAboutUs.jpg" class="img50">
								<div class="aboutUsContent">
									<p class="aboutTitle">Who We Are</p>
									<p class="aboutText">Studio Pilates is co-owned by Katelyn Cox and Mette Hansen. Katelyn was originally certified in Pilates by the Physicalmind Institute and later the Pilates Method Alliance. She is a former dancer and received her yoga teacher training through Yoga Works in 2001. Mette is a PMA Certified Pilates Teacher and an Educator for Polestar Pilates. She received her Pilates training through the Pilates Institute of Southern California and is a graduate of Polestar Pilates Education. Together they bring more than 25 years of combined teaching experience.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="ourEquipment">
								<img src="img/aboutOurEquipment.jpg" class="img50">
								<div class="aboutUsContent">
									<p class="aboutTitle">Our Equipment</p>
									<p class="aboutText">The studio is fully equipped with all of the Pilates apparatus: Reformers, Cadillac, Wunda Chairs, Barrels, Towers and so much more. We are proud to offer privates and semi-privates on the amazing CoreAlign from Balanced Body.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="affiliations">
								<img src="img/aboutAffiliations.jpg" class="img50">
								<div class="aboutUsContent">
									<p class="aboutTitle">Affiliations</p>
									<div class="logos">
										<ul class="aboutLogos">
											<li><a href="#"><img src="img/logosAHA.png" class="midRectangle"></a></li>
											<li><a href="#"><img src="img/logosPMA.png" class="vertRectangle"></a></li>
											<li><a href="#"><img src="img/logosPP.png" class="square"></a></li>
											<li><a href="#"><img src="img/logos-SJCH.png" class="square"></a></li>
											<li><a href="#"><img src="img/logosBB.jpg" class="longRectangle"></a></li>
											<li><a href="#"><img src="img/logosNBCF.jpg" class="longRectangle"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- tabpanel -->
				</div>
			</div>
		</div>
	</div>
	<!-- END ABOUT US SECTION -->

	<!-- GOOGLE MAP BEGIN -->
		<div class="row">
			<div id="map">
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=Studio+Pilates,+West+Grand+Avenue,+El+Segundo,+CA,+United+States&key=AIzaSyDBPBRvEA7wGx61QhFg353n4dQ0E_RSmYQ"></iframe>
			</div>
		</div>
	<!-- GOOGLE MAP END -->
	</div>
</div><!-- /.container -->

<?php include 'common/footer.php'; ?>
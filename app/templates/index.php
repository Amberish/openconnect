<!DOCTYPE html>
<?php 
	/*All file includes goes here....*/
	include_once "./scripts/data-sources/index.data-source.php"; 
?>
<html>
<head>
	<?php
		include_once "sub_templates/head-mainpage.php";
	?>
</head>
<body style="padding-top: 50px;">
	<?php 
		include_once "sub_templates/header.php";
	?>

	<div id="main-section">

		<!-- Nivo slider embedded in the page here..................................................-->	
		<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="img/slider/course1.jpg" data-thumb="img/slider/course1.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="img/slider/course2.jpg" data-thumb="img/slider/course2.jpg" alt="" title="This is an example of a caption"/></a>
                <img src="img/slider/course6.jpg" data-thumb="img/slider/course6.jpg" alt="" data-transition="slideInLeft"/>
                <img src="img/slider/course3.jpg" data-thumb="img/slider/course3.jpg" alt="" title="#htmlcaption"/>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
	    <script type="text/javascript" src="vendor/nivo-slider/jquery.nivo.slider.js"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider({
	        	effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
			    slices: 15,                     // For slice animations
			    boxCols: 8,                     // For box animations
			    boxRows: 4,                     // For box animations
			    animSpeed: 500,                 // Slide transition speed
			    pauseTime: 3000,                // How long each slide will show
			    startSlide: 0,                  // Set starting Slide (0 index)
			    directionNav: true,             // Next & Prev navigation
			    controlNav: true,               // 1,2,3... navigation
			    controlNavThumbs: false,        // Use thumbnails for Control Nav
			    pauseOnHover: true,             // Stop animation while hovering
			    manualAdvance: false,           // Force manual transitions
			    prevText: 'Prev',               // Prev directionNav text
			    nextText: 'Next',               // Next directionNav text
			    randomStart: false,             // Start on a random slide
			    beforeChange: function(){},     // Triggers before a slide transition
			    afterChange: function(){},      // Triggers after a slide transition
			    slideshowEnd: function(){},     // Triggers after all slides have been shown
			    lastSlide: function(){},        // Triggers when last slide is shown
			    afterLoad: function(){}         // Triggers when slider has loaded);
			});
		});
	    </script>
		<!-- nivo-slider..............................................................................-->

		<div class="container">
			<h3>Latest Courses</h3>
			<hr>
			<div class="row">
			
			  <?php foreach($latestContainer as $key => $data){ ?>

			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img class="rectangle" src="<?php echo $data['img-src'];?>">
			      <div class="caption">
			        <h3><?php echo $data['title']; ?></h3>
			        <p><?php echo $data['desc'];?></p>
			        <p><a href="<?php echo $data['course-link']; ?>" class="btn btn-primary btn-block" role="button">Take Course</a> <a href="<?php echo $data['author-link'];?>" class="btn btn-default btn-block" role="button">Get to know Author(s)</a></p>
			      </div>
			    </div>
			  </div>

			  <?php } ?>

			  <!-- <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course2.png">
			      <div class="caption">
			        <h3>Course for Node</h3>
			        <p>Hi there! This is an introductary course for the Node. Anyone willing to learn concept of Node can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course3.jpg">
			      <div class="caption">
			        <h3>Course for HTML</h3>
			        <p>Hi there! This is an introductary course for the HTML. Anyone willing to learn concept of HTML can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div> -->

			</div>	

			<br>

			<h3>Upcoming Courses</h3>
			<hr>
			<div class="row">

			  <?php foreach($upcomingContainer as $key => $data){ ?>

			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img class="rectangle" src="<?php echo $data['img-src'];?>">
			      <div class="caption">
			        <h3><?php echo $data['title']; ?></h3>
			        <p><?php echo $data['desc'];?></p>
			        <p><a href="<?php echo $data['course-link']; ?>" class="btn btn-primary btn-block" role="button">Take Course</a> <a href="<?php echo $data['author-link'];?>" class="btn btn-default btn-block" role="button">Get to know Author(s)</a></p>
			      </div>
			    </div>
			  </div>

			  <?php } ?>

			  <!-- <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course4.jpg">
			      <div class="caption">
			        <h3>Course for JQuery</h3>
			        <p>Hi there! This is an introductary course for the JQuery. Anyone willing to learn concept of JQuery can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course5.jpg">
			      <div class="caption">
			        <h3>Course for Node</h3>
			        <p>Hi there! This is an introductary course for the Node. Anyone willing to learn concept of Node can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course6.png">
			      <div class="caption">
			        <h3>Course for HTML</h3>
			        <p>Hi there! This is an introductary course for the HTML. Anyone willing to learn concept of HTML can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div> -->

			</div>
			
			<br/>
			<h3>Popular Courses</h3>
			<hr>
			<div class="row">

			  <?php foreach($popularContainer as $key => $data){ ?>

			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img class="rectangle" src="<?php echo $data['img-src'];?>">
			      <div class="caption">
			        <h3><?php echo $data['title']; ?></h3>
			        <p><?php echo $data['desc'];?></p>
			        <p><a href="<?php echo $data['course-link']; ?>" class="btn btn-primary btn-block" role="button">Take Course</a> <a href="<?php echo $data['author-link'];?>" class="btn btn-default btn-block" role="button">Get to know Author(s)</a></p>
			      </div>
			    </div>
			  </div>

			  <?php } ?>

			  <!-- <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course2.png">
			      <div class="caption">
			        <h3>Course for JQuery</h3>
			        <p>Hi there! This is an introductary course for the JQuery. Anyone willing to learn concept of JQuery can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course5.jpg">
			      <div class="caption">
			        <h3>Course for Node</h3>
			        <p>Hi there! This is an introductary course for the Node. Anyone willing to learn concept of Node can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img class="rectangle" src="img/course1.jpg">
			      <div class="caption">
			        <h3>Course for HTML</h3>
			        <p>Hi there! This is an introductary course for the HTML. Anyone willing to learn concept of HTML can take this course.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div> -->

			</div>		

		</div>


	</div>
	
	<?php
		include_once "sub_templates/footer.php";
	?>
</body>
</html>
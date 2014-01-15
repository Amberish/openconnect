<div id="header">

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="<?php echo WEB_ROOT;?>">Open Connect</a>
		</div>	

		<!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <div class="row">
	      
		  <div class="col-lg-8">
		    <form action="<?php echo WEB_ROOT;?>" class="navbar-form navbar-left" role="search">
		    	<div class="input-group">
			      <input type="text" class="form-control" name="s" placeholder="Search for a course..">
			      <span class="input-group-btn search-btn">
			        <button type="submit" class="btn btn-primary"> &nbsp; &nbsp; <i class="glyphicon glyphicon-search"></i>  &nbsp; &nbsp; </button>
			      </span>
			    </div>			  
			</form>
		  </div><!-- /.col-lg-6 -->

		  <div class="col-lg-2">
		  	<?php
				if($page_requested != "signup" && $page_requested != "signin"){
			?>
			<div class="navbar-right">
				<a href="<?php echo WEB_ROOT; ?>/signin/" class="btn btn-primary navbar-btn">Sign In</a>
				<a href="<?php echo WEB_ROOT; ?>/signup/" class="btn btn-success navbar-btn">Sign Up</a>
			</div>

			<?php
				}
			?>
		  </div>
		</div><!-- /.row -->	
	  </div><!-- /.navbar-collapse -->


		
	</nav>
</div>
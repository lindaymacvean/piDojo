<style type="text/css">
		  body {
			padding-top: 60px;
			padding-bottom: 40px;
		  }
		  .sidebar-nav {
			padding: 9px 0;
		  }
		
		  @media (max-width: 980px) {
			/* Enable use of floated navbar text */
			.navbar-text.pull-right {
			  float: none;
			  padding-left: 5px;
			  padding-right: 5px;
			}
		  }
		</style>
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">PiDojo</a>
          <ul class="nav">
			  <li><a href="#">Cool Factor <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></a></li>
		  </ul>
          
          <div class="nav-collapse collapse">
				<p class="navbar-text pull-right">
				<?php if($piArray) { ?>
				  Currently Connected to <a href="#" class="navbar-link">Username</a>
				<?php } ?>
				</p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div class="container-fluid">
      	<div class="row-fluid">
			<div class="span9">
				<div class="hero-unit">
					
				</div><!--/hero-unit-->
			</div><!--/span-->
      
		<div class="span3">
		  <div class="well sidebar-nav">
			<ul class="nav nav-list">
			  <li class="nav-header" data-toggle="collapse" data-target="#completed">Completed Challenges <i class="icon-arrow-down"></i></li>
			  <ul id="completed" class="collapse nav nav-list">
				  <!-- while loop through active challenges in $challenges relative to main.stageID -->
				  <li><a href="#">Introduction</a></li>
				  <li><a href="#"></a></li>
			  </ul>
			  <hr>
			  <li class="nav-header">Active Challenges</li>
			  <ul id="active" class="nav nav-list">
			  		<!-- while loop through active challenges in $challenges relative to main.stageID -->
				  <li class="active"><a href="#">Link</a></li>
				  <li><a href="#">Link</a></li>
			  </ul>
			</ul>
		  </div><!--/.well -->
		</div><!--/span-->
	</div><!--/row-->
	
      <hr>

      <footer>
        <p>&copy; Hello World Foundation 2013</p>
      </footer>

    </div><!--/.fluid-container-->
<style type="text/css">
  body {
	padding-top: 20px;
	padding-bottom: 40px;
  }

  /* Custom container */
  .container-narrow {
	margin: 0 auto;
	max-width: 700px;
  }
  .container-narrow > hr {
	margin: 30px 0;
  }

  /* Main marketing message and sign up button */
  .jumbotron {
	margin: 60px 0;
	text-align: center;
  }
  .jumbotron h1 {
	font-size: 72px;
	line-height: 1;
  }
  .jumbotron .btn {
	font-size: 21px;
	padding: 14px 24px;
  }

  /* Supporting marketing content */
  .marketing {
	margin: 60px 0;
  }
  .marketing p + h4 {
	margin-top: 28px;
  }
</style>
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="container-narrow">
      <div class="masthead">
        <h3 class="muted">piDojo</h3>
      </div>

      <div class="jumbotron">
        <h1>Well Done</h1>
        <p><iframe width="640" height="360" src="//www.youtube.com/embed/LUjYQtDI_qI" frameborder="0" allowfullscreen></iframe></p>			
      </div>
      
      
      <div class="row-fluid">
  		<div class="span8 offset2">
			<form class="form-horizontal">
			  <div class="control-group">
				<label class="control-label" for="piName" >Tell us your new Pi's cool name...</label>
				<div class="controls">
				  <input type="text" id="piName" placeholder="All one word, no spaces. No strange symbols, just numbers and letters." name="user">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="pid" >Tell us your new Pi's ID...</label>
				<div class="controls">
				  <input type="text" id="pid" placeholder="On the side of your Pi" name="pid">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="location">Where is your CoderDojo?</label>
				<div class="controls">
					<select class="input-large" id="location" >
						<option>Cork</option>
						<option>Belfast</option>
						<option>Science Gallery</option>
					</select>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn btn-large btn-primary">Launch my Pi</button>
				</div>
			  </div>
			</form>
		</div>
	  </div>
	  
      <hr>

      <div class="footer">
        <p>&copy; Hello World Foundation 2013</p>
      </div>

    </div> <!-- /container -->
    
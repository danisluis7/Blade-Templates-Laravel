<!DOCTYPE html>
<html>
	<head>
		<title>Admin Template Website</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<!-- Favicon Zone -->
		<link rel="stylesheet" type="text/css" href="{{URL::asset('admin/images/favicon.png')}}">
		<!-- Style && Bootstrap import -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="{{URL::asset('admin/css/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('admin/css/style.css')}}">
		<!-- Fonts google -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i" rel="stylesheet">
	</head>
	<body>
		<!-- Template for add ManageCategory record -->
		<div id="modal" class="modal">
		  <form class="modal-content animate" action="" method="post">
                <div style="padding-left: 46px; padding-right: 46px; padding-bottom: 46px;">
                	<div>
			  			<h3>Template</h3>
			  			<span onclick="document.getElementById('modal').style.display='none'" class="close">&times;</span>
			  		</div>

			  		<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Text</label>
					  <div class="col-10">
					    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
					  </div>
					</div>

			  		<div class="form-group row">
					  <label for="example-search-input" class="col-2 col-form-label">Search</label>
					  <div class="col-10">
					    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label">Email</label>
					  <div class="col-10">
					    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-url-input" class="col-2 col-form-label">URL</label>
					  <div class="col-10">
					    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
					  <div class="col-10">
					    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
					  </div>
					</div>

					<div class="form-group row">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
				  	</div>

				  	<fieldset class="form-group row">
					    <legend>Radio buttons</legend>
					    <div class="form-check">
					      <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					        Option one is this and that&mdash;be sure to include why it's great
					      </label>
					    </div>
					    <div class="form-check">
					    <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
					        Option two can be something else and selecting it will deselect option one
					      </label>
					    </div>
					    <div class="form-check disabled">
					    <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
					        Option three is disabled
					      </label>
					    </div>
					  </fieldset>

					<div class="form-group row">
					  <label for="example-password-input" class="col-2 col-form-label">Password</label>
					  <div class="col-10">
					    <input class="form-control" type="password" value="hunter2" id="example-password-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-number-input" class="col-2 col-form-label">Number</label>
					  <div class="col-10">
					    <input class="form-control" type="number" value="42" id="example-number-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
					  <div class="col-10">
					    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-date-input" class="col-2 col-form-label">Date</label>
					  <div class="col-10">
					    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-month-input" class="col-2 col-form-label">Month</label>
					  <div class="col-10">
					    <input class="form-control" type="month" value="2011-08" id="example-month-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-week-input" class="col-2 col-form-label">Week</label>
					  <div class="col-10">
					    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-time-input" class="col-2 col-form-label">Time</label>
					  <div class="col-10">
					    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-color-input" class="col-2 col-form-label">Color</label>
					  <div class="col-10">
					    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
					  </div>
					</div>

					<div class="form-group row">
					    <label for="exampleSelect1">Example select</label>
					    <select class="form-control" id="exampleSelect1">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					</div>

					  <div class="form-group row">
					    <label for="exampleSelect2">Example multiple select</label>
					    <select multiple class="form-control" id="exampleSelect2">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					</div>

					<div class="form-group row">
					    <label for="exampleTextarea">Example textarea</label>
					    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					</div>

					<div class="form-check row">
					    <label class="form-check-label">
					      <input type="checkbox" class="form-check-input">
					      Administrater
					    </label>
					</div>

                    <div class="form-group row">
                    	<button class="form-control" type="submit">Đăng sách</button>	
                    </div>
                </div>
            </form>
		</div>


		<!-- Template for edit ManageCategory record -->
		<div id="modal-edit" class="modal-edit">
		  <form class="modal-content animate" action="" method="post">
                <div style="padding-left: 46px; padding-right: 46px; padding-bottom: 46px;">
                	<div>
			  			<h3>Template Edit Information</h3>
			  			<span onclick="document.getElementById('modal-edit').style.display='none'" class="close">&times;</span>
			  		</div>

			  		<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Text</label>
					  <div class="col-10">
					    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
					  </div>
					</div>

			  		<div class="form-group row">
					  <label for="example-search-input" class="col-2 col-form-label">Search</label>
					  <div class="col-10">
					    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label">Email</label>
					  <div class="col-10">
					    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-url-input" class="col-2 col-form-label">URL</label>
					  <div class="col-10">
					    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
					  <div class="col-10">
					    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
					  </div>
					</div>

					<div class="form-group row">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
				  	</div>

				  	<fieldset class="form-group row">
					    <legend>Radio buttons</legend>
					    <div class="form-check">
					      <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					        Option one is this and that&mdash;be sure to include why it's great
					      </label>
					    </div>
					    <div class="form-check">
					    <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
					        Option two can be something else and selecting it will deselect option one
					      </label>
					    </div>
					    <div class="form-check disabled">
					    <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
					        Option three is disabled
					      </label>
					    </div>
					  </fieldset>

					<div class="form-group row">
					  <label for="example-password-input" class="col-2 col-form-label">Password</label>
					  <div class="col-10">
					    <input class="form-control" type="password" value="hunter2" id="example-password-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-number-input" class="col-2 col-form-label">Number</label>
					  <div class="col-10">
					    <input class="form-control" type="number" value="42" id="example-number-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
					  <div class="col-10">
					    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-date-input" class="col-2 col-form-label">Date</label>
					  <div class="col-10">
					    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-month-input" class="col-2 col-form-label">Month</label>
					  <div class="col-10">
					    <input class="form-control" type="month" value="2011-08" id="example-month-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-week-input" class="col-2 col-form-label">Week</label>
					  <div class="col-10">
					    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-time-input" class="col-2 col-form-label">Time</label>
					  <div class="col-10">
					    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-color-input" class="col-2 col-form-label">Color</label>
					  <div class="col-10">
					    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
					  </div>
					</div>

					<div class="form-group row">
					    <label for="exampleSelect1">Example select</label>
					    <select class="form-control" id="exampleSelect1">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					</div>

					  <div class="form-group row">
					    <label for="exampleSelect2">Example multiple select</label>
					    <select multiple class="form-control" id="exampleSelect2">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					</div>

					<div class="form-group row">
					    <label for="exampleTextarea">Example textarea</label>
					    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					</div>

					<div class="form-check row">
					    <label class="form-check-label">
					      <input type="checkbox" class="form-check-input">
					      Administrater
					    </label>
					</div>

                    <div class="form-group row">
                    	<button class="form-control" type="submit">Đăng sách</button>	
                    </div>
                </div>
            </form>
		</div>

		<!-- Template for delete ManageCategory record -->
		<div id="modal-del" class="modal-del">
		  <form class="modal-content animate" action="" method="post">
                <div style="padding-left: 46px; padding-right: 46px; padding-bottom: 46px;">
                	<div>
			  			<h3>Template Delete Information</h3>
			  			<span onclick="document.getElementById('modal-del').style.display='none'" class="close">&times;</span>
			  		</div>

			  		<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label">Text</label>
					  <div class="col-10">
					    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
					  </div>
					</div>

			  		<div class="form-group row">
					  <label for="example-search-input" class="col-2 col-form-label">Search</label>
					  <div class="col-10">
					    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label">Email</label>
					  <div class="col-10">
					    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-url-input" class="col-2 col-form-label">URL</label>
					  <div class="col-10">
					    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
					  <div class="col-10">
					    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
					  </div>
					</div>

					<div class="form-group row">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
				  	</div>

				  	<fieldset class="form-group row">
					    <legend>Radio buttons</legend>
					    <div class="form-check">
					      <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					        Option one is this and that&mdash;be sure to include why it's great
					      </label>
					    </div>
					    <div class="form-check">
					    <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
					        Option two can be something else and selecting it will deselect option one
					      </label>
					    </div>
					    <div class="form-check disabled">
					    <label class="form-check-label">
					        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
					        Option three is disabled
					      </label>
					    </div>
					  </fieldset>

					<div class="form-group row">
					  <label for="example-password-input" class="col-2 col-form-label">Password</label>
					  <div class="col-10">
					    <input class="form-control" type="password" value="hunter2" id="example-password-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-number-input" class="col-2 col-form-label">Number</label>
					  <div class="col-10">
					    <input class="form-control" type="number" value="42" id="example-number-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
					  <div class="col-10">
					    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-date-input" class="col-2 col-form-label">Date</label>
					  <div class="col-10">
					    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-month-input" class="col-2 col-form-label">Month</label>
					  <div class="col-10">
					    <input class="form-control" type="month" value="2011-08" id="example-month-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-week-input" class="col-2 col-form-label">Week</label>
					  <div class="col-10">
					    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-time-input" class="col-2 col-form-label">Time</label>
					  <div class="col-10">
					    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="example-color-input" class="col-2 col-form-label">Color</label>
					  <div class="col-10">
					    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
					  </div>
					</div>

					<div class="form-group row">
					    <label for="exampleSelect1">Example select</label>
					    <select class="form-control" id="exampleSelect1">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					</div>

					  <div class="form-group row">
					    <label for="exampleSelect2">Example multiple select</label>
					    <select multiple class="form-control" id="exampleSelect2">
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					    </select>
					</div>

					<div class="form-group row">
					    <label for="exampleTextarea">Example textarea</label>
					    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					</div>

					<div class="form-check row">
					    <label class="form-check-label">
					      <input type="checkbox" class="form-check-input">
					      Administrater
					    </label>
					</div>

                    <div class="form-group row">
                    	<button class="form-control" type="submit">Đăng sách</button>
                    </div>
                </div>
            </form>
		</div>

		<div id="wrapper" class="toggled">
			<div id="sidebar-wrapper">
				<div class="row" id="avatar">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<center><img src="{{URL::asset('admin/image/avatar.png')}}" class="img-circle img-responsive" alt="avatar"> </center>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<center>
							<h4 align="left">Lorence <br>& Philip</h4>
							<p align="left">Danang University</p>
						</center>
					</div>
				</div>
				<div class="row" id="menu">
					<ul class="list-group">
					  <li class="title list-group-item active">Management</li>
					  <li class="list-group-item" id="Dashboard">
					  	<a href="#"><span class="a"><i class="fa fa-user"></i></span>	<span>Dashboard</span></a>
					  	<span class="badge badge-success">3</span>
				  		<ul class="subMenu" id="DashboardOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="Forms">
					  	<a href="#"><span class="a"><i class="fa fa-address-book"></i></span>	<span>Forms</span></a>
					  	<span class="badge badge-default badge-pill">7</span>
					  	<ul class="subMenu" id="FormsOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="UIElements">
					  	<a href="#"><span class="a"><i class="fa fa-calendar"></i></span>	<span>UI Elements</span></a>
					  	<span class="badge badge-warning badge-pill">2</span>
					  	<ul class="subMenu" id="UIElementsOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="Widgets">
					  	<a href="#"><span class="a"><i class="fa fa-commenting-o"></i></span>	<span>Widgets</span></a>
					  	<span class="badge badge-info badge-pill">9</span>
					  	<ul class="subMenu" id="WidgetsOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="Pages">
					  	<a href="#"><span class="a"><i class="fa fa-cog"></i></span>	<span>Pages</span></a>
					  	<span class="badge badge-inverse badge-pill">14</span>
					  	<ul class="subMenu" id="PagesOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="title list-group-item active">Setting</li>
					  <li class="list-group-item" id="Charts">
					  	<a href="#"><span class="a"><i class="fa fa-users"></i></span>	<span>Charts</span></a>
					  	<span class="badge badge-default badge-pill">11</span>
					  	<ul class="subMenu" id="ChartsOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="Tables">
					  	<a href="#"><span class="a"><i class="fa fa-user"></i></span>	<span>Tables</span></a>
					  	<span class="badge badge-default badge-pill">14</span>
					  	<ul class="subMenu" id="TablesOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="Maps">
					  	<a href="#"><span class="a"><i class="fa fa-user"></i></span>	<span>Maps</span></a>
					  	<span class="badge badge-error badge-pill">6</span>
					  	<ul class="subMenu" id="MapsOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="Typography">
					  	<a href="#"><span class="a"><i class="fa fa-user"></i></span>	<span>Typography</span></a>
					  	<span class="badge badge-success badge-pill">14</span>
					  	<ul class="subMenu" id="TypographyOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="MenuLevels">
					  	<a href="#"><span class="a"><i class="fa fa-user"></i></span>	<span>Menu Levels</span></a>
					  	<span class="badge badge-success badge-pill">10</span>
					  	<ul class="subMenu" id="MenuLevelsOk">
				  			<li><a>Template Level 1</a></li>
				  			<li><a>Template Level 2</a></li>
				  			<li><a>Template Level 3</a></li>
				  			<li><a>Template Level 4</a></li>
				  		</ul>
					  </li>
					  <li class="list-group-item" id="MenuLevels">
					  	<a href="#"><span class="a"><i class="fa fa-user"></i></span>	<span>Menu Levels</span></a>
					  	<span class="badge badge-success badge-pill">10</span>
					  	<ul class="subMenu" id="MenuLevelsOk">
				  			<li><a>Template Level 1</a></li>
					  </li>
					</ul>	
				</div>
			</div><!-- sidebar-wrapper -->

			<div class="page-content-wrapper">
				<div class="container-fluid">
					<div class="row" id="topMenu">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<div align="left" id="drawer-btn">
									<!-- Todo something -->
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<ul align="left" class="nav navbar-nav">
							       <div class="inner-addon right-addon">
							        	<i class="glyphicon glyphicon-search" style="color: rgb(206, 240, 234);"></i>
							        	<input type="text" class="form-control" placeholder="Search" />
						        	</div>
						    	</ul>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="rightTopMenu">
					    	<div align="right">
					    		<i class="fa fa-comment" aria-hidden="true"></i>
					    		<i class="fa fa-cog" aria-hidden="true"></i>
					    		<i class="fa fa-power-off" aria-hidden="true"></i>
						    </div>
						</div>
					</div>
					<div class="row" id="content" style="background-color: white;">
						<div>
							<center>
								<h3 align="left">Dashboard</h3>
								<p align="left">Welcome back <span>Management Student's Academic Progress</span></p>
							</center>
						</div>
						<div>
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<a id="btn-display-add" class="btn btn-primary" style="color:white; font-weight: bold;" href="#" data-toggle="modal" data-target="">Add new record</a>
								</div>
							</div>
							<table class="table table-responsive table-bordered table-hover">
								<thead>
							    	<tr>
								      	<th class="bg-primary">Index</th>
								      	<th class="bg-primary">First Name</th>
								      	<th class="bg-primary">Last Name</th>
								      	<th class="bg-primary">Email</th>
								      	<th class="bg-primary">Phone</th>
								      	<th class="bg-primary">Address</th>
								      	<th class="bg-primary">Username</th>
								      	<th class="bg-primary">Password</th>
								      	<th class="bg-primary col-md-1">Action</th>
							    	</tr>
							  	</thead>
								<tbody>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a id="btn-display-edit" data-toggle="modal-edit" data-target="" href="#"><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a id="btn-display-del" data-toggle="modal-del" data-target="" href="#"><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								    <tr>
								     	<th scope="row">1</th>
								      	<td>Nguyen</td>
								      	<td>Vuong</td>
								      	<td>vuongluis@hotmail.com</td>
								      	<td>+84972248187</td>
								      	<td>Hoa Khanh Bac Village, Lien Chieu District, Da Nang City</td>
								      	<td>vuongluis</td>
								      	<td>••••••••••</td>
								      	<td class="actionBtn">
								      		<a href=""><span class="edit btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
											<a href=""><span class="delete btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
								      	</td>
								    </tr>
								</tbody>
							</table>
						</div>
						<div class="row">
							<center>
								<ul class="pagination">
								  	<li><a href="#">1</a></li>
								  	<li><a href="#">2</a></li>
								  	<li><a href="#">3</a></li>
								  	<li class="disabled"><a href="#">4</a></li>
								  	<li><a href="#">5</a></li>
								</ul>
							</center>
						</div>
					</div>
				</div>
			</div>	
		</div> <!-- wrapper -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/71b5e27098.js"></script>
		
		<!-- Tutorial for instruction -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('#drawer-btn').click(function(e){
					/** Todo **/
					e.preventDefault();
					$('#wrapper').toggleClass('toggled');
				});

				$('#btn-display-add').click(function(event) {
					event.preventDefault();
					$('#modal').css('display', 'block');
				});

				$('#btn-display-edit').click(function(event) {
					event.preventDefault();
					$('#modal-edit').css('display', 'block');
				});

				$('#btn-display-del').click(function(event) {
					event.preventDefault();
					$('#modal-del').css('display', 'block');
				});

			});

			$(document).ready(function(){
				$('#Dashboard').click(function(){
					/** Todo **/
					$('#DashboardOk').slideToggle();
				});

				$('#Forms').click(function(){
					/** Todo **/
					$('#FormsOk').slideToggle();
				});

				$('#UIElements').click(function(){
					/** Todo **/
					$('#UIElementsOk').slideToggle();
				});

				$('#Widgets').click(function(){
					/** Todo **/
					$('#WidgetsOk').slideToggle();
				});

				$('#Pages').click(function(){
					/** Todo **/
					$('#PagesOk').slideToggle();
				});			

				$('#Charts').click(function(){
					/** Todo **/
					$('#ChartsOk').slideToggle();
				});	

				$('#Tables').click(function(){
					/** Todo **/
					$('#TablesOk').slideToggle();
				});

				$('#Maps').click(function(){
					/** Todo **/
					$('#MapsOk').slideToggle();
				});

				$('#Typography').click(function(){
					/** Todo **/
					$('#TypographyOk').slideToggle();
				});

				$('#MenuLevels').click(function(){
					/** Todo **/
					$('#MenuLevelsOk').slideToggle();
				});
			});

			// Get the modal
			var modal = document.getElementById('modal');
			var modaledit = document.getElementById('modal-edit');
			var modaldel = document.getElementById('modal-del');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			    if (event.target == modaledit) {
			        modaledit.style.display = "none";
			    }
			    if (event.target == modaldel) {
			        modaldel.style.display = "none";
			    }
			}			
		</script>
	</body>
</html>




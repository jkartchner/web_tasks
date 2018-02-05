  <!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">-->
  <!--<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">-->
  <html>
  <style>
	  body {
		  margin: 0px;
		  /*position:fixed;*/
		  overflow:hidden;
	  }
	  .header {
		height: 35px;
		position: relative;
		background-color: #0f3e4f; /*rgb(35, 0, 35);*/
		border-bottom: 1px solid #0f3e4f;/*#2a2a2a;*/
		/*line-height: 1em;*/
		list-style-type: none;
  	}
	  ul {
		list-style-type: none;
    	margin: 0;
    	padding: 5;
		overflow: hidden;
	}
	  li {
		  display: inline;
		  color: white;
		  float: left;
		  font-size: 120%;
		  /*font-weight: bold;*/
	}

	  .logout {
		display: block;
		/*text-transform: uppercase;*/
		width: 150px;
		text-align: center;
		color: white;
		height: 28px;
		  -moz-border-radius:2px;
		  -webkit-border-radius:2px;
		  border-radius:2px;

		  margin-right: 100px;
		/*height: 35px;*/
		  text-decoration: none;
		  text-shadow:0px 1px 0px #283966;
	}
	  .logout:hover, .logout:active {
		  background-color: #FFFFFF; /*rgb(70, 0, 70);*/
		  color: #000000;
	  }

	  .login {
		display: block;
		text-transform: uppercase;
		color: white;
		/*margin-right: 800px;*/

	}
	  .sync {
		  /*display: block;
		  text-transform: uppercase;*/
		  width: 50px;
		  /*height: 28px;*/
		  background-color:#426B69;
		  text-align: center;
		  color:#ffffff;
		  font-family: Arial, Helvetica, sans-serif;
		  font-size:12px;
		  padding:5px 11px;
		  -moz-border-radius:7px;
		  -webkit-border-radius:7px;
		  border-radius:7px;
		  border:0px solid #4e6096;
		  display: inline-block;
		  margin-left: 20px;
		  margin-right: 650px;
		  margin-top: -2px;

		  text-decoration: none;
		  text-shadow:0px 1px 0px #283966;
		  font-weight: none;
	  }

	  .sync:hover, .sync:active {
		  background-color: #224B59; /*#FFFFFF; /*#222E50; /*rgb(70, 0, 70);*/
		  text-decoration: none;
		  /*color: #000000;
		  /*background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #222E50), color-stop(1, #B5CA8D));
		  background:-moz-linear-gradient(top, #222E50 5%, #B5CA8D 100%);
		  background:-webkit-linear-gradient(top, #222E50 5%, #B5CA8D 100%);
		  background:-o-linear-gradient(top, #222E50 5%, #B5CA8D 100%);
		  background:-ms-linear-gradient(top, #222E50 5%, #B5CA8D 100%);
		  background:linear-gradient(to bottom, #222E50 5%, #B5CA8D 100%);*/
	  }

	 .menuLinks-search {

	 }
	 #tfnewsearch{
		float:right;
		position:relative;
		top:-3px;
		padding:0px;
		right:0px;
	}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		background-color: #0f3e4f;
		font-size:13px;
		color: #DDDDDD;
		border:0px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	  .tftextinput:focus {
		  border: 0px solid #426B69;
		  outline: none;
	  }
	.tfbutton {
		/*-moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
		-webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
		box-shadow: 0px 0px 0px 2px #9fb4f2;*/
		/*background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
		background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
		background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
		background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
		background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
		background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);*/
		background-color:#426B69;
		-moz-border-radius:7px;
		-webkit-border-radius:7px;
		border-radius:7px;
		border:0px solid #4e6096;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:12px;
		padding:5px 11px;
		text-decoration:none;
		text-shadow:0px 1px 0px #283966;

		/*margin: 0;
		padding: 5px 15px;
		width: 50px;

		font-family: 'Bree Serif', serif;
		font-weight: 300;
		font-size: 13px;

		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #238fb5; border-right:0px;
		background: rgb(70, 0, 70); /*#0095cd;*/
		/*background: -webkit-gradient(linear, left top, left bottom, from(#175d75), to(#2355b5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;*/
	}
	.tfbutton:hover {
		/*background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
		background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
		background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
		background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
		background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
		background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);*/
		background-color: #224B59; /*#476e9e;*/
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
	.tfbutton:active {
		position:relative;
		top:1px;
	}


	    .menuLinks-tasknumber {
		  display: block;
		  text-transform: uppercase;
		  width: 200px;
		  text-align: center;
		  color: white;
		}
	  #menuLinks {
		position: absolute;
		top: 3px;
		right: 10px;
		min-width: 340px;
	}

	  #board-wrapper {
		position: absolute;
		left: 0;
		right: 0;
		/*top: 30px;*/
		bottom: 0;
		padding-top: 0px;
		padding-right: 10px;
		padding-bottom: 60px;
		padding-left: 10px;
	  }

	  #board-table {
	  /* I don't like the border right now
		 It shows a little thick
		border-style: dashed;
		border-color: rgb(240, 240, 240);*/
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
		margin-left: 0px;
		padding-top: 0px;
		padding-right: 0px;
		padding-bottom: 60px;
		padding-left: 0px;
		width: 100%;
		height: 100%;
		table-layout: fixed;
		border-collapse: separate;
	  }

	    .task {
	    	/*box-sizing:border-box;*/
			/*display: table-cell;*/
    		/*vertical-align: middle;*/
			position:relative;
			border: 1px;
			border-radius: 4px;
			border-color: rgb(140, 100, 140);
		}
	    .task input {
			float: left;
			/*margin-top:0.5em;*/
	  }
	    .task label {
			display: block;
			margin-left:1.5em;
			margin-bottom: 0.1em; /* this prevents a weird indent in the formatting of the div squares following a task label */
		}
	  .task:hover {
		    background-color: #D6EBFF; /*rgb(240, 220, 240);*/
		    border: 1px solid;
		    /*box-shadow: 4px 4px 5px #888888;*/
	  }
	   .tasklist_item:hover {
		   background-color: #D6EBFF; /*rgb(240, 220, 240);*/
		   border: 1px solid;
	   }
	    .tasklist_item_selected {
			background-color: #99CCFF; /*rgb(225, 205, 225);*/
		    border: 1px solid;
		}
		.subtask {
	    	/*box-sizing:border-box;*/
			/*display: table-cell;*/
    		/*vertical-align: middle;*/
			border: 1px;
			border-radius: 4px;
			border-color: rgb(250, 160, 10);
		}
	    .subtask input {
			float: left;
			margin-left:2.0em;*/
	  }
	    .subtask label {
			display: block;
			margin-left:3.5em;
		}

	  .chxbx {
		  position:relative;
	  }

	  .square {
		  float:left;
    	  position: relative;
		  top:0;
		  left:25px;
    	  width: 13%;
    	  height : 15px; /* = approx the height of a line break, which follows every task element */
		  font-size: xx-small;
		  text-align: center;
		  cursor: default;
	  }
	  /*.task, .task > div {
		  box-sizing:border-box;
	  }*/
	  .square:hover {
	  	  background-color: #D6FFFF; /*rgb(235, 215, 235);*/

	  }
	  .small_square {
		  float:left;
    	  position: absolute;
		  top:20px;
		  /*margin-bottom:-20px;*/
		  left:2px;
    	  width: 17px;
    	  height : 15px; /* = approx the height of a line break, which follows every task element */
		  font-size: xx-small;
		  text-align: center;
		  cursor: default;
	  }
	  .small_square:hover {
	  	  background-color: #D6FFFF; /*rgb(195, 165, 195);*/
	  }
	  .stopwatch {
		position:absolute;
		bottom:30px;
		align-items:center;
    	display: inline-block;
    	background-color: white;
    	border: 1px solid #eee;
    	padding: 5px;
    	margin: 5px;
  	  }
  	  .stopwatch span {
    	font-weight: bold;
    	display: block;
  	  }
  	  .stopwatch a {
    	padding-right: 5px;
    	text-decoration: none;
  	  }
	  .footer {
		height: 25px;
		position: absolute;
		  bottom: 0px;
		  right: 0px;
		  left: 0px;
		background-color: #0f3e4f; /*rgb(35, 0, 35);*/
		border-bottom: 1px solid #0f3e4f;
		/*line-height: 1em;*/
		list-style-type: none;
  	}
  </style>
  <head>
	<!--I'm having some problem with an external style sheet. So I'm putting it internal for now.
		<link rel="stylesheet" type="text/css" href="./taskstyle.css">-->
    <title>Manage Tasks</title>
	<link rel="small icon" href="cloud264_16.ico" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  </head>
  <body onload="task_on_load()">
	<div class="header">
		<h1 class="header-logo">
			<a id="header-logo-link" href="./" class="header-logolink">
				<div id="header-logo-img">
				<img src="./snowflake136.png" alt="Tasks" class="header-logoImg"/>
				</div>
			</a>
		</h1>

		<ul id="menuLinks">
			<?php if (isset($authUrl)): ?>
				<li class="menuLinks-login">
					<a class='login' href='<?php echo $authUrl; ?>'>Connect Me!</a>
				</li>
			<?php else: ?>
				<li class="menuLinks-search">
					<form id="tfnewsearch">
		        		<input type="text" class="tftextinput" name="q" size="15" maxlength="120" placeholder="search..."><input type="submit" value="search" class="tfbutton">
					</form>
				</li>
				<li class="menuLinks-sync">
					<!--// here we put the buttons so we can refresh lists manually-->
          			<a class='sync' href="?action">sync</a>
				</li>
				<!--<li class="menuLinks-tasknumber">
					<?php //echo "# Lists: " . sizeof($arr); ?>
				</li>
				<li class="menuLinks-tasknumber">
					<?php //echo "# Tasks Today: " . sizeof($array_tasks); ?>
				</li>-->
				<li class="menuLinks-logout">
					<a class='logout' href='?logout'>Logout</a>
				</li>
			<?php endif ?>

		</ul>
	</div>

	<div class="board-wrapper">
		<?php if(isset($_SESSION['access_token'])): ?>
			<table id="board-table">
				<thead>
					<tr>
						<th class="columnheader" style="width: 200px;">
							<div class="columnheader-inner">
								<h2 title="Client List" class="columnheader-name">
									Client List
								</h2>
								<p style="font-size:50%" id="tasklist_number_total">
									<?php echo "# Lists: " . sizeof($arr); ?>
								</p>
							</div>
						</th>
						<th class="columnheader" style="width: 350px;">
							<div class="columnheader-inner" id="columnheader-inner">
								<h2 title="This Week" class="columnheader-name" id="columnheader-inner-h2">
									This Week
								</h2>
								<p style="font-size:50%" id="nextweek_tasks_number_total">
									<?php echo "Total: " . sizeof($array_nextweek_tasks); ?>
								</p>
							</div>
						</th>
						<th class="columnheader" style="width: 350px;">
							<div class="columnheader-inner">
								<h2 title="Today" class="columnheader-name">
									Today
								</h2>
								<p style="font-size:50%" id="today_tasks_number_total">
									<?php echo "Total: " . sizeof($array_tasks); ?>
								</p>
							</div>
						</th>
						<th class="columnheader" style="width: 350px;">
							<div class="columnheader-inner">
								<h2 title="Current" class="columnheader-name">
									Current Task
								</h2>
							</div>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="board-swimlane swimlane-first swimlane-last">
						<td class="board-taskListCell">
							<div class="tasklist ui-sortable" style="overflow-y: auto; height: 100%;">
							  <div class="tasklist_item_selected" style="cursor:default;" onclick="tasklist_switch(this)"
								   id="All Due Dates">
				   					 All Due Dates <br>
							  </div>

							  <div id="selectTasklist">
							  <?php foreach ($arr as $taskList): ?>
								<div class="tasklist_item" style="cursor:default;" onclick="tasklist_switch(this)"
									 id="<?php echo $taskList->getTitle(); ?>">
				   					<?php echo $taskList->getTitle() . "<br>"; ?>
								</div>
						  	  <?php endforeach ?>
							  </div>
							</div>
						</td>
						<td class="board-taskListCell">
							<div class="tasklist ui-sortable" style="overflow-y: auto; height: 100%;">

									<form id="selectNextWeekTask" action="">
										<?php foreach ($array_nextweek_tasks as $index=>$task): ?>
										 <?php if($task->getParent() != null) continue; // this skips over an iteration if the task has a parent ?>
										  <div class="task">
											<input class="chxbx" type="checkbox" name="id2" value="test2"
												   onclick="any_checkbox_checked(this.parentElement)"/>
										    <label id="<?php echo $task->getID(); ?>"

												   data-duedate="<?php echo $task->getDue(); ?>"
												   data-parent="<?php echo $task->getParent(); ?>"
												   draggable="true" contenteditable="true"
												   onkeydown="task_key_down(event, this)"><?php echo $task->getTitle(); ?></label>
											<div class="small_square" onclick="nextweek_task_click(this.parentElement.children[1].id, this.parentElement.children[1].innerHTML, this.parentElement.children[1])"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 1)"
													onmouseover="today_plus_X_days_hover(this, 1)"
													onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 2)"
													onmouseover="today_plus_X_days_hover(this, 2)"
													onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 3)"
													onmouseover="today_plus_X_days_hover(this, 3)"
													onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 4)"
													onmouseover="today_plus_X_days_hover(this, 4)"
													onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 5)"
													onmouseover="today_plus_X_days_hover(this, 5)"
													onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 6)"
													onmouseover="today_plus_X_days_hover(this, 6)"
													onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 7)"
													onmouseover="today_plus_X_days_hover(this, 7)"
													onmouseout="today_plus_X_days_out(this)"></div><br/>

											<?php $count = $index; if($count < count($array_nextweek_tasks) - 1): ?>
											<?php while($array_nextweek_tasks[$count + 1]->getParent() != null): ?>
												<div class="subtask">
													<input type="checkbox" name="id" value="test"
														   onclick="any_checkbox_checked(this.parentElement)"/>
													<label id="<?php echo $array_nextweek_tasks[$count + 1]->getID(); ?>"
												   		data-duedate="<?php echo $array_nextweek_tasks[$count + 1]->getDue(); ?>"
												   		data-parent="<?php echo $array_nextweek_tasks[$count + 1]->getParent(); ?>"
												   		draggable="true" contenteditable="true"
														onkeydown="task_key_down(event, this)">
												   		<?php echo $array_nextweek_tasks[$count + 1]->getTitle(); ?>
													</label>
													<div class="square" onclick="today_plus_X_days_click(this, 1)"
														onmouseover="today_plus_X_days_hover(this, 1)"
														onmouseout="today_plus_X_days_out(this)"></div>
													<div class="square" onclick="today_plus_X_days_click(this, 2)"
														onmouseover="today_plus_X_days_hover(this, 2)"
														onmouseout="today_plus_X_days_out(this)"></div>
													<div class="square" onclick="today_plus_X_days_click(this, 3)"
														onmouseover="today_plus_X_days_hover(this, 3)"
														onmouseout="today_plus_X_days_out(this)"></div>
													<div class="square" onclick="today_plus_X_days_click(this, 4)"
														onmouseover="today_plus_X_days_hover(this, 4)"
														onmouseout="today_plus_X_days_out(this)"></div>
													<div class="square" onclick="today_plus_X_days_click(this, 5)"
														onmouseover="today_plus_X_days_hover(this, 5)"
														onmouseout="today_plus_X_days_out(this)"></div>
													<div class="square" onclick="today_plus_X_days_click(this, 6)"
														onmouseover="today_plus_X_days_hover(this, 6)"
														onmouseout="today_plus_X_days_out(this)"></div>
													<div class="square" onclick="today_plus_X_days_click(this, 7)"
														onmouseover="today_plus_X_days_hover(this, 7)"
														onmouseout="today_plus_X_days_out(this)"></div><br/>
												</div>
									  		 <?php $count++; endwhile; endif; ?>
										  </div>
										<?php endforeach ?>
									</form>
									<br/><!--a little whitespace after the list ends-->
							</div>
						</td>
						<td class="board-taskListCell">
							<div class="tasklist ui-sortable" style="overflow-y: auto; height: 100%;">

									<form id="selectTodayTask" action="">
									  <?php foreach ($array_tasks as $index=>$task): ?>
									   <?php if($task->getParent() != null) continue; // this skips over an iteration if the task has a parent ?>
										<div class="task">

											<input type="checkbox" name="id" value="test"
												   onclick="any_checkbox_checked(this.parentElement)"/>
											<label id="<?php echo $task->getID(); ?>"

												   data-duedate="<?php echo $task->getDue(); ?>"
												   data-parent="<?php echo $task->getParent(); ?>"
												   draggable="true" contenteditable="true"
												   onkeydown="task_key_down(event, this)">
												   <?php echo $task->getTitle(); ?>
											</label>
											<div class="small_square" onclick="today_task_click(this.parentElement.children[1].id, this.parentElement.children[1].innerHTML, this.parentElement.children[1])"></div>
											<!--<div class="square"></div>-->
											<div class="square" onclick="today_plus_X_days_click(this, 1)"
												onmouseover="today_plus_X_days_hover(this, 1)"
												onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 2)"
												onmouseover="today_plus_X_days_hover(this, 2)"
												onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 3)"
												onmouseover="today_plus_X_days_hover(this, 3)"
												onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 4)"
												onmouseover="today_plus_X_days_hover(this, 4)"
												onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 5)"
												onmouseover="today_plus_X_days_hover(this, 5)"
												onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 6)"
												onmouseover="today_plus_X_days_hover(this, 6)"
												onmouseout="today_plus_X_days_out(this)"></div>
											<div class="square" onclick="today_plus_X_days_click(this, 7)"
												onmouseover="today_plus_X_days_hover(this, 7)"
												onmouseout="today_plus_X_days_out(this)"></div><br/>

									   <?php $count = $index; if($count < count($array_tasks) - 1): ?>
											<?php while($array_tasks[$count + 1]->getParent() != null): ?>
											<div class="subtask">
												<input type="checkbox" name="id" value="test"
													   onclick="any_checkbox_checked(this.parentElement)"/>
												<label id="<?php echo $array_tasks[$count + 1]->getID(); ?>"
												   data-duedate="<?php echo $array_tasks[$count + 1]->getDue(); ?>"
												   data-parent="<?php echo $array_tasks[$count + 1]->getParent(); ?>"
												   draggable="true" contenteditable="true"
												   onkeydown="task_key_down(event, this)">
												   <?php echo $array_tasks[$count + 1]->getTitle(); ?>
												</label>
												<div class="square" onclick="today_plus_X_days_click(this, 1)"
													onmouseover="today_plus_X_days_hover(this, 1)"
													onmouseout="today_plus_X_days_out(this)"></div>
												<div class="square" onclick="today_plus_X_days_click(this, 2)"
													onmouseover="today_plus_X_days_hover(this, 2)"
													onmouseout="today_plus_X_days_out(this)"></div>
												<div class="square" onclick="today_plus_X_days_click(this, 3)"
													onmouseover="today_plus_X_days_hover(this, 3)"
													onmouseout="today_plus_X_days_out(this)"></div>
												<div class="square" onclick="today_plus_X_days_click(this, 4)"
													onmouseover="today_plus_X_days_hover(this, 4)"
													onmouseout="today_plus_X_days_out(this)"></div>
												<div class="square" onclick="today_plus_X_days_click(this, 5)"
													onmouseover="today_plus_X_days_hover(this, 5)"
													onmouseout="today_plus_X_days_out(this)"></div>
												<div class="square" onclick="today_plus_X_days_click(this, 6)"
													onmouseover="today_plus_X_days_hover(this, 6)"
													onmouseout="today_plus_X_days_out(this)"></div>
												<div class="square" onclick="today_plus_X_days_click(this, 7)"
													onmouseover="today_plus_X_days_hover(this, 7)"
													onmouseout="today_plus_X_days_out(this)"></div><br/>
											</div>
									   <?php $count++; endwhile; endif; ?>
										</div>
									  <?php endforeach ?>
									</form>
									<br/> <!--a little whitespace after the list ends-->
							</div>
						</td>
						<td class="board-tasklistCell">
							<div class="tasklist ui-sortable" style="overflow-y: auto; height: 100%;">
								<form id="selectCurrentTask" action="">
									<!--<div class="task">
										<!--<span id="id_test" name="currentTask" style="display:none;">-->
											<!--<input type="checkbox" name="check_current_task" value="test"/>
											<label id="currentTaskLabel"
												   name="currentTask_Label"
												   onclick="current_task_click(this.id, this.innerHTML, this)"
												   data-duedate="">
											</label>
										<!--</span>-->
									<!--/div>-->
									 <!--<script language="javascript">
										 var today = new Date();
										 //document.write(today);
										 document.write(ISODateString(new Date()));
									 </script>-->
								</form>
								<br/>
								<div class="stopwatch" id="stopwatch">

								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		<?php endif ?>

  	</div>

	<div class="footer">
		<!--this portion will have any code to go in the actual footer of the page-->
		<div style='font-size:8; margin-top:16px; color:#224B59;'>Icons made by <a href="http://graphberry.com" title="GraphBerry" style="text-decoration: none; color:#224B59;">GraphBerry</a> from <a href="http://www.flaticon.com" title="Flaticon" style="text-decoration: none; color:#224B59;">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" style="text-decoration: none; color:#224B59;">CC BY 3.0</a></div>
	  </div>

  	<?php if (isset($short)): ?>
    		<div class="shortened">
      			<?php var_dump($short); ?>
    		</div>
  	<?php endif ?>
	<script>
		/*******************************************************
		  GLOBAL VARIABLES
		    Debugging: can turn on/off with one variable
		********************************************************/
		var is_Debugging = true;
		/*******************************************************
		  GLOBAL VARIABLES
		    Live: can turn on/off connection to GTasks server
		********************************************************/
		var is_Live = true;

		/*******************************************************
		  GLOBAL VARIABLES
		    Server State: is server currently busy doing some-
			              thing else?
		********************************************************/
		var is_Server_Busy = false;

		/*******************************************************
		  GLOBAL VARIABLES
		    Client State: is client planning to move a task?
						  If so, server will need to know
						  when assigning a new date
		********************************************************/
		var is_Task_Moving = false;

		/*******************************************************
		  GLOBAL VARIABLES
		    String of Task Info:	Bit of a misnomer.
									Rather should be Task_To_Update...
									If we are moving a task
						  			in the array, we need to
						  			keep info of a subtask
									in a task block, so the
									server knows which task
									to update, and which tasks
									to move around.
		********************************************************/
		var string_Task_To_Move_Params = "";

		/*******************************************************
		  GLOBAL VARIABLES
		    Array of AJAX Calls: if the server is busy doing
			                     an AJAX call already, we
								 wait until it's clear. Then
								 work through this array of
								 calls until the array is
								 empty.
		********************************************************/
		var array_AJAX_Requests = new Array();


		/*******************************************************
		  GLOBAL VARIABLES
		    Selected Task List: gives ID of current task list
		********************************************************/
		var current_Tasklist = "All Due Dates";

		/*******************************************************************************
		  Routine which sends relevant info by AJAX to the
		  server for processing.

		  Params:
		  		string_POST_header: a string which indicates
									what we're doing with this
									post request. Internal use.
		  		string_POST_params: a string with parameters
									we will send in a POST
									request
				cfunc:  a function defined either as an
						(inline) param or done in a separate
						defined function elsewhere.

		  Sample inline cfunc:
		  	send_ajax_request("", function()
  			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
    				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    			}
  			});
		********************************************************************************/
		function send_ajax_request(string_POST_header, string_POST_params, cfunc)
		{
			// first, make sure the server is free, we have permission to access it, and we either have arguments to work with or stored parameters to work with
			if(is_Live && !is_Server_Busy && (arguments.length != 0 || array_AJAX_Requests.length != 0)) // with the arguments check, we can overload the function
			{
				if(arguments.length == 0) // if the sender didn't give us arguments to work with, we use the backlog of requests
				{
					string_POST_header = array_AJAX_Requests[0][0];
					string_POST_params = array_AJAX_Requests[0][1];
					cfunc = array_AJAX_Requests[0][2];
					array_AJAX_Requests.splice(0, 1);  // remove the element at index 0
				}
				xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = cfunc;
				xmlhttp.open("POST","ajax_library.php",true);
				xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); // this ensures data is encoded properly
				xmlhttp.send(string_POST_params);

				is_Server_Busy = true; // finally, lock the server from use until we get some response
				document.getElementById("header-logo-img").innerHTML = "<img src='./loading.gif' alt='Tasks' class='header-logoImg' style='margin-top:6;'/>";
			}
			else if (is_Server_Busy)
			{
				array_AJAX_Requests.push([string_POST_header, string_POST_params, cfunc]); // append an array of the function arguments to this array for later use
			}
			else if (!is_Server_Busy) // if we are out of stuff to do, restore the original logo and update the task totals
			{
				document.getElementById("header-logo-img").innerHTML = "<img src='./snowflake136.png' alt='Tasks' class='header-logoImg'/>";
				update_task_numbers(); // finally, update the number showing the total tasks/tasklists in each swimlane.
			}

		}

		/*******************************************************
			Routine to read key presses. If the key pressed
			is enter, we want to abort and send the edited
			label to AJAX for a server update.

			It would be better to update the label every time
			the label loses focuses and the text has been
			changed. I found this difficult to implement for
			little benefit. Using the enter key as the save
			button is fairly intuitive. Not a perfect/good
			solution, but this can be updated later.
		********************************************************/
		function task_key_down(event, object)
		{
			var keyCode = event.keyCode || event.which,
				target = event.target || event.srcElement;
			if(keyCode === 13 && !event.shiftKey)
				{
					//event.stopImmediatePropagation();
					event.preventDefault();
					//document.execCommand("selectAll", false, null);
					//document.execCommand("removeFormat", false, null);
					//window.alert(object.innerHTML);
					//object.innerHTML = object.innerHTML.replace(/<\/?[^>]+(>|$)/g, "");

					// now update the task in the server cache and on the GTasks backend
					// VERY IMPORTANT WE SEND OBJECT.INNERTEXT and NOT OBJECT.INNERHTML. The contenteditable attribute is wonky. It adds html all over the place that screws with the task structure. InnerText keeps it clean.
					// See all the gymnastics and work done above to try to figure out how to get clean text. That is a graveyard of tears and failure. It was as simple as using innerText, though.
					send_ajax_request("task_label_changed", "task_label_changed=" + object.id + "&swimlane=" + get_int_from_swimlane(object.parentElement.parentElement.getAttribute("id")) +
							"&new_label=" + object.innerText, function()
					{
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							//window.alert(xmlhttp.responseText);
							is_Server_Busy = false; // unlock the server
							send_ajax_request();    // and go around again to see if we have more ajax requests to send
						}
						else if(xmlhttp.status > 400)
							window.alert(xmlhttp.responseText);
					});


					document.getElementById(object.id).blur();
				}
			//window.alert(event.keyCode + "!"); // for debugging
		}

		/*******************************************************
		  Routine to select a new task list to work with.
		  Deselects the old selected tasklist, selects the
		  new one, then runs code to load info into the
		  app for this particular list rather than the prior.
		********************************************************/
		function tasklist_switch(object)
		{
			if(object.id == current_Tasklist)
				return;		// if we clicked the same list that's currently active, do nothing, return
			object.className="tasklist_item_selected"; // change the class name of the new task list to one that will get the highlighted css treatment
			//if(is_Debugging)
				//window.alert(current_Tasklist);
			document.getElementById(current_Tasklist).className = "tasklist_item"; // change the old tasklist back to normal css treatment for a tasklist
			current_Tasklist = object.id; // memorialize the new task list id with the global variable
			// clear the next week swim lane so we can populate it with the relevant tasks
			swimlane_clear("selectNextWeekTask");
			// now change the name of the column header to the new task list

			if(current_Tasklist != "All Due Dates")
			{
				// change the name of the column header to the new task list
				document.getElementById("columnheader-inner-h2").innerHTML = current_Tasklist;
				send_ajax_request("switch_tasklist", "switch_tasklist=" + object.id + "&tasklist_id=" + object.id, function()
					{
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							//window.alert(xmlhttp.responseText);
							var arr = JSON.parse(xmlhttp.responseText);
							for(var index = 0; index < arr.length; ++index)
							{
								var divChild = document.createElement("div");			// create the element node for the div container
								var att_divChild = document.createAttribute("class");	// create the attribute node
									att_divChild.value = "task";						// assign a value to the element
									divChild.setAttributeNode(att_divChild);			// set the attribute to the div container element

								var checkboxChild = document.createElement("input");	// create the element node for the checkbox
								var att_checkboxChild = document.createAttribute("type"); // create the attribute node
									att_checkboxChild.value = "checkbox";				// assign a value to the element
									checkboxChild.setAttributeNode(att_checkboxChild); // set the attribute to the checkbox element
								var checkboxonClick = document.createAttribute("onclick");
									checkboxonClick.value = "any_checkbox_checked(this.parentElement)";
									checkboxChild.setAttributeNode(checkboxonClick);

								// now we create the label and all its attributes
								var labelChild = document.createElement("label");
								var labelText = document.createTextNode(arr[index].title); //task_labelName);
									labelChild.appendChild(labelText);		// apparently the innerHTML is actually a child node
								var labelID = document.createAttribute("id");
								var labeldueDate = document.createAttribute("data-duedate");
									labelID.value = arr[index].id;
								// this is where we should write a string back into the form with proper format
								// we have to pass a new Date object because the task_dueDate is really just a string filled with milliseconds
								// from the Date.parse() function we used above
								// *** NOTE: the note above is now outdated.
									labeldueDate.value = arr[index].due;// ISODateString(new Date(task_dueDate)); //WE DON'T USE ISODATESTRING. The date from the website is properly formatted and direct from the server.
								var labelParent = document.createAttribute("data-parent");
									labelParent.value = arr[index].parent; // make sure we give it the parentage of the origin task; used to be swimlane_parentNode.children[index].children[1].getAttribute("data-parent");
									labelChild.setAttributeNode(labelID);
									labelChild.setAttributeNode(labeldueDate);
									labelChild.setAttributeNode(labelParent);
								//var labelonClick = document.createAttribute("onclick");
								//	labelonClick.value = clickFunction;
								var labeldraggable = document.createAttribute("draggable");
									labeldraggable.value = "true";
									//	labelChild.setAttributeNode(labelonClick);
									labelChild.setAttributeNode(labeldraggable);
								var labelcontenteditable = document.createAttribute("contenteditable");
									labelcontenteditable.value = "true";
									labelChild.setAttributeNode(labelcontenteditable);
								var labelonkeydown = document.createAttribute("onkeydown");
									labelonkeydown.value = "task_key_down(event, this)";
									labelChild.setAttributeNode(labelonkeydown);

									divChild.appendChild(checkboxChild); // attach the input checkbox to the div
									divChild.appendChild(labelChild);	 // attach the label to the div parent

									// finally a break tag so we can space things proper
									var breakChild = document.createElement("br");
									divChild.appendChild(breakChild);

								document.getElementById("selectNextWeekTask").appendChild(divChild);
							}
							//window.alert(xmlhttp.responseText);
							is_Server_Busy = false; // unlock the server
							send_ajax_request();    // and go around again to see if we have more ajax requests to send
						}
						else if(xmlhttp.status > 400)
							window.alert(xmlhttp.responseText);
					});
			}
			else
			{
				// change the name of the column header to the new task list
				document.getElementById("columnheader-inner-h2").innerHTML = "This Week";
				send_ajax_request("switch_tasklist", "switch_tasklist=All Due Dates" + "&tasklist_id=All Due Dates", function()
					{
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							//window.alert(xmlhttp.responseText);
							var arr = JSON.parse(xmlhttp.responseText);
							for(var index = 0; index < arr.length; ++index)
							{
								var divChild = document.createElement("div");			// create the element node for the div container
								var att_divChild = document.createAttribute("class");	// create the attribute node
									att_divChild.value = "task";						// assign a value to the element
									divChild.setAttributeNode(att_divChild);			// set the attribute to the div container element

								var checkboxChild = document.createElement("input");	// create the element node for the checkbox
								var att_checkboxChild = document.createAttribute("type"); // create the attribute node
									att_checkboxChild.value = "checkbox";				// assign a value to the element
									checkboxChild.setAttributeNode(att_checkboxChild); // set the attribute to the checkbox element
								var checkboxonClick = document.createAttribute("onclick");
									checkboxonClick.value = "any_checkbox_checked(this.parentElement)";
									checkboxChild.setAttributeNode(checkboxonClick);

								// now we create the label and all its attributes
								var labelChild = document.createElement("label");
								var labelText = document.createTextNode(arr[index].title); //task_labelName);
									labelChild.appendChild(labelText);		// apparently the innerHTML is actually a child node
								var labelID = document.createAttribute("id");
								var labeldueDate = document.createAttribute("data-duedate");
									labelID.value = arr[index].id;
								// this is where we should write a string back into the form with proper format
								// we have to pass a new Date object because the task_dueDate is really just a string filled with milliseconds
								// from the Date.parse() function we used above
								// *** NOTE: the note above is now outdated.
									labeldueDate.value = arr[index].due;// ISODateString(new Date(task_dueDate));
								var labelParent = document.createAttribute("data-parent");
									labelParent.value = arr[index].parent; // make sure we give it the parentage of the origin task; used to be swimlane_parentNode.children[index].children[1].getAttribute("data-parent");
									labelChild.setAttributeNode(labelID);
									labelChild.setAttributeNode(labeldueDate);
									labelChild.setAttributeNode(labelParent);
								//var labelonClick = document.createAttribute("onclick");
								//	labelonClick.value = clickFunction;
								var labeldraggable = document.createAttribute("draggable");
									labeldraggable.value = "true";
									//	labelChild.setAttributeNode(labelonClick);
									labelChild.setAttributeNode(labeldraggable);
								var labelcontenteditable = document.createAttribute("contenteditable");
									labelcontenteditable.value = "true";
									labelChild.setAttributeNode(labelcontenteditable);
								var labelonkeydown = document.createAttribute("onkeydown");
									labelonkeydown.value = "task_key_down(event, this)";
									labelChild.setAttributeNode(labelonkeydown);

									divChild.appendChild(checkboxChild); // attach the input checkbox to the div
									divChild.appendChild(labelChild);	 // attach the label to the div parent

									// finally a break tag so we can space things proper
									var breakChild = document.createElement("br");
									divChild.appendChild(breakChild);

								document.getElementById("selectNextWeekTask").appendChild(divChild);
							}
							//window.alert(xmlhttp.responseText);
							is_Server_Busy = false; // unlock the server
							send_ajax_request();    // and go around again to see if we have more ajax requests to send
						}
						else if(xmlhttp.status > 400)
							window.alert(xmlhttp.responseText);
					});
			}
		}

		/*******************************************************
		  Routine to handle checking off a task.
		  AJAX subroutine calls to server by sending the
		  updated task. Task is removed from the
		  document.Elementlist. Server removed it from cached
		  task lists. Finally updates GTasks server so
		  result persists.

		  IMPORTANT: the checkbox sends the PARENT ELEMENT as
		             as parameters. This will make it easier
					 to deal with the task as a whole.

		  BUG ALERT: this will not work if the tasks are not
		  			 moved and recorded in the server cache.
					 Otherwise, it will pull the wrong
					 array on the server and won't find the
					 right task to update
		********************************************************/
		function any_checkbox_checked(object)
		{
			var swimlane_name;
			var is_parent = false;
			switch(check_if_task_block(object.children[1].getAttribute("id")))  // here we see what kind of task we're dealing with
				{
					case 1:		// is a parent
						swimlane_name = object.parentElement.getAttribute("id");
						is_parent = true;
						if(timer_current_task.get_is_running() && swimlane_name == "selectCurrentTask")
						{
							object.children[1].innerHTML = object.children[1].innerHTML + " *** " + timer_current_task.get_clock() + " *** ";
							timer_current_task.stop(); // stop the timer
							send_ajax_request("task_label_changed", "task_label_changed=" + object.children[1].id + "&swimlane=" + swimlane_name +
								"&new_label=" + object.children[1].innerText, function()
							{
								if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
									//window.alert(xmlhttp.responseText);
									is_Server_Busy = false; // unlock the server
									send_ajax_request();    // and go around again to see if we have more ajax requests to send
								}
							});
							timer_current_task.reset();
						}
						break;
					case 2:		// is a sub task
						swimlane_name = object.parentElement.parentElement.getAttribute("id");
						break;
					default:
						swimlane_name = object.parentElement.getAttribute("id");
						if(timer_current_task.get_is_running() && swimlane_name == "selectCurrentTask")
						{
							object.children[1].innerHTML = object.children[1].innerHTML + " *** " + timer_current_task.get_clock() + " *** ";
							timer_current_task.stop(); // stop the timer
							send_ajax_request("task_label_changed", "task_label_changed=" + object.children[1].id + "&swimlane=" + swimlane_name +
								"&new_label=" + object.children[1].innerText, function()
							{
								if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
									//window.alert(xmlhttp.responseText);
									is_Server_Busy = false; // unlock the server
									send_ajax_request();    // and go around again to see if we have more ajax requests to send
								}
							});
							timer_current_task.reset();
						}
						break;
				}

			if(object.children[0].checked == true)
			{
				//remove_task_from_swimlane(object.children[1].id, swimlane_name); // we remove this first, so it's gone the second you click. We need good error handling and an undo function if we want to remove stuff without getting verification of success from the server.
				send_ajax_request("task_completed", "task_completed=" + object.children[1].id + "&swimlane=" + get_int_from_swimlane(swimlane_name) + "&is_parent=" + is_parent, function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						remove_task_from_swimlane(object.children[1].id, swimlane_name);
						//object.children[1].innerHTML = xmlhttp.responseText;
						is_Server_Busy = false; // unlock the server
						send_ajax_request();    // and go around again to see if we have more ajax requests to send
					}
				});
			}

		}
		/*******************************************************
		  this moves a task from the "today's tasks"swimlane
		  and copies it to the "next week's task" swim lane.
		  Specifically copies it to today + 1 task.
		 *******************************************************/
		function today_plus_X_days_click(object, days_to_add)
		{
			var task_id = object.parentNode.children[1].id; // we work with the ID of the label element, not the task div
			var task_innerHTML = object.parentNode.children[1].innerHTML;
			var newDate = new Date();				// have to create a variable
			newDate.setDate(newDate.getDate() + days_to_add); // so we can increment it by one day
			place_task_in_swimlane(task_id, ISODateString(newDate), task_innerHTML, "selectNextWeekTask");
			// NOTE: YOU MUST CHANGE THE object.parentNode STUFF HERE. IF A SUBTASK IS PASSED, IT MAY NOT HANDLE PROPERLY
			// ON SECOND THOUGHT: the sending element is a div square. It's parent will be the div task.
			// THis means if I allow subtasks to get div squares, I need to figure out a separate routine instead of this one
			// we use a nifty trick here: using the get_placement_swimlane routine to find the ORIGINATING swimlane

			// bug: the remove task removes everything from the lane. It needs to be updated to handle having the same task in the list more than once.
			//remove_task_from_swimlane(task_id, get_placement_swimlane(new Date(object.parentNode.children[1].getAttribute("data-duedate"))));


			// logic here to update to the server with AJAX
		}

		/*******************************************************
		  this moves a task from the "next week's tasks"swimlane
		  and copies it to the "today's task" swim lane. Clears
		  the checkbox and assigns the new ID to the label.
		 *******************************************************/
		function nextweek_task_click(clicked_id, clicked_innerHTML, object)
		{
			place_task_in_swimlane(clicked_id, ISODateString(new Date()), clicked_innerHTML, "selectTodayTask");
			//remove_task_from_swimlane(clicked_id, "selectNextWeekTask");
			// logic here to update to the server with AJAX
		}


		/*******************************************************
		  this moves a task from the "today's tasks" swim lane
		  and copies it to the "current task" swim lane. Clears
		  the checkbox and assigns the new ID to the label.
		 *******************************************************/
		function today_task_click(clicked_id, clicked_innerHTML, object)
		{
			// first check if the current task swimlane has something inside (style.display is set to none when we want it to be empty)
			// if so, copy the data back into the today swim lane
			if(document.getElementById("selectCurrentTask").children.length > 0)
				{
					place_task_in_swimlane(document.getElementById("selectCurrentTask").children[0].children[1].id,
										   document.getElementById("selectCurrentTask").children[0].children[1].getAttribute("data-duedate"),
										   document.getElementById("selectCurrentTask").children[0].children[1].innerHTML,
										   "selectTodayTask");
					//remove_task_from_swimlane(document.getElementById("selectCurrentTask").children[0].children[1].id, "selectCurrentTask");
					// logic to update the server now, assuming there's some time from the timer to commit to the title of the task
					if(timer_current_task.get_is_running())
					{
						document.getElementById("selectCurrentTask").children[0].children[1].innerHTML = document.getElementById("selectCurrentTask").children[0].children[1].innerHTML + " *** " + timer_current_task.get_clock() + " *** ";

						send_ajax_request("task_label_changed", "task_label_changed=" + document.getElementById("selectCurrentTask").children[0].children[1].id + "&swimlane=" + get_int_from_swimlane("selectCurrentTask") +
								"&new_label=" + document.getElementById("selectCurrentTask").children[0].children[1].innerText, function()
						{
							if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								//window.alert(xmlhttp.responseText);
								is_Server_Busy = false; // unlock the server
								send_ajax_request();    // and go around again to see if we have more ajax requests to send
							}
						});
						timer_current_task.stop(); // stop the timer
						timer_current_task.reset();
					}
				}

			// this messes up because there is a STATIC task in the current task swim lane. The place_task subroutine just adds another one.
			// So the place_task routine just shoves the static task below it. Messes up visuals. The only reason I made a static task was
			// I assumed there wouldn't ever be more than one task in that swim lane at a time anyway. Which would have been true.
			var array_timer = document.getElementById(clicked_id).innerText.split("***");  // very important we use innerText here. innerHTML adds lengths and other characters we don't want.
			if(array_timer.length > 1)
				{
					for(var index = 0; index < array_timer.length; index ++)
						{
							var has_timer = false; // a bool to show us if the label already has a time set to it or not. If so, we take that and put it on the clock
							if(array_timer[index].indexOf(":") > 0 && array_timer[index].length < 12) // we very probably have a timer formatted string based on this dirty search. Very imprecise and not professional
								{
									array_timer[index].replace("***", "");
									array_timer[index].replace(" ", "");
									timer_current_task.set_clock(array_timer[index]); // set the clock to what we know
									array_timer.splice(index, 1); // remove the element from the array
									has_timer = true;
									break;
								}
						}
					if(has_timer)
						{
							var string_newLabel = ""; // we have to define this here, otherwise the undefined aspect to the string array is added into the array
							for(var counter = 0; counter < array_timer.length; counter++)
								string_newLabel += array_timer[counter];
							document.getElementById(clicked_id).innerHTML = string_newLabel;
							clicked_innerHTML = string_newLabel;
						}
				}

			place_task_in_swimlane(clicked_id, document.getElementById(clicked_id).getAttribute("data-duedate"), clicked_innerHTML, "selectCurrentTask");
			timer_current_task.start();
			/*document.getElementsByName("currentTask_Label")[0].innerHTML =  clicked_innerHTML;
			document.getElementsByName("currentTask_Label")[0].id = clicked_id;

			document.getElementsByName("currentTask_Label")[0].setAttribute("data-duedate", object.getAttribute("data-duedate"));
			document.getElementsByName("check_current_task")[0].checked = false;
			document.getElementById("id_test").style.display = "block";*/
			//swimlane_clear(); // clear the swim lane and repopulate it; deprecated
			//remove_task_from_swimlane(clicked_id, "selectTodayTask"); // we send "selectTodayTask" no matter what because this comes from the today swim lane only
			//if(document.getElementById("selectCurrentTask").children[0].children[1].id == "currentTaskLabel")
			//	remove_task_from_swimlane("currentTaskLabel", "selectCurrentTask");
		}

		/******************************************************
		  this hides the current task if the user clicks on
		  the current task. That way someone can choose to
		  not have an active current task.

		  it also takes the current task info and moves it back
		  to the swimlane it came from, using the
		  place_task_in_swimlane function.
		 ******************************************************/
		function current_task_click(clicked_id, clicked_innerHTML, object)
		{
			// logic here to update the task with the time and to then send an AJAX update to the server with the new stuff
			// I use clicked_innerHTML, object.innerHTML, and I set it to the document element.innerHTML, too. This could all be one variable. Needs cleaning up

			if(timer_current_task.get_is_running())
				{
					//clicked_innerHTML = clicked_innerHTML + " *** " + timer_current_task.get_clock() + " *** ";
					//object.innerHTML = clicked_innerHTML + " *** " + timer_current_task.get_clock() + " *** ";
					document.getElementById(clicked_id).innerHTML = clicked_innerHTML + " *** " + timer_current_task.get_clock() + " *** ";

					send_ajax_request("task_label_changed", "task_label_changed=" + object.id + "&swimlane=" + get_int_from_swimlane(object.parentElement.parentElement.getAttribute("id")) +
							"&new_label=" + document.getElementById(clicked_id).innerText, function()
					{
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							//window.alert(xmlhttp.responseText);
							is_Server_Busy = false; // unlock the server
							send_ajax_request();    // and go around again to see if we have more ajax requests to send
						}
					});
					timer_current_task.stop(); // stop the timer
				}

			// we select the Today swimlane here because any curret task can only come from that swimlane. It goes back there
			place_task_in_swimlane(clicked_id, object.getAttribute("data-duedate"), document.getElementById(clicked_id).innerHTML, "selectTodayTask");

			//document.getElementById("id_test").style.display = "none";

			//remove_task_from_swimlane(clicked_id, "selectCurrentTask"); // we send "selectTodayTask" no matter what because this comes from the today swim lane only


			timer_current_task.reset();

		}

		/******************************************************
		  this places a given task in the swim lane

		  swimlane_form_id is the target swimlane.
		  will be a string with
		  one of three constant values:
				"selectTodayTask"
				"selectCurrentTask"
				"selectNextWeekTask"
		 *****************************************************/
		function place_task_in_swimlane(task_id, task_dueDate_string, task_labelName, swimlane_form_id)
		{
			var below_dueDate = new Date(); // the due date for the task "below" the current task on the list on the page
			var task_dueDate = new Date(); // DATES ARE FUNKY. SEE SECTION ABOVE THE DATE FUNCTIONS GETDATEFROMSTRING() ETC. IT EXPLAINS.
			var task_recorded_dueDate = new Date(); // this will be the date we actually record in the task we are working on. Unless we have a task block, it will be the same as the task_dueDate
			var new_labelName = "";
			var swimlane_parentNode;

			// FIRST, CHECK IF THIS IS A TASK BLOCK AND CHANGE VARIABLES ACCORDINGLY
			switch(check_if_task_block(task_id)) // 0 = not task block; 1 = parent of task block; 2 = subtask in task block
				{
					case 1:
						task_recorded_dueDate =  GetDateFromString(task_dueDate_string); // formerly: date.Parse(task_dueDate_string); // IMPORTANT: the parse only converts to milliseconds. It doesn't give you a date object
						// first we have to update the due date in the task. That way when we calculate where the task block should go, we have all the proper dates
						document.getElementById(task_id).setAttribute("data-duedate", ISODateString(task_recorded_dueDate));
						task_dueDate = get_placement_dueDate(task_id, 1);
						swimlane_parentNode = document.getElementById(get_placement_swimlane(task_dueDate, swimlane_form_id));  // the parent node to access the children

						if(!is_Task_Moving) // if this isn't the second time through and we don't already have vital information stored in string_Task_To_Move_Params....
							{
								string_Task_To_Move_Params = "update_duedate=" + task_id + "&origin_swimlane=" +
									get_int_from_swimlane(document.getElementById(task_id).parentElement.parentElement.getAttribute("id")) +
									"&new_duedate=" + ISODateString(task_recorded_dueDate) + "&is_task_moving=true"; //we set this to true here always, just as we go through the motions to move a task block on the client side if it's a parent in a task block; have to do it this way
							}

						break;
					case 2:
						task_dueDate = get_placement_dueDate(task_id, 2);
						task_recorded_dueDate =  GetDateFromString(task_dueDate_string); // formerly: date.Parse(task_dueDate_string); // IMPORTANT: the parse only converts to milliseconds. It doesn't give you a date object
						swimlane_parentNode = document.getElementById(get_placement_swimlane(task_dueDate, swimlane_form_id));  // the parent node to access the children
						// WE MUST NOW SOMEHOW EDIT THE SUBTASK WHILE MOVING THE ENTIRE TASK BLOCK - FIGURE OUT ROUTINE HERE
						// when the task is a subtask, it will be easier to simply call the routine twice.
						// So we edit the subtask first. THen we just pretend like the call to this function was done to the parent task
						var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
						var array_labelName = task_labelName.split("-");
						array_labelName[1] = " " + days[task_recorded_dueDate.getDay()] + ", " + (task_recorded_dueDate.getMonth() + 1).toString() + "/" + task_recorded_dueDate.getDate().toString() + " ";
						for(var index = 0; index < array_labelName.length; index++)
						{
							new_labelName += array_labelName[index];
							if(index < array_labelName.length - 1) // this ensures the '-' goes only in between the strings, not after
								new_labelName += "-"
						}
						// update the subtask with the new values. No need to destroy the element then recreate the entire thing from scratch if we can avoid it
						document.getElementById(task_id).innerHTML = new_labelName;
						document.getElementById(task_id).setAttribute("data-duedate", ISODateString(task_recorded_dueDate));
						// if the new date in the subtask doesn't change the position of the task block, there's nothing more to do
						// EXCEPT: YOU MAY WANT TO ADD SOME ROUTINE HERE TO UPDATE THE POSITION OF THE SUBTASK IN THE BLOCK. MAYBE NOT.

						// this variable is measured after we change the due date in the task block for the subtask. So if the placement due date is different, the task needs to move
						var test = get_placement_dueDate(task_id, 2);


						if(task_dueDate >= test && task_dueDate <= test) // date objects in javascript don't compare with the '>=' '<=' operator. This, however, does work.
							{
								// first, we send the ajax update to the server. Since no task is moving, we dont' have to send it info on where to move it in an array
								send_ajax_request("update_duedate", "update_duedate=" + task_id + "&origin_swimlane=" +
								  get_int_from_swimlane(document.getElementById(task_id).parentElement.parentElement.parentElement.getAttribute("id")) +
								  "&new_duedate=" + ISODateString(task_recorded_dueDate) + "&is_task_moving=" + is_Task_Moving.toString(), function()
								{
									if (xmlhttp.readyState==4 && xmlhttp.status==200)
									{
										//remove_task_from_swimlane(object.children[1].id, swimlane_name);
										//document.getElementById(task_id).innerHTML = xmlhttp.responseText;
										//window.alert(xmlhttp.responseText); // use to debug
										is_Server_Busy = false; // unlock the server
										send_ajax_request();    // and go around again to see if we have more ajax requests to send
									}
									else if(xmlhttp.status > 400)
										window.alert(xmlhttp.responseText);
								});
								return;
							}
						else // if the new date in the subtask DOES change where the task block should be, we call the function again with the parent task as the target
						{
							// prepare signals to the server that we will update a subtask, but will move a task block
							is_Task_Moving = true;
							string_Task_To_Move_Params = "update_duedate=" + task_id + "&origin_swimlane=" +
								get_int_from_swimlane(document.getElementById(task_id).parentElement.parentElement.parentElement.getAttribute("id")) +
								"&new_duedate=" + ISODateString(task_recorded_dueDate) + "&is_task_moving=" + is_Task_Moving.toString();
							place_task_in_swimlane(document.getElementById(task_id).parentElement.parentElement.children[1].getAttribute("id"),
									document.getElementById(task_id).parentElement.parentElement.children[1].getAttribute("data-duedate"),
									document.getElementById(task_id).parentElement.parentElement.children[1].innerHTML,
									swimlane_form_id);
							return;
						}
						break;
					default:
						task_dueDate = GetDateFromString(task_dueDate_string); // formerly: date.Parse(task_dueDate_string); // IMPORTANT: the parse only converts to milliseconds. It doesn't give you a date object
						task_recorded_dueDate = GetDateFromString(task_dueDate_string);
						swimlane_parentNode = document.getElementById(swimlane_form_id);  // the parent node to access the children

						string_Task_To_Move_Params = "update_duedate=" + task_id + "&origin_swimlane=" +
							get_int_from_swimlane(document.getElementById(task_id).parentElement.parentElement.getAttribute("id")) +
							"&new_duedate=" + ISODateString(task_recorded_dueDate) + "&is_task_moving=true"; //we set this to true here always, just as we go through the motions to move a task block on the client side if it's a parent in a task block; have to do it this way
				}
		 // TODO(jake): here we go
			// two things: check if the destination swimlane is restricted based on the state the kanban board is in. If restricted, return.
			// Otherwise, set the string/correct function for the element we will create, based on the swim lane it's going to
			// Note: this block must come after the above switch; otherwise it won't calculate the placement_swimlane properly
			var clickFunction = "";
			switch(get_placement_swimlane(task_dueDate, swimlane_form_id)){
				case "selectTodayTask":
					clickFunction = "today_task_click(this.parentElement.children[1].id, this.parentElement.children[1].innerHTML, this.parentElement.children[1])";
					break;
				case "selectNextWeekTask":
					if(current_Tasklist != "All Due Dates")
						{
							window.alert("You can't move that task like that right now.");
							return;
						}
					clickFunction = "nextweek_task_click(this.parentElement.children[1].id, this.parentElement.children[1].innerHTML, this.parentElement.children[1])";
					break;
				case "selectCurrentTask":
					clickFunction = "current_task_click(this.parentElement.children[1].id, this.parentElement.children[1].innerHTML, this.parentElement.children[1])";
				default:
					break;
			}


			// first we will change the label. We'll change the date so it's always accurate.
			// **NOTE: for tasks with PAST due dates, when moved from the current task swim lane to the today's tasks swim lane:
			//         the date is set to one day behind what it should be in the label.
			//         However, it is still ordered correctly in the list.
			//         Not sure how to fix and don't want to dig it up right now.
			//         UPDATE***: do a search for the variable below_dueDate. I believe there is some interaction with that when comparing that parsed date vs. the new Date that task_dueDate is
			var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
			var array_labelName = task_labelName.split("-");
			array_labelName[1] = " " + days[task_recorded_dueDate.getDay()] + ", " + (task_recorded_dueDate.getMonth() + 1).toString() + "/" + task_recorded_dueDate.getDate().toString() + " ";
			for(var index = 0; index < array_labelName.length; index++)
				{
					new_labelName += array_labelName[index];
					if(index < array_labelName.length - 1) // this ensures the '-' goes only in between the strings, not after
						new_labelName += "-"
				}


			// THIS ENSURES THERE ARE CHILDREN IN THE SWIM LANE. If there aren't, there's no point in looping to find the right position.
			// SO we just append the correct task here.
			// We also avoid an error when the code assumes there are other children in the swim lane
			if(swimlane_parentNode.children.length == 0)
				{
							// we create the task the second we run into a task with a date before the task to add
							var divChild = document.createElement("div");			// create the element node for the div container
							var att_divChild = document.createAttribute("class");	// create the attribute node
								att_divChild.value = "task";						// assign a value to the element
								divChild.setAttributeNode(att_divChild);			// set the attribute to the div container element

							var checkboxChild = document.createElement("input");	// create the element node for the checkbox
							var att_checkboxChild = document.createAttribute("type"); // create the attribute node
								att_checkboxChild.value = "checkbox";				// assign a value to the element
								checkboxChild.setAttributeNode(att_checkboxChild); // set the attribute to the checkbox element
							var checkboxonClick = document.createAttribute("onclick");
								checkboxonClick.value = "any_checkbox_checked(this.parentElement)";
								checkboxChild.setAttributeNode(checkboxonClick);

							// now we create the label and all its attributes
							var labelChild = document.createElement("label");
							var labelText = document.createTextNode(new_labelName); //task_labelName);
								labelChild.appendChild(labelText);		// apparently the innerHTML is actually a child node
							var labelID = document.createAttribute("id");
							var labeldueDate = document.createAttribute("data-duedate");
								labelID.value = task_id;
							// this is where we should write a string back into the form with proper format
							// we have to pass a new Date object because the task_dueDate is really just a string filled with milliseconds
							// from the Date.parse() function we used above
							// *** NOTE: the note above is now outdated.
								labeldueDate.value = ISODateString(task_recorded_dueDate);// ISODateString(new Date(task_dueDate));
							var labelParent = document.createAttribute("data-parent");
								labelParent.value = document.getElementById(task_id).getAttribute("data-parent"); // make sure we give it the parentage of the origin task; used to be swimlane_parentNode.children[index].children[1].getAttribute("data-parent");
								labelChild.setAttributeNode(labelID);
								labelChild.setAttributeNode(labeldueDate);
								labelChild.setAttributeNode(labelParent);
							//var labelonClick = document.createAttribute("onclick");
							//	labelonClick.value = clickFunction;
							var labeldraggable = document.createAttribute("draggable");
								labeldraggable.value = "true";
							//	labelChild.setAttributeNode(labelonClick);
								labelChild.setAttributeNode(labeldraggable);
							var labelcontenteditable = document.createAttribute("contenteditable");
								labelcontenteditable.value = "true";
								labelChild.setAttributeNode(labelcontenteditable);
							var labelonkeydown = document.createAttribute("onkeydown");
								labelonkeydown.value = "task_key_down(event, this)";
								labelChild.setAttributeNode(labelonkeydown);

								// small_square
							var divSmallSquare = document.createElement("div");			// create the element node for the div container
							var att_divSmallSquare = document.createAttribute("class");	// create the attribute node
								att_divSmallSquare.value = "small_square";						// assign a value to the element
								divSmallSquare.setAttributeNode(att_divSmallSquare);

							var att_divOnClickSmallSquare = document.createAttribute("onclick");
								att_divOnClickSmallSquare.value = clickFunction;
								divSmallSquare.setAttributeNode(att_divOnClickSmallSquare);

								divChild.appendChild(checkboxChild); // attach the input checkbox to the div
								divChild.appendChild(labelChild);	 // attach the label to the div parent
								divChild.appendChild(divSmallSquare);// attach the small square

								// finally a break tag so we can space things proper
								var breakChild = document.createElement("br");
								divChild.appendChild(breakChild);

								// ROUTINE TO COPY SUBTASKS FROM ONE SWIM LANE TO THE NEXT

								// tasks are organized WITHIN the task div, not outside of it.
								// so we have to retrieve the origin task. We do that here by grabbing the parent element of the task ID that was clicked
								var test_Element = document.getElementById(task_id).parentElement;

								// Subtasks are children of the task div. Loop here through all its children to check if they are subtasks (checking against its class)
								for(var counter3 = 0; counter3 < test_Element.children.length; counter3++)
									{
										// check to see if this child of the task div is a sub task. The class of the child element makes it easy to see.
										// When it is a subtask, we just retrieve all the info from that subtask and graft it onto the new div we're creating
										// in the other swim lane. Once it finishes the loop, all subtasks have attached to the div we're making.
										if(test_Element.children[counter3].className == "subtask")
											{
												var divSubChild = document.createElement("div");			// create the element node for the div container
												var att_divSubChild = document.createAttribute("class");	// create the attribute node
													att_divSubChild.value = "subtask";						// assign a value to the element
													divSubChild.setAttributeNode(att_divSubChild);			// set the attribute to the div container element

												var checkboxSubChild = document.createElement("input");	// create the element node for the checkbox
												var att_checkboxSubChild = document.createAttribute("type"); // create the attribute node
													att_checkboxSubChild.value = "checkbox";				// assign a value to the element
													checkboxSubChild.setAttributeNode(att_checkboxSubChild); // set the attribute to the checkbox element
												var checkboxonClick = document.createAttribute("onclick");
													checkboxonClick.value = "any_checkbox_checked(this.parentElement)";
													checkboxSubChild.setAttributeNode(checkboxonClick);

												// now we create the label and all its attributes
												var labelSubChild = document.createElement("label");
												var labelSubText = document.createTextNode(test_Element.children[counter3].children[1].innerHTML); //task_labelName);
													labelSubChild.appendChild(labelSubText);		// apparently the innerHTML is actually a child node
												var labelSubID = document.createAttribute("id");
												var labelSubdueDate = document.createAttribute("data-duedate");
													labelSubID.value = test_Element.children[counter3].children[1].id;
												// this is where we should write a string back into the form with proper format
												// we have to pass a new Date object because the task_dueDate is really just a string filled with milliseconds
												// from the Date.parse() function we used above
												// *** NOTE: the note above is now outdated.
													labelSubdueDate.value = test_Element.children[counter3].children[1].getAttribute("data-dueDate");  //ISODateString(task_dueDate;// ISODateString(new Date(task_dueDate));
													labelSubChild.setAttributeNode(labelSubID);
													labelSubChild.setAttributeNode(labelSubdueDate);

												var labelSubParent = document.createAttribute("data-parent");
													labelSubParent.value = test_Element.children[counter3].children[1].getAttribute("data-parent"); // make sure we give it the parentage of the origin task; used to be swimlane_parentNode.children[index].children[1].getAttribute("data-parent");
													labelSubChild.setAttributeNode(labelSubParent);

												var labelSubdraggable = document.createAttribute("draggable");
													labelSubdraggable.value = "true";
													labelSubChild.setAttributeNode(labelSubdraggable);
												var labelSubcontenteditable = document.createAttribute("contenteditable");
													labelSubcontenteditable.value = "true";
													labelSubChild.setAttributeNode(labelSubcontenteditable);
												var labelSubonkeydown = document.createAttribute("onkeydown");
													labelSubonkeydown.value = "task_key_down(event, this)";
													labelSubChild.setAttributeNode(labelSubonkeydown);

												divSubChild.appendChild(checkboxSubChild); // attach the input checkbox to the subtask div
												divSubChild.appendChild(labelSubChild);	 // attach the label to the subtask div parent

												if(swimlane_form_id != "selectCurrentTask")
													{
														// div squares for the sub task

														var divSquare1 = document.createElement("div");			// create the element node for the div container
														var att_divSquare1 = document.createAttribute("class");	// create the attribute node
															att_divSquare1.value = "square";						// assign a value to the element
															divSquare1.setAttributeNode(att_divSquare1);

														var att_divOnClick1 = document.createAttribute("onclick");
															att_divOnClick1.value = "today_plus_X_days_click(this, 1)"
															divSquare1.setAttributeNode(att_divOnClick1);

														var att_divOnHover1 = document.createAttribute("onmouseover");
															att_divOnHover1.value = "today_plus_X_days_hover(this, 1)";
															divSquare1.setAttributeNode(att_divOnHover1);

														var att_divOnOut1 = document.createAttribute("onmouseout");
															att_divOnOut1.value = "today_plus_X_days_out(this)";
															divSquare1.setAttributeNode(att_divOnOut1);

													// 2
														var divSquare2 = document.createElement("div");			// create the element node for the div container
														var att_divSquare2 = document.createAttribute("class");	// create the attribute node
															att_divSquare2.value = "square";						// assign a value to the element
															divSquare2.setAttributeNode(att_divSquare2);

														var att_divOnClick2 = document.createAttribute("onclick");
															att_divOnClick2.value = "today_plus_X_days_click(this, 2)"
															divSquare2.setAttributeNode(att_divOnClick2);

														var att_divOnHover2 = document.createAttribute("onmouseover");
															att_divOnHover2.value = "today_plus_X_days_hover(this, 2)";
															divSquare2.setAttributeNode(att_divOnHover2);

														var att_divOnOut2 = document.createAttribute("onmouseout");
															att_divOnOut2.value = "today_plus_X_days_out(this)";
															divSquare2.setAttributeNode(att_divOnOut2);

													// 3
														var divSquare3 = document.createElement("div");			// create the element node for the div container
														var att_divSquare3 = document.createAttribute("class");	// create the attribute node
															att_divSquare3.value = "square";						// assign a value to the element
															divSquare3.setAttributeNode(att_divSquare3);

														var att_divOnClick3 = document.createAttribute("onclick");
															att_divOnClick3.value = "today_plus_X_days_click(this, 3)"
															divSquare3.setAttributeNode(att_divOnClick3);

														var att_divOnHover3 = document.createAttribute("onmouseover");
															att_divOnHover3.value = "today_plus_X_days_hover(this, 3)";
															divSquare3.setAttributeNode(att_divOnHover3);

														var att_divOnOut3 = document.createAttribute("onmouseout");
															att_divOnOut3.value = "today_plus_X_days_out(this)";
															divSquare3.setAttributeNode(att_divOnOut3);

													// 4
														var divSquare4 = document.createElement("div");			// create the element node for the div container
														var att_divSquare4 = document.createAttribute("class");	// create the attribute node
															att_divSquare4.value = "square";						// assign a value to the element
															divSquare4.setAttributeNode(att_divSquare4);

														var att_divOnClick4 = document.createAttribute("onclick");
															att_divOnClick4.value = "today_plus_X_days_click(this, 4)"
															divSquare4.setAttributeNode(att_divOnClick4);

														var att_divOnHover4 = document.createAttribute("onmouseover");
															att_divOnHover4.value = "today_plus_X_days_hover(this, 4)";
															divSquare4.setAttributeNode(att_divOnHover4);

														var att_divOnOut4 = document.createAttribute("onmouseout");
															att_divOnOut4.value = "today_plus_X_days_out(this)";
															divSquare4.setAttributeNode(att_divOnOut4);

													// 5
														var divSquare5 = document.createElement("div");			// create the element node for the div container
														var att_divSquare5 = document.createAttribute("class");	// create the attribute node
															att_divSquare5.value = "square";						// assign a value to the element
															divSquare5.setAttributeNode(att_divSquare5);

														var att_divOnClick5 = document.createAttribute("onclick");
															att_divOnClick5.value = "today_plus_X_days_click(this, 5)"
															divSquare5.setAttributeNode(att_divOnClick5);

														var att_divOnHover5 = document.createAttribute("onmouseover");
															att_divOnHover5.value = "today_plus_X_days_hover(this, 5)";
															divSquare5.setAttributeNode(att_divOnHover5);

														var att_divOnOut5 = document.createAttribute("onmouseout");
															att_divOnOut5.value = "today_plus_X_days_out(this)";
															divSquare5.setAttributeNode(att_divOnOut5);

													// 6
														var divSquare6 = document.createElement("div");			// create the element node for the div container
														var att_divSquare6 = document.createAttribute("class");	// create the attribute node
															att_divSquare6.value = "square";						// assign a value to the element
															divSquare6.setAttributeNode(att_divSquare6);

														var att_divOnClick6 = document.createAttribute("onclick");
															att_divOnClick6.value = "today_plus_X_days_click(this, 6)"
															divSquare6.setAttributeNode(att_divOnClick6);

														var att_divOnHover6 = document.createAttribute("onmouseover");
															att_divOnHover6.value = "today_plus_X_days_hover(this, 6)";
															divSquare6.setAttributeNode(att_divOnHover6);

														var att_divOnOut6 = document.createAttribute("onmouseout");
															att_divOnOut6.value = "today_plus_X_days_out(this)";
															divSquare6.setAttributeNode(att_divOnOut6);

													// 7
														var divSquare7 = document.createElement("div");			// create the element node for the div container
														var att_divSquare7 = document.createAttribute("class");	// create the attribute node
															att_divSquare7.value = "square";						// assign a value to the element
															divSquare7.setAttributeNode(att_divSquare7);

														var att_divOnClick7 = document.createAttribute("onclick");
															att_divOnClick7.value = "today_plus_X_days_click(this, 7)"
															divSquare7.setAttributeNode(att_divOnClick7);

														var att_divOnHover7 = document.createAttribute("onmouseover");
															att_divOnHover7.value = "today_plus_X_days_hover(this, 7)";
															divSquare7.setAttributeNode(att_divOnHover7);

														var att_divOnOut7 = document.createAttribute("onmouseout");
															att_divOnOut7.value = "today_plus_X_days_out(this)";
															divSquare7.setAttributeNode(att_divOnOut7);

														divSubChild.appendChild(divSquare1);
														divSubChild.appendChild(divSquare2);
														divSubChild.appendChild(divSquare3);
														divSubChild.appendChild(divSquare4);
														divSubChild.appendChild(divSquare5);
														divSubChild.appendChild(divSquare6);
														divSubChild.appendChild(divSquare7);
													}

												// finally a break tag so we can space things proper
												var breakSubChild = document.createElement("br");
													divSubChild.appendChild(breakSubChild);

												// last attach the sub task child to the div parent with each iteration
												divChild.appendChild(divSubChild);

											}
									}

								if(get_placement_swimlane(task_dueDate, swimlane_form_id) != "selectCurrentTask"
								   && document.getElementById(task_id).parentElement.parentElement.getAttribute("id") != "selectCurrentTask")
								{
									send_ajax_request("update_duedate", string_Task_To_Move_Params + "&parent_task_id=" + task_id + "&target_swimlane=" +
										get_int_from_swimlane(get_placement_swimlane(task_dueDate, swimlane_form_id)) +
										"&target_index=" + index, function()
									{
										if (xmlhttp.readyState==4 && xmlhttp.status==200)
										{
											//remove_task_from_swimlane(object.children[1].id, swimlane_name);
											//document.getElementById(task_id).innerHTML = xmlhttp.responseText;
											//window.alert(xmlhttp.responseText);
											is_Server_Busy = false; // unlock the server
											send_ajax_request();    // and go around again to see if we have more ajax requests to send
										}
										else if(xmlhttp.status > 400)
											window.alert(xmlhttp.responseText);
									});
								}

								// right before we add the crafted element into a swim lane, let's remove the old one, wherever it was
								// This will prevent any duplicates while allowing the data to persist.
								// NOTE: YOU WILL NEED TO UPDATE THIS WHEN YOU ADD SUBTASKS AS A THING THAT CAN BE UPDATED
								//if(swimlane_form_id != "selectCurrentTask")
								remove_task_from_swimlane(task_id, document.getElementById(task_id).parentElement.parentElement.getAttribute("id"));

								// finally, attach the new element
								document.getElementById(swimlane_form_id).appendChild(divChild);
								is_Task_Moving = false;  // we always set this to false after a task is moved
								string_Task_To_Move_Params = "";
								return;
				}

			// THIS WALKS THROUGH THE TASKS IN A SWIM LANE. IT SEARCHES FOR THE PLACE IN THE ARRAY THE PENDING TASK SHOULD BE PLACED
			for(var index = 0; index < swimlane_parentNode.children.length; ++index)
				{
					// we need to not only have the due date assigned to a task, but the lowest due date of any task block
					below_dueDate = get_placement_dueDate(swimlane_parentNode.children[index].children[1].getAttribute("id"), 1); //Date.parse(swimlane_parentNode.children[index].children[1].getAttribute("data-duedate"));

					//var transversed_Topic_Task = -1;
					//if(swimlane_parentNode.children[index + 1].children[1].getAttribute("id") == task_id)
					//	transversed_Topic_Task = index + 1;
					// WARNING: THERE MAY BE A BUG WHEN A PARENT TASK BELONGS AT THE END OF THE LIST.
					// this needs to be optimized. Why make all the calls to the get_placement swimlane function? Do it once above.
					if((get_placement_swimlane(task_dueDate, swimlane_form_id) == "selectTodayTask" && below_dueDate <= task_dueDate &&
					    swimlane_parentNode.children[index].children[1].getAttribute("id") != task_id) || 				// earlier the date, physically lower on the list (this week swim lane)
					   (get_placement_swimlane(task_dueDate, swimlane_form_id) == "selectNextWeekTask" && below_dueDate >= task_dueDate &&              // later the date, physically lower on the list (next week swim lane)
					    swimlane_parentNode.children[index].children[1].getAttribute("id") != task_id) || 			                                    // and we're not comparing the the target due date with the sub block we're trying to move!
					   index > (swimlane_parentNode.children.length - 2)) // if we have an earlier task or it's the last one
						{
							// we create the task the second we run into a task with a date before the task to add
							var divChild = document.createElement("div");			// create the element node for the div container
							var att_divChild = document.createAttribute("class");	// create the attribute node
								att_divChild.value = "task";						// assign a value to the element
								divChild.setAttributeNode(att_divChild);			// set the attribute to the div container element

							var checkboxChild = document.createElement("input");	// create the element node for the checkbox
							var att_checkboxChild = document.createAttribute("type"); // create the attribute node
								att_checkboxChild.value = "checkbox";				// assign a value to the element
								checkboxChild.setAttributeNode(att_checkboxChild); // set the attribute to the checkbox element
							var checkboxonClick = document.createAttribute("onclick");
								checkboxonClick.value = "any_checkbox_checked(this.parentElement)";
								checkboxChild.setAttributeNode(checkboxonClick);

							// now we create the label and all its attributes
							var labelChild = document.createElement("label");
							var labelText = document.createTextNode(new_labelName); //task_labelName);
								labelChild.appendChild(labelText);		// apparently the innerHTML is actually a child node
							var labelID = document.createAttribute("id");
							var labeldueDate = document.createAttribute("data-duedate");
								labelID.value = task_id;
							// this is where we should write a string back into the form with proper format
							// we have to pass a new Date object because the task_dueDate is really just a string filled with milliseconds
							// from the Date.parse() function we used above
							// *** NOTE: the note above is now outdated.
								labeldueDate.value = ISODateString(task_recorded_dueDate);// ISODateString(new Date(task_dueDate));
							var labelParent = document.createAttribute("data-parent");
								labelParent.value = document.getElementById(task_id).getAttribute("data-parent"); // make sure we give it the parentage of the origin task; used to be swimlane_parentNode.children[index].children[1].getAttribute("data-parent");
								labelChild.setAttributeNode(labelID);
								labelChild.setAttributeNode(labeldueDate);
								labelChild.setAttributeNode(labelParent);
							//var labelonClick = document.createAttribute("onclick");
							//	labelonClick.value = clickFunction;
							var labeldraggable = document.createAttribute("draggable");
								labeldraggable.value = "true";
							//	labelChild.setAttributeNode(labelonClick);
								labelChild.setAttributeNode(labeldraggable);
							var labelcontenteditable = document.createAttribute("contenteditable");
								labelcontenteditable.value = "true";
								labelChild.setAttributeNode(labelcontenteditable);
							var labelonkeydown = document.createAttribute("onkeydown");
								labelonkeydown.value = "task_key_down(event, this)";
								labelChild.setAttributeNode(labelonkeydown);

							// next, create all the div elements for small buttons if in today's swim lane
							//if(get_placement_swimlane(task_dueDate, swimlane_form_id) == "selectTodayTask") // I"m sure there's a loop I could use, but I'm too tired to do that right now
								//{
									// small_square
									var divSmallSquare = document.createElement("div");			// create the element node for the div container
									var att_divSmallSquare = document.createAttribute("class");	// create the attribute node
									att_divSmallSquare.value = "small_square";						// assign a value to the element
									divSmallSquare.setAttributeNode(att_divSmallSquare);

									var att_divOnClickSmallSquare = document.createAttribute("onclick");
									att_divOnClickSmallSquare.value = clickFunction;
									divSmallSquare.setAttributeNode(att_divOnClickSmallSquare);

									// 1
									var divSquare1 = document.createElement("div");			// create the element node for the div container
									var att_divSquare1 = document.createAttribute("class");	// create the attribute node
									att_divSquare1.value = "square";						// assign a value to the element
									divSquare1.setAttributeNode(att_divSquare1);

									var att_divOnClick1 = document.createAttribute("onclick");
									att_divOnClick1.value = "today_plus_X_days_click(this, 1)";
									divSquare1.setAttributeNode(att_divOnClick1);

									var att_divOnHover1 = document.createAttribute("onmouseover");
									att_divOnHover1.value = "today_plus_X_days_hover(this, 1)";
									divSquare1.setAttributeNode(att_divOnHover1);

									var att_divOnOut1 = document.createAttribute("onmouseout");
									att_divOnOut1.value = "today_plus_X_days_out(this)";
									divSquare1.setAttributeNode(att_divOnOut1);

									// 2
									var divSquare2 = document.createElement("div");			// create the element node for the div container
									var att_divSquare2 = document.createAttribute("class");	// create the attribute node
									att_divSquare2.value = "square";						// assign a value to the element
									divSquare2.setAttributeNode(att_divSquare2);

									var att_divOnClick2 = document.createAttribute("onclick");
									att_divOnClick2.value = "today_plus_X_days_click(this, 2)"
									divSquare2.setAttributeNode(att_divOnClick2);

									var att_divOnHover2 = document.createAttribute("onmouseover");
									att_divOnHover2.value = "today_plus_X_days_hover(this, 2)";
									divSquare2.setAttributeNode(att_divOnHover2);

									var att_divOnOut2 = document.createAttribute("onmouseout");
									att_divOnOut2.value = "today_plus_X_days_out(this)";
									divSquare2.setAttributeNode(att_divOnOut2);

									// 3
									var divSquare3 = document.createElement("div");			// create the element node for the div container
									var att_divSquare3 = document.createAttribute("class");	// create the attribute node
									att_divSquare3.value = "square";						// assign a value to the element
									divSquare3.setAttributeNode(att_divSquare3);

									var att_divOnClick3 = document.createAttribute("onclick");
									att_divOnClick3.value = "today_plus_X_days_click(this, 3)"
									divSquare3.setAttributeNode(att_divOnClick3);

									var att_divOnHover3 = document.createAttribute("onmouseover");
									att_divOnHover3.value = "today_plus_X_days_hover(this, 3)";
									divSquare3.setAttributeNode(att_divOnHover3);

									var att_divOnOut3 = document.createAttribute("onmouseout");
									att_divOnOut3.value = "today_plus_X_days_out(this)";
									divSquare3.setAttributeNode(att_divOnOut3);

									// 4
									var divSquare4 = document.createElement("div");			// create the element node for the div container
									var att_divSquare4 = document.createAttribute("class");	// create the attribute node
									att_divSquare4.value = "square";						// assign a value to the element
									divSquare4.setAttributeNode(att_divSquare4);

									var att_divOnClick4 = document.createAttribute("onclick");
									att_divOnClick4.value = "today_plus_X_days_click(this, 4)"
									divSquare4.setAttributeNode(att_divOnClick4);

									var att_divOnHover4 = document.createAttribute("onmouseover");
									att_divOnHover4.value = "today_plus_X_days_hover(this, 4)";
									divSquare4.setAttributeNode(att_divOnHover4);

									var att_divOnOut4 = document.createAttribute("onmouseout");
									att_divOnOut4.value = "today_plus_X_days_out(this)";
									divSquare4.setAttributeNode(att_divOnOut4);

									// 5
									var divSquare5 = document.createElement("div");			// create the element node for the div container
									var att_divSquare5 = document.createAttribute("class");	// create the attribute node
									att_divSquare5.value = "square";						// assign a value to the element
									divSquare5.setAttributeNode(att_divSquare5);

									var att_divOnClick5 = document.createAttribute("onclick");
									att_divOnClick5.value = "today_plus_X_days_click(this, 5)"
									divSquare5.setAttributeNode(att_divOnClick5);

									var att_divOnHover5 = document.createAttribute("onmouseover");
									att_divOnHover5.value = "today_plus_X_days_hover(this, 5)";
									divSquare5.setAttributeNode(att_divOnHover5);

									var att_divOnOut5 = document.createAttribute("onmouseout");
									att_divOnOut5.value = "today_plus_X_days_out(this)";
									divSquare5.setAttributeNode(att_divOnOut5);

									// 6
									var divSquare6 = document.createElement("div");			// create the element node for the div container
									var att_divSquare6 = document.createAttribute("class");	// create the attribute node
									att_divSquare6.value = "square";						// assign a value to the element
									divSquare6.setAttributeNode(att_divSquare6);

									var att_divOnClick6 = document.createAttribute("onclick");
									att_divOnClick6.value = "today_plus_X_days_click(this, 6)"
									divSquare6.setAttributeNode(att_divOnClick6);

									var att_divOnHover6 = document.createAttribute("onmouseover");
									att_divOnHover6.value = "today_plus_X_days_hover(this, 6)";
									divSquare6.setAttributeNode(att_divOnHover6);

									var att_divOnOut6 = document.createAttribute("onmouseout");
									att_divOnOut6.value = "today_plus_X_days_out(this)";
									divSquare6.setAttributeNode(att_divOnOut6);

									// 7
									var divSquare7 = document.createElement("div");			// create the element node for the div container
									var att_divSquare7 = document.createAttribute("class");	// create the attribute node
									att_divSquare7.value = "square";						// assign a value to the element
									divSquare7.setAttributeNode(att_divSquare7);

									var att_divOnClick7 = document.createAttribute("onclick");
									att_divOnClick7.value = "today_plus_X_days_click(this, 7)"
									divSquare7.setAttributeNode(att_divOnClick7);

									var att_divOnHover7 = document.createAttribute("onmouseover");
									att_divOnHover7.value = "today_plus_X_days_hover(this, 7)";
									divSquare7.setAttributeNode(att_divOnHover7);

									var att_divOnOut7 = document.createAttribute("onmouseout");
									att_divOnOut7.value = "today_plus_X_days_out(this)";
									divSquare7.setAttributeNode(att_divOnOut7);

									divChild.appendChild(checkboxChild); // attach the input checkbox to the div
									divChild.appendChild(labelChild);	 // attach the label to the div parent
									divChild.appendChild(divSmallSquare);// attach the small move square
									divChild.appendChild(divSquare1);
									divChild.appendChild(divSquare2);
									divChild.appendChild(divSquare3);
									divChild.appendChild(divSquare4);
									divChild.appendChild(divSquare5);
									divChild.appendChild(divSquare6);
									divChild.appendChild(divSquare7);
								//}
							//else
								//{
									//divChild.appendChild(checkboxChild); // attach the input checkbox to the div
									//divChild.appendChild(labelChild);	 // attach the label to the div parent
								//}


							// finally a break tag so we can space things proper
							var breakChild = document.createElement("br");
							divChild.appendChild(breakChild);



							// ROUTINE TO COPY SUBTASKS FROM ONE SWIM LANE TO THE NEXT

							// did lots of work here to make this work. I'm preserving it here so I can review my efforts if they could be useful later (doubtful)
							//var  counter2 = 0;
    						//while(swimlane_originNode.children[counter2].children[1].id != task_id)  // find the index of the task we're working from
								//++counter2;
							/*while(swimlane_originNode.children[counter2].children[1].getAttribute("data-parent") != null &&
								 swimlane_originNode.children[counter2].children[1].getAttribute("data-parent") != "" &&
								 counter2 < (swimlane_originNode.children.length - 2))*/

							// tasks are organized WITHIN the task div, not outside of it.$
							// so we have to retrieve the origin task. We do that here by grabbing the parent element of the task ID that was clicked
							var test_Element = document.getElementById(task_id).parentElement;

							// Subtasks are children of the task div. Loop here through all its children to check if they are subtasks (checking against its class)
							for(var counter3 = 0; counter3 < test_Element.children.length; counter3++)
								{
									// check to see if this child of the task div is a sub task. The class of the child element makes it easy to see.
									// When it is a subtask, we just retrieve all the info from that subtask and graft it onto the new div we're creating
									// in the other swim lane. Once it finishes the loop, all subtasks have attached to the div we're making.
									if(test_Element.children[counter3].className == "subtask")
										{
											var divSubChild = document.createElement("div");			// create the element node for the div container
											var att_divSubChild = document.createAttribute("class");	// create the attribute node
												att_divSubChild.value = "subtask";						// assign a value to the element
												divSubChild.setAttributeNode(att_divSubChild);			// set the attribute to the div container element

											var checkboxSubChild = document.createElement("input");	// create the element node for the checkbox
											var att_checkboxSubChild = document.createAttribute("type"); // create the attribute node
												att_checkboxSubChild.value = "checkbox";				// assign a value to the element
												checkboxSubChild.setAttributeNode(att_checkboxSubChild); // set the attribute to the checkbox element
											var checkboxonClick = document.createAttribute("onclick");
												checkboxonClick.value = "any_checkbox_checked(this.parentElement)";
												checkboxSubChild.setAttributeNode(checkboxonClick);

											// now we create the label and all its attributes
											var labelSubChild = document.createElement("label");
											var labelSubText = document.createTextNode(test_Element.children[counter3].children[1].innerHTML); //task_labelName);
												labelSubChild.appendChild(labelSubText);		// apparently the innerHTML is actually a child node
											var labelSubID = document.createAttribute("id");
											var labelSubdueDate = document.createAttribute("data-duedate");
												labelSubID.value = test_Element.children[counter3].children[1].id;
											// this is where we should write a string back into the form with proper format
											// we have to pass a new Date object because the task_dueDate is really just a string filled with milliseconds
											// from the Date.parse() function we used above
											// *** NOTE: the note above is now outdated.
												labelSubdueDate.value = test_Element.children[counter3].children[1].getAttribute("data-dueDate");  //ISODateString(task_dueDate;// ISODateString(new Date(task_dueDate));

											var labelSubParent = document.createAttribute("data-parent");
												labelSubParent.value = test_Element.children[counter3].children[1].getAttribute("data-parent"); // make sure we give it the parentage of the origin task; used to be swimlane_parentNode.children[index].children[1].getAttribute("data-parent");
												labelSubChild.setAttributeNode(labelSubParent);

												labelSubChild.setAttributeNode(labelSubID);
												labelSubChild.setAttributeNode(labelSubdueDate);
											var labelSubdraggable = document.createAttribute("draggable");
												labelSubdraggable.value = "true";
												labelSubChild.setAttributeNode(labelSubdraggable);
											var labelSubcontenteditable = document.createAttribute("contenteditable");
												labelSubcontenteditable.value = "true";
												labelSubChild.setAttributeNode(labelSubcontenteditable);
											var labelSubonkeydown = document.createAttribute("onkeydown");
												labelSubonkeydown.value = "task_key_down(event, this)";
												labelSubChild.setAttributeNode(labelSubonkeydown);

											// div squares for the sub task

											var divSquare1 = document.createElement("div");			// create the element node for the div container
											var att_divSquare1 = document.createAttribute("class");	// create the attribute node
											att_divSquare1.value = "square";						// assign a value to the element
											divSquare1.setAttributeNode(att_divSquare1);

											var att_divOnClick1 = document.createAttribute("onclick");
											att_divOnClick1.value = "today_plus_X_days_click(this, 1)"
											divSquare1.setAttributeNode(att_divOnClick1);

											var att_divOnHover1 = document.createAttribute("onmouseover");
											att_divOnHover1.value = "today_plus_X_days_hover(this, 1)";
											divSquare1.setAttributeNode(att_divOnHover1);

											var att_divOnOut1 = document.createAttribute("onmouseout");
											att_divOnOut1.value = "today_plus_X_days_out(this)";
											divSquare1.setAttributeNode(att_divOnOut1);

									// 2
											var divSquare2 = document.createElement("div");			// create the element node for the div container
											var att_divSquare2 = document.createAttribute("class");	// create the attribute node
											att_divSquare2.value = "square";						// assign a value to the element
											divSquare2.setAttributeNode(att_divSquare2);

											var att_divOnClick2 = document.createAttribute("onclick");
											att_divOnClick2.value = "today_plus_X_days_click(this, 2)"
											divSquare2.setAttributeNode(att_divOnClick2);

											var att_divOnHover2 = document.createAttribute("onmouseover");
											att_divOnHover2.value = "today_plus_X_days_hover(this, 2)";
											divSquare2.setAttributeNode(att_divOnHover2);

											var att_divOnOut2 = document.createAttribute("onmouseout");
											att_divOnOut2.value = "today_plus_X_days_out(this)";
											divSquare2.setAttributeNode(att_divOnOut2);

									// 3
											var divSquare3 = document.createElement("div");			// create the element node for the div container
											var att_divSquare3 = document.createAttribute("class");	// create the attribute node
											att_divSquare3.value = "square";						// assign a value to the element
											divSquare3.setAttributeNode(att_divSquare3);

											var att_divOnClick3 = document.createAttribute("onclick");
											att_divOnClick3.value = "today_plus_X_days_click(this, 3)"
											divSquare3.setAttributeNode(att_divOnClick3);

											var att_divOnHover3 = document.createAttribute("onmouseover");
											att_divOnHover3.value = "today_plus_X_days_hover(this, 3)";
											divSquare3.setAttributeNode(att_divOnHover3);

											var att_divOnOut3 = document.createAttribute("onmouseout");
											att_divOnOut3.value = "today_plus_X_days_out(this)";
											divSquare3.setAttributeNode(att_divOnOut3);

									// 4
											var divSquare4 = document.createElement("div");			// create the element node for the div container
											var att_divSquare4 = document.createAttribute("class");	// create the attribute node
											att_divSquare4.value = "square";						// assign a value to the element
											divSquare4.setAttributeNode(att_divSquare4);

											var att_divOnClick4 = document.createAttribute("onclick");
											att_divOnClick4.value = "today_plus_X_days_click(this, 4)"
											divSquare4.setAttributeNode(att_divOnClick4);

											var att_divOnHover4 = document.createAttribute("onmouseover");
											att_divOnHover4.value = "today_plus_X_days_hover(this, 4)";
											divSquare4.setAttributeNode(att_divOnHover4);

											var att_divOnOut4 = document.createAttribute("onmouseout");
											att_divOnOut4.value = "today_plus_X_days_out(this)";
											divSquare4.setAttributeNode(att_divOnOut4);

									// 5
											var divSquare5 = document.createElement("div");			// create the element node for the div container
											var att_divSquare5 = document.createAttribute("class");	// create the attribute node
											att_divSquare5.value = "square";						// assign a value to the element
											divSquare5.setAttributeNode(att_divSquare5);

											var att_divOnClick5 = document.createAttribute("onclick");
											att_divOnClick5.value = "today_plus_X_days_click(this, 5)"
											divSquare5.setAttributeNode(att_divOnClick5);

											var att_divOnHover5 = document.createAttribute("onmouseover");
											att_divOnHover5.value = "today_plus_X_days_hover(this, 5)";
											divSquare5.setAttributeNode(att_divOnHover5);

											var att_divOnOut5 = document.createAttribute("onmouseout");
											att_divOnOut5.value = "today_plus_X_days_out(this)";
											divSquare5.setAttributeNode(att_divOnOut5);

									// 6
											var divSquare6 = document.createElement("div");			// create the element node for the div container
											var att_divSquare6 = document.createAttribute("class");	// create the attribute node
											att_divSquare6.value = "square";						// assign a value to the element
											divSquare6.setAttributeNode(att_divSquare6);

											var att_divOnClick6 = document.createAttribute("onclick");
											att_divOnClick6.value = "today_plus_X_days_click(this, 6)"
											divSquare6.setAttributeNode(att_divOnClick6);

											var att_divOnHover6 = document.createAttribute("onmouseover");
											att_divOnHover6.value = "today_plus_X_days_hover(this, 6)";
											divSquare6.setAttributeNode(att_divOnHover6);

											var att_divOnOut6 = document.createAttribute("onmouseout");
											att_divOnOut6.value = "today_plus_X_days_out(this)";
											divSquare6.setAttributeNode(att_divOnOut6);

									// 7
											var divSquare7 = document.createElement("div");			// create the element node for the div container
											var att_divSquare7 = document.createAttribute("class");	// create the attribute node
											att_divSquare7.value = "square";						// assign a value to the element
											divSquare7.setAttributeNode(att_divSquare7);

											var att_divOnClick7 = document.createAttribute("onclick");
											att_divOnClick7.value = "today_plus_X_days_click(this, 7)"
											divSquare7.setAttributeNode(att_divOnClick7);

											var att_divOnHover7 = document.createAttribute("onmouseover");
											att_divOnHover7.value = "today_plus_X_days_hover(this, 7)";
											divSquare7.setAttributeNode(att_divOnHover7);

											var att_divOnOut7 = document.createAttribute("onmouseout");
											att_divOnOut7.value = "today_plus_X_days_out(this)";
											divSquare7.setAttributeNode(att_divOnOut7);

											divSubChild.appendChild(checkboxSubChild); // attach the input checkbox to the subtask div
											divSubChild.appendChild(labelSubChild);	 // attach the label to the subtask div parent

											divSubChild.appendChild(divSquare1);
											divSubChild.appendChild(divSquare2);
											divSubChild.appendChild(divSquare3);
											divSubChild.appendChild(divSquare4);
											divSubChild.appendChild(divSquare5);
											divSubChild.appendChild(divSquare6);
											divSubChild.appendChild(divSquare7);

											var breakSubChild = document.createElement("br");
											divSubChild.appendChild(breakSubChild);

											// finally a break tag so we can space things proper
											//var breakSubChild = document.createElement("br");
												//divSubChild.appendChild(breakSubChild);

											// last attach the sub task child to the div parent with each iteration
											divChild.appendChild(divSubChild);

										}
								}

							//var int_Task_Block_Size = document.getElementById(task_id).children.length - 10 + 1;  // to get the number of subtasks, we subtract the number of other children in every task (10) and add 1 so that we include the parent task at the very least.

							//var target_swimlane = get_placement_swimlane(task_dueDate, swimlane_form_id);

							if(get_placement_swimlane(task_dueDate, swimlane_form_id) != "selectCurrentTask"
							   && document.getElementById(task_id).parentElement.parentElement.getAttribute("id") != "selectCurrentTask")
							{
								// now we send the update to the server with the information we have
								send_ajax_request("update_duedate", string_Task_To_Move_Params + "&parent_task_id=" + task_id + "&target_swimlane=" +
									get_int_from_swimlane(get_placement_swimlane(task_dueDate, swimlane_form_id)) +
									"&target_index=" + index, function()
								{
									if (xmlhttp.readyState==4 && xmlhttp.status==200)
									{
										//remove_task_from_swimlane(object.children[1].id, swimlane_name);
										//document.getElementById(task_id).innerHTML = xmlhttp.responseText;
										//window.alert(xmlhttp.responseText); // use to debug
										is_Server_Busy = false; // unlock the server
										send_ajax_request();    // and go around again to see if we have more ajax requests to send
									}
									else if(xmlhttp.status > 400)
										window.alert(xmlhttp.responseText);
								});
							}

							// because we remove the task element below, we have to account for that here when the task is going in the same swim lane it came from
							// this way when we go to insertBefore the crafted element, it will go into the appopriate place
							//if(get_placement_swimlane(task_dueDate, swimlane_form_id) == document.getElementById(task_id).parentElement.parentElement.getAttribute("id") /*&&
							 //   transversed_Topic_Task > -1*/) // we can't have transversed the topic if we're going to subtract 1.
								//index--;  // there are no other uses for index after this point but one. And we have to change it before the remove task function below so the comparison will work with the task_id in the swim lane. Obviously won't work if the task no longer exists in the swim lane.

							// right before we add the crafted element into a swim lane, let's remove the old one, wherever it was
							// This will prevent any duplicates while allowing the data to persist.
							// NOTE: YOU WILL NEED TO UPDATE THIS WHEN YOU ADD SUBTASKS AS A THING THAT CAN BE UPDATED
							//if(swimlane_form_id != "selectCurrentTask")
							if(get_placement_swimlane(task_dueDate, swimlane_form_id) == document.getElementById(task_id).parentElement.parentElement.getAttribute("id"))
							{
								if(remove_task_from_swimlane(task_id, document.getElementById(task_id).parentElement.parentElement.getAttribute("id")) <= index)
									index--;
							}
							else
								remove_task_from_swimlane(task_id, document.getElementById(task_id).parentElement.parentElement.getAttribute("id"));




							// attach the div to the actual form in the live doc
							if((below_dueDate <= task_dueDate && get_placement_swimlane(task_dueDate, swimlane_form_id) == "selectTodayTask") ||
							   (below_dueDate >= task_dueDate && get_placement_swimlane(task_dueDate, swimlane_form_id) == "selectNextWeekTask"))
								{
									document.getElementById(get_placement_swimlane(task_dueDate, swimlane_form_id)).insertBefore(divChild, swimlane_parentNode.children[index]);
								}
							else // in case we're on the last element and there's no other place to insert it, we just put it at the end
								{
									document.getElementById(get_placement_swimlane(task_dueDate, swimlane_form_id)).appendChild(divChild);
								}
							is_Task_Moving = false;  // we always set this to false after a task is moved
							string_Task_To_Move_Params = "";
							break; // break out of the loop after we've created and attached the new element
						}
				}
		}

		/*******************************************************
		  the next few functions check
		  whether a given task is a task block.
		  If it is, it checks the new date to be assigned.
		  If the new date would replace the oldest subtask
		  date, then the task block needs to move.

		  If the new date is to replace the parent task in
		  the task block, it determines whether the task
		  block needs to move, like it would for the task
		  block.

		  It will then decide which swimlane the task needs
		  to go to. It also decides what new date to assign.
		********************************************************/

		/*******************************************************
		  This determines whether the task sent is part of a
		  task block or not. Returns an int.
			  0 means it is not in a task block
			  1 means is in a task block but is the parent task
			  2 means is in a task block and is subtask
		********************************************************/
		function check_if_task_block(task_id)
		{
			// this decides whether we're dealing with a subtask or a parent task in the block
			if(document.getElementById(task_id).getAttribute("data-parent") != null && document.getElementById(task_id).getAttribute("data-parent") != "")
				return 2;
			else
				{
					var test_Element = document.getElementById(task_id).parentElement;

					// Subtasks are children of the task div. Loop here through all its children to check if they are subtasks (checking against its class)
					for(var counter = 0; counter < test_Element.children.length; counter++)
						{
							if(test_Element.children[counter].className == "subtask")
								return 1;
						}
				}
			return 0;  // if we don't return at this point, the task div checked doesn't have any children and is not a child itself
		}

		// on the server, 0 means you want the today task array; 1 means you want next week, and 2 means you want both merged into a puddle
		function get_int_from_swimlane(swimlane_id)
		{
			switch(swimlane_id)
			{
				case "selectCurrentTask":
				case "selectTodayTask":
					return 0;
					break;
				case "selectNextWeekTask":
					return 1;
					break;
				default:
					return -1;
			}
		}

		/*******************************************************
		  This returns the due date we will want to use to
		  figure out the position that this task should be
		  placed into.

		  The date we want to use to figure out the position
		  the task should be in is the earliest dueDate
		  in a task block.

		  The variable task_type is the following
			  0 means it is not in a task block
			  1 means is in a task block but is the parent task
			  2 means is in a task block and is subtask
		********************************************************/
		function get_placement_dueDate(task_id, task_type)
		{
			var placement_dueDate;
			var test_Element;
			switch(task_type)  // this gives us the parent task date in the task block
				{
					case 1:
						var test = document.getElementById(task_id).getAttribute("data-duedate");
						placement_dueDate = GetDateFromString(test);

						test_Element = document.getElementById(task_id).parentElement; // subtask label parent -> subtask div parent -> task div
						break;
					case 2:
						test_Element = document.getElementById(task_id).parentElement.parentElement; // subtask label parent -> subtask div parent -> task div
						placement_dueDate = GetDateFromString(test_Element.children[1].getAttribute("data-duedate")); // subtask label parent -> subtask div parent -> task div child[1] -> parent label dueDate
						break;
					default:
						return false;
				}
			for(var counter = 0; counter < test_Element.children.length; counter++)
			{
				if(test_Element.children[counter].className == "subtask")
				{
					if(GetDateFromString(test_Element.children[counter].children[1].getAttribute("data-duedate")) <= placement_dueDate)
						placement_dueDate = GetDateFromString(test_Element.children[counter].children[1].getAttribute("data-duedate")); // label element of subtask
				}
			}
			return placement_dueDate;
		}

		/*******************************************************
		  This updates the number displaying the total tasks
		  (or tasklists) for a given swimlane.
		*******************************************************/
		function update_task_numbers()
		{
			var num_tasklists = document.getElementById("selectTasklist").children.length;
			var num_nextweek_tasks = document.getElementById("selectNextWeekTask").children.length;
			var num_today_tasks = document.getElementById("selectTodayTask").children.length;
			document.getElementById("tasklist_number_total").innerHTML = "Total: " + num_tasklists;
			document.getElementById("nextweek_tasks_number_total").innerHTML = "Total: " + num_nextweek_tasks;
			document.getElementById("today_tasks_number_total").innerHTML = "Total: " + num_today_tasks;
		}

		/*******************************************************
		  This returns the swim lane ID where the task block
		  should be placed.

		  target_date is the date we will place the task
		  block at.

		  The swimlane_ID is one of three constant values:
				"selectTodayTask"
				"selectCurrentTask"
				"selectNextWeekTask"
		********************************************************/
		function get_placement_swimlane(target_date, swimlane_ID)
		{
			if(swimlane_ID == "selectCurrentTask")
				return swimlane_ID;
			var today = new Date();
			if(target_date <= today)
				return "selectTodayTask";
			else
				return "selectNextWeekTask";
		}

		/*******************************************************
		  this displays in the square move buttons the day
		  the task will be moved to if the button is clicked.
		 *******************************************************/
		function today_plus_X_days_hover(object, days_to_add)
		{
			var newDate = new Date();				// have to create a variable
			newDate.setDate(newDate.getDate() + days_to_add);
			object.innerHTML = ShortDateString(newDate); // so we can increment it by one day;
		}

		/*******************************************************
		  this removes any display in the div of the mouseover
		*******************************************************/
		function today_plus_X_days_out(object)
		{
			object.innerHTML = " ";
		}

		/*******************NOTE ON DATES AND A HUGE PROBLEM TO FIX*******************
		  When a date is a string and is formatted according to RFC3339, EVERY PARSER
		  ON THE PLANET, IN EVERY LANGUAGE OUT THERE will treat the date as though
		  the actual date and time listed are set to UTC time. So it adjusts the
		  time to local time accordingly. In Virginia, that means subtracting 5
		  hours from the datetime.

		  ISODateString() function converts a date to comply with the RFC339 spec.
		  UTC time.

		  The GTasks server sets a due date without a time, even though it's in RFC3339
		  This means the time is set to T00:00:00Z etc. It also means that it
		  TAKES WHATEVER DATE YOU GIVE IT AND STRIPS THE TIME FROM IT.

		  Remember, EVERY PARSER OUT THERE WILL ADJUST BASED ON THE DATE AND TIME
		  GIVEN. So when GTasks strips vital information from a UTC date, the date
		  no longer parses to the intended date all the time. If I set a date at 2 am
		  in Virginia, the UTC date is 7 am the same day. GTasks then strips the
		  time. When any code in Virginia sees this UTC date set at midnight, it
		  parses it to local time. That's 7 pm the day before you even meant to
		  set the due date. So now you're off by a day.

		  Your choice is to either grab only the due date without the time for a
		  string in GTasks or to constantly adjust the time. I inadvertently
		  did the latter. See my ranting below.

		  --------------------------------------------------------------------------

		  For a long time this code didn't UPDATE a due date in the GTasks server.
		  It only read them. The spaghetti code came when I didn't understand what
		  ISODateString() was doing.

		  Some parts of this code reads date information (e.g., ISODate.getDay()). This
		  automatically converts to local time because the getDay() function isn't
		  for UTC time.

		  Other parts of the code read a due date from the GTasks server and stored it.
		  Since the format of a stored task is in UTC format, when the date is cast
		  into a normal date object in javascript, it would change to local time.
		  But the GTasks due date, even though the format is in UTC, it doesn't intend
		  for it to read the date as GMT time. So a due date for 00 hours on 1/1
		  was meant to be a due date set for 1/1. But the code reads the storage format
		  as UTC/GMT, so it converts to local server time. Here, that means
		  it subtracts 5 hours. So the due date would incorrectly change from 1/1 to
		  12/31. It was frustrating.

		  The only workaround was to add 5 hours to everything that came from the
		  server. If it's stored as UTC, we have to account for that. That's where
		  GetDateFromString() solved the problem. For a while.

		  We know the problem is with GTasks servers and code. Both MY client and server
		  record a timestamp with the date in UTC format. Even when I update the
		  cached task list on the server, it returns a datetime that is accurate.

		  When I store a date with ISODateString and later read that date into my
		  code, my code converts it properly to local time.

		  BUT WHEN GTASKS SERVERS GET THE DUE DATE, THEY DON'T CONVERT FROM UTC.
		  THEY JUST CUT OFF THE TIME TO 00 AND KEEP WHATEVER DATE IT CAME WITH.
		  So if a date is recorded at 10pm, UTC time is set to 3 am the next morn.
		  GTasks takes the next day's date, cuts off the time stamp, and sets
		  that as the due date. So you are off a day for tasks set after 7 pm
		  the night before.

		  Now that the code is starting to UPDATE tasks, I have to account for that.
		  The only thing I can think of is to record every date in local time and
		  cut out any time information. That way when it runs through the GTasks
		  server, no information will be lost.

		  THE FASTEST WAY TO SOLVE THIS WILL BE TO CHANGE THE ISODateString() function.
		  IT NEEDS TO PRESERVE THE CURRENT DATE AND DAY AND STRIP ALL TIME.

		  WE COULD CHANGE THE DATE PARSE FUNCTIONS READ ONLY THE DAY WITHOUT TIME
		  BUT IT'S EASIER TO JUST PARSE A DATE WITH THE BUILT IN FUNCTIONS. SO WE
		  HAVE A JURY RIGGED SYSTEM THAT ADDS 5 HOURS TO ANY DATE STRIPPED OF ITS
		  UTC TIME VALUES SO IT ALWAYS PARSES INTO THE DATE WE NEED. SEE THE FUNCTION
		  BELOW FOR POSSIBLE BUGS
		******************************************************************************/


		// Apparently GTasks doesn't store a time with the ISO timestamp it uses. It sets all time values to 00.
		// The problem with this is when we pull the timestamp and convert it to a local date/time in javascript,
		// it makes the conversion based on both the date AND the time. So when the time is 00, and the GMT time
		// zone is 5 hours ahead, it always sets the date/time to the day before it was intended to be set.
		//
		// To solve this, I'm just adding 5 hours to all dates created from the ISO date string we get from the
		// GTasks server. It solves my problem for now, since I"m not really updating the tasks with the GTasks
		// server yet. However, .....
		//
		// BUG ALERT: If I'm setting date/times with times preserved, GTasks servers may delete the hour field.$
		// BUG ALERT: Alternatively, when I convert my local time to an ISO timestamp (see ISODateString)
		//            it will automatically ADD the 5 hours when it converts to GMT. This means a task created
		//            at 11:00 pm on 1/24 will be recorded in the task and sent to GTasks server as 1/25 at 4 am.
		//            If the server doesn't preserve the date, the code below will then add 5 hours to it.$
		//            It will then be read as 1/25 at 5 am. When I then create a date out of that, it will be set.
		//            for the wrong date: 1/25 instead of 1/24. If that happens, the only thing I can do is
		//            cut out the time from the date/time I record, so the date is always preserved.$
		// BUG ALERT: If the date happens to be recorded at exactly 00:00:000Z, it will have a bug similar
		///           to the one I describe in second BUG ALERT above.
		//  I need more info on how GTasks stores the time in the ISO timestamp before I can leave this how
		//  it is or I need to fix it as thought out above.
		function GetDateFromString(string_date)
		{
			if(string_date.indexOf("T00:00:00.000Z") != -1) // if the string contains time set to zero
				string_date = string_date.replace("T00:00:00.000Z", "T05:00:00.000Z"); // replace the time at zero with time at 5 hours to account for GMT
			var date = new Date(string_date);
			return date;
		}

		/* this converts a date to an ISO formatted string containing the date */
		// it does NOT add 5 hours to make it GMT. That happens in the code somewhere. Just can't find it.
		function ISODateString(d)
		{
				function pad(n) { return n < 10 ? '0' + n : n }
 				return d.getUTCFullYear() + '-' +
					pad(d.getUTCMonth() + 1) + '-' +
					pad(d.getUTCDate()) + 'T' +
					pad(d.getUTCHours()) + ':' +
					pad(d.getUTCMinutes()) + ':' +
					pad(d.getUTCSeconds()) + 'Z';
		}

		function ShortDateString(d)
		{
				function pad(n) { return n < 10 ? '0' + n : n }
				var weekday = new Array();
				weekday[0] = "Su";
				weekday[1] = "M";
				weekday[2] = "Tu";
				weekday[3] = "W";
				weekday[4] = "Th";
				weekday[5] = "F";
				weekday[6] = "Sa";
 				return weekday[d.getDay()] + ', ' +
					pad(d.getMonth() + 1) + '-' +
					pad(d.getDate());
		}

		/******************************************************
		  this removes a checkbox and label in a given
		  swim lane.

		  swimlane_form_id will be a string with
		  one of three constant values:
				"selectTodayTask"
				"selectCurrentTask"
				"selectNextWeekTask"
		******************************************************/
		function remove_task_from_swimlane(task_id, swimlane_form_id)
		{
			var swimlane_parentNode = document.getElementById(swimlane_form_id);  // the parent node to access the children
			var tasks_array = swimlane_parentNode.children;						   // an array containing all the tasks (div)
			for(var index = 0; index < tasks_array.length; ++index)
				{
					if(tasks_array[index].children[1].id == task_id)
						{
							swimlane_parentNode.removeChild(swimlane_parentNode.children[index]);
							return index;
						}
					if(tasks_array[index].children.length > 11) // there are 10 children of a standard task, including the line break
						{
							for(var counter = 9; counter < tasks_array[index].children.length; counter++)
								{
									if(tasks_array[index].children[counter].getAttribute("class") == "subtask")
										{
											if(tasks_array[index].children[counter].children[1].id == task_id)
												{
													tasks_array[index].removeChild(tasks_array[index].children[counter]);
													return index;
												}
										}
								}
						}
				}
		}

		/******************************************************
		  this makes a deep copy of an object or variable
		  in case you don't want to have references in
		  a shallow copy.
		*******************************************************/
		function clone(obj)
		{
    		var copy;

    		// Handle the 3 simple types, and null or undefined
    		if (null == obj || "object" != typeof obj) return obj;

    		// Handle Date
    		if (obj instanceof Date) {
        		copy = new Date();
        		copy.setTime(obj.getTime());
        		return copy;
    		}

    		// Handle Array
    		if (obj instanceof Array) {
        		return obj.slice(0);
    		}

    		// Handle Object
    		if (obj instanceof Object) {
        		copy = {};
        		for (var attr in obj) {
            		if (obj.hasOwnProperty(attr)) copy[attr] = clone(obj[attr]);
        		}
        		return copy;
    		}

    		throw new Error("Unable to copy obj! Its type isn't supported.");
		}

		/******************************************************
		  this collects all the data from a swim lane, deletes
		  all of the task elements in the swim lane, and re-
		  writes the elements with the data.
		*******************************************************/
		function swimlane_clear(swimlane_form_id)
		{
			var swimlane_parentNode = document.getElementById(swimlane_form_id);  // the parent node to access the children
			while(swimlane_parentNode.firstElementChild != null) // we use firstElementChild rather than firstChild because firstChild retrieves text children as well
					swimlane_parentNode.removeChild(swimlane_parentNode.firstElementChild); // must be firstElementChild
		}

		/******************************************************
		  this collects all the data from a swim lane, deletes
		  all of the task elements in the swim lane, and re-
		  writes the elements with the data.
		*******************************************************/
		function swimlane_clear_old()
		{
			var data = []; // a blank array; will be populated with swim lane data (an array of tasks)
			var swimlane_parentNode = document.getElementById("selectTodayTask");  // the parent node to access the children
			// this while loop grabs the data from each label element below it and stores in array; then removes all elements
			while(swimlane_parentNode.firstElementChild != null) // we use firstElementChild rather than firstChild because firstChild retrieves text children as well
				{
					var attributes_Object = new Array();
					//var divNode = swimlane_parentNode.children[0]; // firstChild;
					//alert(divNode.children[1].id);
					//if(swimlane_parentNode.firstChild.childElementCount == 0)
					//	break;
					attributes_Object[0] = swimlane_parentNode.firstElementChild.children[1].id; // children[0].children[1].id;
					attributes_Object[1] = swimlane_parentNode.children[0].children[1].innerHTML;
					attributes_Object[2] = swimlane_parentNode.children[0].children[1].getAttribute("data-duedate");
					data.push(attributes_Object);

					swimlane_parentNode.removeChild(swimlane_parentNode.firstElementChild); // must be firstElementChild
				}
			//alert(data.length);
			for(index = 0; index < data.length; ++index)
				{
					var divChild = document.createElement("div");

					var checkboxChild = document.createElement("input");	// create the element node for the checkbox
					var att_checkboxChild = document.createAttribute("type"); // create the attribute node
						att_checkboxChild.value = "checkbox";				// assign a value to the element
						checkboxChild.setAttributeNode(att_checkboxChild); // set the attribute to the checkbox element

					// now we create the label and all its attributes
					var labelChild = document.createElement("label");
					var labelText = document.createTextNode(data[index][1]);
						labelChild.appendChild(labelText);		// apparently the innerHTML is actually a child node
					var labelID = document.createAttribute("id");
					var labeldueDate = document.createAttribute("data-duedate");
						labelID.value = data[index][0];
						labeldueDate.value = data[index][2];
						labelChild.setAttributeNode(labelID);
						labelChild.setAttributeNode(labeldueDate);
					var labelonClick = document.createAttribute("onclick");
						labelonClick.value = "today_task_click(this.id, this.innerHTML, this)";
					var labeldraggable = document.createAttribute("draggable");
						labeldraggable.value = "true";
						labelChild.setAttributeNode(labelonClick);
						labelChild.setAttributeNode(labeldraggable);
					// finally a break tag so we can space things proper
					var breakChild = document.createElement("br");

					divChild.appendChild(checkboxChild); // attach the input checkbox to the div
					divChild.appendChild(labelChild);	 // attach the label to the div parent
					divChild.appendChild(breakChild);
					document.getElementById("selectTodayTask").appendChild(divChild); // attach the div to the actual form in the live doc
					//swimlane_parentNode.appendChild(divChild);
				}
		}

		function task_on_load()
		{
			timer_current_task = new Stopwatch(document.getElementById("stopwatch"), {delay: 1000});
		}

		//GLOBAL
		var timer_current_task;

		/******************************************************
		  GLOBAL VARIABLES
		  	this is a stopwatch API found on stackoverflow,
			written by macek.

			usage: var X = new Stopwatch(document.getElement...)
		*******************************************************/
		var Stopwatch = function(elem, options) {

  			var timer       = createTimer(),
      			startButton = createButton("start", start),
      			stopButton  = createButton("stop", stop),
      			resetButton = createButton("reset", reset),
      			offset,
      			clock,
      			interval,
				is_running = true;;

  			// default options
  			options = options || {};
  			options.delay = options.delay || 1;

  			// append elements
  			elem.appendChild(timer);
  			elem.appendChild(startButton);
  			elem.appendChild(stopButton);
  			elem.appendChild(resetButton);

  			// initialize
  			reset();

  			// private functions
  			function createTimer() {
    			return document.createElement("span");
  			}

  			function createButton(action, handler) {
    			var a = document.createElement("a");
    			a.href = "#" + action;
    			a.innerHTML = action;
    			a.addEventListener("click", function(event) {
      				handler();
      				event.preventDefault();
    			});
    			return a;
  			}

  			function start() {
    			if (!interval) {
      				offset   = Date.now();
      				interval = setInterval(update, options.delay);
    			}
				is_running = true;
  			}

  			function stop() {
    			if (interval) {
      				clearInterval(interval);
      				interval = null;
    			}
				is_running = false;
  			}

  			function reset() {
    			clock = 0;
    			render();
  			}

			function get_clock() {
				return timer.innerHTML;
			}

			function get_is_running() {
				return is_running;
			}

			function set_clock(string_clock) {
				var array_clock = string_clock.split(":");
				var minutes = parseInt(array_clock[0]) * 60;
				var seconds = (parseInt(array_clock[1]) + minutes) * 60;
				clock = (parseInt(array_clock[2]) + seconds) * 1000;
			}

  			function update() {
    			clock += delta();
    			render();
  			}

  			function render() {
				var x = clock / 1000;
				var seconds = Math.floor(x % 60);

				x /= 60;
				var minutes = Math.floor(x % 60);
				x /= 60;
				var hours = Math.floor(x % 24);

				timer.innerHTML = hours.toString() + ":" + minutes.toString() + ":" + seconds.toString();
  			}

  			function delta() {
    			var now = Date.now(),
        			d   = now - offset;

    			offset = now;
    			return d;
  			}

  			// public API
  			this.start  = start;
  			this.stop   = stop;
  			this.reset  = reset;
			this.get_clock = get_clock;
			this.set_clock = set_clock;
			this.get_is_running = get_is_running;
		};

		//function Get_Time_Formatted_String()
	</script>
  </body>
  </html>

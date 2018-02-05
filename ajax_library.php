<?php

	/*error_reporting(-1);
	assert_options(ASSERT_ACTIVE, 1);
	assert_options(ASSERT_WARNING, 0);
	assert_options(ASSERT_BAIL, 0);
	assert_options(ASSERT_QUIET_EVAL, 0);
	assert_options(ASSERT_CALLBACK, 'assert_callcack');
	set_error_handler('error_handler');
	set_exception_handler('exception_handler');
	register_shutdown_function('shutdown_handler');

	function assert_callcack($file, $line, $message) {
    	throw new Customizable_Exception($message, null, $file, $line);
	}

	function error_handler($errno, $error, $file, $line, $vars) {
    	if ($errno === 0 || ($errno & error_reporting()) === 0) {
        	return;
    	}

    	throw new Customizable_Exception($error, $errno, $file, $line);
	}

	function exception_handler(Exception $e) {
    	// Do what ever!
    	echo '<pre>', print_r($e, true), '</pre>';
    	exit;
	}

	function shutdown_handler() {
    	try {
        	if (null !== $error = error_get_last()) {
            	throw new Customizable_Exception($error['message'], $error['type'], $error['file'], $error['line']);
        	}
    	} catch (Exception $e) {
        	exception_handler($e);
    	}
	}

	class Customizable_Exception extends Exception {
    	public function __construct($message = null, $code = null, $file = null, $line = null) {
        	if ($code === null) {
            	parent::__construct($message);
	        } else {
    	        parent::__construct($message, $code);
        	}
	        if ($file !== null) {
    	        $this->file = $file;
        	}
	        if ($line !== null) {
    	        $this->line = $line;
        	}
    	}
	}*/


	include_once "examples/templates/base.php";
	require_once($_SERVER['DOCUMENT_ROOT'] . '/tasks/src/Google/Client.php');
	require_once($_SERVER['DOCUMENT_ROOT'] . '/tasks/src/Google/Service/Tasks.php');
	session_start();

	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/tasks/src/Google');
	//require_once realpath(dirname(__FILE__) . '/./autoload.php');

	/************************************************
	  ATTENTION: Fill in these values! Make sure
	  the redirect URI is to this page, e.g:
	  http://localhost:8080/user-example.php
	************************************************/
	 $client_id = '862405467759-gc59kgg4jt0hsji00mq5c8sa7f6cuevq.apps.googleusercontent.com';
	 $client_secret = 'bYTYoeNkzOJFY46tOXYKqQrN';
 	 $redirect_uri = 'http://www.scribesslate.com/tasks';

	/************************************************
  	  Make an API request on behalf of a user. In
  	  this case we need to have a valid OAuth 2.0
  	  token for the user, so we need to send them
  	  through a login flow. To do this we need some
  	  information from our API console project.
 	************************************************/
	$client = new Google_Client();
	$client->setClientId($client_id);
	$client->setClientSecret($client_secret);
	$client->setRedirectUri($redirect_uri);
	$client->addScope("https://www.googleapis.com/auth/tasks");

	/************************************************
  	  When we create the service here, we pass the
  	  client to it. The client then queries the service
  	  for the required scopes, and uses that when
  	  generating the authentication URL later.
 	************************************************/
	$service = new Google_Service_Tasks($client);


	/************************************************
  	  If we have a code back from the OAuth 2.0 flow,
  	  we need to exchange that with the authenticate()
  	  function. We store the resultant access token
  	  bundle in the session, and redirect to ourself.
 	************************************************/
	if (isset($_GET['code'])) {
  		$client->authenticate($_GET['code']);
		$_SESSION['access_token'] = $client->getAccessToken();
  		$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  		header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
	}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
	if (isset($_SESSION['access_token']) && $_SESSION['access_token']) 
	{
  		$client->setAccessToken($_SESSION['access_token']);
	} 
	else { $authUrl = $client->createAuthUrl(); }


	/***********************************************
	  Ensure the token we have is valid. If not
	  send the user to the front page to get auth
	************************************************/
	if($client->isAccessTokenExpired() || !isset($_SESSION['access_token']))
	{
		echo "Error: authentication timeout.";
		exit();
		//header('Location: http://www.scribesslate.com/tasks');
	}

	/******************************************************************************
	  CHECK FOR AJAX REQUESTS
	  
	  If the page has been called because an AJAX request by POST has been made
	  we handle any possibility here, including updating task lists and the like
	*******************************************************************************/
	if(isset($_POST))  // this will need to be edited heavily. The following is a sample routine for handling many possible post routines. Change as needed
	{
		// Array of post values for each different form on your page
		$postNameArr = array('task_label_changed', 'update_duedate', 'task_completed', 'switch_tasklist');        

    	// Find all of the post identifiers within $_POST
    	$postIdentifierArr = array();
        
		// this makes sure there isn't more than one variable to update. 
		// If there's more than one post key and data, it kills the page. Not so sure about keeping this.
    	foreach ($postNameArr as $postName)
    	{
        	if (array_key_exists($postName, $_POST))
        	{
            	 $postIdentifierArr[] = $postName;
        	}
    	}

    	// Only one form should be submitted at a time so we should have one
    	// post identifier.  The die statements here are pretty harsh you may consider
    	// a warning rather than this. 
    	if (count($postIdentifierArr) != 1)
    	{
        	count($postIdentifierArr) < 1 or
            	die("\$_POST contained more than one post identifier: " .
                	implode(" ", $postIdentifierArr));

        	// We have not died yet so we must have less than one.
        	die("\$_POST did not contain a known post identifier.");
    	}
         
		
		// THIS HAS NO ERROR HANDLING ON THE CLIENT OR HERE. WHAT IF THE SERVER UPDATE FAILS?! THERE IS NOTHING!
    	switch ($postIdentifierArr[0])
    	{
    		case 'task_label_changed':
       			$array_tasks = Deserialize_Task_Data($_POST["swimlane"]);	// dump tasks into an array
				$index = Find_Task_In_Array($_POST["task_label_changed"], $array_tasks);  // find the task we need to work with
				
				// this string will hold the name of the task list of all the tasks we are updating. Can be used to add it back in the future.
				$string_task_list = "";
				// the size of the task block is now used to run through each possible task and update it individually.			
				$array_tasks[$index]->setTitle($_POST["new_label"]);	     // modify the completion, status, and updated times; if is a parent, sub tasks will automatically get marked as completed by the GTasks API
																		     // not sure if we actually have to update the timestamps for completion and update. Example in Tasks API doesn't do it.
				// remove from the title stuff we added when we pulled it from the google server. It returns the name of the tasklist from the title so we can add it again later if we want
				$string_task_list = Strip_Adds_From_Task_Title($index, $array_tasks);	// WE ONLY WANT TO DO THIS TEMPORARILY. The server stores the tasks with the task name and date in there! So we need to save it to the google service without it, then serialize it in our service with it!
				$task_list_id = Extract_TaskList_From_Task_Link($array_tasks[$index]->getSelfLink());  // the selfLink has the task list ID in a URL
				$array_tasks[$index] = $service->tasks->update($task_list_id, $array_tasks[$index + $counter]->getID(), $array_tasks[$index + $counter]); // This works. Had to look up proper function in the API though. Google pages are useless.
				
				$array_tasks[$index]->setTitle($_POST["new_label"]);	     // AS DESCRIBED, we need to change the title back to our default server way of storage. So we add the title back
			
				if(Serialize_Task_Data($array_tasks, $_POST["swimlane"]) == 1)   // re-serialize the data. We do the individual list only without resorting it.
					echo "success!";
				else
					echo "fail";
       			break;
    		case 'update_duedate':
				// params send: update_duedate, origin_swimlane, new_duedate, is_task_moving, parent_task_id, target_swimlane, target_index
				// FIRST: UPDATE THE DUE DATE IN THE TASK ITSELF ON GTASKS AND IN THE SERVER CACHE
       			$array_tasks = Deserialize_Task_Data($_POST["origin_swimlane"]);	// dump tasks into an array
				$index = Find_Task_In_Array($_POST["update_duedate"], $array_tasks);  // find the task we need to work with
				// remove from the title stuff we added when we pulled it from the google server. It returns the name of the tasklist from the title so we can add it again later if we want
				$string_task_list = Strip_Adds_From_Task_Title($index, $array_tasks);
				$array_tasks[$index]->setDue(date("Y-m-d\TH:i:sP", strtotime('-5 hours', strtotime($_POST["new_duedate"]))));     // modify the due date
																  										   // not sure if we actually have to update the timestamps for completion and update. Example in Tasks API doesn't do it.
				$task_list_id = Extract_TaskList_From_Task_Link($array_tasks[$index]->getSelfLink());  // the selfLink has the task list ID in a URL
				$array_tasks[$index] = $service->tasks->update($task_list_id, $array_tasks[$index]->getID(), $array_tasks[$index]); // This works. Had to look up proper function in the API though. Google pages are useless.
				$array_tasks[$index]->setTitle($string_task_list . " - " . date("l, n/j", strtotime('+5 hours', strtotime($array_tasks[$index]->getDue()))) . " - " . $array_tasks[$index]->getTitle()); // now make the title how it was for our app
				// NEXT: UPDATE THE POSITIONS OF THE TASKS WE ARE MOVING IN THE SERVER CACHE ARRAYS SO THEY ARE ACCURATELY SORTED
				if($_POST["is_task_moving"] == "true")
				{
					echo "   entered is_task_moving   "; // debug statements for window alerts
					$parent_task_index = Find_Task_In_Array($_POST["parent_task_id"], $array_tasks);
					$target_index = (is_numeric($_POST['target_index']) ? (int)$_POST['target_index'] : 0); // convert the $_POST['a'] to integer if it's valid, or default to 0
					$int_to_splice = Find_Task_Block_Length($parent_task_index, $array_tasks); // get the size of the task block
					// move the task block based on information received in the post params
					if($_POST["origin_swimlane"] == $_POST["target_swimlane"])
					{
						echo "   task is staying in this swim lane   ";
						
						if($array_tasks[$target_index]->getParent() != null) 	// without this, a task will be inserted immediately after ANY PARENT TASK. It gets in between a parent and sub tasks. By subtracting 1, we make sure it goes before the parent task. No sweat.
							$target_index += Find_Task_Block_Length($target_index, $array_tasks);
						
						$array_Task_Block = array_slice($array_tasks, $parent_task_index, $int_to_splice); // slice out the task block we want to use and put into new array
						array_splice($array_tasks, $target_index, 0, $array_Task_Block); // insert that new array at the target index
						if($target_index <= $parent_task_index)
							$parent_task_index += $int_to_splice; // adjust for any index shifts when we added the task block earlier in the same array
						array_splice($array_tasks, $parent_task_index, $int_to_splice); // remove the sliced elements from the original array
						
					}
					else
					{
						echo "   task is going in another swim lane   ";
						$array_target_tasks = Deserialize_Task_Data($_POST["target_swimlane"]); // get the target task array
						
						if(count($array_target_tasks) > 0)
						{
							if($array_target_tasks[$target_index]->getParent() != null) 	// without this, a task will be inserted immediately after ANY PARENT TASK. It gets in between a parent and sub tasks. By adding after the length of the block, we make sure it goes before the parent task. No sweat.
								$target_index += Find_Task_Block_Length($target_index, $array_target_tasks);
						
							$array_Task_Block = array_slice($array_tasks, $parent_task_index, $int_to_splice); // slice out the task block we want to use and put into new array
							array_splice($array_target_tasks, $target_index, 0, $array_Task_Block); // insert that new array at the target index
						}
						else
						{
							$array_Task_Block = array_slice($array_tasks, $parent_task_index, $int_to_splice); // slice out the task block we want to use and put into new array
							$array_target_tasks = array($array_Task_Block); // create a new array comprised of the new task block
						}
						
						if(count($array_tasks) <= $int_to_splice)
							$array_tasks = array();  // if the array is supposed to be empty, make sure we just make it a new empty array
						else
							array_splice($array_tasks, $parent_task_index, $int_to_splice); // remove the sliced elements from the original array
						
						if(Serialize_Task_Data($array_tasks, $_POST["origin_swimlane"]) == 1 && Serialize_Task_Data($array_target_tasks, $_POST["target_swimlane"]) == 1)
							echo date("Y-m-d\TH:i:sP", strtotime($array_tasks[$index]->getDue())) . ": success!";
						else
							echo "fail";
						break;
					}
				}
			
				if(Serialize_Task_Data($array_tasks, $_POST["origin_swimlane"]) == 1)
					echo date("Y-m-d\TH:i:sP", strtotime($array_tasks[$index]->getDue())) . ": success!";
				else
					echo "fail";
       			break;
           
		    case 'task_completed':
				$array_tasks = Deserialize_Task_Data($_POST["swimlane"]);	// dump tasks into an array
				$index = Find_Task_In_Array($_POST["task_completed"], $array_tasks);  // find the task we need to work with
			
				// this gives us a number to splice out of our tasks array if we have a task block rather than just a sub task or individual task
				$int_to_splice = 1;
				if($_POST["is_parent"] == "true") // it is a string that is passed in the POST. It does not cast into a boolean automatically. So we treat it like a string
					$int_to_splice = Find_Task_Block_Length($index, $array_tasks);
				
				// this array will hold the name of the task list of all the tasks we are updating. Can be used to add it back in the future.
				$string_task_list = array();
				// the size of the task block is now used to run through each possible task and update it individually.
				for($counter = 0; $counter < $int_to_splice; $counter++)
				{
					// remove from the title stuff we added when we pulled it from the google server. It returns the name of the tasklist from the title so we can add it again later if we want
					$string_task_list[$counter] = Strip_Adds_From_Task_Title($index + $counter, $array_tasks);
					$array_tasks[$index + $counter]->setStatus("completed");     // modify the completion, status, and updated times; if is a parent, sub tasks will automatically get marked as completed by the GTasks API
																			     // not sure if we actually have to update the timestamps for completion and update. Example in Tasks API doesn't do it.
					$task_list_id = Extract_TaskList_From_Task_Link($array_tasks[$index + $counter]->getSelfLink());  // the selfLink has the task list ID in a URL
					$array_tasks[$index + $counter] = $service->tasks->update($task_list_id, $array_tasks[$index + $counter]->getID(), $array_tasks[$index + $counter]); // This works. Had to look up proper function in the API though. Google pages are useless.
				}
				
				if(count($array_tasks) <= $int_to_splice)
					$array_tasks = array();  // if the array is supposed to be empty, make sure we just make it a new empty array
				else
					array_splice($array_tasks, $index, $int_to_splice); // remove the sliced elements from the original array
			
				if(Serialize_Task_Data($array_tasks, $_POST["swimlane"]) == 1)   // re-serialize the data. We do the individual list only without resorting it.
					echo htmlspecialchars($_POST["is_parent"]) . $int_to_splice . "success!";
				else
					echo "fail";
				
       			break;
			
			case 'switch_tasklist':
				if($_POST["tasklist_id"] != "All Due Dates")
				{
					$array_tasklist = Deserialize_Task_Data(3);	// dump all tasklists into an array ; 3 = deserialize tasklist data
					$index = Find_Tasklist_In_Array($_POST["tasklist_id"], $array_tasklist); // find the index of the tasklist we need (so we can get its ID)
					$tasks = $service->tasks->listTasks($array_tasklist[$index]->getID(), $optParams = array("maxResults" => "99", "showCompleted" => False));      // request all the tasks for that tasklist 
					$arr2 = (array)$tasks->getItems(); // translate those into a php array (I can probably just send $tasks and not json_encode(), but will try later)
					echo json_encode($arr2);
					
					if(Serialize_Task_Data($arr2, 2) != 1)  // serialize the data. 2 = the active_tasklist_tasks_list; we want to preserve the active tasklist so we can pull tasks out of it
						echo "failed to serialize the active_tasklist_tasks_list tasks in case switch_tasklist in the ajax_library script!";
				}
				else
				{
					$array_nextweek_tasks = Deserialize_Task_Data(1);	// dump all next week's tasks into an array ; 1 = deserialize nextweek tasks data
					echo json_encode($array_nextweek_tasks);
				}
				break;
    	}
	}

	/***************************************************************
	  Gets the cached task data on the server, unserializes it,
	  and dumps it into an array that is returned to caller.
	  
	  Params:
	  		$int_swimlane_id - is a number between 0 and 2
				0 - caller seeks data only from today's tasks
				1 - caller seeks data only from next week's tasks
				2 - caller seeks data for all tasks. Returns
					an array with all tasks merged together.
					Must be sorted again when done.
				3 - caller seeks data for a tasklist, not a task.
	****************************************************************/
	function Deserialize_Task_Data($int_swimlane_id)
	{
		$array_tasks = array();
		$array_nextweek_tasks = array();
		if($int_swimlane_id == 0 || $int_swimlane_id == 2)
		{
			// this is a test subroutine to deserialize data and read the tasks into memory that way
    		$filePath = "./" . $_SESSION['username'] . "/" . "tasks_list.txt";			
			if (file_exists($filePath))
			{
	    		$tasks_Data = file_get_contents($filePath);
   				$array_tasks = unserialize($tasks_Data);           
   			}
			else {
				echo "Error: Failed to unserialize the today task list data.";
				exit();
			}
			if($int_swimlane_id == 0)
				return $array_tasks;
		}
		
		if($int_swimlane_id > 0 && $int_swimlane_id < 3)
		{
			// now we unserialize the data from nextweek tasks. We can render at any time with that.
	    	$filePath = "./" . $_SESSION['username'] . "/" . "nextweek_tasks_list.txt";
			if (file_exists($filePath))
			{
    			$tasks_Data = file_get_contents($filePath);
	    		$array_nextweek_tasks = unserialize($tasks_Data);           
    		}
			else {
				echo "Error: Failed to unserialize the next week's task list data.";
				exit();
			}
			if($int_swimlane_id == 1)
				return $array_nextweek_tasks;
		}
		if($int_swimlane_id == 3)
		{
			$filePath = "./" . $_SESSION['username'] . "/" . "tasklist_list.txt";
			if (file_exists($filePath))
			{
    			$tasks_Data = file_get_contents($filePath);
	    		$array_tasks = unserialize($tasks_Data);           
    		}
			else {
				echo "Error: Failed to unserialize the next week's task list data.";
				exit();
			}
		}
		return array_merge($array_tasks, $array_nextweek_tasks);
	}

	/***************************************************************
	  Finds and returns the INDEX of a given task in a 
	  given array of tasks.
	****************************************************************/
	function Find_Task_In_Array($task_id, $task_array)
	{
		foreach ($task_array as $index => $task)
  		{
			if($task_id == $task->getID())
				return $index;
		}
		return -1;  // fail
	}

	/***************************************************************
	  Finds and returns the INDEX of a given taskLIST in a 
	  given array of tasklists.
	****************************************************************/
	function Find_Tasklist_In_Array($tasklist_name, $tasklist_array)
	{
		foreach ($tasklist_array as $index => $tasklist)
  		{
			if($tasklist_name == $tasklist->getTitle())
				return $index;
		}
		return -1;  // fail
	}

	/***************************************************************
	  Finds and REMOVES a given task in a given array of tasks.
	  Returns the modified array.
	****************************************************************/
	function Remove_Task_In_Array($task_id, $task_array)
	{
		foreach ($task_array as $index => $task)
  		{
			if($task_id == $task->getID())
				return array_splice($task_array, $index, 1); // return an array with the one item cut out of it
		}
		return -1;  // fail
	}

	/***************************************************************
	  Extracts the task LIST ID from the link field in a task.
	  The $link param comes from the ->getSelfLink() function in the
	  task API
	****************************************************************/
	function Extract_TaskList_From_Task_Link($link)
	{
		$array = explode("/", $link);
		foreach ($array as $index => $text)
  		{
			if($text == "lists")
				return $array[$index + 1];
		}
		return -1;  // fail
	}

	/***************************************************************
	  Strips the task list name, the date due from the front of the
	  task title.

	  Params:
	  		$index - the index of the task in the task array
			$array_task - the array of tasks containing our task
			
	  Returns:
	  		The task NAME THE TASK BELONGS TO.
			That way you can preserve that data if you need to
			change the task title to how it was before.
	****************************************************************/
	function Strip_Adds_From_Task_Title($index, $array_tasks)
	{
		$array_title = explode(" - ", $array_tasks[$index]->getTitle());
		$title = "";
		for($count = 2; $count < count($array_title); $count++)
		{
			if((count($array_title) - 1) != $count) // check if we're on the last entry in the array
				$title .= $array_title[$count] . " - "; // if not, add a delimiter to the end to separate from the next
			else
				$title .= $array_title[$count];			// if so, add only the last element; this prevents the label from adding a " - " for every label update
		}
		$array_tasks[$index]->setTitle($title);
		return $array_title[0];
	}

	/***************************************************************
	  If we know the task given is a parent task, this function
	  returns the number of tasks in the task block.

	  Params:
	  		$index - the index of the task in the task array
			$array_task - the array of tasks containing our tasks
			
	  Returns:
	  		an int indicating the number of tasks after the parent
			that are sub tasks.
	****************************************************************/
	function Find_Task_Block_Length($index, $array_tasks)
	{
		$length_Of_Task_Block = 1; // a task block is a parent task and all of its subtasks taken together
		while($array_tasks[$index + $length_Of_Task_Block]->getParent() != null) $length_Of_Task_Block++;
		return $length_Of_Task_Block;
	}

	/***************************************************************
	  Takes the data we've worked with, re-sorts it, serializes
	  it, and saves it again on the server for later use.
	  		0 = the "today" task swimlane tasks
			1 = the "next week" task swimlane tasks
			2 = the "active tasklist" task swimlane tasks
	****************************************************************/
	function Serialize_Task_Data($array_tasks, $swimlane_id)
	{
		switch($swimlane_id)
		{
			case 0:
				// to finalize, we serialize the tasks so we have it stored in a local cache for faster access later
  				$tasks_Data = serialize( $array_tasks);
  				$filePath = "./" . $_SESSION['username'] . "/" . "tasks_list.txt";
  				if (is_writable($filePath)) {
      				$fp = fopen($filePath, "w"); 
      				fwrite($fp, $tasks_Data); 
      				fclose($fp);
  				}
				return 1;
				break;
			case 1:
				// serialize the given tasks
				$tasks_Data = serialize($array_tasks);
				$filePath = "./" . $_SESSION['username'] . "/" . "nextweek_tasks_list.txt";
  				if (is_writable($filePath)) {
      				$fp = fopen($filePath, "w"); 
      				fwrite($fp, $tasks_Data); 
      				fclose($fp);
  				}
				return 1;
				break;
			case 2:
				// serialize the given tasks into the active_tasklist_tasks_list file
				$tasks_Data = serialize($array_tasks);
				$filePath = "./" . $_SESSION['username'] . "/" . "active_tasklist_tasks_list.txt";
  				if (is_writable($filePath)) {
      				$fp = fopen($filePath, "w"); 
      				fwrite($fp, $tasks_Data); 
      				fclose($fp);
  				}
				return 1;
				break;
			default:
				break;
		}
		
		// IF WE DON'T HAVE A SPECIFIC LIST TO SERIALIZE, WE MAKE SURE THEY ARE SORTED PROPERLY, THEN SERIALIZE BOTH
		
		// sort the array by due date
  		usort($array_tasks, 'SortByDate');
		
		// NOW MOVE SUBTASKS TO BE RIGHT AFTER THEIR PARENT TASK IN THE ARRAY
		
		// now move subtasks to immediately follow parent tasks, regardless of duedate.
		// even though the splice for next week tasks happens afterward, the Get_Index_Of_DueDate()
		// checks to make sure the index returned is not of a subtask (i.e., task with a parent)
		
		$Index_Offset_Depending_On_Position = 0;
		
		for($counter = 0; $counter < count($array_tasks); $counter++)
		{
			// this if check isn't very readable. May want to consider writing defining variables
			// e.g., $array_tasks[index - 1]->getParent() == null could be simply written as TOP or NO_PARENT
			// read in english: 
			//     if the first task in the list has a parent, we know it needs to be moved, so we move on.
			//     if the current task has a parent and either the task above the current one doesn't have a parent
			//     (implying the above task is the parent) or the task above the current one has a different parent than this task
			//     AND the task above the current one is NOT the parent to the current task THEN....
			if(($array_tasks[$counter]->getParent() != null && $counter == 0) ||                                    // if counter is 0 and the first task is a subtask,
			   ($array_tasks[$counter]->getParent() != null &&                                                       
			   ($array_tasks[$counter - 1]->getParent() == null ||                                                  // it will throw an error when we try to read
				$array_tasks[$counter - 1]->getParent() != $array_tasks[$counter]->getParent()) &&         // an array at index $counter - 1
			    $array_tasks[$counter - 1]->getID() != $array_tasks[$counter]->getParent()))
			{
				// in the moveElement function, we take out one element in an array
				// we then add it back into the array at a different location
				// if the element we remove is BEFORE the place we want to add it back in
				// it throws off the index of where to put it--because the array indices have changed
				// when we removed the element to add it bcak in somewhere else.
				if(Get_Index_Of_TaskID($array_tasks, $array_tasks[$counter]->getParent()) < $counter) 
					$Index_Offset_Depending_On_Position = 1;
				moveElement($array_tasks, $counter, Get_Index_Of_TaskID($array_tasks, 
					$array_tasks[$counter]->getParent()) + $Index_Offset_Depending_On_Position);
				$Index_Offset_Depending_On_Position = 0;
				if(Get_Index_Of_TaskID($array_tasks, $array_tasks[$counter]->getParent()) > $counter)
					$counter--;	// this readjusts the index for when we move an element further down the list. Without this, 
								// it skips over the element that should be next and screws up the routine.
			}

		}
		
		// NOW WE HAVE TO MOVE ANY TASK WITH SUBTASKS TO THE LOCATION OF THE OLDEST SUBTASK IT HAS
		for($counter = 0; $counter < count($array_tasks); $counter++)
		{
			// if this is true we've hit the first subtask after a parent.
			// We know the first subtask has the oldest date because it's been sorted that way above.
			if($array_tasks[$counter]->getParent() != null)  
			{
				// strategy is to figure out the size of the task block and just splice it into the correct place in the array. One move.
				$length_Of_Task_Block = 1; // a task block is a parent task and all of its subtasks taken together
				while($array_tasks[$counter + $length_Of_Task_Block]->getParent() != null) $length_Of_Task_Block++; // calculate the length of the task block by counting till we hit a task without a parent
				
				$length_Of_Task_Block++; // now we add one to account for the parent in the task block
			
				$target_Date = date("Y-m-d", strtotime($array_tasks[$counter]->getDue())); // retrieve the due date of the oldest task in the task block (the one right after the parent)
				$new_Location = Get_Index_Of_Nearest_DueDate($array_tasks, $target_Date, true);
				
				
				
				if($new_Location < $counter) 
					$Index_Offset_Depending_On_Position = 1;
				
				moveTaskBlock($array_tasks, $counter - 1, $length_Of_Task_Block, $new_Location + $Index_Offset_Depending_On_Position);  // see other code above and below as to why Index_Offset is necessary
				
				$Index_Offset_Depending_On_Position = 0;
				if($new_Location > $counter)
					$counter -= 2;	// this readjusts the index for when we move an element further down the list. Without this, 
													    // it skips over the element that should be next and screws up the routine. (accounts for the parent that we moved above the current location in the array. Array shifts down when things are moved further down the list.)
				else
					$counter += $length_Of_Task_Block - 2;  // this pushes the counter forward, since the array will be pushed up
			
			}
		}
	
		// now that we have a sorted array by date, we just need to find the first instance of a task with "today" as the due date
		// we then slice the array from the beginning to that point and put it in the "next week" array
		// 
		// we go through the trouble of cutting apart one array rather than just making two separate calls to google api
		// because we save ourselves the extra requests and avoid reaching quota earlier
		
		// Note that this introduces a bug!! If there is no task with a due date for today,
		// the system will never split the array. The next week page will be blank.
		// The today list will have all next week's tasks in it as well.
		$length = Get_Index_Of_DueDate($array_tasks, date("Y-m-d"));
		// Here I need to write a routine that searches.
		// It should find the first task, starting from today, that is active.
		// So if there's no tasks for today, it will find yesterday's first task.
		// If none yesterday, then the day before. Etc. In a loop till it finds one.
		//   $index = 0;
		//   LOOP LOGIC HERE
		//   if($length == null) then Get_Index_Of_DueDate( today + $index ) $index++; else break;
		//   END LOOP LOGIC HERE
			
		$array_nextweek_tasks = array_slice($array_tasks, 0, $length);
		$array_nextweek_tasks = array_reverse($array_nextweek_tasks);
		array_splice($array_tasks, 0, $length);
		
		
		// THE FOLLOWING IS A BIG WASTE OF PROCESSOR ON THE SERVER. I'M JUST TOO LAZY TO REWRITE THE ROUTINE
		// the below routine sorts for subtasks in the array, just like we did above
		// we have to do it above AND here because we need to group the tasks together before they're spliced into two different arrays
		// then we need to make sure the subtasks come after the parent task
		// we could probably do something more economic, since we know the subtasks will be in the correct order--just reversed
		// but I have the full blown routine here because it was easier to cut and paste than to rewrite. 
		
		
		// NOW MOVE SUBTASKS TO BE RIGHT AFTER THEIR PARENT TASK IN THE ARRAY
		
		// now move subtasks to immediately follow parent tasks, regardless of duedate
		// even though the splice for next week tasks happens afterward, the Get_Index_Of_DueDate()
		// checks to make sure the index returned is not of a subtask (i.e., task with a parent)
		$Index_Offset_Depending_On_Position = 0;
		
		for($counter = 0; $counter < count($array_nextweek_tasks); $counter++)
		{
			// this if check isn't very readable. May want to consider writing defining variables
			// e.g., $array_tasks[index - 1]->getParent() == null could be simply written as TOP or NO_PARENT
			// read in english: 
			//     if the first task in the list has a parent, we know it needs to be moved, so we move on.
			//     if the current task has a parent and either the task above the current one doesn't have a parent
			//     (implying the above task is the parent) or the task above the current one has a different parent than this task
			//     AND the task above the current one is NOT the parent to the current task THEN....
			if(($array_nextweek_tasks[$counter]->getParent() != null && $counter == 0) ||                                    // if counter is 0 and the first task is a subtask,
			   ($array_nextweek_tasks[$counter]->getParent() != null &&                                                       
			   ($array_nextweek_tasks[$counter - 1]->getParent() == null ||                                                  // it will throw an error when we try to read
				$array_nextweek_tasks[$counter - 1]->getParent() != $array_nextweek_tasks[$counter]->getParent()) &&         // an array at index $counter - 1
			    $array_nextweek_tasks[$counter - 1]->getID() != $array_nextweek_tasks[$counter]->getParent()))
			{
				// in the moveElement function, we take out one element in an array
				// we then add it back into the array at a different location
				// if the element we remove is BEFORE the place we want to add it back in
				// it throws off the index of where to put it--because the array indices have changed
				// when we removed the element to add it bcak in somewhere else.
				if(Get_Index_Of_TaskID($array_nextweek_tasks, $array_nextweek_tasks[$counter]->getParent()) < $counter) 
					$Index_Offset_Depending_On_Position = 1;
				moveElement($array_nextweek_tasks, $counter, Get_Index_Of_TaskID($array_nextweek_tasks, 
					$array_nextweek_tasks[$counter]->getParent()) + $Index_Offset_Depending_On_Position);
				$Index_Offset_Depending_On_Position = 0;
				if(Get_Index_Of_TaskID($array_nextweek_tasks, $array_nextweek_tasks[$counter]->getParent()) > $counter)
					$counter--;	// this readjusts the index for when we move an element further down the list. Without this, it skips over the element that should be next and screws up the routine.
			}
		}

		// to finalize, we serialize the tasks so we have it stored in a local cache for faster access later
  		$tasks_Data = serialize( $array_tasks);
  		$filePath = "./" . $_SESSION['username'] . "/" . "tasks_list.txt";
  		if (is_writable($filePath)) {
      		$fp = fopen($filePath, "w"); 
      		fwrite($fp, $tasks_Data); 
      		fclose($fp);
  		}
	
		
		// now we serialize the created array
		$tasks_Data = serialize($array_nextweek_tasks);
		$filePath = "./" . $_SESSION['username'] . "/" . "nextweek_tasks_list.txt";
  		if (is_writable($filePath)) {
      		$fp = fopen($filePath, "w"); 
      		fwrite($fp, $tasks_Data); 
      		fclose($fp);
  		}
		return 1;
	}

?>
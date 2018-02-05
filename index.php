<?php

require('./access.php'); // ensure valid user has a session





error_reporting(-1);
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
}



/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
include_once "examples/templates/base.php";
require_once($_SERVER['DOCUMENT_ROOT'] . '/tasks/src/Google/Client.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tasks/src/Google/Service/Tasks.php');

//session_start();

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
  If we're logging out we just need to clear our
  local access token in this case
  
  Review: the form in the html posts the logout 
  variable and sets it. If you click the link,
  it does that.
 ************************************************/
if (isset($_REQUEST['logout'])) {
	$client->revokeToken($_SESSION['access_token']);
	unset($_SESSION['access_token']);
	$_SESSION['loggedIn'] = false;
    $_SESSION = array();

    // finally destroy the session
    session_destroy();
	
	header("Location: /tasks");
}

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
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}

/************************************************
  If the 1 hour access token is expired, we
  make sure we unflag so we can get a new one.
  In the future you may want to get a refresh
  token figured out rather than require authen
  tication each time.
  
  The if clause below will always call a function
  that will return true if the token isn't active.
  Therefore we need this portion of the code to 
  be always after the token COULD be valid. We also
  check that the server token isn't set.
  Otherwise, this if statement will always be true
  and the site will infinitely loop to the 
  "connect me" screen.
 ************************************************/
if($client->isAccessTokenExpired() && isset($_SESSION['access_token'])) {

    // this is where we would normally put in a refresh token; rather, I'll just have them re login
	//$client->revokeToken($_SESSION['access_token']);
    unset($_SESSION['access_token']);
    //session_destroy();
    //header('Location: index.php');

    // here's a snippet from stackoverflow on how to get and store the refresh token
    // here is the snippet to set token, before that make sure the access type should be set to offline
    /*$client->setAccessType('offline');
    if (isset($_GET['code'])) { // this if statement be integrated with the similar if statement you have below
       $client->authenticate();
       $_SESSION['access_token'] = $client->getAccessToken();
    }

    To refresh token

    $google_token= json_decode($_SESSION['access_token']); // this small block would probably go in this block (accessTokenExpired)
    $client->refreshToken($google_token->refresh_token);

    this will refresh your token, you have to update it in session for that you can do

    $_SESSION['access_token']= $client->getAccessToken()*/


    //$authUrl = $client->createAuthUrl();
    //header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    $page = $_SERVER['PHP_SELF'];
    echo '<meta http-equiv="Refresh" content="0;' . $page . '">';


}

/************************************************
  Check to see if the action server variable is
  set. In other words, has the user clicked the
  "sync" button?
************************************************/
  if(isset($_REQUEST['action']))
  {
  /************************************************
  If we're signed in and have a request to gettasks,
  then we pull the lists. Note that we re-store the
  access_token bundle, just in case anything
  changed during the request - the main thing that
  might happen here is the access token itself is
  refreshed if the application has offline access.
  
  We also check to see if the token is expired. If
  so, we don't enter here. We can remove the token
  expired check here if we decide to allow for 
  refresh tokens in the future.
 ************************************************/
	if ($client->getAccessToken() && !$client->isAccessTokenExpired()) 
	{
  	// FIRST WE RETRIEVE THE TASK LISTS

  	// instead of a do...while, I use just the while and have this before it
  	// it just makes the logic of the while loop easier to do, even though it's a bit more clunky
  	$taskLists0 = $service->tasklists->listTasklists($optParams = array("maxResults" => "300"));

  	// these have been removed because they were initially to debug and test the API. Useful info
  	// echo "eTag: " . $taskLists0->getEtag() . "<br>";
  	// echo "Kind: " . $taskLists0->getKind() . "<br>";
  	// echo "NextPageToken: " . $taskLists0->getNextPageToken() . "<br><br><br>";

  	$arr = (array)$taskLists0->getItems();
  	// Here we have to iterate through several requests for task lists
  	// The api will only produce 20 results, no matter what you set in maxResults. Documentation is wrong.
  	// So we have to loop.
  	//
  	// We loop only until we are out of lists to retrieve. I'm using the strlen() function instead of empty() because empty() doesn't work.
  	// I don't see a problem with strlen. It will always be instantiated because it's instantiated before the while loop
  	// Tests show that the NextPageToken is simply filled with an empty string when there is no further data to get.
  	while(strlen($taskLists0->getNextPageToken()) > 0)
  	{
     	$taskLists0 = $service->tasklists->listTasklists($optParams = array("maxResults" => "300", "pageToken" => $taskLists0->getNextPageToken()));
     	$arr1 = (array)$taskLists0->getItems();
     	$arr = array_merge($arr, $arr1);
  	} 


  	// sort the array alphabetically and list each task list
  	usort($arr, 'SortByAlphabet');
  	/*foreach ($arr as $taskList) {
    	echo $taskList->getTitle() . "<br>";
  	}*/
	
  	// to finalize, we serialize the task list so we have it stored in a local cache for faster access later
  	$tasklist_Data = serialize( $arr);
  	$filePath = "./" . $_SESSION['username'] . "/" . "tasklist_list.txt";
  	if (is_writable($filePath)) {
      	$fp = fopen($filePath, "w");
      	fwrite($fp, $tasklist_Data); 
      	fclose($fp);
	  
	  // alternatively, we could use
	  // file_put_contents($filePath,$tasklist_Data); // this is the same as fopen, fwrite, and fclose all in one call
  	}


  	// SECOND WE RETRIEVE ALL TASKS DUE TODAY OR IN THE PAST; NOT COMPLETED, DELETED, OR HIDDEN TASKS, THOUGH

  	$array_tasks = array();
	$array_nextweek_tasks = array();
  	// we run through each tasklist and collect all the tasks in each
  	foreach ($arr as $tlist)
  	{
		// here we pass a due date for next week so we can get next week's tasks as well
			// the "updatedMin" is a debug test for now. We want only the tasks that have been updated in the last day : "updatedMin" => date("Y-m-d\TH:i:sP", strtotime("-1 day")),
    	$tasks = $service->tasks->listTasks($tlist->getID(), $optParams = array("dueMax" => date("Y-m-d\TH:i:sP", strtotime("+7 day")), "maxResults" => "300", "showCompleted" => False));       
		$arr2 = (array)$tasks->getItems();
    	foreach($arr2 as $task)
    	{
       		//date is stripped of time & frmtd; I have to add one day in a strtotime b/c when I don't, it gives the day before the due date
       		// This is because google tasks strips all TIME information from its stored dates. Since all tasks are supposed to adhere to
			// RFC3339, the server converts the google tasks UTC stored due date to local server time. In Virginia, local time is 5 hours before UTC/GMT time.
			// 5 hours subtracted from hour 00 in a day is always the day before. So we have to add a day to account for that.
			// used to be '+1 day' but changed it to '+5 hours'. Thought that was more consistent with the problem. 
			// It's a sloppy solution, but it's google's fault.
       		$task->setTitle($tlist->getTitle() . " - " . date("l, n/j", strtotime('+5 hours', strtotime($task->getDue()))) . " - " . $task->getTitle());
			//echo "self link: " . $task->getSelfLink() . "\n" . $tlist->getID() . "\n"; // this is used to test the API for the kind of info it contains. Documentation isn't good.
			// the above results in the following output:
			//self link: https://www.googleapis.com/tasks/v1/lists/MTU0ODM4NzQzNDQ3ODU2OTAyMzg6MjMzMTc2NjM2OjA/tasks/MTU0ODM4NzQzNDQ3ODU2OTAyMzg6MjMzMTc2NjM2OjEyNjcxOTY5MTI 
		        //      		                                   MTU0ODM4NzQzNDQ3ODU2OTAyMzg6MjMzMTc2NjM2OjA
				// note: a task CONTAINS a url with the task ID as well as the TASKLIST ID. You don't have to try to find a way to cache the tasklist ID because the task holds it for you.
				//       However, you will have to parse this url when you want to update the task
			
				// the eTag: is a HASH of the entire task. A unique identifier that google appears to use internally. Not sure how. Not useful for me here.
			
				// update: you do NOT have to ->get() the task when you want to update. You should be able to just send the task ID and tasklist ID with the udpated task.
    	}
    	$array_tasks = array_merge($array_tasks, $arr2);
  	}
	
		
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
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				// in the moveElement function, we take out one element in an array
				// we then add it back into the array at a different location
				// if the element we remove is BEFORE the place we want to add it back in
				// it throws off the index of where to put it--because the array indices have changed
				// when we removed the element to add it bcak in somewhere else.
				
				/*$time = strtotime($array_tasks[$counter]->getDue());
				$target_Date = date('Y-m-d', $time); // we memorialize the date we are moving everything to based on the earliest task due
													 // We don't memorialize the index here because that will change as we move elements around in the array
				
				// we cycle through everything to move, starting with the parent above, then subtasks underneath
				
				
				$new_Location = Get_Index_Of_DueDate($array_tasks, $target_Date); // we memorialize the index we're moving everything to based on the earliest task due
				moveElement($array_tasks, $counter - 1, $new_Location + $Index_Offset_Depending_On_Position);  // $counter - 1 moves the parent first
				$counter2 = 0;  // this is the counter for the while loop below; it adds space after the new_Location to preserve the order the subtasks are supposed to be in
				while($array_tasks[$counter]->getParent() != null)
				{
					$new_Location  = Get_Index_Of_DueDate($array_tasks, $target_Date); // we recalculate the index each time we move something; location is not static (though to optimize we can probably account for any changes when we move elements and we wouldn't ahve to do thsi check with each iteration)
					if(Get_Index_Of_DueDate($array_tasks, $target_Date) < $counter)
						$Index_Offset_Depending_On_Position = 1;
					// $new_Location moves each subtask, starting with the first
					// we add the $counter2 to the new_Location to preserve the order in the subtasks we had before
					// we add 1 to the $counter2 to account for the parent task (since the new_Location is recalculated) - again, a lot of this could be cut out if I sat down and thought out what was happening to the array
					// finally we add the Index_Offset_Depending_On_Position to ensure it accounts for location in the array
					moveElement($array_tasks, $counter, $new_Location + ($counter2 + 1) + $Index_Offset_Depending_On_Position);  
					$Index_Offset_Depending_On_Position = 0;
					if(Get_Index_Of_DueDate($array_tasks, $target_Date) > $counter)   // this is a very inefficient use of server processing; can probably optimize later
						$counter--;	// this readjusts the index for when we move an element further down the list. Without this, 
									// it skips over the element that should be next and screws up the routine.
					$counter++;
					$counter2++;
				}*/
			
		
	
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
		
		
  	/*foreach($array_tasks as $task) 
  	{
    	//echo "<b>" . $tlist->getTitle() . "</b>" . "<br><br>";
    	echo $task->getTitle() . "<br>";
  	}*/
	
	  // to finalize, we serialize the tasks so we have it stored in a local cache for faster access later
  	$tasks_Data = serialize( $array_tasks);
  	$filePath = "./" . $_SESSION['username'] . "/" . "tasks_list.txt";
  	if (is_writable($filePath)) {
      	$fp = fopen($filePath, "w"); 
      	fwrite($fp, $tasks_Data); 
      	fclose($fp);
	  
	  // alternatively, we could use
	  // file_put_contents($filePath,$tasklist_Data); // this is the same as fopen, fwrite, and fclose all in one call
  	}
	
		
		// now we serialize the created array
	$tasks_Data = serialize($array_nextweek_tasks);
	$filePath = "./" . $_SESSION['username'] . "/" . "nextweek_tasks_list.txt";
  	if (is_writable($filePath)) {
      	$fp = fopen($filePath, "w"); 
      	fwrite($fp, $tasks_Data); 
      	fclose($fp);
	  
	  // alternatively, we could use
	  // file_put_contents($filePath,$tasklist_Data); // this is the same as fopen, fwrite, and fclose all in one call
  	}
	//unset($_REQUEST['action']);
	
	header('Location: http://www.scribesslate.com/tasks');

  $_SESSION['access_token'] = $client->getAccessToken();
  }

  }
  // if the sync button hasn't been pressed, we load the data from the local cache instead
  // if the sync button has been pressed, this is run anyway to make sure something is rendered (as long as there's auth access)
  // However, we must make sure the person has authorized access
  // so we check for a set access_token server variable first.
  if(isset($_SESSION['access_token'])) 
  {
	  //echo pageHeader("Yay Tasks!");

		  // this is a test subroutine to unserialize data and read the tasklist into memory that way
    	$filePath = "./" . $_SESSION['username'] . "/" . "tasklist_list.txt";
		$arr = array();
		if (file_exists($filePath))
		{
    		$tasklist_Data = file_get_contents($filePath);
    		$arr = unserialize($tasklist_Data);           
    		/*if (!empty($arr))
			{
        		$name = $obj->name;
        		$birthdate = $obj->birthdate;
        		$position = $obj->position;
    		}*/
    	}
		else {
			echo "Something got messed up. The tasklist_list.txt file doesn't exist.";
		}
	  

	  
		//foreach ($arr as $taskList) 
		//{
    	//	echo $taskList->getTitle() . "<br>";
    	//}
	  
	   	//echo "<br><br><br>";
	  
	  	  // this is a test subroutine to unserialize data and read the tasks into memory that way
    	$filePath = "./" . $_SESSION['username'] . "/" . "tasks_list.txt";
		$array_tasks = array();
		if (file_exists($filePath))
		{
    		$tasks_Data = file_get_contents($filePath);
    		$array_tasks = unserialize($tasks_Data);           
    		/*if (!empty($arr))
			{
        		$name = $obj->name;
        		$birthdate = $obj->birthdate;
        		$position = $obj->position;
    		}*/
    	}
		else {
			echo "Something got messed up. The tasks_list.txt file doesn't exist.";
		}
	  
	  	// now we unserialize the data from nextweek tasks. We can render at any time with that.
    	$filePath = "./" . $_SESSION['username'] . "/" . "nextweek_tasks_list.txt";
		$array_nextweek_tasks = array();
		if (file_exists($filePath))
		{
    		$tasks_Data = file_get_contents($filePath);
    		$array_nextweek_tasks = unserialize($tasks_Data);           
    		/*if (!empty($arr))
			{
        		$name = $obj->name;
        		$birthdate = $obj->birthdate;
        		$position = $obj->position;
    		}*/
    	}
		else {
			echo "Something got messed up. The tasks_list.txt file doesn't exist.";
		}
	  
	  // this is a quick and dirty filter for tasks in the search bar. I think we should implement ajax functionality in the future. This works for now.
	  if(isset($_GET["q"]))
	  {
		  $array_search_terms = explode("+", $_GET["q"]); // get our search terms
		  $new_array_tasks = array();
		  $new_array_nextweek_tasks = array();
		  foreach($array_tasks as $counter => $task)
		  {
			  for($index = 0; $index < count($array_search_terms); $index++)
			  {
				  if(strpos($task->getTitle(), $array_search_terms[$index]) !== false)
				  {
					  //$array_tasks = array_splice($array_tasks, $counter, 1);
					  $new_array_tasks[] = $task;
					  //$counter--; // offset the counter for the task we just removed so we do the next task
					  //break;
				  }
			  }
		  }
		  $array_tasks = $new_array_tasks;
		  foreach($array_nextweek_tasks as $counter => $task)
		  {
			  for($index = 0; $index < count($array_search_terms); $index++)
			  {
				  if(strpos($task->getTitle(), $array_search_terms[$index]) !== false) // if the title doesn't contain the search term given
				  {
					  $new_array_nextweek_tasks[] = $task;
					  //$array_nextweek_tasks = array_splice($array_nextweek_tasks, $counter, 1);
					  //$counter--; // offset the counter for the task we just removed so we do the next task
					  //break;
				  }
			  }
		  }
		  $array_nextweek_tasks = $new_array_nextweek_tasks;
	  }
  	//foreach($array_tasks as $task) 
  	//{
    	//echo "<b>" . $tlist->getTitle() . "</b>" . "<br><br>";
    //	echo $task->getTitle() . "<br>";
  	//}


  }

function SortByAlphabet($a, $b) {
    return strcmp($a->getTitle(), $b->getTitle());
  }

function SortByDate($a, $b) {
    return strtotime($b->getDue()) - strtotime($a->getDue());  // sort by descending rather than ascending order
  }

function SortByDateReversed($a, $b) {
	return strtotime($a->getDue() - strtotime($b->getDue()));  // sort by ascending order rather than descending order
}

/****************************************************
	Searches an array of tasks. Returns the index
	of the first instance of a task that has 
	the matching due date. Otherwise returns false.
	
	Also makes sure the identified task isn't a sub-
	task. Since the program must move sub-tasks
	out of sort by due date, it could mix things
	up if subtasks were read.
	
	Ideally will be used only when the array of 
	tasks has been already sorted by due date. 
	Otherwise,
	it won't really be as useful.
*****************************************************/
function Get_Index_Of_DueDate($array, $date) {
    foreach($array as $index => $task) {
        if(date("Y-m-d", strtotime("+1 day", strtotime($task->getDue()))) == $date && ($task->getParent() == false || $task->getParent() == "")) // empty() does not work with expressions prior to php 5.5
		{
			return $index; 
		}
    }
    return FALSE;
}

/****************************************************
	THIS FUNCTION WILL NOT WORK IF THE ARRAY IS NOT
	SORTED BY DATE IN ASCENDING OR DESCENDING ORDER
	
	Searches an array of tasks. Returns the index
	of the first instance of a task that has 
	the NEAREST due date. Otherwise returns false.
	
	Also makes sure the identified task isn't a sub-
	task. Since the program must move sub-tasks
	out of sort by due date, it could mix things
	up if subtasks were read.
	
	Ideally will be used only when the array of 
	tasks has been already sorted by due date. 
	Otherwise,
	it won't really be as useful.
	
	$is_array_descending is a bool that indicates
	whether the dates in the array are sorted by 
	ascending or descending order.
*****************************************************/
function Get_Index_Of_Nearest_DueDate($array, $date, $is_array_descending) {
    foreach($array as $index => $task) {
        if($is_array_descending == true)
		{
			if(date("Y-m-d", strtotime($task->getDue())) <= $date &&
			   $index != 0 &&
			   date("Y-m-d", strtotime($array[$index - 1]->getDue())) >= $date
			    && ($task->getParent() == false || $task->getParent() == "") &&
			   $index < count($array)
		  		&& $array[$index + 1]->getParent() == false) // ensure this task is not a subtask or a parent task to a task block
			{
				return $index - 1; // not sure why I have to offset - 1 here. I am not smart.
			}
		}
		else
		{
			if(date("Y-m-d", strtotime($task->getDue())) >= $date &&
			   $index != 0 &&
			   date("Y-m-d", strtotime($array[$index - 1]->getDue())) <= $date
			    && ($task->getParent() == false || $task->getParent() == "") &&
			   $index < count($array)
		  		&& $array[$index + 1]->getParent() == false) // ensure this task is not a subtask or a parent task to a task block
			{
				return $index - 1;
			}
		}
    }
    return FALSE;
}

/*****************************************************
  Searches an array of tasks. Returns the index of
  the first instance of a task that has the matching
  ID. Otherwise returns false.
*****************************************************/
function Get_Index_Of_TaskID($array, $task_ID_To_Find) {
    foreach($array as $index => $task) {
        if($task->getID() == $task_ID_To_Find)
		{
			return $index;
		}
    }
    return FALSE;
}

/******************************************************
  Moves an item from the array located at position $a
  to the new position at position $b.
******************************************************/
function moveElement(&$array, $a, $b) {
    $out = array_splice($array, $a, 1);
    array_splice($array, $b, 0, $out);
}

/******************************************************
  Moves a block of tasks from the array located at
  position $block_location to the new position at 
  position $block_destination. Length of the block
  is $block_length.
******************************************************/
function moveTaskBlock(&$array, $block_location, $block_length, $block_destination) {
	$out = array_splice($array, $block_location, $block_length);
    array_splice($array, $block_destination, 0, $out);
}

if (
    $client_id == '<YOUR_CLIENT_ID>'
    || $client_secret == '<YOUR_CLIENT_SECRET>'
    || $redirect_uri == '<YOUR_REDIRECT_URI>') {
  echo missingClientSecretsWarning();
}

	include("./design.html.php");

?>









<?php
//echo pageFooter(__FILE__); 
?>
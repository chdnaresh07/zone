<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("zone") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<style>
	td{font-style:italic; color:#FF0000;}
	th{text-align:left;}
	p{text-align:center;}
	
	</style>
</head>
<body>
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM student
            WHERE (`reg` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){   
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
         ?>
		<table align="center" width="500px" bgcolor="#FFFFD5">
		<tr><td colspan="4"><p><img src="picstudent/<?php echo  "".$results['file']."";?> "width="100px" height="120px" align="center" /></p></td><tr>
		<tr><td>Registration No :</td><th><?php echo "".$results['reg']."";?></td><td>Course Name :</td><th><?php echo "".$results['course']."";?></th></tr>
		<tr><th colspan="4"><BR><BR></th><tr>
		<tr><td>Student Name :</td><th><?php echo  "".$results['name']."";?></td><td>Father Name :</td><th><?php echo "".$results['fname']."";?></th></tr>
		<tr><th colspan="4"><BR><BR></th><tr>
            </table><br><br><br>
	<?php
			}
             
        }
        else{ // if there is no matching rows do following
            echo "<h2 align='center'><font color='red'>No results Please enter right value</font></h2>";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>

<table align="center">
<form>
<tr><td><input type="button" value="Close this window" onClick="window.close()"></td></tr>
</form>
</table>
</body>
</html>
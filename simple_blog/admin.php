<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<meta http-equiv="Content-Type"
		content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="/css/default.css" type="text/css" />
	<title>Victoria's Blog</title>
</head>

<body>
	<h1>Simple Blog for GRA310</h1>
	
	<form method="post" action="inc/update.inc.php">
		<fieldset>
			<legend>New Entry Submission</legend>
			
			<label>Title
				<input type="text" name="title" maxlength="150" />
			</label>
			
			<label> Entry
				<textarea name="entry" cols="45" rows="10"></textarea>
			</label>
			<input type="submit" name="submit" value="Save Entry" />
			<input type="submit" name="submit" value="Cancel" />
		</fieldset>
	</form>
</body>

</html>
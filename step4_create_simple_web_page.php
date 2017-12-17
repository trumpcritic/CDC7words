<?php
	require_once('forbidden_terms.php');


	foreach($terms as $this_term => $trash){

		$html = get_header($this_term);
		$html .= get_footer($this_term);
		
		file_put_contents("html_summary/$this_term.html",$html);
		
	}


function get_footer($word){

	$foot_stub = "
</main>
  <footer class='container'>
      <p>&copy; TrumpCritic 2017</p>
    </footer>
  </body>
</html>
";

	return($foot_stub);
}


function get_header($word){

	$head_stub = '<!doctype html>
<html lang="en">
<title>CDC 7 words </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head><body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">CDC 7 Words</a>
    </nav>
    <main role="main" class="container">

     <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">CDC 7 Words: '.$word.'</h1>
	<p> This is how the CDC has used the word "'.$word.'" in all of the Congressional Budget documents in the past.
        </div>
      </div>

';

	return($head_stub);
}




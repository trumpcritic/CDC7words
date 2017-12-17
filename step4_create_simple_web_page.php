<?php
	require_once('forbidden_terms.php');


	foreach($terms as $this_term => $trash){

		echo "working on $this_term\n";

		$html = get_header($this_term);


		$grep_contents = file("grep_result/$this_term.txt");

		$html .= "<ul>";
		foreach($grep_contents as $grep_line){

			$html .= "<li>";

			$line_array = explode(':',$grep_line);
			$full_file_source = array_shift($line_array);
			$line_content = implode(':',$line_array);
			list($dir,$file_name) = explode('/',$full_file_source);
			$file_parts = explode('.',$file_name);
			$txt = array_pop($file_parts);
			$file_name = implode('.',$file_parts);


			$highlight_term = "<a href='#' class='text-danger'>$this_term</a>";

			$line_content = str_replace($this_term,$highlight_term,$line_content);
			
			$html .= "From: <a href='https://trumpcritic.github.io/cdc_budget_pdfs/$file_name'>$file_name</a> <br>";
			$html .= "<p>$line_content</p> ";
			

			$html .= "</li>\n";
		}
		$html .= "</ul>";
		$html .= get_footer($this_term);
		
		file_put_contents("html_summary/$this_term.html",$html);
		file_put_contents("../trumpcritic.github.io/$this_term.html",$html);
		
	}


function get_footer($word){

	$foot_stub = "
</main>
  </body>
</html>
";

	return($foot_stub);
}


function get_header($word){

	$head_stub = '<!doctype html>
<html lang="en">
<title>Trump censored 7 words at the CDC </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head><body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.html">#CDC7words</a>
    </nav>
    <main role="main" class="container">

     <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">#CDC7words</h1> 
	<h2>This is how censoring the word '.$word.' will impact the CDC.</h1>
	<p> This is how the CDC has used the word "'.$word.'" in all of the Congressional Budget documents in the past.
Using this webpage, you can see which conversations between the CDC and Congress will have to change as the result of the Trump administrations decision to <a href="index.html">Censor 7 words at the CDC</a>.</p>
        </div>
      </div>

';

	return($head_stub);
}




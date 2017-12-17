<?php
	require_once('forbidden_terms.php');

	//this simply greps the budget text files looking for generous combinations of each of the forbidden seven words.
	//it will output into the grep_results sub folder

	foreach($terms as $term_name => $term_set){

		$grep_command = '';
		$pipe = '';
		$file = "cdc_budget_txt/*.txt";
		foreach($term_set as $this_term){
			$grep_command .= "$pipe grep -i $this_term $file ";	
			$pipe = '|';
			$file = '';
		}
		$grep_command .= "> grep_result/$term_name.txt";
		
		echo "running $grep_command\n";
		system($grep_command);
	}






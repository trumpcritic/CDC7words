<?php
	//you will need xpdf and pdftotext installed for this extraction to work..
	//but I am committing the results... so...
	
	echo "each of these is about 600 pages... give it time..\n";
	foreach(glob('cdc_budget_pdfs/*.pdf') as $this_pdf_file){
		echo "processing $this_pdf_file...";
		system("pdftotext $this_pdf_file $this_pdf_file.txt"); 
		echo "done.\n";
	}
	
	system("mv cdc_budget_pdfs/*.txt cdc_budget_txt/");

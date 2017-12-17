<?php
	//this is how I got the original CDC budget pdfs.
	//But I am putting them into the github repo, so this is somewhat redundant. 
	//still for the completionists out there..
	$pdfs = [
		'https://www.cdc.gov/budget/documents/fy2018/fy-2018-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2017/fy-2017-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2016/fy-2016-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2015/fy-2015-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2015/fy-2015-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2014/fy-2014-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2013/fy-2013-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2012/fy-2012-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2011/fy-2011-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2010/fy-2010-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2009/fy-2009-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2008/fy-2008-cdc-congressional-justification-part-1.pdf',
		'https://www.cdc.gov/budget/documents/fy2008/fy-2008-cdc-congressional-justification-part-2.pdf',
		'https://www.cdc.gov/budget/documents/fy2007/fy-2007-cdc-congressional-justification.pdf',
		'https://www.cdc.gov/budget/documents/fy2006/fy-2006-cdc-congressional-justification.pdf',
		];


	foreach($pdfs as $a_pdf){
		system("wget -P cdc_budget_pdfs/ $a_pdf");
	}



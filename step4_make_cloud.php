<?php

	chdir('grep_result');	

	foreach(glob('*.txt') as $this_grep_result_file){


		$clouder_cmd = "../../clouder/bin/clouder cloud:from-url https://raw.githubusercontent.com/trumpcritic/CDC7words/master/grep_result/$this_grep_result_file  \
    --width=1000 \
    --height=700 \
    --font=MarcellusSC-Regular.ttf \
    --fonts-path=fonts \
    --vertical-probability=75 \
    --placer=spirangle \
    --background-color=#ABCDEF \
    --min-font-size=15 \
    --max-font-size=45 \
    --font-size-boost=dim \
    --sort-by=angle \
    --sort-order=desc \
    --palette='Facebook' 
";
		echo "running $clouder_cmd\n\n...";
		system($clouder_cmd);
		echo "done.\n";

	}

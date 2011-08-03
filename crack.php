<?php

$string1 = 'd64a84456adc959f56de6af685d0dadd';
$string2 = '8d8a1b73876ca678cc3afa372e5199de';

$word1 = '';
$word2 = '';

if ($handle = opendir('./dic-0294')) {
	while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != "..") {
			$file = './dic-0294/' . $file;
			$handle2 = fopen($file, 'r');
			if ($handle2) {
			    while (($buffer = fgets($handle2, 4096)) !== false) {
			    	$buffer = trim($buffer);
			    	if(md5($buffer) === $string1){
			        	$word1 = $buffer;
			        }
			        if(md5($buffer) === $string2){
			        	$word2 = $buffer;
			        }
			        
			        if(!empty($word1) && !empty($word2)){
			        	break;
			        }
			    }
			    fclose($handle2);
			}
		}
	}
}

echo $word1;
echo ' ';
echo $word2;
echo "\n";
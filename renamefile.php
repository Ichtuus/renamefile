<?php

class Renamefile {

	public function iter(){
		$dir_iterator = new RecursiveDirectoryIterator(dirname(__FILE__));
		$iterator = new RecursiveIteratorIterator($dir_iterator);
		$i = 0;
		foreach ($iterator as $file) {
			echo '<pre>';
			$filename = pathinfo($file);
			$path = basename(__FILE__);
			if( $filename["basename"] != ".." and  $filename["basename"] != "."  and  $filename["basename"] != $path  ){
				print_r($filename["filename"]. ".".$filename["extension"] );
				rename($filename["filename"]. ".".$filename["extension"], "lacoquetterie45-".$i++.".".$filename["extension"]);
				echo "<br>";
			}

		}
	}

}

$Renamefile = new Renamefile();

$Renamefile->iter();

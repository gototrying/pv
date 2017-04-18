#!/store/app/bin/php
<?php
#
# Copyright (C) 2010-2011 Kazo Vision. (http://www.kazovision.com)
# All rights reserved.
#
# script_info.php
# @version 0.01
# @author tony (tonixinot@gmail.com)
# 获取脚本详细信息。
#

$filename = $argv[1];
if(!$filename){echo "nothing..\n";exit;}
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
if (! $doc->load($filename)) {
	echo "Error when load content file: $filename\n";
	continue;
}
$t=$doc->getElementsByTagName('play');
	foreach($t as $p){
		$x=$p->getAttribute('filename');
		if(strlen($x)>0){
			$cmp=explode(".",$x);
				if($cmp[1]=='avi'){
					$lis.=$x."\n";
					}
				}
			}
file_put_contents("/store/data/currentcontentdetial",$lis);
?>

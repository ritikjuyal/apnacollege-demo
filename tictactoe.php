<?php
$p=array('online'=>array(0,0,1),
'offline'=>array(1,0,0),
'away'=>array(0,1,1));
if($p['online'][0]==0 && $p['online'][1]==0 && $p['online'][2]==0){
	echo "Player A win";
}
else if($p['online'][0]==0 && $p['offline'][0]==0 && $p['away'][0]==0){
	echo "Player A win";
}
else if($p['online'][0]==0 && $p['offline'][1]==0 && $p['away'][2]==0){
	echo "Player A win";
}
else if($p['online'][2]==0 && $p['offline'][2]==0 && $p['away'][2]==0){
	echo "Player A win";
}
else if($p['online'][1]==0 && $p['offline'][1]==0 && $p['away'][1]==0){
	echo "Player A win";
}
else if($p['online'][1]==1 && $p['offline'][1]==1 && $p['away'][1]==1){
	echo "Player B win";
}
else if($p['online'][2]==1 && $p['offline'][2]==1 && $p['away'][2]==1){
	echo "Player B win";
}
else if($p['online'][0]==1 && $p['online'][1]==1 && $p['online'][2]==1){
	echo "Player B win";
}
else if($p['online'][0]==1 && $p['offline'][0]==1 && $p['away'][0]==1){
	echo "Player B win";
}
else if($p['online'][0]==1 && $p['offline'][1]==1 && $p['away'][2]==1){
	echo "Player B win";
}
else{
	echo "Tied";
}
?>
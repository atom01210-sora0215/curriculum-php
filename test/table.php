昔、同じようなの書いた事あるので、今回のに合わせて修正したのをあげてみます。

<?php
$s = array();

$s[0] = array( 'A-1' , 'B-1' , 'C-1' , 'D-1' , 'E-1' );
$s[1] = array( 'A-2' , 'B-2' , 'C-2' , 'D-2' , 'E-2' );
$s[2] = array( 'A-3' , 'B-3' , 'C-3' , 'D-3' , 'E-3' );
$s[3] = array( 'A-4' , 'B-4' , 'C-4' , 'D-4' , 'E-4' );
$s[4] = array( 'A-5' , 'B-5' , 'C-5' , 'D-5' , 'E-5' );

print table($s , "tate");
print table($s , "yoko");
//--------------------------------------------
function table($s , $xy) {
$out = "";
foreach($s as $y => $arrX) {
$out.= "<tr>";
foreach($arrX as $x => $dat) {
$out.= XY($x , $y , $xy , $dat);
}
$out.= "</tr>";
}
$out = "<table border=1>$out</table>";
return($out);
}

function XY($x , $y , $xy , $dat) {
$dat = htmlspecialchars($dat);
if ($xy == "tate") {
$dat = ($x == 0) ? TH($dat) : TD($dat);
} else {
$dat = ($y == 0) ? TH($dat) : TD($dat);
}
return($dat);
}

function TD($str) { return("<td>" . $str . "</td>"); }
function TH($str) { return("<th style='background-color:cornsilk;'>" . $str . "</th>"); }
//--------------------------------------------
?>

むやみやたらと関数にしてたり、色々アレですが。
<br><br><br><br><br><br>


データベースなどから取り出す場合はこんな感じで処理する方が
わかりやすいですね

<?PHP
$s = array(
array('A-1'=>'A-2','B-1'=>'B-2','C-1'=>'C-2','D-1'=>'D-2','E-1'=>'E-2')
,array('A-1'=>'A-3','B-1'=>'B-3','C-1'=>'C-3','D-1'=>'D-3','E-1'=>'E-3')
,array('A-1'=>'A-4','B-1'=>'B-4','C-1'=>'C-4','D-1'=>'D-4','E-1'=>'E-4')
,array('A-1'=>'A-5','B-1'=>'B-5','C-1'=>'C-5','D-1'=>'D-5','E-1'=>'E-5')
);

$t="<table>\n";
$t.="<thead>\n";
foreach (array_keys($s[0]) as $val){
$t.="<th>".htmlspecialchars($val)."</th>\n";
}
$t.="</thead>\n";
$t.="<tbody>\n";
foreach ($s as $row){
$t.="<tr>\n";
foreach($row as $key_1=>$val){
$t.="<td>".htmlspecialchars($val)."</td>\n";
}
$t.="</tr>\n";
}
$t.="</tbody>\n";
$t.="</table>\n";
print $t;

?>

単に連想配列であれば１行目と２行目以降のキーが同等である保証はありませんが
データベースなどからの抽出であれば同等のデータとなるはずなので・・・
<br><br><br><br><br><br>



「配列の最初の要素」をthで展開してよければこんな感じですかね・・・

<?php
$s = array();
$s[0] = array( 'A-1' , 'B-1' , 'C-1' , 'D-1' , 'E-1' );
$s[1] = array( 'A-2' , 'B-2' , 'C-2' , 'D-2' , 'E-2' );
$s[2] = array( 'A-3' , 'B-3' , 'C-3' , 'D-3' , 'E-3' );
$s[3] = array( 'A-4' , 'B-4' , 'C-4' , 'D-4' , 'E-4' );
$s[4] = array( 'A-5' , 'B-5' , 'C-5' , 'D-5' , 'E-5' );
print tTable($s);

function tTable($arg) {
if (!is_array($arg)) { return false; }
$ret = '';
$ret .= '<table>' . PHP_EOL;
$td = 'th';
foreach ($arg as $line) {
if (!is_array($line)) { continue; }
$ret .= '<tr>' . PHP_EOL;
foreach ($line as $item) {
$ret .= '<' . $td . '>' . htmlspecialchars($item, ENT_QUOTES) . '</' . $td . '>' . PHP_EOL;
}
$ret .= '</tr>' . PHP_EOL;
$td = 'td';
}
$ret .= '</table>' . PHP_EOL;
return $ret;
}

?>
<br><br><br><br><br><br>


<?PHP
$s = array(
array('A-1','B-1','C-1','D-1','E-1')
,array('A-2','B-2','C-2','D-2','E-2')
,array('A-3','B-3','C-3','D-3','E-3')
,array('A-4','B-4','C-4','D-4','E-4')
,array('A-5','B-5','C-5','D-5','E-5')
);
$t1="<table>\n";
foreach ($s as $row){
$t1.="<tr>\n";
foreach($row as $key_1=>$val){
if($key_1==0){
$t1.="<th>".htmlspecialchars($val)."</th>\n";
}else{
$t1.="<td>".htmlspecialchars($val)."</td>\n";
}
}
$t1.="</tr>\n";
}
$t1.="</table>\n";
$t2="<table>\n";
foreach ($s as $key_0=>$row){
$t2.="<tr>\n";
foreach($row as $val){
if($key_0==0){
$t2.="<th>".htmlspecialchars($val)."</th>\n";
}else{
$t2.="<td>".htmlspecialchars($val)."</td>\n";
}
}
$t2.="</tr>\n";
}
$t2.="</table>\n";

print $t1;
print $t2;
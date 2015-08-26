<?php

//スクレイピングプログラムの初期設定が必要です。

class ConfigComponent extends Object {

		function initialize(&$controller) {
		$this->controller =& $controller;
	}


function files() {

//simple_html_domへのファイルパス
$simple_html_dom ='/Applications/MAMP/htdocs/wordpress/parth/simplehtmldom_1_5/simple_html_dom.php';

//スクレイピングプログラムの設置場所　サーバーのパスではなく、URLから見た絶対パス
$parth ='http://localhost:8888/parth';
$this->controller->set('parth',$parth);

return $simple_html_dom;
}

}

?>

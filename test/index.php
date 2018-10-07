

<?php 

require'/News.php';
//require'/Db.php';



class Data {
public function actionView()
	{
		 
			$newsItem = News::getNewsItemByID($id);

	require_once(ROOT . '/view.php');
	echo 'hello';

/*			echo 'actionView'; */

}}
$obj = new Data;
$obj->actionView();

 ?>
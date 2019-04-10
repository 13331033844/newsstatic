<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function newslist(){
    	$news=M('tb_news');
       	$sql='select * from tb_news order by id desc limit 20';
       	$arr=$news->query($sql);
       	$this->assign('topic',$arr);    
       	$this->display(APP_PATH.'Home/View/index.shtml');

    }

    public function newslistapi(){
    
    	$news=M('tb_news');
       	$sql='select * from tb_news order by id desc limit 10';
       	$arr=$news->query($sql);
       	foreach ($arr as $key => $value) {
       		$arr[$key]['time']=date('Y-m-d H:i:s',$value['time']);
       	}
       	echo json_encode($arr);
    }
    public function newsdetail(){

    	$id=$_GET['id'];
       	$file=APP_PATH.'news/'.$id.'.shtml';
     
       	if(!file_exists($file)){
			$news=M('tb_news');
	    	$id=$_GET['id'];
	       	$sql='select * from tb_news where id='.$id;
	       	$arr=$news->query($sql);
	       	$this->assign('topic',$arr[0]);
	       	$content=$this->fetch(APP_PATH.'Home/View/news.shtml');
       		file_put_contents($file, $content);
	       	// $this->display(APP_PATH.'Home/View/news.shtml');
		}

		header('Location: '.$file);
			exit;
    }
    public function edit(){
		$news=M('tb_news');
    	$id=$_GET['id'];
	    $sql='select * from tb_news where id='.$id;
	    $arr=$news->query($sql);
	    $this->assign('topic',$arr[0]);
       	$this->display(APP_PATH.'Home/View/edit.shtml');
    }
    public function editapi(){
		$news=M('tb_news');
    	$id=$_POST['id'];
    	$title=$_POST['title'];
	    $sql='UPDATE tb_news SET title="'.$title.'" where id='.$id;
	    $arr=$news->execute($sql);
	    if($arr==1){
	       	$file=APP_PATH.'news/'.$id.'.shtml';
			$sql='select * from tb_news where id='.$id;
		    $a=$news->query($sql);
		    $this->assign('topic',$a[0]);
		    $content=$this->fetch(APP_PATH.'Home/View/news.shtml');
	       	file_put_contents($file, $content);
	    }
		echo $arr;
	}
}
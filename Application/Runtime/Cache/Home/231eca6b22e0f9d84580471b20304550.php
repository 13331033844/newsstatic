<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>习近平总书记这个动作，数十年未曾改变-中新网</title>
<script type="text/javascript" src="/js/jq.js"></script>
<body>
<div class="active"   id="menu_1_1_2">HEADER</div>

<div class="div980">
  	<div class="con_left">

		<div  id="menu_1_2_2" style="display:none;">评论 <span id=tstotal></span></div>    
	</div>
    <div id="cont_1_1_2" style="width:100%;" class="content">
      <h1 style="display:block; position:relative; text-align:center; clear:both">
      <?php echo $topic['title']?>
      </h1>

	<span id="pubtime_baidu"><?php echo date('Y-m-d H:i:s',$topic['time'])?></span>
	<span id="author_baidu">作者：<?php echo $topic['writer']?></span>
	</div>
</div>
<br>
<br>
<br>
<br>
<div class="left_zw" style="position:relative">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
</div>
<br>
<br>
<br>
<br>
<div class='new'>
	<dl><dt>最新文章:</dt></dl>

</div>
<script type="text/javascript">
	function A() {
		$.ajax({
		    url: 'http://www.test.com/index.php?c=index&a=newslistapi',
		    type: 'get',
		    dataType: 'json',
		    success: function(data){
		    	html=''
		    	for (var i = 0; i < data.length; i++) {
		    		html+='<dl><dt><dd><a href="./'+data[i].id+'.shtml">'+data[i].title+'</a>'+data[i].time+'</dd></dt></dl>'
		    	}
		    	$('.new').append(html)
		    },
		    error: function(e){
		    	alert('error')
		    }
		 })
	}

	    A()

</script>

<div class="active"   id="menu_1_1_2">FOOTEr</div>


</body>
</html>
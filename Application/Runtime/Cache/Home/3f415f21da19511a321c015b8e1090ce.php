<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html>
 <head>
 	<title>edit</title>
<script type="text/javascript" src="/js/jq.js"></script>

 </head>
 <body>
 	<input type="text" class='title' v="<?php echo $topic['id']?>" style="width:100%;height: 30px;font-size: 20px" value="<?php echo $topic['title']?>">
 	<button class='yes'>yes</button>
 	<button class='back'>back</button>


 	<script type="text/javascript">
 		$('.yes').on('click',function () {
 			var title=$('.title').val()
 			var id=$('.title').attr('v')
 			$.ajax({
			    url: 'http://www.test.com/index.php?c=index&a=editapi',
			    type: 'post',
			    data: {title:title,id:id},
			    dataType: 'json',
			    success: function(data){
			    	if(data==0){
			    		alert('没变')
			    	}else{
			    		alert('成功')
			    	}
			    }
		 	})
 		})
 		$('.back').on('click',function () {
 			history.go(-1)
 		})
 	</script>
 </body>
 </html>
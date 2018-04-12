 <?php

 $page = './views/news.php';
        $title = 'news';
        $content = findAll();
        if(!empty($content)){
        	  usort($content, function($prev, $next){
        	return $prev['created_at'] < $next['created_at'];
        });
        }
      

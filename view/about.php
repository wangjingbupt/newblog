<?php
class ViewAbout {

	public function render($datas)
	{
		$data = $GLOBALS['DATA'];

		include(VIEW.'/header.php');
		include(VIEW.'/banner.php');
		$html =<<<HTML
		<div class="container"><div class="row-fluid"><div class = "span12">
		<p class="lead">All the monments will be lost in time,like tears in rain</p>
		<p></p>
		<p>学习、工作、生活在北京。混迹在互联网，干着技术活。ps.不会修电脑！</p>
		<p>work@Baidu Music</p>
		<p>worked@Ganji</p>
		<p>worked@Sina Blog</p>
		<p>PHP\Python\Shell\awk</p>
		<p>Mysql\Redis\Memcached\Mongodb</p>
		<p>Nginx\Apache\Lighttp\Squid</p>
		<p>最近喜欢上NLP和Network</p>
		<p></p>
		<p>北京邮电大学 遵义航天高级中学</p>
		<p>born@遵义</p>
		<p>living@北京</p>
		<p>Email: wangjingbupt@gmail.com</p>
		<p>Weibo: <a href='http://weibo.com/811161987'>@京京道听途说</a></p>
		<p></p>
		<p>业余跑步爱好者，eason fans，尤文死忠，爱音乐、爱运动。</p>
		</div></div></div>
HTML;
		echo $html;
		include(VIEW.'/footer.php');
	}


}
?>

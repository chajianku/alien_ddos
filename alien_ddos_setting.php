<?php /*
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

$s = option::pget('alien_ddos');

if (isset($_GET['ok'])) {
    echo '<div class="alert alert-success">设置保存成功</div>';
}
?>

<form action="setting.php?mod=plugin:alien_ddos" method="post">
<h1>云打狗 - 设置</h1>
使用须知：<br>
本插件用于对抗版权狗，在下方输入版权狗的网址即可（如http://www.baidu.com/）<br>
本插件可以进行DDOS攻击，请不要让它成为你的攻击工具！对除版权狗之外的网站使用将视为攻击行为！！<br>
<table class="table table-striped">
	<thead>
		<tr>
			<th style="width:30%"></th>
			<th style="width:70%"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>网址</td>
			<td><input type="text" value="<?php echo $s['url'] ?>" name="url" class="form-control" required></td>
			</tr>
		<tr>
			<td>初始值</td>
			<td><input type="text" value="<?php echo $s['data1'] ?>" name="data1" class="form-control" required></td>
		</tr>
		<tr>
			<td>结束值</td>
			<td><input type="text" value="<?php echo $s['data2'] ?>" name="data2" class="form-control" required></td>
		</tr>
</tbody>
</table>
<br/><br/><button type="submit" class="btn btn-success">保存设置</button>
</form>
<br/>开发：<a href="http://blog.superxzr.net">alien</a><br/>
审校：<a href="http://tbsign.cn">D丶L</a> & <a href="http://fyy.l19l.com">FYY</a><br/>
教程请在开发者博客中寻找！谢谢使用！

*/
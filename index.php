<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>特征库下载</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<!--<link href="https://v3.bootcss.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/alarm.js"></script>
<script type="text/javascript" src="js/sweetalert-dev.js"></script>
<link type="text/css" href="css/carousel.css" rel="stylesheet">
<link type="text/css" href="css/index.css" rel="stylesheet">
</head>
<?php
function diffBetweenTwoDays ($day1, $day2) //比较两个日期的相差时间，返回相差天数
{
  $second1 = strtotime($day1);
  $second2 = strtotime($day2);
    
  if ($second1 < $second2) {
    $tmp = $second2;
    $second2 = $second1;
    $second1 = $tmp;
  }
  return ($second1 - $second2) / 86400;
}

function shownew($updatedate) //显示红色new标签，updatedate为通知更新时间，格式为xxxx-xx-xx，如2018-09-18
{
	$thisdate = date('Y-m-d');
	$diff = diffBetweenTwoDays($updatedate, $thisdate);
	if( $diff <= 7 )
	{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='label label-danger'>new</span>";
	}
}
?>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:360px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        <li data-target="#myCarousel" data-slide-to="5" class=""></li>
		<li data-target="#myCarousel" data-slide-to="6" class=""></li>
      </ol>
      <div class="carousel-inner " role="listbox" style="height:360px;">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption caption_self">
              <h1>IMS更新啦(2020-04-11)</h1>
              <p>IMS更新公告(2.0.14)(2020-04-11)</p>
			  <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm10">查看详细</span></a></p>
            </div>
          </div>
        </div>
		<div class="item">
          <div class="container">
            <div class="carousel-caption caption_self">
              <h1>IMS更新啦(2019-11-04)</h1>
              <p>IMS更新公告(2.0.10)(2019-11-04)</p>
              <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm9">查看详细</span></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption caption_self">
              <h1>32位版本切换第四代特征库公告(2019-04-19)</h1>
              <p>2019年的32位版本已经切换至第四代特征库，2019年之前的版本仍然使用第二代特征库，望周知</p>
              <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm7">查看详细</span></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption  caption_self">
              <h1>IMS更新啦(2019-01-04)</h1>
              <p>IMS更新公告(2.0.6)(2019-01-04)</p>
              <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm4">查看详细</span></a></p>
            </div>
          </div>
        </div>
		<div class="item">
          <div class="container">
            <div class="carousel-caption  caption_self">
              <h1>IMS更新啦(2018-09-19)</h1>
              <p>IMS更新公告(2.0.4)(2018-09-19)</p>
			  <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm3">查看详细</span></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption  caption_self">
              <h1>特征库更新说明(2018-07-01)</h1>
              <p>一般计划每周五更新，遇节假日顺延</p>
              <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm1">查看详细</span></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption  caption_self">
              <h1>第二代特征库和第四代的说明(2018-07-01)</h1>
              <p>由于应用层特征不断增加，协议ID 数量已经超出2048条，加上历史原因，32位仅支持2048个协议ID，64位支持4096个ID </p>
              <p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button"><span id="alarm2">查看详细</span></a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container container_self marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3">
          <img class="img-circle img_size" src="images/gen2.png" alt="Generic placeholder image">
          <h2>第二代特征库</h2>
		<table class="table table-hover">
			<tbody><tr><td>适用于2019年以前的上网行为管理和防火墙版本</td></tr>
			<?php
				$user_path = './featurefile/';
				$filename=scandir($user_path);	//扫描目录，并且读取目录文件名
				rsort($filename);
				$lastmonth = 0;
				$thisdate = date('Y-m-d');
				foreach($filename as $name){
					$gen = substr($name,0,9);
					if($gen == "特征库"){
						$year = substr($name,17,4);
						$month = substr($name,22,2);
						$day = substr($name,25,2);
						$Date = "{$year}-{$month}-{$day}"; //因为diffBetweenTwoDays函数要求格式为xxxx-xx-xx，如2018-09-18，但是文件名中格式为2018.09.16，所以需要分别提取年月日，然后进行格式化
						$diff = diffBetweenTwoDays($Date, $thisdate);
						if($name=='.' || $name=='..'  ) continue;	//跳过“.”和“..”两个目录
						$url = $user_path.$name;
						if( $diff < 94 )
						{
							if ( $month != $lastmonth )
							{
								$lastmonth = $month;
								echo "<tr><td>{$year}年{$month}月</td></tr>";
							}
							echo "<tr><td><span class='glyphicon glyphicon-file' aria-hidden='rue'></span>&nbsp;<a href='{$url}' download>{$name}</a>";
							if( $diff < 7 ) //如果发布时间在7天内，则显示红色new标签，表示新发布
							{
								echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='label label-danger'>new</span></td></tr>";
							}else{
								echo "</td></tr>";
							}
						}
					}
				}
				?>
				<!--<td>
					<span class="glyphicon glyphicon-link" aria-hidden="rue"></span>
					<a href="javascript:void(0)"  style="color:#5a5a5a;">特征库2.5.6.2-2020.04.10.zip</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class='label label-danger'>new</span>
				</td>-->
				<tr><td></td></tr>
		</tbody></table>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle img_size" src="images/gen4.png" alt="Generic placeholder image">
          <h2>第四代特征库</h2>
		<table class="table table-hover">
			<tbody><tr>
				<td>
					适用于2019年之后的上网行为管理和防火墙版本
				</td>
			</tr>
			<?php
				$lastmonth = 0;
				foreach($filename as $name){
					$gen = substr($name,0,9);
					if($gen == "第四代"){
						$year = substr($name,26,4);
						$month = substr($name,31,2);
						$day = substr($name,34,2);
						$Date = "{$year}-{$month}-{$day}"; //因为diffBetweenTwoDays函数要求格式为xxxx-xx-xx，如2018-09-18，但是文件名中格式为2018.09.16，所以需要分别提取年月日，然后进行格式化
						$diff = diffBetweenTwoDays($Date, $thisdate);
						if($name=='.' || $name=='..' ) continue;	//跳过“.”和“..”两个目录
						$url = $user_path.$name;
						if( $diff < 94 )
						{
							if ( $month != $lastmonth )
							{
								$lastmonth = $month;
								echo "<tr><td>{$year}年{$month}月</td></tr>";
							}
							echo "<tr><td><span class='glyphicon glyphicon-file' aria-hidden='rue'></span>&nbsp;<a href='{$url}' download>{$name}</a>";
							if( $diff < 7 ) //如果发布时间在7天内，则显示红色new标签，表示新发布
							{
								echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='label label-danger'>new</span></td></td>";
							}else{
								echo "</td></tr>";
							}
						}
					}
				}
			?>
			<tr><td></td></tr>
		</tbody></table>
          <!--<p><a class="btn btn-default" href="#" role="button">复制</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle img_size" src="images/firewall.png" alt="Generic placeholder image">
          <h2>防火墙特征库</h2>
		<table class="table table-hover">
			<tbody><tr>
				<td>
				IPS4特征库适用于新防火墙版本
				</td>
			</tr>
			<?php
				$lastmonth = 0;
				foreach($filename as $name){
					$gen = substr($name,0,9);
					if($gen == "防火墙"){
						$year = substr($name,26,4);
						$month = substr($name,31,2);
						$day = substr($name,34,2);
						$Date = "{$year}-{$month}-{$day}"; //因为diffBetweenTwoDays函数要求格式为xxxx-xx-xx，如2018-09-18，但是文件名中格式为2018.09.16，所以需要分别提取年月日，然后进行格式化
						$diff = diffBetweenTwoDays($Date, $thisdate);
						if($name=='.' || $name=='..' ) continue;	//跳过“.”和“..”两个目录
						$url = $user_path.$name;
						if( $diff < 94 )
						{
							if ( $month != $lastmonth )
							{
								$lastmonth = $month;
								echo "<tr><td>{$year}年{$month}月</td></tr>";
							}
							echo "<tr><td><span class='glyphicon glyphicon-file' aria-hidden='rue'></span>&nbsp;<a href='{$url}' download>{$name}</a>";
							if( $diff < 7 ) //如果发布时间在7天内，则显示红色new标签，表示新发布
							{
								echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='label label-danger'>new</span></td></td>";
							}else{
								echo "</td></tr>";
							}
						}
					}
				}
			?>
			<tr><td></td></tr>
		</tbody></table>
        </div> <!--.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle img_size" src="images/iot.png" alt="Generic placeholder image">
          <h2>物联网特征库</h2>
		<table class="table table-hover">
			<tbody><tr>
				<td>
				适用于视频网关版本
				</td>
			</tr>
			<?php
				$lastmonth = 0;
				foreach($filename as $name){
					$gen = substr($name,0,9);
					if($gen == "物联网"){
						$year = substr($name,26,4);
						$month = substr($name,31,2);
						$day = substr($name,34,2);
						$Date = "{$year}-{$month}-{$day}"; //因为diffBetweenTwoDays函数要求格式为xxxx-xx-xx，如2018-09-18，但是文件名中格式为2018.09.16，所以需要分别提取年月日，然后进行格式化
						$diff = diffBetweenTwoDays($Date, $thisdate);
						if($name=='.' || $name=='..' ) continue;	//跳过“.”和“..”两个目录
						$url = $user_path.$name;
						if( $diff < 94 )
						{
							if ( $month != $lastmonth )
							{
								$lastmonth = $month;
								echo "<tr><td>{$year}年{$month}月</td></tr>";
							}
							echo "<tr><td><span class='glyphicon glyphicon-file' aria-hidden='rue'></span>&nbsp;<a href='{$url}' download>{$name}</a>";
							if( $diff < 7 ) //如果发布时间在7天内，则显示红色new标签，表示新发布
							{
								echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='label label-danger'>new</span></td></td>";
							}else{
								echo "</td></tr>";
							}
						}
					}
				}
			?>
			<tr><td></td></tr>
        </div> <!--.col-lg-4 -->
      </div><!-- /.row -->



    </div><!-- /.container -->
    <script src="js/holder.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 
</body></html>
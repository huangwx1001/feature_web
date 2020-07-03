function alarm(title,text){
	swal({ 
		  title: title,
		  text: text, 
		  html: true 
	});
}
$(document).ready(function(){
	$("#alarm1").click(function(){
		title = "特征库说明";
		text = "<p style='text-align:left'>1).一般计划每周五更新，遇节假日顺延 <br />2).网站只保留最近3个月左右的特征库<br />3).网站有问题请联系技术支持<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810</p>";
		alarm(title,text);
	});
	$("#alarm2").click(function(){
		title = "第二代特征库和第四代的说明";
		text = "<p style='text-align:left'>1).由于应用层特征不断增加，协议ID 数量已经超出2048条，加上历史原因，32位仅支持2048个协议ID，64位支持4096个ID <br />2).32位上网行为管理做了保护，在原有协议ID上维护更新特征，不再新增协议，新增的协议只在64位特征库上体现<br /><br />基于以上原因将32位和64位上网行为管理的特征区分开来<br />1).32位继续沿用第2代特征库-NACII-FEATURE-LIB_x.x.x.x.bin<br />2).64位使用第4代特征库-NACIV-FEATURE-LIB.bin，64位的版本号从2.1.1开始，升级过2.1.1的版本，需要升级第四代特征库-NACIV-FEATURE-LIB.bin<br /><br />其他补充：<br />1).arm/MIPS		沿用第2代特征库<br />2).下一代防火墙 		使用第4代特征库<br />3).URL库还是通用的</p>";
		alarm(title,text);
	});
	$("#alarm5").click(function(){
		title = "紧急通知";
		text = "<p style='text-align:left'>因为上周(2019.01.04)发布的特征库会影响小部分版本，所以现在紧急更新特征库，敬请及时更新至最新的特征库。<br />如有疑问请联系技术支持：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810<br />给您工作造成困扰，深感抱歉</p>";
		alarm(title,text);
	});
	$("#alarm6").click(function(){
		title = "暂停更新公告";
		text = "<p style='text-align:left'>春节期间将暂停特征库更新，预计2月15号恢复常规更新，祝大家新春快乐<br />如有疑问请联系技术支持：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810<br />给您工作造成困扰，深感抱歉</p>";
		alarm(title,text);
	});
	$("#alarm7").click(function(){
		title = "32位版本切换第四代特征库公告";
		text = "<p style='text-align:left'>2019年的32位版本已经切换至第四代特征库，2019年之前的版本仍然使用第二代特征库，望周知<br />如有疑问请联系技术支持：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810<br />给您工作造成困扰，深感抱歉</p>";
		alarm(title,text);
	});
		$("#alarm10").click(function(){
		title = "IMS更新公告(2.0.14)";
		text = "<p style='text-align:left'>IMS(2.0.14)插件已更新，<a href='IMS/IMS_2.0.14.zip'>自助下载</a><br />有疑问请联系技术支持：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810</p>";
		alarm(title,text);
	});
	$("#alarm11").click(function(){
		title = "IMS更新公告(2.0.15)";
		text = "<p style='text-align:left'>IMS(2.0.15)插件已更新，<a href='IMS/IMS_2.0.15.zip'>自助下载</a><br />有疑问请联系技术支持：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810</p>";
		alarm(title,text);
	});
	$("#alarm12").click(function(){
		title = "IMS更新公告(2.0.17)";
		text = "<p style='text-align:left'>IMS(2.0.17)插件已更新，<a href='IMS/IMS_2.0.17.zip'>自助下载</a><br />有疑问请联系技术支持：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：3167547033<br />&nbsp;&nbsp;&nbsp;&nbsp;E-mail：3167547033@qq.com<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel：0755-26996805-810</p>";
		alarm(title,text);
	});
	$("#alarm13").click(function(){
		title = "第五代特征库上线啦";
		text = "<p style='text-align:left'>1)第五代特征库采用全新架构，应用识别更加精细化 <br />2)2.1.6p0或以上版本必须使用第五代特征库<br /><br />其他补充：<br />1)arm/MIPS沿用第2代特征库<br />2)2.1.5p2以及以下版本使用第四代特征库<br />3)URL库还是通用的</p>";
		alarm(title,text);
	});
});
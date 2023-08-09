<?php

return array(
	'administration tool desc test_mail_settings' => '使用这个简单的工具发送测试电子邮件，检查 '.product_name().' mailer 是否配置良好',
	'config category desc general' => '常规 '.product_name().' 设置.',
	'config category desc mailing' => '使用这些设置可以设置 '.product_name().' 应如何处理电子邮件发送。您可以使用php.ini中提供的配置选项，也可以将其设置为使用任何其他SMTP服务器。',
    'config category desc modules' => '使用这些设置可以启用或禁用 '.product_name().' 模块。禁用模块只会在图形界面中隐藏它。它不会删除用户创建或编辑内容对象的权限。',
    'config option desc theme' => '使用主题可以更改 '.product_name().'的默认外观。需要刷新才能生效。',
    'config option desc upgrade_check_enabled' => '如果是，系统将每天检查一次是否有新版本的 '.product_name().' 可供下载',
    'cron events info' => 'Cron计划事务允许您定期执行 '.product_name().' 中的任务，而无需登录系统。要启用cron事件，您需要配置一个cron作业来定期执行位于 '.product_name().' 根目录下的\'cron.php\' 文件。运行cron作业的周期性将决定运行这些cron事件的粒度。例如，如果将cron作业配置为每五分钟运行一次，并且将cron事件配置为每一分钟检查一次升级，则它将只能每五分钟检查一次升级。要了解如何配置cron作业，请询问您的系统管理员或托管提供商。',
    'cron event desc check_upgrade' => 'This cron event will check for new versions of '.product_name().'.',
  	'cron event desc send_notifications_through_cron' => '如果启用此事务，则电子邮件通知将通过cron发送，而不是在由 '.product_name().'生成时发送。',
  	'cron event name export_google_calendar' => '导出 '.product_name().'',
  	'cron event desc export_google_calendar' => '此cron事务将在 '.product_name().' 中查找要导出到Google日历的事务。',
  	'manual upgrade desc' => '若要手动升级 '.product_name().' 您必须下载新版本的 '.product_name().', 将其提取到安装的根目录，然后转到浏览器中的 <a href=\'public/upgrade\'>\'public/upgrade\'</a> 进行升级系统。',
  	'user config option desc root_dimensions' => '选中每个框，以便在访问 '.product_name().'时显示每个维度的树小部件。',
  	'config option name sent_mails_sync' => '从 '.product_name().'发送电子邮件时启用IMAP同步',
	
	'click sincronizar' => '如果您希望 '.product_name().' 将事务与谷歌日历同步，请单击此处',
	'feng calendar' => ''.product_name().' 日历 - {0}',
	'sync event feng' => '从 '.product_name().'同步全部事务',

	'your account created' => '您的新 '.product_name().' 帐户已创建',
    'user created your account' => '{0} 为您创建了一个新的 '.product_name().' 帐户',
    'view object and comments' => '查看 {0} 上的所有评论。 '.product_name().'',

	'will this person use feng office?' => '该人员将会用 '.product_name().'吗？',

	'add ticket desc' => '获取有关 '.product_name().'的个性化帮助或者您也可以加Q群206239089寻求爱好者的帮助。',

	'system error message' => '我们很抱歉告知您，由于一个致命错误 '.product_name().' 无法执行您的请求。系统已向管理员发送错误报告。或者您也可以加Q群206239089寻求爱好者的帮助。',
    'execute action error message' => '我们很抱歉告知您， 由于一个致命错误 '.product_name().' 无法执行您的请求。系统已向管理员发送错误报告。或者您也可以加Q群206239089寻求爱好者的帮助。',
    
	'new feng office version available' => '很高兴告知您有新版本 '.product_name().' 可供升级。 <a class=\'internalLink\' href=\'{0}\' onclick=\'{1}\'>更多详细信息</a>.',
	'upgrade is not available' => '抱歉告知您，没有新版本的 '.product_name().' 可供下载',
	'welcome to new account info' => '从现在起，您可以访问您在 {0} 上的帐户( 建议您将此链接添加为书签 ).<br/> 按照以下步骤开始使用 '.product_name().' :',
	'mark as read mails from server' => '在 '.product_name().'中接收电子邮件时，将电子邮件标记为已在电子邮件服务器中读取',
	'get read state from server' => '在 '.product_name().'中接收电子邮件时保留电子邮件状态（已读、未读）',
	'reset password' => ''.product_name().' 新密码',

	'back to fengoffice' => '返回 '.product_name().'',
	'upgrade fengoffice' => '升级 '.product_name().'',
	'upgrade your fengoffice installation' => '升级 '.product_name().' 。',
	'learn about and manage your Feng Office' => '了解并管理 '.product_name().'',
		
	'system module documents-panel hint' => product_name().' 允许您存储和共享所有类型的文档。',
	'system module mails-panel hint' => product_name().' 电子邮件是一个功能齐全、完全集成的电子邮件客户端。就像你的传统电子邮件一样，但有在 '.product_name().'中的优势。',
);

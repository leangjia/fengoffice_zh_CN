<?php

  /**
  * Error messages
  *
  * @version 1.0
  * @author Ilija Studen <ilija.studen@gmail.com>
  */

  // Return langs
  return array(
  
    // General
    'invalid email address' => '电子邮件地址格式无效',
	'error invalid recipients' => '在字段 "{0}"中发现无效的电子邮件地址: {1}',
	'no context permissions to add' => '您没有在 {1}中添加 {0} 的权限',
	'you must select where to keep' => '您必须选择保存 {0}的位置。',

    // Company validation errors
    'company name required' => '公司 / 组织名称为必填项',
    'company homepage invalid' => '主页不是有效的URL',
    
    // User validation errors
    'username value required' => '用户名是必填的',
    'username must be unique' => '所选用户名已被占用',
    'email value is required' => '邮箱地址是必填的',
    'email address must be unique' => '抱歉，选定的邮箱地址已被占用',
    'company value required' => '用户必须是公司 / 组织的一部分',
    'password value required' => '密码是必填的',
    'passwords dont match' => '密码不匹配',
    'old password required' => '旧密码是必填的',
    'invalid old password' => '旧密码无效',
    'users must belong to a company' => '人员必须属于公司才能生成用户',
    'contact linked to user' => '人员关联到用户 {0}',
  
  	// Password validation errors
  	'password invalid min length' => '密码长度必须至少为 {0} 个字符',
  	'password invalid numbers' => '密码必须至少包含 {0} 个数字字符',
  	'password invalid uppercase' => '密码必须至少包含 {0} 个大写字符',
  	'password invalid metacharacters' => '密码必须至少有 {0} 个字符',
  	'password exists history' => '密码用于最后十个密码中的一个',
  	'password invalid difference' => '密码必须与前10个密码至少有3个字符不同',
  	'password expired' => '您的密码已过期',
  	'password invalid' => '您的密码不再有效',
    
    // Avatar
    'invalid upload type' => '无效的文件类型。允许的类型为 {0}',
    'invalid upload dimensions' => '无效的图像尺寸。最大大小为 {0}x{1} 像素',
    'invalid upload size' => '无效的图像大小。最大大小为 {0}',
    'invalid upload failed to move' => '无法移动上传的文件',
    
    // Registration form
    'terms of services not accepted' => '为了创建帐户，您需要阅读并接受我们的服务条款',
    
    // Init company website
    'failed to load company website' => '未能加载网站。未找到所有者公司',
    'failed to load project' => '未能加载活动工作区',
    
    // Login form
    'username value missing' => '请输入您的用户名',
    'password value missing' => '请输入您的密码',
    'invalid login data' => '登陆失败。请检查您的输入是否正确',
    
    // Add project form
    'project name required' => '工作区的名称必填',
    'project name unique' => '工作区的名称唯一',
    
    // Add message form
    'message title required' => '标题是必填项',
    'message title unique' => '标题值在此工作区中必须唯一',
    'message text required' => '文本是必填项',
    
    // Add comment form
    'comment text required' => '文本内容是必填项',
    
    // Add milestone form
    'milestone name required' => '里程碑的名称必填',
    'milestone due date required' => '里程碑的到期日必填',
    
    // Add task list
    'task list name required' => '任务的名称必填',
    'task list name unique' => '任务的名称值在此工作区中必须唯一',
    'task title required' => '任务标题为必填项',
  
    // Add task
    'task text required' => '任务文本是必需的',
	'repeat x times must be a valid number between 1 and 1000' => '重复X次必须是介于1和1000之间的有效数字。',
	'repeat period must be a valid number between 1 and 1000' => '重复周期必须是介于1和1000之间的有效数字。',
  	'to repeat by start date you must specify task start date' => '若要按开始日期重复，必须指定任务开始日期',
	'to repeat by due date you must specify task due date' => '若要按截止日期重复，必须指定任务截止日期',
	'task cannot be instantiated more times' => '任务不能再实例化多次，这是最后一次重复。',
	
    // Add event
    'event subject required' => '事务主题为必填项',
    'event description maxlength' => '描述必须少于3000个字符',
    'event subject maxlength' => '主题必须少于100个字符',
    
    // Add project form
    'form name required' => '表单名称是必填项',
    'form name unique' => '表单名称必须唯一',
    'form success message required' => '需要成功说明',
    'form action required' => '表单动作是必须的',
    'project form select message' => '请选择一个便签',
    'project form select task lists' => '请选择一个任务',
    
    // Submit project form
    'form content required' => '请在文本字段中插入内容',
    
    // Validate project folder
    'folder name required' => '文件夹名称是必填项',
    'folder name unique' => '此工作区中的文件夹名称必须唯一',
    
    // Validate add / edit file form
    'folder id required' => '请选择一个文件夹',
    'filename required' => '文件名是必填项',
  	'weblink required' => '链接的URL地址是必填项',
    
    // File revisions (internal)
    'file revision file_id required' => '修订版需要与文件关联',
    'file revision filename required' => '文件名是必填项',
    'file revision type_string required' => '未知文件类型',
    'file revision comment required' => '修订意见是必填项',
    'there are no changes' => '啥也没干：未进行任何更改。文档尚未被覆盖。',
    
    // Test mail settings
    'test mail recipient required' => '收件人地址是必填项',
    'test mail recipient invalid format' => '无效的收件人地址格式',
    'test mail message required' => '邮件内容是必填项',
    
    // Mass mailer
    'massmailer subject required' => '消息主题为必填项',
    'massmailer message required' => '消息正文为必填项',
    'massmailer select recepients' => '请选择将接收此电子邮件的用户',
    
  	//Email module
  	'mail account name required' => '账户名称是必填项',
  	'mail account id required' => '账户 Id 是必填项',
  	'mail account server required' => '服务器是必填项',
  	'mail account password required' => '密码是必填项',
	'send mail error' => '发送邮件时出错。可能是错误的SMTP设置。',
    'email address already exists' => '该电子邮件地址已在使用中。',
  
  	'session expired error' => '由于用户不活动，会话已过期。请重新登录',
  	'unimplemented type' => '未实现类型',
  	'unimplemented action' => '未实现动作',
  
  	'workspace own parent error' => '工作区不能是自己的父工作区',
  	'task own parent error' => '任务不能是自己的父任务',
  	'task child of child error' => '任务不能是其子任务的子任务',
  
  	'chart title required' => '图表标题是必填项',
  	'chart title unique' => '图表标题必须唯一。',
    'must choose at least one workspace error' => '必须至少选择一个放置对象的工作区。',
    
    
    'user has contact' => '必须至少选择一个放置对象的工作区。',
    
    'maximum number of users reached error' => '已达到最大用户数',
	'maximum number of users exceeded error' => '已超过最大用户数。在解决此问题之前，应用程序将无法再工作。',
	'maximum disk space reached' => '您的磁盘配额已满。在尝试添加新对象之前，请删除一些对象，或者与支持人员联系以启用更多用户。',
    'name must be unique' => '抱歉，所选名称已被占用',
  	'not implemented' => '未执行',
  	'return code' => '返回代码: {0}',
  	'task filter criteria not recognised' => '任务筛选条件 \'{0}\'无法识别 ',
  	'mail account dnx' => '邮件帐户不存在',
    'error document checked out by another user' => '该文档已由另一个用户checked out签出。',
  	//Custom properties
  	'custom property value required' => '{0} 是必填项',
  	'value must be numeric' => ' {0}的值必须是数字',
  	'values cannot be empty' => ' {0}的值不能为空',
  
  	//Reports
  	'report name required' => '报表名称是必填项',
  	'report object type required' => '报表对象类型是必填项',

  	'error assign task user dnx' => '正在尝试分配给不存在的用户',
	'error assign task permissions user' => '您没有权限为该用户分配任务',
	'error assign task company dnx' => '试图分配给一个不存在的公司',
	'error assign task permissions company' => '您没有向该公司分配任务的权限',
  	'account already being checked' => '账户已检查过了。',
  	'no files to compress' => '没有要压缩的文件',
	'error cannot assign task to user' => '{0} 不能是 {1}的任务助理。',
  
  	//Subscribers
  	
  	'cant modify subscribers' => '无法修改订阅者',
  	'this object must belong to a ws to modify its subscribers' => '此对象必须属于工作区才能修改其订阅者。',

  	'mailAccount dnx' => '电子邮件帐户不存在',
  	'error add contact from user' => '无法从用户中添加人员。',
  	'zip not supported' => '服务器不支持ZIP',
  	'no tag specified' => '未指定标记',
  
    'no mailAccount error' => '操作不可用。您没有添加电子邮件帐户。',
	'content too long not loaded' => '以前的电子邮件内容太长，未加载，但将与此电子邮件一起发送。',
  	'member name already exists in dimension' => '所选维度中已存在成员 \'{0}\' 。',  
	'must choose at least one member of' => '请选择 {0}的成员。',
	'timeslot dnx' => 'Timeslot does not exist',
	'you dont have permissions to classify object in member' => '您没有权限对 \'{1}\'中的 \'{0}\' 进行分类',
  
  	'uploaded file bigger than max upload size' => '您正在尝试上传的文档超过了当前上载大小限制 {0}.',
  	'date format error' => '键入截止日期或开始日期时出错，正确的日期格式为 "{0}", 请使用此格式或在您的帐户首选项中更改它。',
  	
  	'upload error msg UPLOAD_ERR_INI_SIZE' => '上传的文件大小超过了最大上传大小 ({0})。',
  	'upload error msg UPLOAD_ERR_FORM_SIZE' => '上传的文件大小超过了最大上传大小 ({0})。',
  	'upload error msg UPLOAD_ERR_PARTIAL' => '上传的文件已部分上传。',
  	'upload error msg UPLOAD_ERR_NO_FILE' => '无法上传任何文件。',
  	'upload error msg UPLOAD_ERR_NO_TMP_DIR' => '无法上传任何文件，缺少临时文件夹。',
  	'upload error msg UPLOAD_ERR_CANT_WRITE' => '无法将文件写入磁盘。',
  	'upload error msg UPLOAD_ERR_EXTENSION' => '一个PHP扩展程序停止了文件上传。',

    'you cannot edit invoiced time entry' => '您不能编辑已开票的时间分录',
    'you cannot delete invoiced time entry' => '您不能删除已开票的时间分录',
    'you cannot edit invoiced actual expense' => '您不能编辑已开票的实际费用',
    'you cannot delete invoiced actual expense' => '您不能删除已开票的实际费用',
    'you cannot untrash invoice' => '无法取消发票的追踪',

  	
  	'failed to authenticate email account' => '无法验证电子邮件帐户',
  	'failed to authenticate email account desc' => '无法对帐户 "{0}" 进行身份验证以发送通知，请确保该帐户的用户名和密码正确无误。',
  		
  	'you cant add member without security permissions' => '您不能在不指定位置的情况下添加 {0} 因为您无法管理权限。请选择放置 {0} 的位置，以便可以继承权限。',
  
    'token external key value required' => 'Key 必填项',
    'token external name value required' => '名称必填项',
    'token external type value required' => '类型必填项',
  	'you dont have permissions to add this object in members' => '您没有在 {1} 中添加此 {0} 的权限',
    'please provide input for repeat times' => '请为重复次数输入提供一个数字',
    'please provide date for repeat until' => '请提供重复输入的日期'
  ); // array

?>
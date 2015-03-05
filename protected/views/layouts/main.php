<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	
	
	
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/te_eng.jpg" type="image/x-icon" /> 
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'South Nation Park Travel',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
	array(
		'class'=>'bootstrap.widgets.TbMenu',
		'items'=>array(

		array('label'=>'หน้าหลัก','icon'=>'home', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'หน้าหลัก','icon'=>'home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
array('label'=>'การจัดการข้อมูล','icon'=>'asterisk','items'=> array(
array('label'=>'จังหวัด','icon'=>'list', 'url'=>array('/province/admin'), 'visible'=>!Yii::app()->user->isGuest),
array('label'=>'อุทยานแห่งชาติ','icon'=>'list', 'url'=>array('/dataSouthnationpark/admin'), 'visible'=>!Yii::app()->user->isGuest),
array('label'=>'ประเภทอุทยานแห่งชาติ','icon'=>'list', 'url'=>array('/category/admin'), 'visible'=>!Yii::app()->user->isGuest),
),
),
		
		//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
		//array('label'=>'Contact', 'url'=>array('/site/contact')),
		array('label'=>'เข้าสู่ระบบ','icon'=>'lock', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'ออกจากระบบ ('.Yii::app()->user->name.')','icon'=>'lock', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
),
),
),
		)); ?>
	</div><!-- mainmenu -->
<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink' => CHtml::link('หน้าแรก', Yii::app()->homeUrl),
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		
		www.nationparktravel.ictte-project.com
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

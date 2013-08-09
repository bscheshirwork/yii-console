<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
app\config\AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title><?php echo Html::encode($this->title); ?></title>
	<?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="container">
	<div class="masthead">
		<h3 class="text-muted">My Company</h3>

		<?php echo Menu::widget(array(
			'options' => array('class' => 'nav navbar-nav nav-justified'),
			'items' => array(
				array('label' => 'Home', 'url' => array('/site/index')),
				array('label' => 'About', 'url' => array('/site/about')),
				array('label' => 'Contact', 'url' => array('/site/contact')),
				Yii::$app->user->isGuest ?
					array('label' => 'Login', 'url' => array('/site/login')) :
					array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
			),
		)); ?>
	</div>

	<?php echo Breadcrumbs::widget(array(
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : array(),
	)); ?>
	<?php echo $content; ?>

	<div class="footer">
		<p>&copy; My Company <?php echo date('Y'); ?></p>
		<p>
			<?php echo Yii::powered(); ?>
			Template by <a href="http://twitter.github.io/bootstrap/">Twitter Bootstrap</a>
		</p>
	</div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>

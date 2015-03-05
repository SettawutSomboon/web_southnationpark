<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'data-southnationpark-form',
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>



<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'park_name',array('class'=>'span5','maxlength'=>100)); ?>
	
	<?php echo $form->labelEx($model,'general'); ?>
	<?php echo $form->textArea($model, 'general', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>
	
	<?php echo $form->labelEx($model,'topography'); ?>
	<?php echo $form->textArea($model, 'topography', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

	<?php echo $form->labelEx($model,'climate'); ?>
	<?php echo $form->textArea($model, 'climate', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

	<?php echo $form->labelEx($model,'plant'); ?>
	<?php echo $form->textArea($model, 'plant', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

	<?php echo $form->labelEx($model,'animal'); ?>
	<?php echo $form->textArea($model, 'animal', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

		<br />
			<br />	
		
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->image,'',array('width'=>200,'height'=>200));?>
		
	
			<br />
	
		
		<br />
		<?php //echo CHtml::image(encode($model->image, array('width'=>120,'height'=>150)));?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
<br />
<br />
	<?php echo $form->labelEx($model,'address'); ?>
	<?php echo $form->textArea($model, 'address', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>
	
	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>10)); ?>
	

	<?php echo $form->textFieldRow($model,'latitude',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'longtitude',array('class'=>'span5')); ?>
	

	<?php echo $form->labelEx($model,'province_id'); ?>
	<?php echo $form->dropDownList($model,'province_id',CHtml::listData(Province::model()->findAll(),'id','province_name'),
				array('prompt'=>'เลือก จังหวัด'),array('class'=>'span5')); ?>
	
	<?php echo $form->labelEx($model,'category_id'); ?>
	<?php echo $form->dropDownList($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','category_name'),
				array('prompt'=>'เลือก ประเภทอุทยาน'),array('class'=>'span5')); ?>


	<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'บันทึก')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'รีเซ็ต')); ?>
		</div>

<?php $this->endWidget(); ?>

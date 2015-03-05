<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'อุทยาน'=>array('admin'),
		$model->park_name,
);


$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
array('label'=>'เพิ่มอุทยานแห่งชาติ','url'=>array('create')),
array('label'=>'แก้ไขอุทยานแห่งชาติ','url'=>array('update','id'=>$model->id)),
array('label'=>'ลบอุทยานแห่งชาติ','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')),
array('label'=>'รายการอุทยานแห่งชาติ','url'=>array('admin')),
);
?>

<h1>รายละเอียด</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'park_name',
		'category.category_name',
		array(
		'name'=>'image',
		'type'=>'html',
		'value'=>($model->image)?CHtml::image(
				Yii::app()->request->baseUrl.'/images/'
				.$model->image,'',
				array('width'=>600,'height'=>350)):CHtml::image(
						Yii::app()->request->baseUrl.'/images/noimage.jpg'
						,'',array('width'=>600,'height'=>350)),
		), // show image on view
		'general',
		'topography',
		'climate',
		'plant',
		'animal',

		'address',
		'phone',
		'province.province_name',
		'latitude',
		'longtitude',
		
		
),
)); ?>

<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>
  <script src="jquery.js"></script> 

<script>
$(document).ready(function() {

var lat = $('#latitude').val();
var long = $('#longtitude').val();

//alert(lat+" | "+long);
var myCenter = new google.maps.LatLng(lat, long);

function initialize()
{
    var mapProp = {
        center: myCenter,
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
    });

    marker.setMap(map);
    var t =  '<?php echo $model->park_name; ?>';

    var infowindow = new google.maps.InfoWindow({
        content: t
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

});
</script>
</head>

<body>
<input type="hidden" id="latitude" value="<?php echo $model->latitude; ?>"></input>                       
<input type="hidden" id="longtitude" value="<?php echo $model->longtitude; ?>"></input>
<div id="googleMap" style="width:750px;height:380px;"></div>
</body>
</html>
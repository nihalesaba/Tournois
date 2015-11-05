<?php

class form 
{
	public static function beginform()
	{
		

		echo '"<form class="form-horizontal" data-toggle="validator" role="form" method="post" >"';
		echo '<fieldset>';
	}
	public static function endform()
	{
		echo '</fieldset>';
		echo '</form>';
	}

	public static function radio($name, $options)
	{
		
	}
	
	public static function select($name, $options)
	{
		
	}
	


	public static function input($options)
	{

		echo '<div class="form-group">';
		echo '<label class="col-md-4 control-label" >'.$options["label"].'</label>';
		echo ' <div class="col-md-4">';
		$tag='<input name="'.$options["name"].'" type="'.$options["type"].'" class="form-control" id="'.$options["name"].'" placeholder="'.$options["placeholder"].'" data-error="'.$options["$error"].'" class="form-control input-md"';
    	if ($options["required"]==true) $tag=$tag."required ";
    	if (!empty($options["value"])) $tag=$tag."value='".$options["value"]."'";
    	$tag=$tag."/>";
    	echo  $tag;
  		echo '<div class="help-block with-errors"></div></div> </div>';
	}
	

	public static function submitbuttons()
	{
		echo'
		<div class="form-group">
			  <label class="col-md-4 control-label" for="singlebutton"></label>
			  <div class="col-md-4">
			    <button type="reset" id="singlebutton" class="btn btn-danger">Réinitialiser</button>
			    <button type="submit" id="singlebutton" class="btn btn-primary">Soumettre</button>
			  </div>
		</div>
		';
	}
	
	public static function alert($type,$message)
	{
		$alert= '<div class="alert alert-'.$type.'"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$message.'</div>';

		return $alert;
	}
}

?>
<?php
/**
 * Timestamp Field Type.
 *
 * File:  PERCH_PATH/addons/fieldtypes/timestamp/timestamp.class.php
 * Usage: <perch:content id="timestamp" type="timestamp" suppress="true" />
 * @author Monty Lewis
 **/
class PerchFieldType_timestamp extends PerchFieldType
{ 
	 public function render_inputs($details = array())
	 {
	 	$attrs = '';
	 	$attrs .= 'disabled="disabled" '; 
	 	$t = $this->Form->text($this->Tag->input_id(), $this->Form->get($details, $this->Tag->id(), $this->Tag->default(), $this->Tag->post_prefix()), $this->Tag->size(), $this->Tag->maxlength(), 'timestamp', $attrs);

	 	return $t;
    }

	public function get_raw($post=false, $Item=false)
	{	
		$id = $this->Tag->id();

		if ($post===false)
		{
			$post = $_POST;
			$timestamp = new DateTime();
			$timestamp = $timestamp->format('Y-m-d H:i:s');
		}

		$timestamp = '';

		$timestamp = new DateTime();
		$timestamp = $timestamp->format('Y-m-d H:i:s');

		return $timestamp;
	}
}

<?php 


/**
 * 
 */
class Form
{
	public  function begin($action,$method, array $callback = [ ])
	{
		$form = "<form ";
		$form .= "action='".$action."' ";
		$form .= "method='".$method."' ";
		foreach ($callback as $key =>$value ) {
			$form .=  $key."='".$value."' ";
		}
		$form .= '><br>';
		echo  $form;
	}
	public function textInput($name,array $callback = [ ])
	{
		$input = "<input type='text' ";
		$input .= "name='".$name."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;

	}
	public function passwordInput($name,array $callback = [ ])
	{
		$input = "<input type='password' ";
		$input .= "name='".$name."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;

	}
	public function emailInput($name,array $callback = [ ])
	{
		$input = "<input type='email' ";
		$input .= "name='".$name."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;

	}
	public function numberInput($name,array $callback = [ ])
	{
		$input = "<input type='number' ";
		$input .= "name='".$name."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;

	}
	public function dateInput($name,array $callback = [ ])
	{
		$input = "<input type='date' ";
		$input .= "name='".$name."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;

	}
	public function textarea($name, array $callback = [ ])
	{
		$textarea = "<textarea ";
		$textarea .= "name='".$name."'";
		foreach ($callback as $key => $value) {
			$textarea .= $key."='".$value."' >";
		}
		$textarea .= "</textarea><br>";
		return $textarea;
	}
	public function checkbox($name,$value, array $callback = [ ])
	{
		$input = "<input type='checkbox' ";
		$input .= "name='".$name."'";
		$input .= "value='".$value."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;
	}
	public function radio($name,$value, array $callback = [ ])
	{
		$input = "<input type='radio' ";
		$input .= "name='".$name."'";
		$input .= "value='".$value."'";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;
	}
	public function submitInput($value,$name, array $callback = [ ])
	{
		$input = "<input type='submit' ";
		$input .= "name='".$name."' ";
		$input .= "value='".$value."' ";

		foreach ($callback as $key => $value) {
			$input .= $key."='".$value."' ";
		}
		$input .= "><br>";
		return $input;
	}
	public function submitButton($value,$name, array $callback = null)
	{
		$input = "<button ";
		if ($callback !== null) {
			$input .= "name='".$name."' ";

			foreach ($callback as $key => $value) {
				$input .= $key."='".$value."' >>";
			}
		}
		else
		{
		$input .= "name='".$name."' >";

		}
		
		$input .= $value."</button><br>";
		return $input;	
	}
	public function end()
	{
		echo '</form>';
	}
}
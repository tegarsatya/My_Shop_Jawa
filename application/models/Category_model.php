<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{


	public function getDefaultValues()
	{
		return [
			'id'	=>'',
			'slug'	=>'',
			'title'	=>'',
		];
	}

	public function getValidationRules(){

		$validationRules	= 
		[
			[
				'file'		=>'slug',
				'label'		=>'Slug',
				'rules'		=>'tim|required|callback_unique_slug',
			],
			[
				'file'		=>'title',
				'label'		=>'Title',
				'rules'		=>'trim|required',
			],
		];
		return $validationRules;
	}
}

/* End of file Category_model.php */

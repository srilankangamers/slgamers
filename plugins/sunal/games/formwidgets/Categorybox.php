<?php namespace Sunal\Games\FormWidgets;
use Backend\Classes\FormWidgetBase;
use Config;
use Sunal\Games\Models\Category;



class CategoryBox Extends FormWidgetBase
{
	public function widgetDetails()
	{

		return [
			'name' => 'CategoryBox',
			'description' => 'Add Categoies'

		];

	}

	public function render()
	{
		$this->prepareVars();
		//dump($this->vars['id']);
		return $this->makePartial('widget');

	}

	public function prepareVars()
	{
		$this->vars['id'] = $this->model->id;
		$this->vars['categories'] = Category::all()->lists('category','id');
		$this->vars['name'] = $this->formField->getName().'[]';
		if (!empty($this->getLoadValue())) {
			$this->vars['selectedValues'] = $this->getLoadValue();
		} else {

			$this->vars['selectedValues'] = [];
		}
}
	public function getSaveValue($categories)
	{
		$newArray = [];

		foreach ($categories as $categoryID) {
			if (!is_numeric($categoryID)) {
				$newCategory = new Category;
				$categoryName = explode(' ', $categoryID);
				$newCategory->category = $categoryName[0];
				$newCategory->save();
				$newArray[] = $newCategory->id;
			} else {

				$newArray[] = $categoryID;
			}
		}
		return $newArray;
		
	}
		



	

	public function loadAssets()
	{
		$this->addCss('css/select2.min.css');
		$this->addJs('js/select2.min.js');

	}
}	

 ?>
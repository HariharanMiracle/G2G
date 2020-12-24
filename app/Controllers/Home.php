<?php namespace App\Controllers;

use App\Models\EmployeeModel;

class Home extends BaseController
{
	public function index()
	{
		$employeeModel = new EmployeeModel();
		$data['employee'] = $employeeModel->where('picked','0')->orderBy('name', 'ASC')->findAll();
		return view('employees', $data);
	}

	public function test(){
		return view('test');
	}

	public function test1(){
		$employeeModel = new EmployeeModel();
		$data['employee'] = $employeeModel->where('picked','0')->orderBy('name', 'ASC')->findAll();
		
		$data['namesList'] = count($data['employee']) - 1;
		$random = rand(0, $data['namesList']);
		$data['name'] = $data['employee'][$random]['name'];

		$id = $data['employee'][$random]['id'];
		echo 'id => '.$id;
		$employeeData = [
			'picked' => '1',
		];
		$save = $employeeModel->update($id, $employeeData);

		return view('select-employee', $data);
	}

	//--------------------------------------------------------------------

}

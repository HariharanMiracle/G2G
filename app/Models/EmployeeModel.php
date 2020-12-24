<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $allowedFields = ['name','phone','email','picked'];
}
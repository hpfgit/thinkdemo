<?php 
/**
* 
*/
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
	public function index() {		
        $data = D('user');
        $result = $data->select();
        return $_POST['email'];
	}
	public function spage() {

    }
}
 ?>
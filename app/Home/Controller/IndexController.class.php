<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo header("content-type:text/html;charset=utf-8");
    	$model = D('user');
    	$data = $model->index();
        $this->assign('model',$data);
        if ($_POST['email'] && $_POST['password']) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $array['username'] = $email;
            $array['userpass'] = $password;
            if ($model->add($array)) {
                $this->alter_back('写入成功','');
                // echo "<meta http-equiv='refresh' content='0; url=http://www.php.com'>";
            }
        }
        $page = $model->page('1,10')->select();
        print_r($page);
        $this->display();
    }
    public function _empty($name) {
    	$this->city($name);
    }
    protected function city($name) {
    	echo $name;
    }
    public function alter_back($msg,$url) {
        echo "<script>alert('$msg');location.href='$url'</script>";
    }
}
<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
   
     public function login()
    {
		
        if (isset($_SESSION['admin_name'])) {
            // 已登陆
            $this->redirect('Admin/Index/index');
        }
		else{
                //未登录
            if (IS_POST) {
                //提交登陆数据
                $data['admin_name']=I('post.user_name');
                $data['user_password']=I('post.user_password');

                $code= I('code');                //这是提取页面上打字输入的code即验证码
                if(check_verify($code) == false){       //给function.php中定义的函数check_code，然后它返回真假
                    $this->error('验证码错误');
                }else{
                    $admin=M('admin')->where($data)->find();
                    if ($admin==null) {
                        //用户不存在或密码错误
                        $this->error('用户不存在或密码错误');
                    }else{
                        $_SESSION['admin_name']=$_POST['user_name'];
						$_SESSION['admin_id']=$admin['admin_id'];
                        $this->redirect('Admin/Index/index');
                    }
                }
              
            }
                $this->display();
             

        }      
    }



    public function edit(){
        $admin=D('admin');


        if (IS_POST) {
            $data['admin_id']=I('user_id');
            $data['admin_name']=I('user_name');
            $data['oldpassword']=I('oldpassword');
            $data['user_password']=I('user_password');
            $data['cnewpassword']=I('cnewpassword');
            


             $where['admin_name']=I('user_name');
             $admindata=M('admin')->where($where)->find();
             

            
             if ($data['oldpassword']==$admindata['user_password']) {
                //新密码=确认新密码
                if ($data['user_password']==$data['cnewpassword']) {
                    //修改数据库中密码
                    if ($admin->create($data)) {
                        if ($admin->save()) {
                          $this->success('修改密码成功',U('Admin/Index/index'));
                        }else{
                          $this->error('修改密码失败');
                        }
                   }else{
                    $this->error($cate->getError());
                   }

                }else{
                    $this->error('两次输入密码不相同，请重新输入!');
                }

                // echo "密码匹配正确";
             }else{
                $this->error('原密码不正确，请重新输入原密码!');
             }
             return;

        }

         $adminid=I('id');
         $admins=$admin->find($adminid);

         $this->assign('admins',$admins);
         $this->display();
    }



    //验证码
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->length = 4;
        $Verify->entry();

    }


      //退出
    public function logout(){
        //session_destroy();
		session('admin_name',null);
        $this->success('注销成功，并跳转至登录',U('Admin/Index/index'));

    }
     


}
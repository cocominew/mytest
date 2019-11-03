<?php
namespace Home\Controller;
use Think\Controller;
class UserloginController extends Controller {
	
     public function login()
    {
		$hot=D('hot');
		
        $count=$hot->count();// 查询满足要求的总记录数
        $Page=new\Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(8)
        $show=$Page->show();// 分页显示输出
       $list=$hot->limit($Page->firstRow.','.$Page->listRows)->select();  // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        

		if (isset($_SESSION['username'])) {
            // 已登陆
            $this->redirect('Home/Index/index');
        }
		else{
                //未登录
            if (IS_POST) {
                //提交登陆数据
                $data['username']=I('post.username');
                $data['user_password']=I('post.user_password');

                    $user=M('user')->where($data)->find();
					
                    if ($user==null) {
                        //用户不存在或密码错误
                        $this->error('用户不存在或密码错误');
                    }else{
						$_SESSION['username']=$_POST['username'];
						$_SESSION['user_id']=$user['user_id'];
						$_SESSION['user_password']=$user['user_password'];
                        $this->redirect('Home/Index/index');
                    }
                  
                
            }else{
                //普通访问
                $this->display();
            } 

        }      
    }

	public function register()
	{
		$hot=D('hot');
		
        $count=$hot->count();// 查询满足要求的总记录数
        $Page=new\Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(8)
        $show=$Page->show();// 分页显示输出
       $list=$hot->limit($Page->firstRow.','.$Page->listRows)->select();  // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
		$user=D('user');//实例化数据库
		
		if(IS_POST){
			$data['username']=I('username');
			$data['user_password']=I('psw');
			// dump($data);die();
			
			if($user->create($data)){
				if($user->add()){
					$this->success('注册成功',U('Home/Userlogin/login'));
				}else{
				$this->error('注册失败');}
				}else{
					$this->error($user->getError());
				}
				return;
		}
		$this->display();	
	}
	public function search(){
		
		session_start();
		$hot=D('hot');
		$keywords=$_GET['sou'];
		//dump($keywords);
		$hots=$hot->where("h_title like '%".$keywords."%'")->select();
		$total=count($hots);
		$this->assign('total',$total);
		$this->assign('hots',$hots);

		$this->display();

	}
	
	
	public function content(){
			
		$hot=D('hot');
		$hotid=I('id');
		$hots=$hot->find($hotid);
		
		$this->assign('hots',$hots);
		
		$this->display();
	}
	
    public function edit(){
        $user=D('user');


        if (IS_POST) {
            $data['user_id']=I('user_id');
            $data['username']=I('username');
            $data['oldpassword']=I('oldpassword');
            $data['user_password']=I('user_password');
            $data['checkpassword']=I('checkpassword');
            
             $where['username']=I('user_name');
             $userdata=M('user')->where($where)->find();
             

             //开始验证密码

             //原密码等于数据库中密码
             if ($data['oldpassword']==$userdata['user_password']) {
                //新密码=确认新密码
                if ($data['user_password']==$data['checkpassword']) {
                    //修改数据库中密码
                    if ($user->create($data)) {
                        if ($user->save()) {
                          $this->success('修改密码成功',U('Home/Index/index'));
                        }else{
                          $this->error('修改密码失败');
                        }
                   }else{
                    $this->error($cate->getError());
                   }

                }else{
                    $this->error('两次输入密码不相同，请重新输入!');
                }
               
             }else{
                $this->error('原密码不正确，请重新输入原密码!');
             }
             return;
        }

         $userid=I('id');
         $users=$user->find($userid);

         
         $this->assign('users',$users);
         $this->display();
    }


      //退出
    public function logout(){
        //session_destroy();
		session('username',null);
		session('user_id',null);
        $this->success('注销成功，并跳转至前台',U('Home/Userlogin/login'));

    }
	
	public function info(){
		$pro=D('pros');$col=D('collection');
		$uid=$_SESSION['user_id'];
		$like=$pro->where("user_id={$uid}")->select();
		$collection=$col->where("user_id={$uid}")->select();
		$total1=count($like);
		$this->assign('total1',$total1);
		$total2=count($collection);
		$this->assign('total2',$total2);
		$this->display();
	}
	
	public function pros(){
	
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid}")->select();
			if(sizeof($uuu)==0){
				
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					echo '{"status":"success"}';
				}else{
					echo '{"status":"error"}';
				}
			}else{
				echo '{"status":"error"}';
			}
		}else{
			die;
		}
	}
	
	public function collection(){
	
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("collection");
			$uuu=$User->where("user_id={$uid}")->select();
			if(sizeof($uuu)==0){
				
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					echo '{"status":"success"}';
				}else{
					echo '{"status":"error"}';
				}
			}else{
				echo '{"status":"error"}';
			}
		}else{
			die;
		}
	}
	
}
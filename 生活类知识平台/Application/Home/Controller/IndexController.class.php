<?php
namespace Home\Controller;
use Think\Controller;
use \Vendor\QQ\qqAuth;

class IndexController extends Controller {
    public function index(){
		
		$hot=D('hot');
		 $uid=$_SESSION['user_id'];
		
       $count=$hot->count();// 查询满足要求的总记录数
        $Page=new\Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(8)
        $show=$Page->show();// 分页显示输出
       
	   $list=$hot->join("LEFT JOIN xm_pros on xm_hot.h_id=xm_pros.ho_id and xm_pros.user_id='{$uid}'")
	   ->join("LEFT JOIN xm_collection ON xm_hot.h_id=xm_collection.ho_id and xm_collection.user_id='{$uid}'")
	   ->limit($Page->firstRow.','.$Page->listRows)->order('h_id asc')->select();  // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

		$this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出	
		
		$feedback=D('feedback');
		if(IS_POST){
			$data['feedback_content']=I('content');
			$data['feedback_lianxi']=I('phone');
			$data['feedback_time']=time();
			
			if($feedback->create($data)){
				if($feedback->add()){
					echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
					echo "<script>alert('已收到您的意见反馈，感谢支持~');window.location.href='index';</script>";
				}else{
					echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
					echo "<script>alert('提交反馈失败');window.location.href='index';</script>";}
			}else{
					$this->error($feedback->getError());
				}
			
			return;
		}	
	   $this->display();
		
    }
		
	
	public function search(){
		
		session_start();
		$uid=$_SESSION['user_id'];
		$keywords=$_GET['sou'];
		$hots=D('hot')->join("LEFT JOIN xm_pros on xm_hot.h_id=xm_pros.ho_id and xm_pros.user_id='{$uid}'")
		->join("LEFT JOIN xm_collection ON xm_hot.h_id=xm_collection.ho_id and xm_collection.user_id='{$uid}'")
		->where("h_title like '%".$keywords."%'")->select();
		//dump($hots);
		$this->assign('hots',$hots);
		 $total=count($hots);
		 $this->assign('total',$total);
		
		
	
		// $festivals=D('festival')->join("LEFT JOIN xm_pros on xm_festival.f_id=xm_pros.fe_id and xm_pros.user_id='{$uid}'")
		// ->join("LEFT JOIN xm_collection ON xm_festival.f_id=xm_collection.fe_id and xm_collection.user_id='{$uid}'")
		// ->where("f_title like '%".$keywords."%'")->select();
		// $this->assign('festivals',$festivals);
		
			$this->display();
		
	}
		
	
	public function content(){
			
		$hot=D('hot');
		$hotid=I('id');
		$uid=$_SESSION['user_id'];
		$hots=$hot->join("LEFT JOIN xm_pros on xm_hot.h_id=xm_pros.ho_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_hot.h_id=xm_collection.ho_id and xm_collection.user_id='{$uid}'")->find($hotid);
		
		$this->assign('hots',$hots);
		
		$this->display();
	}
	

	public function pros(){
		
		$id=I('id');
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid} AND ho_id={$id}")->select();
			
			if(sizeof($uuu)==0){
				 $hot=D('hot');
				 $hot->where("h_id=$id")->setInc('h_zan');
				
				$data['ho_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				
				if($User->add()){
					$User->where("ho_id=$id AND user_id={$uid}")->setInc('zan');
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
		
		$id=I('id');
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("collection");
			$uuu=$User->where("user_id={$uid} AND ho_id={$id}")->select();
			if(sizeof($uuu)==0){
				$hot=D('hot');
				$hot->where("h_id=$id")->setInc('h_collection');
				
				$data['ho_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("ho_id=$id AND user_id={$uid}")->setInc('collection');
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


    public function QQLogin()
{
    $qqlogin=new qqAuth('You appid','You appkey','You callback url');
    $qqlogin->getAuthCode();
}


/**
*获取用户信息openid、userInfo
 */
    public function Getinfo(){
    $qqlogin=new qqAuth('You appid','You appkey','You callback url');
    $result = $qqlogin->getUsrInfo();         //获取用户详细信息
    //$result = $qqlogin->getOpenID();         //获取openid
    //var_dump($result);
    echo "<script>window.close();</script>";       //授权成功后关闭页面
}

}

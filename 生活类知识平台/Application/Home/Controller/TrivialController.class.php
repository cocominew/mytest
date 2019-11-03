<?php
namespace Home\Controller;
use Think\Controller;
class TrivialController extends Controller {
    public function index(){
		
		$trivial=D('trivial');
        $uid=$_SESSION['user_id'];
		$list=$trivial->join("LEFT JOIN xm_pros on xm_trivial.t_id=xm_pros.tr_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_trivial.t_id=xm_collection.tr_id and xm_collection.user_id='{$uid}' ")->order('t_id asc')->select();  
		//dump($list);die;
		$this->assign('list',$list);
		
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
	
	public function content(){
			
		$trivial=D('trivial');
		$trivialid=I('id');
		$uid=$_SESSION['user_id'];
		$trivials=$trivial->join("LEFT JOIN xm_pros on xm_trivial.t_id=xm_pros.tr_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_trivial.t_id=xm_collection.tr_id and xm_collection.user_id='{$uid}'")->find($trivialid);
		$this->assign('trivials',$trivials);
		
		$this->display();
	}
	
	
	public function pros(){
		
		$id=I('id');
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid} AND tr_id={$id}")->select();
			if(sizeof($uuu)==0){
				$trivial=D('trivial');
				$trivial->where("t_id=$id")->setInc('t_zan');
				
				$data['tr_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("tr_id=$id AND user_id={$uid}")->setInc('zan');
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
			$uuu=$User->where("user_id={$uid} AND tr_id={$id}")->select();
			if(sizeof($uuu)==0){
				$trivial=D('trivial');
				$trivial->where("t_id=$id")->setInc('t_collection');
				
				$data['tr_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("tr_id=$id AND user_id={$uid}")->setInc('collection');
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
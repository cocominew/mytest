<?php
namespace Home\Controller;
use Think\Controller;
class CookController extends Controller {
    public function index(){
		
		$food=D('food');
        $uid=$_SESSION['user_id'];
		$list=$food->join("LEFT JOIN xm_pros on xm_food.f_id=xm_pros.fo_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_food.f_id=xm_collection.fo_id and xm_collection.user_id='{$uid}'")->order('f_id asc')->select();  
		
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
			
		$food=D('food');
		$foodid=I('id');
		$uid=$_SESSION['user_id'];
		$foods=$food->join("LEFT JOIN xm_pros on xm_food.f_id=xm_pros.fo_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_food.f_id=xm_collection.fo_id and xm_collection.user_id='{$uid}'")->find($foodid);
		$this->assign('foods',$foods);
		
		$this->display();
	}
	
	public function pros(){
		
		$id=I('id');
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid} AND fo_id={$id}")->select();
			if(sizeof($uuu)==0){
				$food=D('food');
				$food->where("f_id=$id")->setInc('f_zan');
				
				$data['fo_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("fo_id=$id  AND user_id={$uid} ")->setInc('zan');
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
			$uuu=$User->where("user_id={$uid} AND fo_id={$id}")->select();
			if(sizeof($uuu)==0){
				$food=D('food');
				$food->where("f_id=$id")->setInc('f_collection');
				
				$data['fo_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("fo_id=$id AND user_id={$uid}")->setInc('collection');
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
<?php
namespace Home\Controller;
use Think\Controller;
class FestivalController extends Controller {
    public function index(){
		
		$festival=D('festival');
		$uid=$_SESSION['user_id'];
		$list=$festival->join("LEFT JOIN xm_pros on xm_festival.f_id=xm_pros.fe_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_festival.f_id=xm_collection.fe_id and xm_collection.user_id='{$uid}'")->order('f_id asc')->select();  
		
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
			
		$festival=D('festival');
		$festivalid=I('id');
		$uid=$_SESSION['user_id'];
		$festivals=$festival->join("LEFT JOIN xm_pros on xm_festival.f_id=xm_pros.fe_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_festival.f_id=xm_collection.fe_id and xm_collection.user_id='{$uid}'")->find($festivalid);

		$this->assign('festivals',$festivals);
		
		$this->display();
	}
	
	public function pros(){
		
		$id=I('id');
		$uid=$_SESSION['user_id'];

		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid} AND fe_id={$id}")->select();
			if(sizeof($uuu)==0){
				$festival=D('festival');
				$festival->where("f_id=$id")->setInc('f_zan');
				
				$data['fe_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("fe_id=$id AND user_id={$uid}")->setInc('zan');
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
			$uuu=$User->where("user_id={$uid} AND fe_id={$id}")->select();
			if(sizeof($uuu)==0){
				$festival=D('festival');
				$festival->where("f_id=$id")->setInc('f_collection');
				
				$data['fe_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("fe_id=$id AND user_id={$uid}")->setInc('collection');
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
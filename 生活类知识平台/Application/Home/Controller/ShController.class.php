<?php
namespace Home\Controller;
use Think\Controller;
class ShController extends Controller {
    public function index(){
		
		$sh=D('sh');
        $uid=$_SESSION['user_id'];
		$list=$sh->join("LEFT JOIN xm_pros on xm_sh.s_id=xm_pros.sh_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_sh.s_id=xm_collection.sh_id and xm_collection.user_id='{$uid}'")->order('s_id asc')->select();  
		
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
			
		$sh=D('sh');
		$shid=I('id');
		$uid=$_SESSION['user_id'];
		$shs=$sh->join("LEFT JOIN xm_pros on xm_sh.s_id=xm_pros.sh_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_sh.s_id=xm_collection.sh_id and xm_collection.user_id='{$uid}'")->find($shid);
		$this->assign('shs',$shs);
		
		$this->display();
	}
	
	public function pros(){
		
		$id=I('id');
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid} AND sh_id={$id}")->select();
			if(sizeof($uuu)==0){
				$sh=D('sh');
				$sh->where("s_id=$id")->setInc('s_zan');
				
				$data['sh_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("sh_id=$id AND user_id={$uid}")->setInc('zan');
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
			$uuu=$User->where("user_id={$uid} AND sh_id={$id}")->select();
			if(sizeof($uuu)==0){
				$sh=D('sh');
				$sh->where("s_id=$id")->setInc('s_collection');
				
				$data['sh_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("sh_id=$id AND user_id={$uid}")->setInc('collection');
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
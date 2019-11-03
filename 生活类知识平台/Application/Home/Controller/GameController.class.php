<?php
namespace Home\Controller;
use Think\Controller;
class GameController extends Controller {
    public function index(){
		
		$game=D('game');
       $uid=$_SESSION['user_id'];
		$list=$game->join("LEFT JOIN xm_pros on xm_game.g_id=xm_pros.ga_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_game.g_id=xm_collection.ga_id and xm_collection.user_id='{$uid}'")->order('g_id asc')->select();  
		
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
	
	public function content(){
			
		$game=D('game');
		$gameid=I('id');
		$uid=$_SESSION['user_id'];
		$games=$game->join("LEFT JOIN xm_pros on xm_game.g_id=xm_pros.ga_id and xm_pros.user_id='{$uid}'")->join("LEFT JOIN xm_collection ON xm_game.g_id=xm_collection.ga_id and xm_collection.user_id='{$uid}'")->find($gameid);
		$this->assign('games',$games);
		
		$this->display();
	}
	
	public function pros(){
		
		$id=I('id');
		$uid=$_SESSION['user_id'];
		if($uid && $id){
			$User=M("pros");
			$uuu=$User->where("user_id={$uid} AND ga_id={$id}")->select();
			if(sizeof($uuu)==0){
				$game=D('game');
				$game->where("g_id=$id")->setInc('g_zan');
				
				$data['ga_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("ga_id=$id AND user_id={$uid}")->setInc('zan');
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
			$uuu=$User->where("user_id={$uid} AND ga_id={$id}")->select();
			if(sizeof($uuu)==0){
				$game=D('game');
				$game->where("g_id=$id")->setInc('g_collection');
				
				$data['ga_id']=$id;
				$data['user_id']=$uid;
				$User->create($data);
				if($User->add()){
					$User->where("ga_id=$id AND user_id={$uid}")->setInc('collection');
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
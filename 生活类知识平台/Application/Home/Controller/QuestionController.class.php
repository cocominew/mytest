<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
		
		$question=D('question');
		$uid=$_SESSION['user_id'];
		$que['q_que']=array('EXP','is not null and q_que!=""');
		$ans['q_ans']=array('EXP','is not null and q_ans!=""');
		$myque=$question->where("user_id ='{$uid}'")->where($que)->select();
		$this->assign('myque',$myque);
		$all=$question->where($que)->select();
		$this->assign('all',$all);
		$myans=$question->where("user_id ='{$uid}'")->where($ans)->select();
		$this->assign('myans',$myans);
		
		
		
		
		if(IS_POST){
			
			$data['q_que']=I('que');
			$data['q_ans']=I('ans');
			$data['q_time']=time();
			$data['user_id']=$uid;
			if($uid==null){
				echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
				echo "<script>alert('登录才能操作');window.location.href='index';</script>";
			}
			else{
			if($question->create($data)){
				if($question->add()){
					echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
					echo "<script>alert('提交成功~');window.location.href='index';</script>";
				}else{
					echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
					echo "<script>alert('提交失败~');window.location.href='index';</script>";
				}
			}else{
				$this->error($question->getError());
			}}
			return;
			}
						
			$this->display();
	}
 
 }

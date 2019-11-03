<?php
namespace Admin\Controller;
use Think\Controller;
class CheckController extends BaseController {
    public function lst(){
	$share=D('share');
	$shares=$share->select();
	$s=$share->field('s_id')->select();
		$total=count($s);	
		$this->assign('total',$total);
	$this->assign('shares',$shares);
		$this->display();
	}
	
	public function pass(){
	$share=D('share');
	$id=I('id');
	$shares=$share->where("s_id={$id}")->setInc('s_pass');
	}
	
	public function content(){
		$uid=$_SESSION['user_id'];
		$share=D('share');
		$shareid=I('id');
		$shares=$share->where("user_id={$uid}")->find($shareid);
		$this->assign('shares',$shares);
		$this->display();
	}
	
	public function del(){
	$share=D('share');
	if($share->delete(I('id'))){
		$this->success("删除成功",U(lst));
	}else{
		$this->error('删除失败');
	}
 }
 
}
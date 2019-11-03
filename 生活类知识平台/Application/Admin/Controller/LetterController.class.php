<?php
namespace Admin\Controller;
use Think\Controller;
class LetterController extends BaseController {
    public function lst(){
		$feedback=D('feedback');
		$feedbacks=$feedback->select();
		$f=$feedback->field('feedback_id')->select();
		$total=count($f);	
		$this->assign('total',$total);
		$this->assign('feedbacks',$feedbacks);
	
		$this->display();
	}
	
	public function del(){
		$feedback=D('feedback');
		if($feedback->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
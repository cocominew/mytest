<?php
namespace Admin\Controller;
use Think\Controller;
class HotController extends BaseController {
    public function lst(){
		$hot=D('hot');
	$hots=$hot->select();
	$h=$hot->field('h_id')->select();
		$total=count($h);	
		$this->assign('total',$total);
	$this->assign('hots',$hots);
		$this->display();
	}
	
	
	public function add(){
		$hot=D('hot');//实例化数据库
		
		if(IS_POST){
			$data['h_title']=I('title');
			$data['h_author']=I('author');
			$data['h_content']=I('content');
			$data['h_fabu']=I('fb');
			
			if ($_FILES['img']['tmp_name']!='') {
                $upload = new\Think\Upload();// 实例化上传类
                $upload->maxSize=3145728 ;// 设置附件上传大小
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath='./Uploads/'; // 设置附件上传（子）目录
                $upload->rootPath='./'; // 设置附件上传根目录
                
                $info=$upload->uploadOne($_FILES['img']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['h_pic']=$info['savepath'].$info['savename'];                  
                }
            }		

			if ($_FILES['tou']['tmp_name']!='') {
                $tou = new\Think\Upload();// 实例化上传类
                $tou->maxSize=3145728 ;// 设置附件上传大小
                $tou->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $tou->savePath='./Tous/'; // 设置附件上传（子）目录
                $tou->rootPath='./'; // 设置附件上传根目录
                
                $info=$tou->uploadOne($_FILES['tou']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($tou->getError());
                }else{// 上传成功
                    $data['h_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($hot->create($data)){
				if($hot->add()){
					$this->success('添加成功',U(lst));
				}else{
				$this->error('添加失败');}
				}else{
					$this->error($hot->getError());
				}
				return;
		}
		$this->display();
	}
	
	
	
		public function edit(){
		$hot=D('hot');//实例化数据库
		
		if(IS_POST){
			$data['h_id']=I('h_id');
			$data['h_title']=I('title');
			$data['h_author']=I('author');
			$data['h_content']=I('content');
			$data['h_fabu']=I('fb');
			
			if ($_FILES['img']['tmp_name']!='') {
                $upload = new\Think\Upload();// 实例化上传类
                $upload->maxSize=3145728 ;// 设置附件上传大小
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath='./Uploads/'; // 设置附件上传（子）目录
                $upload->rootPath='./'; // 设置附件上传根目录
                
                $info=$upload->uploadOne($_FILES['img']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['h_pic']=$info['savepath'].$info['savename'];                  
                }
            }
			// dump($data);die();
			
			if ($_FILES['tou']['tmp_name']!='') {
                $tou = new\Think\Upload();// 实例化上传类
                $tou->maxSize=3145728 ;// 设置附件上传大小
                $tou->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $tou->savePath='./Tous/'; // 设置附件上传（子）目录
                $tou->rootPath='./'; // 设置附件上传根目录
                
                $info=$tou->uploadOne($_FILES['tou']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($tou->getError());
                }else{// 上传成功
                    $data['h_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($hot->create($data)){
				if($hot->save()){
					$this->success('修改成功',U(lst));
				}else{
				$this->error('修改失败');}
				}else{
					$this->error($hot->getError());
				}
				return;
		}
		$hotid=I('id');
		$hots=$hot->find($hotid);
		$this->assign('hots',$hots);
		$this->display();
	}
	
	
	public function del(){
		$hot=D('hot');
		if($hot->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
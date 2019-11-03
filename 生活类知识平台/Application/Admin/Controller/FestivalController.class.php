<?php
namespace Admin\Controller;
use Think\Controller;
class FestivalController extends BaseController {
     public function lst(){
		$festival=D('festival');
	$festivals=$festival->select();
	$f=$festival->field('f_id')->select();
		$total=count($f);	
		$this->assign('total',$total);
	$this->assign('festivals',$festivals);
		$this->display();
	}
	
	
	public function add(){
		$festival=D('festival');//实例化数据库

		
		if(IS_POST){
			$data['f_title']=I('title');
			$data['f_author']=I('author');
			$data['f_content']=I('content');
			$data['f_fabu']=I('fb');
			
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
                    $data['f_pic']=$info['savepath'].$info['savename'];                   
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
                    $data['f_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($festival->create($data)){
				if($festival->add()){
					$this->success('添加成功',U(lst));
				}else{
				$this->error('添加失败');}
				}else{
					$this->error($festival->getError());
				}
				return;
		}
		$this->display();
	}
	
	
	
		public function edit(){
		$festival=D('festival');//实例化数据库
		
		if(IS_POST){
			$data['f_id']=I('f_id');
			$data['f_title']=I('title');
			$data['f_author']=I('author');
			$data['f_content']=I('content');
			$data['f_fabu']=I('fb');
			
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
                    $data['f_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['f_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($festival->create($data)){
				if($festival->save()){
					$this->success('修改成功',U(lst));
				}else{
				$this->error('修改失败');}
				}else{
					$this->error($festival->getError());
				}
				return;
		}
		$festivalid=I('id');
		$festivals=$festival->find($festivalid);
		$this->assign('festivals',$festivals);
		$this->display();
	}
	
	
	public function del(){
		$festival=D('festival');
		if($festival->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
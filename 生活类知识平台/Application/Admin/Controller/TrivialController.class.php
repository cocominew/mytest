<?php
namespace Admin\Controller;
use Think\Controller;
class TrivialController extends BaseController {
    public function lst(){
		$trivial=D('trivial');
	$trivials=$trivial->select();
	$t=$trivial->field('t_id')->select();
		$total=count($t);	
		$this->assign('total',$total);
	$this->assign('trivials',$trivials);
		$this->display();
	}
	
	
	public function add(){
		$trivial=D('trivial');//实例化数据库
		
		if(IS_POST){
			$data['t_title']=I('title');
			$data['t_author']=I('author');
			$data['t_content']=I('content');
			$data['t_fabu']=I('fb');
			
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
                    $data['t_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['t_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($trivial->create($data)){
				if($trivial->add()){
					$this->success('添加成功',U(lst));
				}else{
				$this->error('添加失败');}
				}else{
					$this->error($trivial->getError());
				}
				return;
		}
		$this->display();
	}
	
	
	
		public function edit(){
		$trivial=D('trivial');//实例化数据库
		
		if(IS_POST){
			$data['t_id']=I('t_id');
			$data['t_title']=I('title');
			$data['t_author']=I('author');
			$data['t_content']=I('content');
			$data['t_fabu']=I('fb');
			
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
                    $data['t_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['t_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($trivial->create($data)){
				if($trivial->save()){
					$this->success('修改成功',U(lst));
				}else{
				$this->error('修改失败');}
				}else{
					$this->error($trivial->getError());
				}
				return;
		}
		$trivialid=I('id');
		$trivials=$trivial->find($trivialid);
		$this->assign('trivials',$trivials);
		$this->display();
	}
	
	
	public function del(){
		$trivial=D('trivial');
		if($trivial->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
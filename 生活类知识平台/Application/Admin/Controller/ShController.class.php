<?php
namespace Admin\Controller;
use Think\Controller;
class ShController extends BaseController {
   public function lst(){
		$mz=D('mz');
	$mzs=$mz->select();
	$m=$mz->field('m_id')->select();
		$total=count($m);	
		$this->assign('total',$total);
	$this->assign('mzs',$mzs);
		$this->display();
	}
	
	
	public function add(){
		$mz=D('mz');//实例化数据库
		
		if(IS_POST){
			$data['m_title']=I('title');
			$data['m_author']=I('author');
			$data['m_content']=I('content');
			$data['m_fabu']=I('fb');
			
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
                    $data['m_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['m_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			
			if($mz->create($data)){
				if($mz->add()){
					$this->success('添加成功',U(lst));
				}else{
				$this->error('添加失败');}
				}else{
					$this->error($mz->getError());
				}
				return;
		}
		$this->display();
	}
	
	
	
		public function edit(){
		$mz=D('mz');//实例化数据库
		
		if(IS_POST){
			$data['m_id']=I('m_id');
			$data['m_title']=I('title');
			$data['m_author']=I('author');
			$data['m_content']=I('content');
			$data['m_fabu']=I('fb');
			
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
                    $data['m_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['m_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			
			
			if($mz->create($data)){
				if($mz->save()){
					$this->success('修改成功',U(lst));
				}else{
				$this->error('修改失败');}
				}else{
					$this->error($mz->getError());
				}
				return;
		}
		$mzid=I('id');
		$mzs=$mz->find($mzid);
		$this->assign('mzs',$mzs);
		$this->display();
	}
	
	
	public function del(){
		$mz=D('mz');
		if($mz->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
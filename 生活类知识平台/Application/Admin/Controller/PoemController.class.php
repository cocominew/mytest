<?php
namespace Admin\Controller;
use Think\Controller;
class PoemController extends BaseController {
    public function lst(){
		$poem=D('poem');
	$poems=$poem->select();
	$p=$poem->field('p_id')->select();
		$total=count($p);	
		$this->assign('total',$total);
	$this->assign('poems',$poems);
		$this->display();
	}
	
	
	public function add(){
		$poem=D('poem');//实例化数据库
		
		if(IS_POST){
			$data['p_title']=I('title');
			$data['p_author']=I('author');
			$data['p_content']=I('content');
			$data['p_fabu']=I('fb');
			
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
                    $data['p_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['p_tou']=$info['savepath'].$info['savename'];                  
                }
            }		

			
			if($poem->create($data)){
				if($poem->add()){
					$this->success('添加成功',U(lst));
				}else{
				$this->error('添加失败');}
				}else{
					$this->error($poem->getError());
				}
				return;
		}
		$this->display();
	}
	
	
	
		public function edit(){
		$poem=D('poem');//实例化数据库
		
		if(IS_POST){
			$data['p_id']=I('p_id');
			$data['p_title']=I('title');
			$data['p_author']=I('author');
			$data['p_content']=I('content');
			$data['p_fabu']=I('fb');
			
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
                    $data['p_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['p_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($poem->create($data)){
				if($poem->save()){
					$this->success('修改成功',U(lst));
				}else{
				$this->error('修改失败');}
				}else{
					$this->error($poem->getError());
				}
				return;
		}
		$poemid=I('id');
		$poems=$poem->find($poemid);
		$this->assign('poems',$poems);
		$this->display();
	}
	
	
	public function del(){
		$poem=D('poem');
		if($poem->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
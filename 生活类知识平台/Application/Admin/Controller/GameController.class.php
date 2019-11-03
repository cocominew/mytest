<?php
namespace Admin\Controller;
use Think\Controller;
class GameController extends BaseController {
    public function lst(){
		$game=D('game');
	$games=$game->select();
	$g=$game->field('g_id')->select();
		$total=count($g);	
		$this->assign('total',$total);
	$this->assign('games',$games);
		$this->display();
	}
	
	
public function add(){
		$game=D('game');//实例化数据库
		
		if(IS_POST){
			$data['g_title']=I('title');
			$data['g_author']=I('author');
			$data['g_content']=I('content');
			$data['g_fabu']=I('fb');
			
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
                    $data['g_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['g_tou']=$info['savepath'].$info['savename'];                  
                }
            }		

			
			if($game->create($data)){
				if($game->add()){
					$this->success('添加成功',U(lst));
				}else{
				$this->error('添加失败');}
				}else{
					$this->error($game->getError());
				}
				return;
		}
		$this->display();
	}
	
	
	
		public function edit(){
		$game=D('game');//实例化数据库
		
		if(IS_POST){
			$data['g_id']=I('g_id');
			$data['g_title']=I('title');
			$data['g_author']=I('author');
			$data['g_content']=I('content');
			$data['g_fabu']=I('fb');
			
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
                    $data['g_pic']=$info['savepath'].$info['savename'];

                   
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
                    $data['g_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			if($game->create($data)){
				if($game->save()){
					$this->success('修改成功',U(lst));
				}else{
				$this->error('修改失败');}
				}else{
					$this->error($game->getError());
				}
				return;
		}
		$gameid=I('id');
		$games=$game->find($gameid);
		$this->assign('games',$games);
		$this->display();
	}
	
	
	public function del(){
		$game=D('game');
		if($game->delete(I('id'))){
			$this->success("删除成功",U(lst));
		}else{
			$this->error('删除失败');
		}
	}
}
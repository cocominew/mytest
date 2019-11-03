<?php
namespace Home\Controller;
use Think\Controller;
class ShareController extends Controller {

	public function lst(){
		 $share=D('share');//实例化数据库
		
		if(IS_POST){
			$data['s_title']=I('title');
			$data['s_author']=I('author');
			$data['s_content']=I('content');
			
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
                    $data['s_pic']=$info['savepath'].$info['savename'];                   
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
                    $data['s_tou']=$info['savepath'].$info['savename'];                  
                }
            }		
			
			
			if($share->create($data)){
				if($share->add()){
					echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
					echo "<script>alert('提交成功,待审核');window.location.href='lst';</script>";
				}else{
				    echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>";
					echo "<script>alert('提交失败');window.location.href='index';</script>";
					}
				}else{
					$this->error($share->getError());
				}
				return;
		}
		$this->display();
	}


}
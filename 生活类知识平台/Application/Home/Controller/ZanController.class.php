<?php
namespace Home\Controller;
use Think\Controller;
class ZanController extends Controller {
public function zan(){
		
		$pros=D('pros');
		$uid=$_SESSION['user_id'];
		$zan1=$pros->join("xm_hot on xm_pros.ho_id=xm_hot.h_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan1',$zan1);
		
		$zan2=$pros->join("xm_festival on xm_pros.fe_id=xm_festival.f_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan2',$zan2);
		
		$zan3=$pros->join("xm_food on xm_pros.fo_id=xm_food.f_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan3',$zan3);
		
		$zan4=$pros->join("xm_trivial on xm_pros.tr_id=xm_trivial.t_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan4',$zan4);
		
		$zan5=$pros->join("xm_sh on xm_pros.sh_id=xm_sh.s_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan5',$zan5);
		
		$zan6=$pros->join("xm_poem on xm_pros.po_id=xm_poem.p_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan6',$zan6);
		
		$zan7=$pros->join("xm_game on xm_pros.ga_id=xm_game.g_id and xm_pros.user_id='{$uid}'")->select();
		$this->assign('zan7',$zan7);
		
		$this->display();
	}
	
	public function collection(){
		
		$collection=D('collection');
		$uid=$_SESSION['user_id'];
		$col1=$collection->join("xm_hot on xm_collection.ho_id=xm_hot.h_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col1',$col1);
		
		$col2=$collection->join("xm_festival on xm_collection.fe_id=xm_festival.f_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col2',$col2);
		
		$col3=$collection->join("xm_food on xm_collection.fo_id=xm_food.f_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col3',$col3);
		
		$col4=$collection->join("xm_trivial on xm_collection.tr_id=xm_trivial.t_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col4',$col4);
		
		$col5=$collection->join("xm_sh on xm_collection.sh_id=xm_sh.s_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col5',$col5);
		
		$col6=$collection->join("xm_poem on xm_collection.po_id=xm_poem.p_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col6',$col6);
		
		$col7=$collection->join("xm_game on xm_collection.ga_id=xm_game.g_id and xm_collection.user_id='{$uid}'")->select();
		$this->assign('col7',$col7);
		
		$this->display();
	}
}
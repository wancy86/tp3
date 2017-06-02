<?php
namespace Home\Controller;
use Think\Controller;

class FormController extends Controller {
	public function insert() {
		// $this->show('test form');

        // 1. 使用model验证数据
		$form = D('News');
		if ($form->create()) {
			$result = $form->add();
			if ($result) {
				echo "<br>" . "add good";
			} else {
				echo "<br>" . "add bad";
			}
		}else
        {
            echo "<br>"."create form faild";
        }

        // 2. 直接添加
        $form = D('News');
        $form->title = "111";
        $form->content = "1111222";
        $form->add();

        $form = M('News');
        $form->title = "ThinkPHP";
        $form->content = "ThinkPHP3.2.3版本发布";
        $form->where('id=2')->save();

		echo "<br>" . "xxxx";
	}
}
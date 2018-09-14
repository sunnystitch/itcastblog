<?php
//声明命名空间
namespace Admin\Controller;
use \Frame\Libs\BaseController;
//定义最终的首页控制器类，并继承基础控制器类
final class IndexController extends BaseController
{
	//首页显示方法
	public function index()
	{
		$this->denyAccess();
		$this->smarty->display("Index/index.html");
	}

	//顶部框架
	public function top()
	{
		$this->denyAccess();
		$this->smarty->display("Index/top.html");
	}

	//左侧框架
	public function left()
	{
		$this->denyAccess();
		$this->smarty->display("Index/left.html");
	}

	//中间框架
	public function center()
	{
		$this->denyAccess();
		$this->smarty->display("Index/center.html");
	}

	//主框架
	public function main()
	{
		$this->denyAccess();
		$this->smarty->display("Index/main.html");
	}
}
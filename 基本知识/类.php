<?php
	/**
	 * 
	 */
	class A
	{
		var $a;
		static $b; //静态成员
		function __construct()
		{
			$this->a=20;
			A::$b=200; //静态成员属于整个类，被该类的所有成员共享，所以要用这种格式引用
			echo $this->a; //实例化一个对象就打印一个20
		}

		public function father()
		{
			echo "这是父类的方法"; 
			echo "<br>";//这是父类的方法
		}
	}

	$stu1=new A(); //实例化一个对象，会打印20
	$stu2=new A(); //再实例化一个对象，会打印20
	echo $stu1->a."<br>"; //打印stu1中的a，为20
	$stu2->a=10; //将stu2中的a设为10
	echo $stu2->a."<br>"; //打印stu2中的a，为10
	echo A::$b."<br>"; //打印类中的静态成员，为200
	A::$b=100; //静态成员可以直接更改
	echo "更改后的static为".A::$b."<br>"; //打印更改后的类的成员，为100

	//类的继承
	class B extends A
	{
		public function son()
		{
			$this->father();
		}
	}

	$son1=new B(); //继承父类，实例化一个对象会在自动打印a,为20
	$son1->son()."<br>"; //调用父类的方法

	//类的方法覆盖
	class C extends A
	{
		public function father()
		{
			echo "这是被覆盖的父类的方法";
			echo "<br>";
		}
	}

	$over1=new C(); //继承父类，实例化一个对象会在自动打印a,为20
	$over1->father(); //父类的方法被覆盖

	//抽象类
	abstract class Teacher //抽象类只能派生子类
	{
		var $id="100";
		var $teach;
		abstract function showid(); //两个抽象方法，在子类中要给出方法的具体实现
		abstract function getteach($x);
		function showteach()
		{
			echo $this->teach;
			echo "<br>";
		}
	}
	class Stu extends Teacher
	{
		function showid() //重写两个抽象方法
		{
			echo $this->id;
		}

		function getteach($x) //把父类中的teach赋给x
		{
			$this->teach=$x;
		}
	}

	$stu=new stu();
	$stu->showid(); //打印100
	$stu->getteach("计算机");
	$stu->showteach();

	//接口，是特殊的抽象类，只能有抽象方法
	interface Getname
	{
		const name=""; //定义变量要用const
		function getname($name); //抽象方法前不加abstract
	}

	interface Showname
	{
		function showname();
	}

	class Stu1 implements Getname,Showname //可以继承多个接口
	{
		var $name="";
		function getname($name)
		{
			$this->name=$name;
		}

		function showname()
		{
			echo $this->name;
		}
	}

	$stu1=new Stu1;
	$stu1->getname("张三"); //通过接口实现的Getname和Showname
	$stu1->showname();
?> 
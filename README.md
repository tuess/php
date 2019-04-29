# php
php学习笔记
学习php时的自己手敲的基本代码，注释繁多。
所用集成环境位Wamp3.1.7。  

包含了各种php的基本知识，<验证码>中写了一个可以输出验证码图片的php文件，可以修修改改之后直接加到网页上。
<project>中是自己写的一个php+mysql的信息管理系统，大体功能完成了70%，mysql中存储了四张表，放在project数据库中，四张表分别是admin,teacher,student,menu。分别存放着管理员，教师，学生，各个身份的菜单的数据。
admin表,两个字段，分别是adminid int(10) not null primary key;pwd int(10) not null。
teacher表，四个字段，分别是teacherid int(10) not null primary key,teachername varcahr(10) not null,pwd int(10) not null,tel varchar(12) not null。
student表，两个字段（应该不止），分别是studentid int(10) not null primary key,studentname varchar(10) not null。
menu表，三个字段，分别是role varchar(10) not null,menuname varchar(10) not null,url varchar(10) not null。管理员有教师管理，添加教师，修改教师三个功能，教师有学生管理，添加学生，修改学生三个功能，学生有查看信息一个功能。管理员教师学生都共有两个url,修改密码和退出登录，所以url应该加上..
此项目非常适合大学新生做课设使用！！！

<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
        echo "<br>"."test mysql connect...";
		$con = mysqli_connect("localhost:3306", "root", "max123");
        mysqli_query('create database if not exists tptest;', $con);
        mysqli_commit();
		mysqli_select_db('tptest', $con);
        // mysqli_query('create table if not exists users(uid int, name varchar(20));', $con);
        // mysqli_commit();

       if ($con) {
            echo "<br>" . "111";
        } else {
            echo "<br>" . "222";
        }

		// $result = mysqli_query('select * from session;', $con);

		// $row = mysqli_fetch_array($result);
		// echo "<br>:" . $row[0];

		// if (!$result) {
		// 	echo $result;
		// } else {
		// 	echo "<br>" . "xxxx";
		// }

		$this->display();
	}

	public function test() {
		$this->show('123');
	}
}
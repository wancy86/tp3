<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		echo "<br>" . "test mysql connect...";
		$con = mysqli_connect("localhost:3306", "root", "max123", "tp3");
		// $con = new mysqli("localhost:3306", "root", "max123", "tp3");
		$con->autocommit($con, true);

		// mysqli_query($conn,$sql) or die(mysqli_error( $conn ));

        // if ($result = mysqli_query($con, "SELECT * from user;") or die(mysqli_error($conn))) {
		if ($result = $con->query("SELECT * from user;") or die(mysqli_error($conn))) {

			// while ($row = mysqli_fetch_row($result)) {
            while ($row = $result->fetch_row()) {
				echo "<br>row" . $row[0];
				echo "<br>row" . $row[1];
				echo "<br>row" . $row[2];
			}
			mysqli_free_result($result);
		}

		$this->display();
	}

	public function test() {
		$this->show('123');
	}
}
<?php

// comme autorisé pendant les cours j'ai utilisé sqlite pour la base de donnée
class DAO
{
	private $_db;

	public function __construct() {
		$this->_db = new SQLite3("db.sqlite");
	}

	public function check_login($user, $password) {
		$test = $this->_db->query("SELECT * FROM users");

		while ($row = $test->fetchArray()) {
			if ($row['mail'] == $user && $row['password'] == $password) {
				return true;
			}
		}
		return false;
	}

	public function create_user($user, $password) {
		return $this->_db->exec("INSERT INTO users(mail, password) VALUES ('{$user}', '{$password}')");
	}

	public function check_promo($code) {
		$test = $this->_db->query("SELECT * FROM promo");

		while ($row = $test->fetchArray()) {
			if ($row['ID'] == $code) {
				return $row['amount'];
			}
		}
		return false;
	}

	public function is_license($code) {
		$test = $this->_db->query("SELECT * FROM licensed");

		while ($row = $test->fetchArray()) {
			if ($row['ID'] == $code) {
				return true;
			}
		}
		return false;
	}

	public function get_price($day, $cat, $license, $less_12) {
		return $this->_db->querySingle("SELECT price FROM price_grid AS pg WHERE pg.day = '{$day}' AND pg.category = '{$cat}' AND pg.license = '{$license}' AND pg.less_12 = '{$less_12}'");
	}
}
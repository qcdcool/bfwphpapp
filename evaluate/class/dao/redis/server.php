<?php
class Dao_Redis_Server extends Dao_Redis {
	protected $_daoName = 'server';
	private static $_single = null;

	public static function getInstance() {
		if (!self::$_single) self::$_single = new self;
		return self::$_single;
	}
}

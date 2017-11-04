<?php
namespace engine\core\DB;

use engine\core\Config\Config;
use engine\core\Errors\Errors;

class Db
{
	/**
	 * @var PDO
	 */
	private $dbh;

	/**
	 * @var null
	 */
	public static $instance = null;

	/**
	 * Db constructor.
	 */
	private function __construct()
	{
		$options = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

		$db_config = Config::file('db');

		try{
			$this->dbh = new \PDO('mysql:dbname='. $db_config['dbName'] . ';host=' . $db_config['dbHost'], $db_config['dbUser'], $db_config['dbPass'], $options);

			if(!$this->dbh)
			{
				throw new \PDOException();
			}
		}
		catch(\PDOException $pdoError){
			throw new Errors('Соединение с базой даннных не возможно', (int)$pdoError->getCode( ));
		}
	}

	/**
	 *
	 */
	private function __clone(){}

	/**
	 * @return Db|null
	 */
	public static function getInstance()
	{
		if(self::$instance === null)
			self::$instance = new self;
		return self::$instance;
	}

	/**
	 * @param $sql
	 * @param string $class
	 * @param array $params
	 *
	 * @return array
	 */
	public function query($sql, $class = 'stdClass', $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute($params);
		if(false !== $res){
			return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
		}
		return [];
	}

	/**
	 * @param $sql
	 * @param array $params
	 *
	 * @return bool
	 */
	public function execute($sql, $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		return $sth->execute($params);
	}

	/**
	 * @return PDO
	 */
	public function getDbh() {
		return $this->dbh;
	}
}
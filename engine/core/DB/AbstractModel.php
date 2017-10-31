<?php

namespace engine\core\DB;


class AbstractModel
{
	public static $saltPass = 'wD4y2fbx853iOfD51Esd';
	public static $saltKey  = 'rG7yr3kj624isVq51Ht5';

	const TABLE = '';

	/**
	 * @param $pass
	 * @param $saltPass
	 *
	 * @return string
	 */
	public static function cashPassword($pass, $saltPass)
	{
		return md5($pass . $saltPass);
	}

	/**
	 * @param $cdate
	 * @param $login
	 * @param $saltKey
	 *
	 * @return string
	 */
	public static function cashSecretKey($cdate, $login, $saltKey)
	{
		return md5($cdate . $saltKey . $login);
	}

	/**
	 * @param string $order
	 *
	 * @return mixed
	 */
	public static function findAll($order = 'ASC')
	{
		$db = Db::getInstance();
		$sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id ' . $order;
		return $db->query($sql, get_called_class() );
	}

	/**
	 * @param $id
	 *
	 * @return array
	 */
	public static function findById($id)
	{
		$db = Db::getInstance();
		$sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
		$res = $db->query($sql, get_called_class() , [':id' =>  $id]);
		if(!empty($res[0]))
			return  $res[0];
		else
			return [];
	}

	/**
	 * @param $column
	 * @param $val
	 *
	 * @return array
	 */
	public static function findByColumn($column, $val)
	{
		$db = Db::getInstance();
		$sql = 'SELECT * FROM ' . static::TABLE . ' WHERE ' . $column . '=:val';
		$res = $db->query($sql, get_called_class() , [':val' =>  $val]);
		if(!empty($res[0]))
			return  $res[0];
		else
			return [];
	}

	/**
	 * @return bool
	 */
	protected function insert()
	{
		$columns = [];
		$values = [];
		foreach($this as $k => $v)
		{
			if('id' == $k)
				continue;
			$columns[] = $k;
			$values[':'.$k] = $v;
		}
		$sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(', ', $columns) . ') VALUES (' . implode(', ', array_keys($values)) . ')';
		$db = Db::getInstance();
		$result = $db->execute($sql, $values);
		if($result){
			$id = $db->getDbh()->lastInsertId();
		}
		else{
			$id = false;
		}
		return $id;
	}

	/**
	 * @return mixed
	 */
	protected function update()
	{
		$ins = [];
		$dataExec = [];
		foreach($this as $key => $val)
		{
			if(!empty($val))
				$dataExec[':' . $key] = $val;
			if('id' == $key || null === $val){
				continue;
			}
			if(!empty($val))
				$ins[] = $key . ' = :' .$key;
		}
		$sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ', $ins) . ' WHERE id = :id';
		$db = Db::getInstance();
		return $db->execute($sql, $dataExec);
	}

	/**
	 * @return bool|mixed
	 */
	public function save()
	{
		if(empty($this->id))
		{
			return $this->insert();
		}
		else{
			return $this->update();
		}
	}

	/**
	 * @return mixed
	 */
	public function delete()
	{
		$db = Db::getInstance();
		$sql = 'DELETE FROM ' . static::TABLE. ' WHERE id = :id';
		if(isset($this->id))
			return $db->execute($sql, array(':id' => $this->id));
	}
	public function __isset($name) {
		return isset($this->$name);
	}

	/**
	 * @param $arr
	 * Наполняет свойства модели данными
	 */
	public function dataInit($arr)
	{
		foreach($arr as $k => $v)
		{
			$this->set($k, $v);
		}
	}

	/**
	 * @param $data
	 *
	 * @return int|string
	 */
	public static function clearData($data)
	{
		if(is_numeric($data)){
			return (int)$data;
		}
		if(is_string($data)){
			return static::clearStr($data);
		}
		if(is_array($data)){
			foreach($data as $key => &$item){
				if(is_numeric($item) and 'artikul' != $key){
					$item = (int) $item;
				}
				if(is_string($item)){
					if('body' === $key or 'content' === $key)
						continue;
					$item = static::clearStr($item);
				}
			}
		}
		return $data;
	}

	/**
	 * @param $str
	 *
	 * @return string
	 */
	public static function clearStr($str)
	{
		return htmlspecialchars(strip_tags(stripslashes(trim($str))));
	}

	/**
	 * @param $key
	 *
	 * @return null
	 */
	public function get($key)
	{
		if (property_exists($this, $key)) {
			return $this->{$key};
		}
		return null;
	}

	/**
	 * @param $key
	 * @param $val
	 *
	 * @return bool
	 */
	public function set($key, $val)
	{
		if (property_exists($this, $key)) {
			$this->{$key} = $val;
			return true;
		}
		return false;
	}
}
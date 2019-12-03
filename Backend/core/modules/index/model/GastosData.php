<?php
class GastosData {
	public static $tablename = "gastos";
	public function GastosData(){
		$this->monto = "";
		$this->descripcion = "";
		$this->fecha = "";
		

	}

	/*public function add(){
		$sql = "insert into ".self::$tablename." (nombre,apellido,edad,fecha_nacimiento,numero_telefono,correo)";
		$sql .= "value (\"$this->nomb\",\"$this->apel\",\"$this->ed\",\"$this->fec\",\"$this->nume\",\"$this->corr\")";
		return Executor::doit($sql);
	}*/

	public function add(){
		$sql = "insert into ".self::$tablename." (monto,descripcion,fecha)";
		$sql .= "value (\"$this->monto\",\"$this->descripcion\",\"$this->fecha\")";
		return Executor::doit($sql);
	}
/*
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where folio=$folio";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where folio=$this->folio";
		Executor::doit($sql);
	}
*/
// partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
	/*	$sql = "update ".self::$tablename." set last_active_at=NOW() where id_cliente=$this->folio";
		Executor::doit($sql);*/
	}

	public function update(){
/*		$sql = "update ".self::$tablename. ;
		Executor::doit($sql);*/
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where 	id_cliente=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClienteData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new GastosData());

	}

/*
	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProveData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->folio); }

*/
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClienteData());
	}

}

?>
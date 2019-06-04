<?php
class ProveData {
	public static $tablename = "proveedor";
	public function ProveData(){
		$this->nomb = "";
		$this->nume = "";
		$this->corr = "";
		$this->direc = "";
		$this->mar = "";//tipo de suministro
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre_contacto,telefono,correo,direccion,nom_empresa)";
		$sql .= "value (\"$this->nomb\",\"$this->nume\",\"$this->corr\",\"$this->direc\",\"$this->mar\")";
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
		$sql = "update ".self::$tablename." set last_active_at=NOW() where folio=$this->folio";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",numero=\"$this->numero\",correo=\"$this->correo\",direccion=\"$this->direccion\",marca=\"$this->marca\" where id_provedor=$this->id_provedor";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where 	id_provedor=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProveData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProveData());

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
		return Model::many($query[0],new ProveData());
	}

}

?>

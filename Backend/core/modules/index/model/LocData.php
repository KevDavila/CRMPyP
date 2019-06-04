<?php
class LocData {
	public static $tablename = "local";
	public function LocData(){
		$this->nombre = "";
		$this->encar = "";
		$this->nume = "";
		$this->dire = "";

		$this->created_at = "NOW()";
	}
	public function add(){
		$sql = "insert into ".self::$tablename." (nom_loc,encargado,num_telefono,dr_loc) ";
		$sql .= "value (\"$this->nombre\",\"$this->encar\",\"$this->nume\",\"$this->dire\")";
		return Executor::doit($sql);

	}
// partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id_local=$this->id_local";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set nom_loc=\"$this->nom_loc\", encargado=\"$this->encargado\", num_telefono=\"$this->num_telefono\", dr_loc=\"$this->dr_loc\"  where id_local=$this->id_local";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id_local=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new LocData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new LocData());

	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LocData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id_local); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LocData());
	}

}

?>

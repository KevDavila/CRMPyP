<?php
class EmpleadoData {
	public static $tablename = "empleado";
	public function EmpleadoData(){
		$this->id_empleado = "";
		$this->name = "";		
		$this->lastname = "";
		$this->address = "";
		$this->email = "";
		$this->phone = "";
		$this->department = "";
		$this->rfc = "";
	$this->escolaridad ="";
	$this->direccion = "";
	$this->telefono = "";
	$this->correo = "";
	$this->ingreso = "";
	$this->idhorario = "";
	$this->idausencia = "";
		
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,ape_paterno,ape_materno,fechaNac,rfc,escolaridad,direccion,telefono,correo,departamento,fechaingreso) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->address\",\"$this->phone\",\"$this->rfc\",\"$this->escolaridad\",\"$this->direccion\",\"$this->telefono\",\"$this->correo\",\"$this->department\",\"$this->ingreso\")";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id_empleado=$this->id_empleado";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",lastname=\"$this->lastname\",address=\"$this->address\",phone=\"$this->phone\",department=\"$this->department\",email=\"$this->email\",c1_fullname=\"$this->c1_fullname\",c1_address=\"$this->c1_address\",c1_phone=\"$this->c1_phone\",c1_note=\"$this->c1_note\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id_empleado=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EmpleadoData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmpleadoData());
	}


	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmpleadoData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmpleadoData());
	}
public static function asistencia($q){
		$sql = "SELECT * FROM horario";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EmpleadoData());
	}
}

?>
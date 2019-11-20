<?php
class AssistanceData {
	public static $tablename = "horario";

	public function AssistanceData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (date_at,person_id,kind_id,user_id) ";
		echo $sql .= "value (\"$this->date_at\",$this->person_id,$this->kind_id,$this->user_id)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto AssistanceData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set kind_id=\"$this->kind_id\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AssistanceData());
	}

	public static function getByPD($person,$date_at){
		$sql = "select * from ".self::$tablename." where person_id=$person and date_at=\"$date_at\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AssistanceData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AssistanceData());

	}
	
	public static function getLike(){
		$sql = "SELECT empleado.nombre, horario.hentrada, horario.hsalida, horario.fecha, horario.hextra FROM empleado INNER JOIN horario ON empleado.id_horario=horario.id_horario";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AssistanceData());
	}


}

?>
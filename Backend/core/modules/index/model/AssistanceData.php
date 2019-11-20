<?php
class AssistanceData {
	public static $tablename = "horario";

	public function AssistanceData(){
		$this->id_hora = "";
		$this->hentrada = "";
		$this->hsalida = "";
		$this->fecha = "";
		$this->hextra = "";
		$this->id_horario = "";
		
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (id_horario,hentrada,hsalida,fecha,hextra) ";
		echo $sql .= "value (\"$this->id_hora\",\"$this->hentrada\",\"$this->hsalida\",\"$this->fecha\",\"$this->hextra\")";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id_horario=$this->id_horario";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto AssistanceData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set kind_id=\"$this->kind_id\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id_horario=$id";
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
		$sql = "SELECT empleado.nombre, horario.hentrada, horario.hsalida, horario.fecha, horario.hextra, horario.id_horario FROM empleado INNER JOIN horario ON empleado.id_horario=horario.id_horario";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AssistanceData());
	}


}

?>
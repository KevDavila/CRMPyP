<?php
class WorkData {
	public static $tablename = "producto_proceso";
	public function WorkData(){
		$this->works = "";
		$this->init = "";
		$this->final = "";
		$this->desc = "";
		$this->stat = "";

		$this->created_at = "NOW()";
	}
	public function add(){
		$sql = "insert into ".self::$tablename." (nom_work,f_inicio,f_fin,de_sum,status) ";
		$sql .= "value (\"$this->works\",\"$this->init\",\"$this->final\",\"$this->desc\",\"$this->stat\")";
		return Executor::doit($sql);

	}

/*	public static function delById($id){
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
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id_tipo_producto=$this->id_tipo_producto";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set nom_work=\"$this->nom_work\",f_inicio=\"$this->f_inicio\",f_fin=\"$this->f_fin\",de_sum=\"$this->de_sum\",status=\"$this->status\" where id_tipo_producto=$this->id_tipo_producto";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id_tipo_producto=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new WorkData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new WorkData());

	}


	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new WorkData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id_tipo_producto); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new WorkData());
	}

}

?>

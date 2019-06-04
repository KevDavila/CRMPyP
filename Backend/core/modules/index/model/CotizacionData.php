<?php
class CotizacionData {
	public static $tablename = "cotizacion";
	public function CotizacionData(){
		$this->producto = "";
		$this->cantidad = "";
		$this->costo = "";
		$this->created_at = "NOW()";

	}

	public function add(){
		$sql = "insert into ".self::$tablename." (producto,cantidad,costo)";
		$sql .= "value (\"$this->rf\",\"$this->produc\",\"$this->canti\",\"$this->precio_prod\",\"$this->precio_inst\",\"$this->id_clien\",\"$this->nom\",\"$this->apel\")";
		return Executor::doit($sql);
	}
/* partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
	$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}*/
	public function update(){
	$sql = "update ".self::$tablename." set rfc=\"$this->rfc\",producto=\"$this->producto\",cantidad=\"$this->cantidad\",precio_producto=\"$this->precio_producto\",precio_instalacion=\"$this->precio_instalacion\",fecha_instalacion=\"$this->fecha_instalacion\",id_cliente=\"$this->id_cliente\",nombre=\"$this->nombre\",apellido=\"$this->apellido\" where id_cotizacion=$this->id_cotizacion";
		Executor::doit($sql);
	}
//:v gg ty

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where 	id_cotizacion=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CotizacionData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id_cotizacion ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CotizacionData());
	}


	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CotizacionData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CotizacionData());
	}


}

?>

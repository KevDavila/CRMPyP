<?php
class VentaData {
	public static $tablename = "ventas";
	public function VentaData(){
		$this->fecha_pedido = "fecha_pedido";
		$this->fecha_entrega = "fecha_entrega";
		$this->descuento= "descuento";
		$this->cantidad = "cantidad";
		$this->total = "total";
		$this->id_producto = "id_producto";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (fecha_pedido,fecha_entrega,descuento,total,cantidad,id_producto) ";
		$sql .= "value (\"$this->fecha_pedido\",\"$this->fecha_entrega\",\"$this->descuento\",\"$this->total\",\"$this->cantidad\",\"$this->id_producto\")";
		Executor::doit($sql);
	}

	public function del(){

	}


	public function update(){
	/*	$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",numero=\"$this->numero\",correo=\"$this->correo\",direccion=\"$this->direccion\",marca=\"$this->marca\" where id_provedor=$this->id_provedor";
		Executor::doit($sql);*/
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where 	id_venta=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new VentaData());
	}

	public static function getMasPop(){
		$sql = "select * from ".self::$tablename." where 	cantidad > '15'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VentaData());
	}
	public static function getMenosPop(){
		$sql = "select * from ".self::$tablename." where 	cantidad < '10'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VentaData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new VentaData());

	}

	public static function getAllUnActive(){

	}


	public function getUnreads(){}


	public static function getLike($q){
	/*	$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new SumData());*/
	}

}

?>

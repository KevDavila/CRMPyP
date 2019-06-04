<?php
class MarketingData {
	public static $tablename = "marketing";
	public function MarketingData(){
		$this->producto = "producto";
		$this->cantidad_vendida = "cantidad_vendida";
		$this->costo = "costo";
		$this->descuento = "descuento";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (producto,cantidad_vendida,costo,descuento) ";
		$sql .= "value (\"$this->prodcuto\",\"$this->cantidad_vendida\",\"$this->costo\",\"$this->descuento\")";
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
		return Model::one($query[0],new MarketingData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new MarketingData());

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

<?php
class SumData {
	public static $tablename = "productos";
	public function SumData(){
		$this->codigo_barra = "codigo_barra";
		$this->tipo_producto = "tipo_producto";
		$this->color = "Color";
		$this->modelo = "modelo";
	  $this->description = "description";
		$this->precio_unitario = "precio_unitario";
	  $this->cantidad = "cantidad";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (codigo_barra,tipo_producto,Color,modelo,description,precio_unitario,cantidad)";
		$sql .= "value (\"$this->codigo_barra\",\"$this->tipo_producto\",\"$this->corlor\",\"$this->modelo\",\"$this->description\",\"$this->precio_unitario\",\"$this->cantidad\")";
		return Executor::doit($sql);
	}
	public function del(){

	}


	public function update(){
	/*	$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",numero=\"$this->numero\",correo=\"$this->correo\",direccion=\"$this->direccion\",marca=\"$this->marca\" where id_provedor=$this->id_provedor";
		Executor::doit($sql);*/
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where 	id_producto=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new SumData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new SumData());

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

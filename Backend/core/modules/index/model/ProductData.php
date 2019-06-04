<?php
class ProductData {
	public static $tablename = "productos";
	public function ProductData(){
		$this->codigo = "";
		$this->tipo = "";
		$this->col = "";
		$this->mod = "";
		$this->des= "";
		$this->canti= "";
		$this->precio ="";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql1= "select * from ".self::$tablename. " where email=$this->email";
		if ($sql1>0) {//si es 1 la consulta
		}else{
			$sql = "insert into ".self::$tablename." (codigo_barra,tipo_producto,color,modelo,description,cantidad,precio_unitario) ";
			$sql .= "value (\"$this->codigo\",\"$this->tipo\",\"$this->col\",\"$this->mod\",\"$this->des\",\"$this->canti\",\"$this->precio\")";

			print "<script>alert('Producto Registrado');</script>";

			return Executor::doit($sql);
		}
		return Executor::doit($sql1);
	}
/*
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}
*/
// partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id_producto=$this->id_producto";
		Executor::doit($sql);
	}

/*	public function update(){
		$sql = "update ".self::$tablename."(Color,modelo,cantidad) ";
		$sql .= "value (\"$this->Color\",\"$this->modelo\",\"$this->cantidad\")";
			Executor::doit($sql);
		}

*/
public function update(){
		$sql = "update ".self::$tablename." set color=\"$this->Color\",modelo=\"$this->modelo\",cantidad=\"$this->cantidad\" where id_producto=$this->id_producto";
		Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id_producto=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProductData());
	}

	public static function getUser(){
		$sql = "select * from".self::$tablename. "where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProductData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function Alerts(){
		//select tipo_producto, IF(cantidad <= 20, 'Contacta Proveedor','') AS alerta FROM productos ORDER BY codigo_barra
		$sql = "select tipo_producto FROM productos WHERE cantidad<=50 ORDER BY codigo_barra";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

/*
	public static function Alerts2(){
		$sql = "select codigo_barra,tipo_producto, IF(cantidad >= 200, 'lleno') AS alerta, IF(cantidad <= 100, 'medio') AS alerta FROM productos ORDER BY codigo_barra";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function Alerts3(){
		$sql = "select codigo_barra,tipo_producto,
	IF(cantidad >= 100, "lleno","") AS alerta,
    	IF(cantidad = 50, "medio","") AS alerta,
        	IF(cantidad <= 20, "vacio","") AS alerta FROM productos ORDER BY codigo_barra";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}*/
}

?>

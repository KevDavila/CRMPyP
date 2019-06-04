<?php
class FinanData {
	public static $tablename = "productos";
	public static $tablename2 = "ventas";
	public static $tablename3= "suministro";

	public function FinanData(){
		
	}
	
	public function add(){
		
	}

	public static function delById($id){
		
	}
	public function del(){
		
	}

	// partiendo de que ya tenemos creado un objecto PersonData previamente utilizamos el contexto
	public function update_active(){
		
	}

	public function update(){//actualizar el campo productos de la tabla productos cuando se realize una venta.
			
		}

	public static function getById($id){
		
	}

	public static function getUser(){
		
	}
	public static function getAll(){
		
		
	}
	public static function getAllIngress(){//ingresos totales de los productos
		//SELECT SUM(cantidad*precio_unitario) total FROM productos
		$sql = "select sum(cantidad*precio_unitario) total from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
		
	}
	public static function gellAllEgress(){
		$sql = "select sum(cant_sum*price) total from ".self::$tablename3;
		$query = Executor::doit($sql);
		return Model::many($query[0],new SumData());
	}
	public static function gellAllEgressMouth(){
		//SELECT MONTH(created_at) Mes, SUM(cant_sum*price) Total FROM suministro GROUP BY Mes
		$sql ="select month(created_at) Mes, sum(cant_sum*price) Total from ".self::$tablename3." GROUP BY Mes";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FinanData());
	}
	public static function gellAllIngressMouth(){
		//SELECT MONTH(created_at) Mes, SUM(cant_sum*price) Total FROM suministro GROUP BY Mes
		$sql ="select month(fecha_entrega) Mes, sum(cantidad*total) Total from ".self::$tablename2." GROUP BY Mes";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FinanData());
	}

	public static function getAllUnActive(){
		
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		
	}

}

?>

abstract class Migration {
  public abstract function up();
  public abstract function down();
}

class Blueprint {
  public $increments = null;
  public $string = [];
  public $timestamps = false;
  public $unsigned = null;
  public $foreign = null;
  public $on = null;
  public $references = null;
  public $dropForeign = null;
  
  public function dropForeign($code) {
    $this->dropForeign = $code;
  }
  
  public function unsignedInteger($col) {
    $this->unsigned = $col;
  }
  
  public function foreign($fk) {
    $this->foreign = $fk;
    return $this;
  }
  
  public function references($pk) {
    $this->references = $pk;
    return $this;
  }
  
  public function on($tabla) {
    $this->on = $tabla;
  }
  
  public function increments($col) {
    $this->increments = $col;
  }
  
  public function string($col) {
    $this->string[] = $col;
  }
  
  public function timestamps() {
    $this->timestamps = true;
  }
}

class Schema {
  public static $tableUp;
  public static $funcUp;
  public static $tableDown;
  public static $tableAlter;
  public static $funcAlter;

  public static function create($tabla, $func) {
    self::$tableUp = $tabla;
    self::$funcUp = $func;
  }
  
  public static function drop($tabla) {
    self::$tableDown = $tabla;
  }
  
  public static function table($tabla, $func) {
    self::$tableAlter = $tabla;
    self::$funcAlter = $func;
  }
}
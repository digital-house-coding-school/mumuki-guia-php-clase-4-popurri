abstract class Migration {
  public abstract function up();
  public abstract function down();
}

class Blueprint {
  public $increments = null;
  public $string = [];
  public $timestamps = false;
  
  public function increments($col) {
    $this->incrementes = $col;
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

  public static function create($tabla, $func) {
    self::$tableUp = $tabla;
    self::$funcUp = $func;
  }
  
  public static function drop($tabla) {
    self::$tableDown = $tabla;
  }
}
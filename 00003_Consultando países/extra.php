function view() {

}

class Controller {

}

class Curl {
  public static $to;
  public static $get = false;

  public static function to($to) {
    $curl = new Curl();
    self::$to = $to;
    return $curl;
  }
  
  public function get() {
    self::$get = true;
  }
}
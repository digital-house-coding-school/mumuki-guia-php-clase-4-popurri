class PaisesController extends Controller {
  public function listado() {
    $paises = ???
  
    $paises = json_decode($paises);
  
    return view("listadoGeneros", compact("paises"));
  }
}
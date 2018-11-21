public function testCurl(): void {
  $controller = new PaisesController();
  $controller->listado();

  $this->assertTrue(Curl::$to === "https://restcountries.eu/rest/v2/all", "¿Llamaste a Curl::to? ¿Le asignaste la URL correcta?");
  
  $this->assertTrue(Curl::$get, "¿Llamaste luego del método to al método get?");
}
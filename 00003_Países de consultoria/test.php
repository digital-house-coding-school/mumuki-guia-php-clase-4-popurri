public function testCurl(): void {
    $controller = new PaisesController();
    $controller->listar();

    $this->assertTrue(Curl::$to === "https://restcountries.eu/rest/v2/all", "Você utilizou Curl::to? e colocou a URL correta?");
    
    $this->assertTrue(Curl::$get, "Chamou o método get?");
  }

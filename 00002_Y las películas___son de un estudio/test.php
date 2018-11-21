public function testUp(): void {
  $mig = new AddStudioToMovies();
  
  $mig->up();
  
  $this->assertTrue(isset(Schema::$tableAlter), "¿Llamaste al método Schema::table dentro de la función up?");
  
  $this->assertTrue(is_string(Schema::$tableAlter), "El método Schema::table debería recibir un string como primer parámetro");
  
  $this->assertTrue(Schema::$tableAlter === "movies", "La tabla a modificar en el método up debería llamarse 'movies'. Sin embargo, se recibió '" . Schema::$tableAlter . "'");
  
  $this->assertTrue(Schema::$funcAlter instanceof Closure, "El segundo parámetro recibido por Schema::table debe ser una función anónima");
  
  $reflection = new ReflectionFunction(Schema::$funcAlter);
  $arguments  = $reflection->getParameters();

  $this->assertTrue(count($arguments) == 1, "La función anónima debe recibir un parámetro");
  
  $this->assertTrue($arguments[0]->getType() && $arguments[0]->getType()->getName() == "Blueprint", "La función anónima debe recibir un parámetro de tipo Blueprint");
  
  $bp = new BluePrint();
  $func = Schema::$funcAlter;
  $func($bp);
}

public function testDown(): void {
  $mig = new AddStudioToMovies();
  
  $mig->down();
  
  $this->assertTrue(isset(Schema::$tableAlter), "¿Llamaste al método Schema::table dentro de la función down?");
  
  $this->assertTrue(is_string(Schema::$tableAlter), "El método Schema::table debería recibir un string como primer parámetro");
  
  $this->assertTrue(Schema::$tableAlter === "movies", "La tabla a modificar en el método down debería llamarse 'movies'. Sin embargo, se recibió '" . Schema::$tableAlter . "'");
  
  $this->assertTrue(Schema::$funcAlter instanceof Closure, "El segundo parámetro recibido por Schema::table debe ser una función anónima");
  
  $reflection = new ReflectionFunction(Schema::$funcAlter);
  $arguments  = $reflection->getParameters();

  $this->assertTrue(count($arguments) == 1, "La función anónima debe recibir un parámetro");
  
  $this->assertTrue($arguments[0]->getType() && $arguments[0]->getType()->getName() == "Blueprint", "La función anónima debe recibir un parámetro de tipo Blueprint");
  
  $bp = new BluePrint();
  $func = Schema::$funcAlter;
  $func($bp);
}
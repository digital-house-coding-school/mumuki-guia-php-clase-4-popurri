public function testUp(): void {
  $mig = new CreateStudioTable();
  
  $mig->up();
  
  $this->assertTrue(isset(Schema::$tableUp), "¿Llamaste al método Schema::create dentro de la función up?");
  
  $this->assertTrue(is_string(Schema::$tableUp), "El método up debería recibir un string como primer parámetro");
  
  $this->assertTrue(Schema::$tableUp === "studio", "La tabla a crear en el método up debería llamarse 'studio'. Sin embargo, se recibió '" . Schema::$tableUp . "'");
}

public function testDown(): void {
  $mig = new CreateStudioTable();
  
  $mig->down();
  
  $this->assertTrue(isset(Schema::$tableDown), "¿Llamaste al método Schema::drop dentro de la función down?");
  
  $this->assertTrue(is_string(Schema::$tableDown), "El método down debería recibir un string");
  
  $this->assertTrue(Schema::$tableDown === "studio", "La tabla a eliminar en el método down debería llamarse 'studio'. Sin embargo, se recibió '" . Schema::$tableDown . "'");
}
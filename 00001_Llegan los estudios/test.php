public function testUp(): void {
  $this->assertTrue(true);
}

public function testDown(): void {
  $mig = new CreateStudioTable();
  
  $mig->down();
  
  $this->assertTrue(isset(Schema::$tableDown), "¿Llamaste al método Schema::drop dentro de la función down?");
}
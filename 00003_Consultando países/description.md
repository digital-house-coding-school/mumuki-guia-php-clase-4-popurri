Antes de finalizar, vamos a hacer una prueba sobre como consultar una API.

En este caso, vamos a suponer que tenemos una API que nos trae información con un listado de países.

Para consumir esta API habría que acceder a la URL "https://restcountries.eu/rest/v2/all".

Esta URL nos retornará la lista en formato JSON. Sin embargo, nosotros te pedimos que compartas el listado de paises con la vista, no en formato JSON sino directamente con un array,

¿Recuerdan como convertir un JSON a un array? ¡Mediante el método `json_decode`!

Tu trabajo entonces es reemplazar los **???** con el código necesario para obtener esta información utilizando la librería `Curl`

En la pista más abajo te dejamos un machete de como utilizarla.
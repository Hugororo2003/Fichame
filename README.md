# Fichame Iván

Esta rama del proyecto Fichame es una mejora de lo que en su día fue el proyecto.

Esta mejora viene dada por la segunda parte del examen de php que evaluaba la parte del segundo trimestre "Symfony".

La mejoras las vamos a ir anotando para ir directamente al grano y no perder tiempo.

-> Warehouse controller ->
No debemos meter un find All() porque estaba cargando todos, solo tenemos que cargar los que tienen un type=1.


-> Arreglado el register ->
No te podias registrar porque para hacerlos debías mandar el nif de una compañía (menuda fumada) asique en el MainController hemos mandado una variable company que almacena todas las company's en un array y en la ruta de la main.twig.html le pasamos ese nif de la posición 0 del array (para tener algo al menos).


-> Cambiado una condición en la main.twig.view para que los de almacén y los admin puedan crear almacén.
{% if is_granted("ROLE_ALMACEN") and is_granted("ROLE_ADMIN")%}


-> Cambiada la ruta del register para si le das a volver que te lleva a la main en vez del login (ya que en el login no hay botón de register).
Tambien añadimos este link-botón en la vista login para que tenga navegación(sin tener que usar las rutas) la página.


-> Gracias a chatGPT ->
Hacer que el registrationFormType.php el monthlytime sea IntegerType.


-> Job controller y Task controller cambios para que no puedan entrar aquellos que no deben con IsGranted(), a su misma vez hemos tocado la redirección de un formulario del template/task.

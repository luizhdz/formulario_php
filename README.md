# Formulario con PHP
# Funcionamiento General

Solo existe una pagina de cliente que es el **Index.php**, y archivo donde se valida los campos al hacer un **POST** que se incluye en la página de index.php. El formulario al hacer un submit, el *action* direciona a la misma pagina pero con el metodo de POST, por lo cual, entrará a la validacion de campos en **validate.php**.

En el directorio de *includes* se encuentran los archivos:
  - form: incluye un archivo *index.php* donde se encuentra el formulario
  - report: incluye un archivo *index.php* donde se encuentra el listado de los campos validos
  - header.inc : incluye en header principal de HTML
  - footer.inc : incluye el footer principal de HTML


# Campos  
El formulario cuenta con 6 campos para registrar:
  - Nombre: *text*
  - Apellidos: *text*
  - Fecha de nacimiento: *date*
  - Correo electrónico: *email*
  - Teléfono: *integer* 
  - Sexo: *option*
  
# Validaciones
Para el campo de **Nombre** se valida lo siguiente:
  - Que el campo no se envíe vacío
  - Que tenga al menos 4 caracteres

Para el campo de **Apellidos** se valida lo siguiente:
  - Que el campo no se envíe vacío
  - Que tenga al menos 4 caracteres

Para el campo de **Fecha de nacimiento** se valida lo siguiente:
  - Que el campo no se envíe vacío
  - Que contenga un formato válido *(ejemplo: 99/99/99999 lo marcaría como inválido)*
  
Para el campo de **Correo electrónico** se valida lo siguiente:
  - Que el campo no se envíe vacío
  - Que contenga un formato valido *ejemplo@ejemplo.com*
  
Para el campo de **Teléfono** se valida lo siguiente:
  - Que el campo no se envíe vacío
  - Debe tener 10 digitos
  
Para el campo de **Sexo** se valida lo siguiente:
  - Que el campo no se envíe vacío
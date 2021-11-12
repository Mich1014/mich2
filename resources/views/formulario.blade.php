<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css">
    <title>Wattpad</title>
    <style>

        </style>
    </head>
<body>
        <form action="formm.php"
        method="GET">
        <p>Nombre: <input type="text" 
        name="Nombre" size="40"></p>
        <p>Apellido: <input type="text"
          name="Nombre" size="40"></p>
        <p>Año de nacimiento: <input class="nacimiento"
        type="number" name="nacido"
        min="1900"></p>
        <p>Sexo: 
          <input type="radio" name="hmt"
          value="h">Hombre
          <input type="radio" name="hmt"
          value="m">Mujer
          <input type="radio" name="hmt"
          value="t">No binario
          </p>
          <p>Comentario: <input type="text"
            name="Nombre" size="40"></p>
          
            <div class="parteabajo">
                    <p> 
                            <input type="submit"
                            value="Enviar">
                        </p>
                        <p>
                            <input type="reset"
                            value="Borrar">
                        </p>   
            </div>
        
        </form>
</body>
</html>

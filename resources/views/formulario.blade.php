<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css">
    <title>Wattpad</title>
    <style>
*{box-sizing:border-box;}

body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("https://miro.medium.com/max/1400/1*SVtd2DDyI60HtLOmLRwpnQ.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}

form{
    width:500px;
    
	padding:80px;
	border-radius:10px;
    margin:auto;
    margin-top: 80px;
    background-color:rgba(255, 255, 255, 0.753);
    -webkit-box-shadow: 0px 0px 8px 2px #000000; 
    box-shadow: 0px 0px 8px 2px #000000;
}

form label{
	width:72px;
	font-weight:bold;
	display:inline-block;
}

form input[type="text"],
form input[type="email"]{
	width:180px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f646;
	margin:8px 0;
    display:inline-block;
    border: solid 1px black;
}

form input[type="submit"]{
	width:100%;
	padding:8px 16px;
	margin-top:32px;
	border: solid 0px black;
	border-radius:5px;
	display:block;
	color:#fff;
    background-color:rgb(89, 165, 28);
    box-shadow: 0px 0px 8px 1px #000000; 
    -webkit-box-shadow: 0px 0px 8px 1px #000000; 
    -moz-box-shadow: 0px 0px 8px 1px #000000; 
    font-weight: bold;
} 

form input[type="reset"]{
	width:100%;
	padding:8px 16px;
	margin-top:32px;
	border: solid 0px black;
	border-radius:5px;
	display:block;
	color:#fff;
    background-color:rgb(165, 28, 28);
    box-shadow: 0px 0px 8px 1px #000000; 
    -webkit-box-shadow: 0px 0px 8px 1px #000000; 
    -moz-box-shadow: 0px 0px 8px 1px #000000; 
    font-weight: bold;
} 



form input[type="submit"]:hover{
	cursor:pointer;
}

textarea{
	width:100%;
	height:100px;

	border-radius:3px;
	background-color:#f6f6f646;			
	margin:8px 0;
	/*resize: vertical | horizontal | none | both*/
	resize:none;
    display:block;
    
}
form .nacimiento {
    border: solid 1px black;
    border-radius:3px;
    padding:3px 10px;
    background-color:#f6f6f646;
}

.parteabajo {
    display: flex;
    justify-content: space-around;

}


.parteabajo p{
    padding: 0 40px 20px 40px;
}
        </style>
    </head>
<body>
        <form action=""
        method="Post">
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

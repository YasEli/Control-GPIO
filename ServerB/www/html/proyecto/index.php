<html>
	<head>
		<title>Control GPIO</title>
                <style type="text/css">
                  body {
                        background-image: url(pattern.png);
                       }
                 
                  header {
                          margin-top: 20px;
                          margin-bottom: 20px;
                          padding: 0.5px 0.5px 0.5px 0.5px;
                         }

                  header h1 {
                      text-align: center;
                      margin-bottom: 0px;
                      margin-top: 30px;
                  }

                  form {
                     margin: 0px;
                     padding: 50px;
                  }

                  footer {
                     background: black;
                     color: white;
                     text-align: center;
                  }
                </style>
	</head>
        <body>
            <header>
             <h1>Control GPIO</h1>
           </header>   
              <form id="form1" name="form1" method="post" action="gpio.php">
		GPIO 17
		<br></br>
	 	<input type="submit" id="encender17" name="encender17" value="ON">
		<input type="submit" id="apagarr17" name="apagar17" value="OFF">
		<br></br>
                GPIO 22
                <br></br>
                <input type="submit" id="encender22" name="encender22" value="ON">
                <input type="submit" id="apagar22" name="apagar22" value="OFF">
                <br></br>
                GPIO 27
                <br></br>
                <input type="submit" id="encender27" name="encender27" value="ON">
                <input type="submit" id="apagar27" name="apagar27" value="OFF">
                <br></br>
                <hr></hr>
                <br></br>
                TEMPORIZADOR GPIO 17
                <br></br>
                HI <input type="text" id="horaini" name="horaini">
                MI <input type="text" id="minini" name="minini">
                HF <input type="text" id="horaf" name="horaf">
                MF <input type="text" id="minf" name="minf">
                <br></br>
                <input type="submit" id="prog1" name="prog1" value="Apply">
                <br></br>
                <br></br>
                TEMPORIZADOR GPIO 22
                <br></br>
                HI <input type="text" id="horaini2" name="horaini2">
                MI <input type="text" id="minini2" name="minini2">
                HF <input type="text" id="horaf2" name="horaf2">
                MF <input type="text" id="minf2" name="minf2">
                <br></br>
                <input type="submit" id="prog2" name="prog2" value="Apply">
                <br></br>
                <br></br>
                TEMPORIZADOR GPIO 27
                <br></br>
                <br></br>
                HI <input type="text" id="horaini3" name="horaini3">
                MI <input type="text" id="minini3" name="minini3">
                HF <input type="text" id="horaf3" name="horaf3">
                MF <input type="text" id="minf3" name="minf3">
                <br></br>
                <input type="submit" id="prog3" name="prog3" value="Apply"> 
	      </form>
              <hr></hr>
              <form id="form2" name="form2" method="post" action="gpio.php">
               Control de camara
              <br></br>
              <input type="submit" id="activarFoto" name="activarFoto" value="Tomar foto">
              <input type="submit" id="activarMail" name="activarMail" value="Enviar foto">
              <br></br>
              <br></br>
              Temporizador de camara
              <br></br>
              HI <input type="text" id="horaini4" name="horaini4">
              MI <input type="text" id="minini4" name="minini4">
              <br></br>
              <input type="submit" id="prog4" name="prog4" value="Apply">
              </form> 
              <footer>Proyecto II Parcial &copy;</footer>
	</body>
</html>

<html>
  <head>
    <title>Diccionario de la lengua española-picaresca</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="http://materializecss.com/dist/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <main>
      <header>
	<nav>
	  <div class="nav-wrapper">
	    <a href="./index.html" class="brand-logo right">Generador de definiciones</a>
	    <ul id="nav-mobile" class="left hide-on-med-and-down">
	      <li><a href="./index.html">Generar definición</a></li>
              <li><a href="./FAQ.html">FAQ</a></li>
	    </ul>
	  </div>
	</nav>
      </header>
      <div class="container">
	<div class="row">
	  <form class="col s12" action="JavaScript:gen_definition()">
	    <div class="row">
	      <div class="input-field col s6">
		<input id="word_def" type="text" clas="validate">
		<label for="word_def" class="validate">Palabra a definir</label>
	      </div>
	    </div>
	    <div id="defs_block">
	      <div class="row definition" id="row_def">
		<p><span class="def_id">1</span>.</p>
		<div class="input-field col s6">
		  <select>
		    <option value="" disabled selected>Elije la categoría gramatical</option>
		    <option value="1">adjetivo</option>
		    <option value="2">sustantivo masculino</option>
		    <option value="3">sustantivo femenino</option>
		  </select>
		  <label>Categoría gramatical</label>
		</div> 
		<div class="col s12">
		  <div class="input-field inline">
		    <input type="text"></input>
		    <label>Definición</label>
		  </div>
		  <a class="btn-floating waves-effect waves-light red" onclick="Javascript:add_definition_row()">
		    <i class="material-icons">add</i></a>
		</div>
	      </div>
	    </div>
	    <!--a href="#modal_url"-->
	      <button id="gen_def" class="btn waves-effect waves-light" type="submit">
	      Generar definición <i class="material-icons right">send</i>
	      </button>
	      <!--/a-->
	      
	<div>
	</div>
	  </form>
	  <div id="modal_url" class="modal">
	    <div class="modal-content">
	      <p>Ya tienes tu url generada. Ahora sólo tienes que copiarla y
		pegarla en la barra de direcciones del navegador.</p>
	      <div class="row">
		<div class="col s11">
		  <input type="text" readonly="true"
		       id="final_url_value"></input>
		</div>
		<div class="col s1" id="copy_url_div">
		    <a href="#"><i class="material-icons">description</i><p>Copiar</p></a>
		</div>
	      </div>
	      <p> Gracias por usar nuestra web :)</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">¡Ciérrate!</a>
	    </div>
	  </div>
	</div>
	<div class="row">
          <iframe data-aa='520229' src='//ad.a-ads.com/520229?size=990x90' scrolling='no' style='width:990px; height:90px; border:0px;
		  padding:0;overflow:hidden' allowtransparency='true'></iframe>
	</div>
      </div>
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"
	    src="http://materializecss.com/bin/materialize.js"></script>
    <script src="init.js"></script>
    <script src="functions.js"></script>
  </body>
</html>


var gramatical_categories = {
    "nombre masculino":"m.",
    "nombre femenino":"f.",
    "nombre masculino y femenino":"m. y f.",
    "adjetivo":"adj.",
    "verbo transitivo":"tr.",
    "verbo intransitivo":"intr.",
    "verbo pronominal":"prnl.",
    "locución verbal":"loc. verb."
};

		  
var definition_html ='\
                <p><span class="def_id">1</span>.</p> \
		<div class="input-field col s6">\
		  <select>\
		    <option value="" disabled selected>Elije la categoría gramatical</option>\
		    <option value="1">adjetivo</option>\
		    <option value="2">nombre masculino</option>\
		    <option value="3">nombre femenino</option>\
		  </select>\
		  <label>Categoría gramatical</label>\
		</div> \
		<div class="col s12">\
		  <div class="input-field inline">\
		    <input type="text" class="def-val"></input>\
		    <label>Definición</label>\
		  </div>\
		  <a class="btn-floating waves-effect waves-light red" onclick="Javascript:add_definition_row()">\
		    <i class="material-icons">add</i></a>\
		  <a class="btn-floating waves-effect waves-light red" onclick="Javascript:delete_definition_row()">\
		    <i class="material-icons">delete</i></a>\
		</div>';

function gen_definition(){
    var base_url = 'http://dle.rae.es/?w=';
    var extra_url = '<div id="resultados"><article id="7lsKMtR"><header class="f">⁠⁠';
    var word_def = document.getElementById('word_def').value;
    var defs = $('.def-val');
    var total_defs = '';
    var definition;
    var gramatical_category;
    var final_gram_cat;
    var new_def;
    console.log(defs.length);
    for (var i=0; i < defs.length; i++){
	definition = defs[i].value;
	gramatical_category = $('.selected')[i].innerText;
	final_gram_cat = '<abbr class="d" title="' + gramatical_category + '">' + gramatical_categories[gramatical_category] + '</abbr>';
	var val = i+1;
	new_def ='<p class="j" id="LjRHphN"><span class="n_acep">' + val + '.</span>' + final_gram_cat + '<mark>' + definition + '</mark></p>';
	total_defs += new_def;
    }
    var final_url = base_url + encodeURI(extra_url + word_def + '</header><p class="n2"></p>' + total_defs + "</article></div>");
    var modal_block = document.getElementById('modal_url');
    var content_modal_block = document.getElementById('final_url_value');
    content_modal_block.value = final_url;
    $('#modal_url').modal('open');
    
}

function add_definition_row(){
    var defs_block = document.getElementById('defs_block');
    var row_def = document.getElementById('row_def');
    var new_def = document.createElement('div');
//    var new_def = row_def.cloneNode(true);
    new_def.setAttribute('id', 'row_def1');
    new_def.setAttribute('class', 'row definition');
    new_def.innerHTML = definition_html;
    defs_block.appendChild(new_def);
    var num_id_def = document.getElementsByClassName('def_id');
    num_id_def[num_id_def.length-1].innerHTML = parseInt(num_id_def[num_id_def.length-2].innerHTML)+1;
    $('select').formSelect();
}

function delete_definition_row(){
    var defs_block = document.getElementById('defs_block');
    defs_block.removeChild(defs_block.lastChild);
}

function copy_to_clipboard(bloque_url){
    bloque_url.focus();
    bloque_url.setSelectionRange(0, bloque_url.value.length);
    var exito;
    try {
	exito = document.execCommand('copy');
    }
    catch(e) {
	exito = false;
    }
    if (exito)
	Materialize.toast('¡Texto copiado guay!', 4000);
    else
	Materialize.toast('Algo ha fallado, cópialo a mano :(', 4000);
	
}

document.getElementById('copy_url_div').addEventListener('click', function() {
    copy_to_clipboard(document.getElementById('final_url_value'));
});

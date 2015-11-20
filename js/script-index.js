$("#verificar").click(function() {
  	var no_funcard = document.getElementById("no_funcard").value;
    $.ajax({
      type: "POST",
          url: "php/verifica-index.php",
          data: { 
            no_funcard: no_funcard
          },
    }).done(function(resultado) {
      if(resultado == 1){
        $("#alert-success").removeClass("hidden");
        $("#alert-danger").addClass("hidden");
        $("#alert-warning").addClass("hidden");
        $("#form-datos").removeClass("hidden");
        $('#form-group').removeClass('hidden');
        document.getElementById("no_oculto").value = no_funcard;
      }if(resultado == 0){
        $("#alert-danger").removeClass("hidden");
        $("#alert-warning").addClass("hidden");
        $("#alert-success").addClass("hidden");
        document.getElementById("form-datos").reset();
        $("#form-datos").addClass("hidden");
      }if (resultado == 2) {
        $("#alert-danger").addClass("hidden");
        $("#alert-warning").removeClass("hidden");
        $("#alert-success").addClass("hidden");
        document.getElementById("form-datos").reset();
        $("#form-datos").addClass("hidden");
      };
    });
});

var options = {
  Estado : [],
  BajaCalifornia : ["Ensenada","Mexicalli","Tijuana"],
  BajaCaliforniaSur : ["Los Cabos Bcs"],
  Campeche : ["Cd. del Carmen"],
  Coahuila : ["Saltillo","Torreon"],
  Colima : ["Manzanillo"],
  DistritoFederal : ["Aeropuerto","Aguilas","Coapa","Del Valle","Escandon Condesa","Florida","Lindavista","Nueva Santa María","Paseos de Taxqueña","Pedregal","Polanco","Vista Hermosa","Xochimilco"],
  Durango : ["Durango"],
  EstadodeMexico : ["Aragon","Arboledas","Chalco","Cuautitlan","Interlomas Tecamachalco","Lomas Verdes","Metepec","Satelite","Texcoco"],
  Guanajuato : ["Celaya","León"],
  Hidalgo : ["Pachuca"],
  Jalisco : ["Guadalajara I Naciones Unidas","Guadalajara II Plaza del Sol","Guadalajara III Bugambilias"],
  Michoacan : ["Morelia"],
  Morelos : ["Cuernavaca"],
  Nayarit : ["Nuevo Vallarta","Tepic"],
  NuevoLeon : ["Monterrey Cumbres","Monterrey San Jerónimo","Monterrey Satelite","San Nicolas de Los Garza"],
  Puebla : ["Puebla Camino Real","Puebla II La Noria"],
  Queretaro : ["Queretaro"],
  QuintanaRoo : ["Cancún","Cozumel"],
  SanLuisPotosi : ["San Luis Potosí"]
}
$(function(){
    var fillSecondary = function(){
        var selected = $('#primary').val();
        $('#secondary').empty();
        $('#secondary').append('<option value="">Sucursal</option>');
        options[selected].forEach(function(element,index){
            $('#secondary').append('<option value="'+element+'">'+element+'</option>');
        });
    }
    $('#primary').change(fillSecondary);
    fillSecondary();
});


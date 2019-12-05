$(document).ready(function(){
  $("#CDN").click(afficheProvinces);
});

function afficheProvinces(){
  var monId = this.id;
  $.ajax({
        url 	: "index.php?action=afficheProvinces",
        type 	: "POST",
        data 	: {code_pays:monId},
        success : function(output){
                  $('#provinces').html(output);
                },
        error	: function(){
                  $('#provinces').html("Désolé, aucun résultat trouvé.");
                }
  });
}

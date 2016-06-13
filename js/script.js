$(document).ready(function(){

	$("a.movel").click(function(){
		theLink = "ti_tel_movel.php";
		$("#conteudo_ti").load(theLink);

	});
    
    $( "input" ).on( "click", function() {
      $( ".funcSelec" ).html( $( "input:checked" ).val() + " is checked!" );
    });
   

});

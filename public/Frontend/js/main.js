	var generate = $('.GenerateButton');
	var dwarfNameDiv = $('.dwarf-names');


class Dwarf {
  constructor(full_name, first_name, last_name) {
    this.full_name = full_name;
    this.first_name = first_name;
    this.last_name = last_name;
  }
}



function getDwarves(){
	$.ajax({
	 	url: "http://192.168.2.16/name/full/10",
	 	 	success: function(result){
	 	 		$('.dwarf-names').text('');
				$.each(result, function( i, val ) {

	 	 			$('.dwarf-names').append(val.full_name + "<br>");
				});
	  	}
	});
}





$('.GenerateButton').click(function(){
	getDwarves();
});
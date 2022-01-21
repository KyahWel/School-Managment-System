function toggle(source) {
	var value = parseInt($("#capacity").val());
	var checkboxes = document.querySelectorAll('input[type="checkbox"]');
	var counter = 0;
	for (var i = 0; i < checkboxes.length; i++) {
		if (checkboxes[i] != source && counter < value + 1) {
			checkboxes[i].checked = source.checked;
		}
		counter++;
	}
    if(source.checked == true){
        $(".child").prop("disabled", "disabled");
        $(".child:checked").removeAttr("disabled");
    }
    else{
        $(".child").removeAttr("disabled");
    }  
}

function toggleEdit(source) {
	var value = parseInt($("#capacity").val());
	var checkboxes = document.querySelectorAll('input[type="checkbox"]');
	var counter = 0;
	for (var i = 0; i < checkboxes.length; i++) {
		if (checkboxes[i] != source && counter < value + 1) {
			checkboxes[i].checked = source.checked;
		}
		counter++;
	}
    if(source.checked == true){
        $(".child").prop("disabled", "disabled");
        $(".child:checked").removeAttr("disabled");
    }
    else{
        $(".child").removeAttr("disabled");
    }  
}

$(document).ready(function() {  
    $("#capacity").change(function() {
        var value = parseInt($("#capacity").val());
        console.log(value);
        if(Number.isNaN(value) || value == 0){
            $("input[type=checkbox]").prop("disabled", "disabled");
        }else{
            $("input[type=checkbox]").removeAttr("disabled");
            $(".child").click(function () {
                var value = parseInt($("#capacity").val());
                var count = $(".child:checked").length;
                if(value>0){
                    if (count < value) {
                        $(".parent").prop('checked', false);
                        $(".parent").removeAttr("disabled");
                        $(".child").removeAttr("disabled");
                    } else {
                        $(".parent").prop('checked', true);
                        $(".parent").prop("disabled", "disabled");
                        $(".child").prop("disabled", "disabled");
                        $(".child:checked").removeAttr("disabled");
                        $(".parent:checked").removeAttr("disabled");
                    }
                }
            });
        }
    });
});



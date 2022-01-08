function toggle(source){
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var counter = 0;
    for (var i = 0; i < checkboxes.length; i++){
        counter++;
        if (checkboxes[i] != source && counter <= 26){
            checkboxes[i].checked = source.checked;
        }
    }
}
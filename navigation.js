var searchForm = document.getElementById('searchForm')
var search_button = document.getElementById('submit_button')

searchForm.oninput = function(){
    search_button.disabled = !searchForm.value.trim();
}
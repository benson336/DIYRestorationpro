//Client side validation (Warning message)
/*(function() {
	'use strict';
	window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();*/


document.getElementById('button').addEventListener('click', loadUser);

function loadUser(){
	console.log('Yes Sir');
    /*var request = new XMLHttpRequest();
    request.open('GET', 'https://api.github.com/users', true);

    request.onload = function(){
        if(this.status == 200){
            var users = JSON.parse(this.responseText);
            console.log(users);
        }
    }*/
}




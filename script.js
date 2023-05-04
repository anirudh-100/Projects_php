function addEntry(){
	var entry="<input type='text' name='children[]' placeholder='Enter here...' class='form-control' required='required'/>";
	var element=document.createElement("div");
	element.setAttribute('class', 'form-group');
	element.innerHTML=entry;
	document.getElementById('children').appendChild(element);
}
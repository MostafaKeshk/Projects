var input = document.querySelector('input');
var sub = document.querySelector('.sub');
var list = document.querySelector('.list');


sub.addEventListener('click',add);

function add(){
		var new_item = document.createElement('li');
		new_item.classList.add('list-item');
		var item_text = document.createElement('p');
		item_text.classList.add('list-text');
		item_text.innerText = input.value;
		list.appendChild(new_item);
		input.value ="";
		var done = document.createElement('button');
		done.classList.add('done');
		done.innerText="done";
		done.setAttribute('onclick','this.parentElement.classList.add("d");');
		var del = document.createElement('button');
		del.classList.add('del');
		del.innerText="delete";
		del.setAttribute('onclick','this.parentElement.classList.add("x");');
		new_item.appendChild(done);
		new_item.appendChild(del);
		new_item.appendChild(item_text);
}

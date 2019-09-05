//Map this array of text to the DOM.
//
// ['Bob', 'Jim', Matt', 'Mary', 'Suzy', ' Sarah']
//
// hint: Each array element must appear in it's own html tag in the browser.

//const originalArray = ['Bob', 'Jim', 'Matt', 'Suzy', 'Sarah'];
//const newArray = originalArray.map(function nameInHtmlTag(name) {
	//return name	;
//});
//console.log(originalArray); // ['Bob', 'Jim', Matt', 'Mary', 'Suzy', ' Sarah']
//console.log(newArray); // ['Bob', 'Jim', Matt', 'Mary', 'Suzy', ' Sarah']


const names = ['Bob', 'Jim', 'Matt', 'Suzy', 'Sarah'];

names.map(name => {
//create p
	const newName = document.createElement("p");
//create content to add to p
	const newContent = document.createTextNode(name);
//add text to p
	newName.appendChild(newContent);
//append p tag with content to the div with the id of names
	document.getElementById("names").appendChild(newName)
});
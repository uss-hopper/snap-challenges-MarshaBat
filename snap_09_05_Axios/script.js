//Using this HTML, write the JavaScript file script.js that makes an Axios call to the Dog API and replaces the id="target" div with a list of all of the dog breeds.
//
// This should be done exclusively in the JavaScript file.  You will not need to make any changes to the HTML file, as the script is already imported for you.


const onPageLoad = () => {
	axios.get('https://dog.ceo/api/breeds/list/all').then(({data}) => {
		//console.log(data);
		let breeds = data.message;
		let cards = '';

		for (let key in breeds) {
			cards = cards + '<li>' + key + '</li>';
		}
		cards = '<ul>' + cards + '</ul>';
		let html = document.getElementById("target");
		html.innerHTML = cards;

	});
};








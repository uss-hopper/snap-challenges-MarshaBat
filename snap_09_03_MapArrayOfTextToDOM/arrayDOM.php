<!-- /*Map this array of text to the DOM.

['Bob', 'Jim', Matt', 'Mary', 'Suzy', ' Sarah']

hint: Each array element must appear in it's own html tag in the browser. -->

<body>



<p id="demo">Click the button to map the arry of text to the DOM.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
	var names = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];

	function myFunction() {
		document.getElementById("demo").innerHTML = "Hello World";
</script>

</body>




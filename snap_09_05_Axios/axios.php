<!--Using this HTML, write the JavaScript file script.js that makes an Axios call to the Dog API and replaces the id="target" div with a list of all of the dog breeds.

This should be done exclusively in the JavaScript file.  You will not need to make any changes to the HTML file, as the script is already imported for you.-->


<html lang="en">
<meta charset="utf-8"/>
<title>Basic HTML Page</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
		  integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
<script src="script.js"></script>
<body onload="onPageLoad()">
<h2>List of Dog breeds</h2>
<div id="target">Fluffy dogs</div>
</body>
</html>

<h1 id="test" style="margin:100px;text-align:center;"></h1>

<h1 id="test2" style="margin:100px;text-align:center;"></h1>
<script>
	
var test = document.getElementById('test');
var test2 = document.getElementById('test2');
var date = new Date();
var val = '<h1>Message</h1>';


var wh = window.innerHeight;
var wd = window.innerWidth;
test.innerHTML = wd;
test2.innerHTML = wh;
window.onresize = function() {
	var wd = window.innerWidth;
	var wh = window.innerHeight;
	test.innerHTML = wd;
	test2.innerHTML = wh;
}
</script>

const book = document.getElementById('book');
const leftbtn = document.getElementById('btn-left');
const rightbtn = document.getElementById('btn-right');
const count = document.getElementById('count');

function Next() {
	$(flipbookEL).turn('next');
	Count();
}

function Prev() {
	$(flipbookEL).turn('previous')
	Count();
}

leftbtn.addEventListener("click", Prev);
rightbtn.addEventListener("click", Next);

// $("#ar").turn({
// 		width: 400,
// 		height: 300,
// 		autoCenter: true
// 	});

function Count() {
var page = $(flipbookEL).turn('page')
count.textContent = `${page}/252`
}

var flipbookEL = document.getElementById('flipbook');

window.addEventListener('resize', function (e) {
	flipbookEL.style.width = '';
  flipbookEL.style.height = '';
  $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
});

$(flipbook).turn({
    autoCenter: true,
    duration: 950,
    display: 'double',
    inclination: 50,
    when: {
turned: function(event, page, pageObj) {
	if (page===6) {
$('#flipbook').turn('display', 'single');
} 
else if (page===7) {
$('#flipbook').turn('display', 'single');
}
else if (page===8) {
$('#flipbook').turn('display', 'single');
}
else {
$('#flipbook').turn('display', 'double');
}
}
}
});

function zoomin() {
$('#flipbook').turn('zoom', 1.2, 5);
$('#flipbook').turn('resize');
}

function zoomout() {
$('#flipbook').turn('zoom', 1, 5);
$('#flipbook').turn('resize');
}
Loader = setTimeout(showPage, 10000);
function showPage() {
  document.getElementById("loader").style.display = "none";
}
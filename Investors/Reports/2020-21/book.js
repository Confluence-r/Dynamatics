
const wrapper = document.getElementById('cont');
const book = document.getElementById('book');
const leftbtn = document.getElementById('btn-left');
const rightbtn = document.getElementById('btn-right');
const count = document.getElementById('count');
const jump = document.getElementById('jump');

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
count.textContent = `${page}/128`
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
    display: 'single',
    inclination: 50,
    when: {
turned: function(event, page, pageObj) {
	if (page===1) {
$('#flipbook').turn('display', 'double');
} 

else {
$('#flipbook').turn('display', 'single');
}
}
}
});

function toggleFullScreen() {
  if (!document.fullscreenElement) {
      wrapper.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    }
  }
}

function zoomin() {
$('#flipbook').turn('zoom', 2, 2);
$('#flipbook').turn('resize');
}

function zoomout() {
$('#flipbook').turn('zoom', 1, 2);
$('#flipbook').turn('resize');
}
Loader = setTimeout(showPage, 3000);
function showPage() {
  document.getElementById("loader").style.display = "none";
}

function Jump() {
  let jumpcount = jump.value;
  $('#flipbook').turn('page', jumpcount);
}

jump.addEventListener("change", Jump);
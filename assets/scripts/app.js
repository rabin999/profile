/**
*	Copyright
*	Rabin Bhandari
*/

// Load Event
window.addEventListener("load", () => {
	ready();
});

// Resize Event
window.addEventListener('resize', setContainerHeight);

function ready(){
	setContainerHeight();
};

// Set Container Width
function setContainerHeight() {
	let header = document.querySelector('header').offsetHeight,
		footer = document.querySelector('footer').offsetHeight;
	document.querySelector('main.container').setAttribute("style", 
		'height:'+(window.innerHeight - header - footer)+'px; min-height:'+(window.innerHeight - header - footer)+'px;');
	
}

// Mouse Scroller Event
document.querySelector('div.mouse-scroller').addEventListener("mouseover", function(e) {
	this.classList.remove('bounce');
});

document.querySelector('div.mouse-scroller').addEventListener("mouseout", function(e) {
	this.classList.add('bounce');
});

document.querySelector('div.mouse-scroller').addEventListener("click", function(e) {
	nextPage();
});

if(window.addEventListener) {
	window.addEventListener('mousewheel', function(e) {
		if (e.deltaY < 0) {
		    prevPage();
		}
		if (e.deltaY > 0) {
			nextPage();
		}
	});	
} else {
	window.attachEvent('onmousewheel', function(e) {
		if (e.deltaY < 0) {
		    prevPage();
		}
		if (e.deltaY > 0) {
			nextPage();
		}
	});
}

// Add Page Switch Transition
function switchPage(from, to) {

	from.classList.remove('left');
	from.classList.add('right');

	// Add tranformation start Point
	to.style.transform = 'translateX(110%)';

	let leftPage = setTimeout(function() {
		to.style.transform = 'none';
		clearTimeout(leftPage);

		document.querySelectorAll('.pages').forEach((element) => {
			element.classList.remove('active');
			element.classList.remove('right');
			document.querySelector('.progress-bar').style.width = 'auto';
		});

		to.classList.add('active');
		to.classList.add('left');
	}, 500);
}

// Add active class to page switcher
function activePageSwitcher(ref) {
	if(ref) {

		// Hide all pages div and add active to last
		document.querySelectorAll('.switch-page').forEach((element) => {
			element.classList.remove('active');
		});
		ref.classList.add('active');
	}
}

function nextPage() {
	let activePage 	= document.querySelector('.pages.active');
	let nextPage 	= activePage.nextElementSibling;
	let switchPage 	= document.querySelector('.switch-page[data-page='+nextPage.getAttribute('data-page')+']');
	if(nextPage)  {
		switchPage(activePage, nextPage);
	}
}

function prevPage() {
	let activePage 	= document.querySelector('.pages.active');
	let prevPage 	= activePage.previousElementSibling;
	let switchPage 	= document.querySelector('.switch-page[data-page='+prevPage.getAttribute('data-page')+']');
	if(prevPage){
		switchPage(activePage, prevPage);
	}
}

// Mouse Scroller Event : END

// Page Switcher Event
document.querySelectorAll('.switch-page').forEach((element) => {
	element.addEventListener('click', function(e) {
		e.preventDefault();
		let page = this.getAttribute('data-page');

		// Add Active class to triggered page
		initProgress();

		// Switch Page
		switchPage(document.querySelector('.pages.active'), document.querySelector('.pages[data-page='+page+']'));
		activePageSwitcher(this);
	})
})


// Progress Bar
function initProgress(progress) {
	let percent = 5;
	document.querySelector('.progress-bar').style.width = 'auto';
	if(progress === undefined) {
		let p  = setInterval(() => {
				  	document.querySelector('.progress-bar').style.width = percent+'%';
					percent += 5;
					if(percent > 100) {
						clearInterval(p);
					}
				}, 0);
	}
}

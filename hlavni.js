
$(document).ready(function(){

var rootUrl = '';
//var rootUrl = '/stredisko';



$.reject({
	reject: {
//		all: true,
		msie5: true,
		msie6: true,
		msie7: true,
		msie8: true,
		msie9: true,
		chrome1: true,
		chrome2: true,
		chrome3: true,
		chrome4: true,
		firefox1: true,
		firefox2: true,
		firefox3: true,
		safari1: true,
		safari2: true,
		safari3: true,
		safari4: true,
		safari5: true,
		opera7: true,
		opera8: true,
		opera9: true,
		opera10: true,
		opera11: true
	},
	display: ['msie', 'firefox', 'chrome', 'opera', 'safari'],
	browserInfo: {
		firefox: {
			text: 'Firefox',
			url: 'http://www.mozilla.com/firefox/'
		},
		safari: {
			text: 'Safari',
			url: 'http://www.apple.com/safari/download/'
		},
		opera: {
			text: 'Opera',
			url: 'http://www.opera.com/download/'
		},
		chrome: {
			text: 'Chrome',
			url: 'http://www.google.com/chrome/'
		},
		msie: {
			text: 'Internet Explorer',
			url: 'http://www.microsoft.com/windows/Internet-explorer/'
		}
	},
	header: 'Váš prohlížeč je zastaralý!',
	paragraph1: 'Váš prohlížeč je zastaralý, tyto stánky v něm nebudou správně fungovat. Pro prohlížení našich ' +
		'stránek si stáhněte nejnovější verzi vašeho oblíbeného prohlížeče. Seznam těch nejpoužívanějších s odkazy' +
		'najdete níže',
	paragraph2: 'Kliknutím na ikonu prohlížeče se dostanete na stránku, kde je ke stažení nejnovější verze.',
	closeMessage: 'Upozorňujeme že zážitek z prohlížení našich stránek ve starých prohlížečích je minimální. ' +
		'Nejnižší verze prohlížečů, ve kterých stránky fungují správně, jsou: ' +
		'Internet Explorer 10, firefox 4.0, Chrome 5, Opera 11.50, Safari 5.0',
	closeLink: 'Zavřít',
	closeESC: false,
	imagePath: rootUrl + '/Obrazky/Prohlizece/'
});



var mapaStranek = new Object();
mapaStranek[''] = new Stranka("", "2");
mapaStranek['stredisko'] = new Stranka("", "2");
mapaStranek['severka'] = new Stranka("severka", "23");
mapaStranek['jiznikriz'] = new Stranka("jiznikriz", "27");
mapaStranek['vlocka'] = new Stranka("vlocka", "28");
mapaStranek['hiawatha'] = new Stranka("hiawatha", "29");

mapaStranek.get = function(stranka) {
	return mapaStranek[stranka];
}

nahrajObsahStranky(mapaStranek.get($('meta[name=pocatecni_stranka]').attr("content")));

$(".odkaz_stredisko").click(function(){
    nahrajStranku(mapaStranek.get('stredisko'));
});

$(".odkaz_severka").click(function(){
	nahrajStranku(mapaStranek.get('severka'));
});

$(".odkaz_jizni_kriz").click(function(){
	nahrajStranku(mapaStranek.get('jiznikriz'));
});

$(".odkaz_vlocka").click(function(){
	nahrajStranku(mapaStranek.get('vlocka'));
});

$(".odkaz_hiawatha").click(function(){
	nahrajStranku(mapaStranek.get('hiawatha'));
});

function Stranka(adresa, id){
    this.adresa = adresa;
    this.id = id;
	this.imagesLoaded = false;
}

function nahrajStranku(stranka){
	window.history.pushState('', 'bbb', rootUrl + '/' + stranka.adresa)
	nahrajObsahStranky(stranka);
}

function nahrajObsahStranky(stranka){
    nahrajObsahInfo(stranka);
    nahrajSlider(stranka);
}

function nahrajObsahInfo(stranka){
	$("#clanek").children().css("display", "none");
	$("#" + stranka.id).css("display", "block");
}

function nahrajSlider(stranka){
	$(".nivoSlider:not(." + stranka.id + ")").each(function (index) {
		if($(this).data('nivoslider')){
			$(this).data('nivoslider').stop();
		}
		$(this).css("display", "none");
	})

//	$(".nivoSlider:not(." + stranka.id + ")").css("display", "none");

	$(".nivoSlider." + stranka.id).css("display", "block");
	if(!stranka.imagesLoaded){
		$(".nivoSlider." + stranka.id + " img").attr("src", function() {return $(this).attr('data-src')});
		stranka.imagesLoaded = true;
		$('.nivoSlider.' + stranka.id).nivoSlider({
			effect: 'fade',
			controlNav: false
		});
	}
	else {
		$(".nivoSlider." + stranka.id).data('nivoslider').start()
	}

//	$(".stredisko_slider." + stranka.id).attr("id", "slider");
//	$(".stredisko_slider." + stranka.id).addClass("nivoSlider");



//	$("#slider").css("display", "none");
//	$("#slider." + stranka.id).css("display", "block");
}




});

//$(window).load(function() {
//	$('#slider').nivoSlider({
//		effect: 'fade',
//		controlNav: false
//	});
//});
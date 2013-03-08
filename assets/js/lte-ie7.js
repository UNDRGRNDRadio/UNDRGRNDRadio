/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-facebook' : '&#xe000;',
			'icon-twitter' : '&#xe001;',
			'icon-soundcloud' : '&#xe002;',
			'icon-google-plus' : '&#xe003;',
			'icon-lastfm' : '&#xe004;',
			'icon-mail' : '&#xe005;',
			'icon-earth' : '&#xe006;',
			'icon-share' : '&#xe007;',
			'icon-home' : '&#xe008;',
			'icon-bubbles' : '&#xe009;',
			'icon-music' : '&#xe00a;',
			'icon-cloud-download' : '&#xe00b;',
			'icon-feed' : '&#xe00c;',
			'icon-file-zip' : '&#xe00d;',
			'icon-calendar' : '&#xe00e;',
			'icon-feed-2' : '&#xe00f;',
			'icon-podcast' : '&#xe010;',
			'icon-qrcode' : '&#xe011;',
			'icon-link' : '&#xe012;',
			'icon-brightness-contrast' : '&#xe013;',
			'icon-heart' : '&#xe014;',
			'icon-heart-2' : '&#xe015;',
			'icon-star' : '&#xe016;',
			'icon-star-2' : '&#xe017;',
			'icon-star-3' : '&#xe018;',
			'icon-thumbs-up' : '&#xe019;',
			'icon-thumbs-up-2' : '&#xe01a;',
			'icon-happy' : '&#xe01b;',
			'icon-smiley' : '&#xe01c;',
			'icon-tongue' : '&#xe01d;',
			'icon-sad' : '&#xe01e;',
			'icon-wink' : '&#xe01f;',
			'icon-grin' : '&#xe020;',
			'icon-cool' : '&#xe021;',
			'icon-angry' : '&#xe022;',
			'icon-evil' : '&#xe023;',
			'icon-shocked' : '&#xe024;',
			'icon-confused' : '&#xe025;',
			'icon-neutral' : '&#xe026;',
			'icon-wondering' : '&#xe027;',
			'icon-chrome' : '&#xe028;',
			'icon-firefox' : '&#xe029;',
			'icon-IE' : '&#xe02a;',
			'icon-opera' : '&#xe02b;',
			'icon-safari' : '&#xe02c;',
			'icon-css3' : '&#xe02d;',
			'icon-html5' : '&#xe02e;',
			'icon-expand' : '&#xe02f;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};
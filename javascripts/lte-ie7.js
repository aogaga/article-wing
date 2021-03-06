/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#xe000;',
			'icon-home-2' : '&#xe001;',
			'icon-newspaper' : '&#xe002;',
			'icon-pencil' : '&#xe003;',
			'icon-pencil-2' : '&#xe004;',
			'icon-droplet' : '&#xe005;',
			'icon-pictures' : '&#xe006;',
			'icon-picture' : '&#xe007;',
			'icon-camera' : '&#xe008;',
			'icon-music' : '&#xe009;',
			'icon-play' : '&#xe00a;',
			'icon-film' : '&#xe00b;',
			'icon-camera-2' : '&#xe00c;',
			'icon-spades' : '&#xe00d;',
			'icon-clubs' : '&#xe00e;',
			'icon-diamonds' : '&#xe00f;',
			'icon-broadcast' : '&#xe010;',
			'icon-mic' : '&#xe011;',
			'icon-book' : '&#xe012;',
			'icon-file' : '&#xe013;',
			'icon-file-2' : '&#xe014;',
			'icon-new' : '&#xe015;',
			'icon-copy' : '&#xe016;',
			'icon-folder' : '&#xe017;',
			'icon-folder-2' : '&#xe018;',
			'icon-tag' : '&#xe019;',
			'icon-cart' : '&#xe01a;',
			'icon-basket' : '&#xe01b;',
			'icon-calculate' : '&#xe01c;',
			'icon-support' : '&#xe01d;',
			'icon-phone' : '&#xe01e;',
			'icon-mail' : '&#xe01f;',
			'icon-location' : '&#xe020;',
			'icon-compass' : '&#xe021;',
			'icon-history' : '&#xe022;',
			'icon-clock' : '&#xe023;',
			'icon-bell' : '&#xe024;',
			'icon-calendar' : '&#xe025;',
			'icon-printer' : '&#xe026;',
			'icon-mouse' : '&#xe027;',
			'icon-screen' : '&#xe028;',
			'icon-laptop' : '&#xe029;',
			'icon-mobile' : '&#xe02a;',
			'icon-cabinet' : '&#xe02b;',
			'icon-drawer' : '&#xe02c;',
			'icon-drawer-2' : '&#xe02d;',
			'icon-box' : '&#xe02e;',
			'icon-box-add' : '&#xe02f;',
			'icon-box-remove' : '&#xe030;',
			'icon-download' : '&#xe031;',
			'icon-upload' : '&#xe032;',
			'icon-database' : '&#xe033;',
			'icon-flip' : '&#xe034;',
			'icon-flip-2' : '&#xe035;',
			'icon-undo' : '&#xe036;',
			'icon-redo' : '&#xe037;',
			'icon-forward' : '&#xe038;',
			'icon-reply' : '&#xe039;',
			'icon-reply-2' : '&#xe03a;',
			'icon-comments' : '&#xe03b;',
			'icon-comments-2' : '&#xe03c;',
			'icon-comments-3' : '&#xe03d;',
			'icon-comments-4' : '&#xe03e;',
			'icon-comments-5' : '&#xe03f;',
			'icon-user' : '&#xe040;',
			'icon-user-2' : '&#xe041;',
			'icon-user-3' : '&#xe042;',
			'icon-busy' : '&#xe043;',
			'icon-loading' : '&#xe044;',
			'icon-loading-2' : '&#xe045;',
			'icon-search' : '&#xe046;',
			'icon-zoom-in' : '&#xe047;',
			'icon-zoom-out' : '&#xe048;',
			'icon-key' : '&#xe049;',
			'icon-key-2' : '&#xe04a;',
			'icon-locked' : '&#xe04b;',
			'icon-unlocked' : '&#xe04c;',
			'icon-wrench' : '&#xe04d;',
			'icon-equalizer' : '&#xe04e;',
			'icon-cog' : '&#xe04f;',
			'icon-pie' : '&#xe050;',
			'icon-bars' : '&#xe051;',
			'icon-stats-up' : '&#xe052;',
			'icon-gift' : '&#xe053;',
			'icon-trophy' : '&#xe054;',
			'icon-diamond' : '&#xe055;',
			'icon-coffee' : '&#xe056;',
			'icon-rocket' : '&#xe057;',
			'icon-meter-slow' : '&#xe058;',
			'icon-meter-medium' : '&#xe059;',
			'icon-meter-fast' : '&#xe05a;',
			'icon-dashboard' : '&#xe05b;',
			'icon-fire' : '&#xe05c;',
			'icon-lab' : '&#xe05d;',
			'icon-remove' : '&#xe05e;',
			'icon-remove-2' : '&#xe05f;',
			'icon-remove-3' : '&#xe060;',
			'icon-briefcase' : '&#xe061;',
			'icon-briefcase-2' : '&#xe062;',
			'icon-cars' : '&#xe063;',
			'icon-bus' : '&#xe064;',
			'icon-cube' : '&#xe065;',
			'icon-cube-2' : '&#xe066;',
			'icon-puzzle' : '&#xe067;',
			'icon-glasses' : '&#xe068;',
			'icon-glasses-2' : '&#xe069;',
			'icon-accessibility' : '&#xe06a;',
			'icon-accessibility-2' : '&#xe06b;',
			'icon-target' : '&#xe06c;',
			'icon-target-2' : '&#xe06d;',
			'icon-lightning' : '&#xe06e;',
			'icon-power' : '&#xe06f;',
			'icon-power-2' : '&#xe070;',
			'icon-clipboard' : '&#xe071;',
			'icon-clipboard-2' : '&#xe072;',
			'icon-playlist' : '&#xe073;',
			'icon-grid-view' : '&#xe074;',
			'icon-tree-view' : '&#xe075;',
			'icon-cloud' : '&#xe076;',
			'icon-cloud-2' : '&#xe077;',
			'icon-download-2' : '&#xe078;',
			'icon-upload-2' : '&#xe079;',
			'icon-upload-3' : '&#xe07a;',
			'icon-link' : '&#xe07b;',
			'icon-link-2' : '&#xe07c;',
			'icon-flag' : '&#xe07d;',
			'icon-flag-2' : '&#xe07e;',
			'icon-attachment' : '&#xe07f;',
			'icon-eye' : '&#xe080;',
			'icon-eye-2' : '&#xe081;',
			'icon-bookmark' : '&#xe082;',
			'icon-bookmark-2' : '&#xe083;',
			'icon-star' : '&#xe084;',
			'icon-star-2' : '&#xe085;',
			'icon-star-3' : '&#xe086;',
			'icon-heart' : '&#xe087;',
			'icon-heart-2' : '&#xe088;',
			'icon-thumbs-up' : '&#xe089;',
			'icon-thumbs-down' : '&#xe08a;',
			'icon-happy' : '&#xe08b;',
			'icon-smiley' : '&#xe08c;',
			'icon-neutral' : '&#xe08d;',
			'icon-plus' : '&#xe08e;',
			'icon-minus' : '&#xe08f;',
			'icon-help' : '&#xe090;',
			'icon-help-2' : '&#xe091;',
			'icon-blocked' : '&#xe092;',
			'icon-cancel' : '&#xe093;',
			'icon-cancel-2' : '&#xe094;',
			'icon-checkmark' : '&#xe095;',
			'icon-minus-2' : '&#xe096;',
			'icon-plus-2' : '&#xe097;',
			'icon-enter' : '&#xe098;',
			'icon-exit' : '&#xe099;',
			'icon-loop' : '&#xe09a;',
			'icon-arrow-up-left' : '&#xe09b;',
			'icon-arrow-up' : '&#xe09c;',
			'icon-arrow-up-right' : '&#xe09d;',
			'icon-arrow-right' : '&#xe09e;',
			'icon-arrow-down-right' : '&#xe09f;',
			'icon-arrow-down' : '&#xe0a0;',
			'icon-arrow-down-left' : '&#xe0a1;',
			'icon-arrow-left' : '&#xe0a2;',
			'icon-arrow-up-left-2' : '&#xe0a3;',
			'icon-arrow-up-2' : '&#xe0a4;',
			'icon-arrow-up-right-2' : '&#xe0a5;',
			'icon-arrow-right-2' : '&#xe0a6;',
			'icon-arrow-down-right-2' : '&#xe0a7;',
			'icon-arrow-down-2' : '&#xe0a8;',
			'icon-arrow-down-left-2' : '&#xe0a9;',
			'icon-arrow-left-2' : '&#xe0aa;',
			'icon-arrow-up-left-3' : '&#xe0ab;',
			'icon-arrow-up-3' : '&#xe0ac;',
			'icon-arrow-up-right-3' : '&#xe0ad;',
			'icon-arrow-right-3' : '&#xe0ae;',
			'icon-arrow-down-right-3' : '&#xe0af;',
			'icon-arrow-down-3' : '&#xe0b0;',
			'icon-arrow-down-left-3' : '&#xe0b1;',
			'icon-arrow-left-3' : '&#xe0b2;',
			'icon-arrow-up-4' : '&#xe0b3;',
			'icon-arrow-right-4' : '&#xe0b4;',
			'icon-arrow-down-4' : '&#xe0b5;',
			'icon-arrow-left-4' : '&#xe0b6;',
			'icon-arrow-up-5' : '&#xe0b7;',
			'icon-arrow-right-5' : '&#xe0b8;',
			'icon-arrow-down-5' : '&#xe0b9;',
			'icon-arrow-left-5' : '&#xe0ba;',
			'icon-arrow-up-6' : '&#xe0bb;',
			'icon-arrow-right-6' : '&#xe0bc;',
			'icon-arrow-down-6' : '&#xe0bd;',
			'icon-arrow-left-6' : '&#xe0be;',
			'icon-menu' : '&#xe0bf;',
			'icon-enter-2' : '&#xe0c0;',
			'icon-backspace' : '&#xe0c1;',
			'icon-backspace-2' : '&#xe0c2;',
			'icon-tab' : '&#xe0c3;',
			'icon-tab-2' : '&#xe0c4;',
			'icon-checkbox' : '&#xe0c5;',
			'icon-checkbox-unchecked' : '&#xe0c6;',
			'icon-checkbox-partial' : '&#xe0c7;',
			'icon-radio-checked' : '&#xe0c8;',
			'icon-radio-unchecked' : '&#xe0c9;',
			'icon-font' : '&#xe0ca;',
			'icon-paragraph-left' : '&#xe0cb;',
			'icon-paragraph-center' : '&#xe0cc;',
			'icon-paragraph-right' : '&#xe0cd;',
			'icon-paragraph-justify' : '&#xe0ce;',
			'icon-left-to-right' : '&#xe0cf;',
			'icon-right-to-left' : '&#xe0d0;',
			'icon-share' : '&#xe0d1;',
			'icon-new-tab' : '&#xe0d2;',
			'icon-new-tab-2' : '&#xe0d3;',
			'icon-embed' : '&#xe0d4;',
			'icon-code' : '&#xe0d5;',
			'icon-bluetooth' : '&#xe0d6;',
			'icon-share-2' : '&#xe0d7;',
			'icon-share-3' : '&#xe0d8;',
			'icon-mail-2' : '&#xe0d9;',
			'icon-mail-3' : '&#xe0da;',
			'icon-mail-4' : '&#xe0db;',
			'icon-google' : '&#xe0dc;',
			'icon-google-plus' : '&#xe0dd;',
			'icon-google-plus-2' : '&#xe0de;',
			'icon-google-plus-3' : '&#xe0df;',
			'icon-gplus' : '&#xe0e0;',
			'icon-google-drive' : '&#xe0e1;',
			'icon-facebook' : '&#xe0e2;',
			'icon-facebook-2' : '&#xe0e3;',
			'icon-facebook-3' : '&#xe0e4;',
			'icon-instagram' : '&#xe0e5;',
			'icon-twitter' : '&#xe0e6;',
			'icon-twitter-2' : '&#xe0e7;',
			'icon-twitter-3' : '&#xe0e8;',
			'icon-feed' : '&#xe0e9;',
			'icon-feed-2' : '&#xe0ea;',
			'icon-feed-3' : '&#xe0eb;',
			'icon-youtube' : '&#xe0ec;',
			'icon-youtube-2' : '&#xe0ed;',
			'icon-vimeo' : '&#xe0ee;',
			'icon-vimeo-2' : '&#xe0ef;',
			'icon-flickr' : '&#xe0f0;',
			'icon-flickr-2' : '&#xe0f1;',
			'icon-flickr-3' : '&#xe0f2;',
			'icon-picassa' : '&#xe0f3;',
			'icon-picassa-2' : '&#xe0f4;',
			'icon-dribbble' : '&#xe0f5;',
			'icon-dribbble-2' : '&#xe0f6;',
			'icon-dribbble-3' : '&#xe0f7;',
			'icon-forrst' : '&#xe0f8;',
			'icon-forrst-2' : '&#xe0f9;',
			'icon-deviantart' : '&#xe0fa;',
			'icon-deviantart-2' : '&#xe0fb;',
			'icon-github' : '&#xe0fc;',
			'icon-github-2' : '&#xe0fd;',
			'icon-github-3' : '&#xe0fe;',
			'icon-github-4' : '&#xe0ff;',
			'icon-github-5' : '&#xe100;',
			'icon-github-6' : '&#xe101;',
			'icon-git' : '&#xe102;',
			'icon-github-7' : '&#xe103;',
			'icon-wordpress' : '&#xe104;',
			'icon-wordpress-2' : '&#xe105;',
			'icon-joomla' : '&#xe106;',
			'icon-blogger' : '&#xe107;',
			'icon-blogger-2' : '&#xe108;',
			'icon-tumblr' : '&#xe109;',
			'icon-tumblr-2' : '&#xe10a;',
			'icon-yahoo' : '&#xe10b;',
			'icon-yahoo-2' : '&#xe10c;',
			'icon-amazon' : '&#xe10d;',
			'icon-amazon-2' : '&#xe10e;',
			'icon-tux' : '&#xe10f;',
			'icon-apple' : '&#xe110;',
			'icon-finder' : '&#xe111;',
			'icon-android' : '&#xe112;',
			'icon-windows' : '&#xe113;',
			'icon-soundcloud' : '&#xe114;',
			'icon-soundcloud-2' : '&#xe115;',
			'icon-skype' : '&#xe116;',
			'icon-reddit' : '&#xe117;',
			'icon-linkedin' : '&#xe118;',
			'icon-linkedin-2' : '&#xe119;',
			'icon-lastfm' : '&#xe11a;',
			'icon-lastfm-2' : '&#xe11b;',
			'icon-delicious' : '&#xe11c;',
			'icon-stumbleupon' : '&#xe11d;',
			'icon-stumbleupon-2' : '&#xe11e;',
			'icon-pinterest' : '&#xe11f;',
			'icon-pinterest-2' : '&#xe120;',
			'icon-xing' : '&#xe121;',
			'icon-xing-2' : '&#xe122;',
			'icon-flattr' : '&#xe123;',
			'icon-foursquare' : '&#xe124;',
			'icon-foursquare-2' : '&#xe125;',
			'icon-paypal' : '&#xe126;',
			'icon-paypal-2' : '&#xe127;',
			'icon-paypal-3' : '&#xe128;',
			'icon-yelp' : '&#xe129;',
			'icon-libreoffice' : '&#xe12a;',
			'icon-file-pdf' : '&#xe12b;',
			'icon-file-openoffice' : '&#xe12c;',
			'icon-file-word' : '&#xe12d;',
			'icon-file-excel' : '&#xe12e;',
			'icon-file-powerpoint' : '&#xe12f;',
			'icon-file-zip' : '&#xe130;',
			'icon-file-xml' : '&#xe131;',
			'icon-file-css' : '&#xe132;',
			'icon-html5' : '&#xe133;',
			'icon-html5-2' : '&#xe134;',
			'icon-css3' : '&#xe135;',
			'icon-chrome' : '&#xe136;',
			'icon-firefox' : '&#xe137;',
			'icon-IE' : '&#xe138;',
			'icon-opera' : '&#xe139;',
			'icon-safari' : '&#xe13a;',
			'icon-IcoMoon' : '&#xe13b;',
			'icon-chat' : '&#xe13c;',
			'icon-chat-alt-stroke' : '&#xe13d;',
			'icon-chat-alt-fill' : '&#xe13e;',
			'icon-comment-alt1-stroke' : '&#xe13f;',
			'icon-comment-alt1-fill' : '&#xe140;',
			'icon-comment-stroke' : '&#xe141;',
			'icon-comment-fill' : '&#xe142;',
			'icon-comment-alt2-stroke' : '&#xe143;',
			'icon-comment-alt2-fill' : '&#xe144;',
			'icon-checkmark-2' : '&#xe145;',
			'icon-check-alt' : '&#xe146;',
			'icon-x' : '&#xe147;',
			'icon-x-altx-alt' : '&#xe148;',
			'icon-denied' : '&#xe149;',
			'icon-cursor' : '&#xe14a;',
			'icon-rss' : '&#xe14b;',
			'icon-rss-alt' : '&#xe14c;',
			'icon-wrench-2' : '&#xe14d;',
			'icon-dial' : '&#xe14e;',
			'icon-cog-2' : '&#xe14f;',
			'icon-calendar-2' : '&#xe150;',
			'icon-calendar-alt-stroke' : '&#xe151;',
			'icon-calendar-alt-fill' : '&#xe152;',
			'icon-share-4' : '&#xe153;',
			'icon-mail-5' : '&#xe154;',
			'icon-heart-stroke' : '&#xe155;',
			'icon-heart-fill' : '&#xe156;',
			'icon-movie' : '&#xe157;',
			'icon-document-alt-stroke' : '&#xe158;',
			'icon-document-alt-fill' : '&#xe159;',
			'icon-document-stroke' : '&#xe15a;',
			'icon-document-fill' : '&#xe15b;',
			'icon-plus-3' : '&#xe15c;',
			'icon-plus-alt' : '&#xe15d;',
			'icon-minus-3' : '&#xe15e;',
			'icon-minus-alt' : '&#xe15f;',
			'icon-pin' : '&#xe160;',
			'icon-link-3' : '&#xe161;',
			'icon-bolt' : '&#xe162;',
			'icon-move' : '&#xe163;',
			'icon-move-alt1' : '&#xe164;',
			'icon-move-alt2' : '&#xe165;',
			'icon-equalizer-2' : '&#xe166;',
			'icon-award-fill' : '&#xe167;',
			'icon-award-stroke' : '&#xe168;',
			'icon-magnifying-glass' : '&#xe169;',
			'icon-trash-stroke' : '&#xe16a;',
			'icon-trash-fill' : '&#xe16b;',
			'icon-beaker-alt' : '&#xe16c;',
			'icon-beaker' : '&#xe16d;',
			'icon-key-stroke' : '&#xe16e;',
			'icon-key-fill' : '&#xe16f;',
			'icon-new-window' : '&#xe170;',
			'icon-lightbulb' : '&#xe171;',
			'icon-spin-alt' : '&#xe172;',
			'icon-spin' : '&#xe173;',
			'icon-curved-arrow' : '&#xe174;',
			'icon-undo-2' : '&#xe175;',
			'icon-reload' : '&#xe176;',
			'icon-reload-alt' : '&#xe177;',
			'icon-loop-2' : '&#xe178;',
			'icon-loop-alt1' : '&#xe179;',
			'icon-loop-alt2' : '&#xe17a;',
			'icon-loop-alt3' : '&#xe17b;',
			'icon-loop-alt4' : '&#xe17c;',
			'icon-transfer' : '&#xe17d;',
			'icon-move-vertical' : '&#xe17e;',
			'icon-move-vertical-alt1' : '&#xe17f;',
			'icon-move-vertical-alt2' : '&#xe180;',
			'icon-move-horizontal' : '&#xe181;',
			'icon-move-horizontal-alt1' : '&#xe182;',
			'icon-move-horizontal-alt2' : '&#xe183;',
			'icon-arrow-left-7' : '&#xe184;',
			'icon-arrow-left-alt1' : '&#xe185;',
			'icon-arrow-left-alt2' : '&#xe186;',
			'icon-arrow-right-7' : '&#xe187;',
			'icon-arrow-right-alt1' : '&#xe188;',
			'icon-arrow-right-alt2' : '&#xe189;',
			'icon-arrow-up-7' : '&#xe18a;',
			'icon-arrow-up-alt1' : '&#xe18b;',
			'icon-arrow-up-alt2' : '&#xe18c;',
			'icon-arrow-down-7' : '&#xe18d;',
			'icon-arrow-down-alt1' : '&#xe18e;',
			'icon-arrow-down-alt2' : '&#xe18f;',
			'icon-cd' : '&#xe190;',
			'icon-steering-wheel' : '&#xe191;',
			'icon-microphone' : '&#xe192;',
			'icon-headphones' : '&#xe193;',
			'icon-volume' : '&#xe194;',
			'icon-volume-mute' : '&#xe195;',
			'icon-play-2' : '&#xe196;',
			'icon-pause' : '&#xe197;',
			'icon-stop' : '&#xe198;',
			'icon-eject' : '&#xe199;',
			'icon-first' : '&#xe19a;',
			'icon-last' : '&#xe19b;',
			'icon-play-alt' : '&#xe19c;',
			'icon-fullscreen-exit' : '&#xe19d;',
			'icon-fullscreen-exit-alt' : '&#xe19e;',
			'icon-fullscreen' : '&#xe19f;',
			'icon-fullscreen-alt' : '&#xe1a0;',
			'icon-iphone' : '&#xe1a1;',
			'icon-battery-empty' : '&#xe1a2;',
			'icon-battery-half' : '&#xe1a3;',
			'icon-battery-full' : '&#xe1a4;',
			'icon-battery-charging' : '&#xe1a5;',
			'icon-compass-2' : '&#xe1a6;',
			'icon-box-2' : '&#xe1a7;',
			'icon-folder-stroke' : '&#xe1a8;',
			'icon-folder-fill' : '&#xe1a9;',
			'icon-at' : '&#xe1aa;',
			'icon-ampersand' : '&#xe1ab;',
			'icon-info' : '&#xe1ac;',
			'icon-question-mark' : '&#xe1ad;',
			'icon-pilcrow' : '&#xe1ae;',
			'icon-hash' : '&#xe1af;',
			'icon-left-quote' : '&#xe1b0;',
			'icon-right-quote' : '&#xe1b1;',
			'icon-left-quote-alt' : '&#xe1b2;',
			'icon-right-quote-alt' : '&#xe1b3;',
			'icon-article' : '&#xe1b4;',
			'icon-read-more' : '&#xe1b5;',
			'icon-list' : '&#xe1b6;',
			'icon-list-nested' : '&#xe1b7;',
			'icon-book-2' : '&#xe1b8;',
			'icon-book-alt' : '&#xe1b9;',
			'icon-book-alt2' : '&#xe1ba;',
			'icon-pen' : '&#xe1bb;',
			'icon-pen-alt-stroke' : '&#xe1bc;',
			'icon-pen-alt-fill' : '&#xe1bd;',
			'icon-pen-alt2' : '&#xe1be;',
			'icon-brush' : '&#xe1bf;',
			'icon-brush-alt' : '&#xe1c0;',
			'icon-eyedropper' : '&#xe1c1;',
			'icon-layers-alt' : '&#xe1c2;',
			'icon-layers' : '&#xe1c3;',
			'icon-image' : '&#xe1c4;',
			'icon-camera-3' : '&#xe1c5;',
			'icon-aperture' : '&#xe1c6;',
			'icon-aperture-alt' : '&#xe1c7;',
			'icon-chart' : '&#xe1c8;',
			'icon-chart-alt' : '&#xe1c9;',
			'icon-bars-2' : '&#xe1ca;',
			'icon-bars-alt' : '&#xe1cb;',
			'icon-eye-3' : '&#xe1cc;',
			'icon-user-4' : '&#xe1cd;',
			'icon-home-3' : '&#xe1ce;',
			'icon-clock-2' : '&#xe1cf;',
			'icon-lock-stroke' : '&#xe1d0;',
			'icon-lock-fill' : '&#xe1d1;',
			'icon-unlock-stroke' : '&#xe1d2;',
			'icon-unlock-fill' : '&#xe1d3;',
			'icon-tag-stroke' : '&#xe1d4;',
			'icon-tag-fill' : '&#xe1d5;',
			'icon-sun-stroke' : '&#xe1d6;',
			'icon-sun-fill' : '&#xe1d7;',
			'icon-moon-stroke' : '&#xe1d8;',
			'icon-moon-fill' : '&#xe1d9;',
			'icon-cloud-3' : '&#xe1da;',
			'icon-rain' : '&#xe1db;',
			'icon-umbrella' : '&#xe1dc;',
			'icon-star-4' : '&#xe1dd;',
			'icon-map-pin-stroke' : '&#xe1de;',
			'icon-map-pin-fill' : '&#xe1df;',
			'icon-map-pin-alt' : '&#xe1e0;',
			'icon-target-3' : '&#xe1e1;',
			'icon-download-3' : '&#xe1e2;',
			'icon-upload-4' : '&#xe1e3;',
			'icon-cloud-download' : '&#xe1e4;',
			'icon-cloud-upload' : '&#xe1e5;',
			'icon-fork' : '&#xe1e6;',
			'icon-paperclip' : '&#xe1e7;',
			'icon-folder-3' : '&#xe1e8;',
			'icon-camera-4' : '&#xe1e9;',
			'icon-search-2' : '&#xe1ea;'
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
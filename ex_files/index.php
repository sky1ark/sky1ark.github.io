if ( window.scrollY === 0 ) {
	$( '#searchInput' ).focus();
}

mw.hook('wikipage.content').add(function () {
    var el = mw.util.addPortletLink('p-lang', mw.config.get('wgArticlePath').replace(/\$1/, 'Википедия:Список_Википедий'), 'Полный список', 'interwiki-completelist');
    if (el) {
        el.style.fontWeight = 'bold';
    }
    
    if ( window.scrollY === 0 ) {
    	$( '#searchInput' ).focus();
    }
    
	$( '#p-wikibase-otherprojects li.wb-otherproject-link a' ).each( function () {
		var $link = $( this ),
			url = $link.attr( 'href' ).replace( '/Main_Page', mw.util.wikiUrlencode( '/Заглавная_страница' ) );
		if ( $link.parent().hasClass('wb-otherproject-mediawiki') ) {
			url = $link.attr( 'href') + '/ru';
		}
		$link.attr( 'href', url );
	} );
});
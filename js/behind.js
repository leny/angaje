/* flatLand! - hire me !
 *
 * JS Document - /js/behind.js
 * Scripts for the behind page
 *
 * coded by leny@flatLand!
 * using prism (http://prismjs.com/) & utopia (http://lea.verou.me/)
 *
 * started at 28/04/13
 */

// @codekit-prepend prism.js
// @codekit-prepend utopia.js

(function(){

    if(!document.body.addEventListener) {
        return;
    }

    $$('[data-src]').forEach(function(element) {
        var src = element.getAttribute('data-src'),
            html = element.getAttribute('data-type') === 'text/html',
            contentProperty = html? 'innerHTML' : 'textContent';

        $u.xhr({
            url: src,
            callback: function(xhr) {
                try {
                    element[contentProperty] = xhr.responseText;

                    // Run JS

                    $$('script', element).forEach(function (script) {
                        var after = script.nextSibling, parent = script.parentNode;
                        parent.removeChild(script);
                        document.head.appendChild(script);
                    });

                    $u.event.fire(element, 'contentreceived', {
                        src: src
                    });
                }
                catch (e) {}
            }
        });
    });

    document.body.addEventListener('contentreceived', function(evt) {
        var pre = evt.target;

        if(!/pre/i.test(pre.nodeName)) {
            return;
        }

        var language = {
            'coffee': 'coffeescript',
            'sass': 'scss',
            'html': 'markup'
        }[(evt.src.match(/\.(\w+)$/) || [,''])[1]];

        var code = document.createElement('code');

        code.className = 'language-' + language;

        code.textContent = pre.textContent;
        pre.textContent = '';

        pre.appendChild(code);

        Prism.highlightElement(code);
    });

})();

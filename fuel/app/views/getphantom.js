var page = require('webpage').create();
var url = 'https://www.mirrativ.com/';

page.open(url, function(status) {
    var html = page.evaluate(function () {
        return document.documentElement.outerHTML;
    });

    console.log(html);

    phantom.exit();
});

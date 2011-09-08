SITE = {
  
  'body-class': function() {
    // Script specific to this body class
  }
  
};

UTIL = {
  fire: function(funcname, args) {
    var namespace = SITE;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (typeof namespace[funcname] == 'function') {
      namespace[funcname](args);
    }
  },
  loadEvents: function() {
    $.each(document.body.className.split(/\s+/), function(i, className) {
      UTIL.fire(className);
    });
  }
};

$(document).ready(UTIL.loadEvents);

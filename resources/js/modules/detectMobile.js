/* jshint esversion: 6 */

(function(){
    'use strict';

    function isMobile() {
        return (window.innerWidth <= 800 && window.innerHeight <= 600);
    }
})();

export {isMobile};

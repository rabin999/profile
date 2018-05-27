"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.error = error;
/**
 * 
 * A small plugin written by Rabin Bhandari
 * 
 *	@copyright 2018
 *	@author Rabin Bhandari <rabin.bhandari999@gmail.com>
 *
 */

// -------------------------------
//          Helpers
// --------------------------------

/**
* @param type: string types of errors
* @param message: string
*/
function error() {
    var type = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "Error";
    var message = arguments[1];

    if (message) {
        if (window[type]) {
            throw new window[type](message);
        } else if (window.console) {
            console.error(message);
        }
    }
}
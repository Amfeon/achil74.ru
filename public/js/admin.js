/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ 5:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(6);


/***/ }),

/***/ 6:
/***/ (function(module, exports) {


/*document.getElementById('thumnailEdit').onchange(function (e) {
    //e.preventDefault();
    //alert(document.getElementById('thumnailImage').getAttribute('src'));
});
*/
window.onload = function () {
    var image = document.getElementById('thumnailImage');
    var changes = document.getElementById('thumnailEdit');
    var hiddenImage = document.getElementById('image');
    var token = document.querySelector('meta[name="csrf-token"]').content;
    changes.addEventListener("change", function (e) {
        //ajax запрос
        e.preventDefault();
        var data = new FormData();
        data.append('image', changes.files[0]);
        data.append('bob', 'fuck');
        fetch('/admin/ajax-image', {
            method: "POST",
            headers: {
                'X-CSRF-Token': token
                //"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
                // "Content-type": "multipart/form-data; boundary=something"
            },
            body: data
        }).then(function (response) {
            // alert(response.status); // 200
            //
            return response.json();
        }).then(function (data) {
            console.log(data.path);
            image.setAttribute('src', '/storage/' + data.path);
            hiddenImage.setAttribute('value', data.path);
        }).catch(function (error) {
            //  alert('no good');
        });
    });
};

/***/ })

/******/ });
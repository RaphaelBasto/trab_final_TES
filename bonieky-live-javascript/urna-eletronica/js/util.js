
/**
 * Funcao para os requests
 * @constructor
 * @param {string} url - url que vai receber a request
 * @param {string} method - metodo http
 * @param {requestCallback} callback - The callback that handles the response.
 */

function ajax(url, method, callback) {
  let request = new XMLHttpRequest();
  request.overrideMimeType("application/json");

  request.open(method, url, true);
  request.setRequestHeader("Content-type", "application/json")
  request.onreadystatechange = () => {
    if (request.readyState === 4 && request.status == "200") {
        callback(request.responseText);
    }
  };

  request.send();
}

/**
* PLEASE DO NOT MODIFY THIS FILE. WORK ON THE ES6 VERSION.
* OTHERWISE YOUR CHANGES WILL BE REPLACED ON THE NEXT BUILD.
**/

/**
 * @copyright Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */
// Ajax call to get the override status.
(function () {
  'use strict'; // Add a listener on content loaded to initiate the check.

  document.addEventListener('DOMContentLoaded', function () {
    if (Joomla.getOptions('js-privacy-check')) {
      var options = Joomla.getOptions('js-privacy-check');

      var update = function update(type, text, linkHref) {
        var link = document.getElementById('plg_quickicon_privacycheck');
        var linkSpans = link.querySelectorAll('span.j-links-link');

        if (link) {
          link.classList.add(type);

          if (linkHref) {
            link.setAttribute('href', linkHref);
          }
        }

        if (linkSpans.length) {
          linkSpans.forEach(function (span) {
            span.innerHTML = text;
          });
        }
      };

      var languageStrings = options.plg_quickicon_privacycheck_text;
      Joomla.request({
        url: options.plg_quickicon_privacycheck_ajax_url,
        method: 'GET',
        data: '',
        perform: true,
        onSuccess: function onSuccess(response) {
          var privacyRequestsList = JSON.parse(response);

          if (privacyRequestsList.data.number_urgent_requests === 0) {
            // No requests
            update('success', languageStrings.NOREQUEST, '');
          } else {
            // Requests
            update('danger', "".concat(languageStrings.REQUESTFOUND, "&nbsp;<span class=\"badge badge-light\">").concat(privacyRequestsList.data.number_urgent_requests, "</span>"), options.plg_quickicon_privacycheck_url);
          }
        },
        onError: function onError() {
          // An error occurred
          update('danger', languageStrings.ERROR, '');
        }
      });
    }
  });
})();
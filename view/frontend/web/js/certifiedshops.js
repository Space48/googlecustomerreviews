define(['jquery'], function ($) {
    'use strict';

    $(document).ready(function () {
        var html = $('#gts-order').html();
        $('#test-customerreviews').text(html);
    });
});

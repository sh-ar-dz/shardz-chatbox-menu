(function($) {
    'use strict';

    $(document).ready(function() {
        // Chatbox functionality
        $('.shardz-chatbox-toggle').on('click', function(e) {
            e.preventDefault();
            $('.shardz-chatbox-content').toggleClass('active');
        });

        // Mobile menu functionality can be added here if needed
    });

})(jQuery);



        function openRequirementsCard(ID)
        {
            if($('#' + ID).hasClass('requ-nonactive-questions-card'))
            {
                closeAllRequirements();
                 $('#' + ID).addClass('requ-questions-card').removeClass("requ-nonactive-questions-card");
                 $('#' + ID).children(".requ-nonactive-question-part").addClass('requ-question-part').removeClass("requ-nonactive-question-part");
                 $('#' + ID).children(".requ-nonactive-answer-part").addClass('requ-answer-part').removeClass("requ-nonactive-answer-part");
                 $('#' + ID).children(".requ-question-part").children(".requ-arrow-icon").addClass('requ-active-arrow').removeClass("requ-nonactive-arrow");
                 $('#' + ID).children(".requ-question-part").children(".requ-nonactive-arrow-icon").addClass('requ-nonactive-arrow').removeClass("requ-active-arrow");
            }
            else{
                $('#' + ID).addClass("requ-nonactive-questions-card").removeClass('requ-questions-card');
                $('#' + ID).children(".requ-question-part").addClass("requ-nonactive-question-part").removeClass('requ-question-part');
                $('#' + ID).children(".requ-answer-part").removeClass('requ-answer-part').addClass("requ-nonactive-answer-part");
                $('#' + ID).children(".requ-nonactive-question-part").children(".requ-arrow-icon").addClass('requ-nonactive-arrow').removeClass("requ-active-arrow");
                $('#' + ID).children(".requ-nonactive-question-part").children(".requ-nonactive-arrow-icon").addClass('requ-active-arrow').removeClass("requ-nonactive-arrow");
                
            }
        }

        function closeAllRequirements()
        {
            $(".requ-questions-card").each(function(index) {
                var $box = $(this); // `this` is instance of .box
                $box.addClass("requ-nonactive-questions-card").removeClass('requ-questions-card');
                $box.children(".requ-question-part").addClass("requ-nonactive-question-part").removeClass('requ-question-part');
                $box.children(".requ-answer-part").removeClass('requ-answer-part').addClass("requ-nonactive-answer-part");
                $box.children(".requ-nonactive-question-part").children(".requ-arrow-icon").addClass('requ-nonactive-arrow').removeClass("requ-active-arrow");
                $box.children(".requ-nonactive-question-part").children(".requ-nonactive-arrow-icon").addClass('requ-active-arrow').removeClass("requ-nonactive-arrow");
           
            });
           
    }
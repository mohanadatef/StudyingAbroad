
    // function openQuestion(cardId,iconId, headId, prgId) {
    //     console.log(document.getElementById(headId).className.includes("nonactive-card-header"));

    //     if (document.getElementById(headId).className.includes("nonactive-card-header")) {

    //         var elemsContent = document.getElementsByClassName("active-card-parg");
    //         var elemsHead = document.getElementsByClassName("active-card-header");
    //         var elemsIcon = document.getElementsByClassName("active-card-icon");
    //         var elemsCards = document.getElementsByClassName("active-card");
    //         console.log(elemsContent);
    //         console.log(elemsHead);
    //         console.log(elemsIcon);

    //         for (var i = 0; i < elemsContent.length; i++) {
    //             console.log(elemsContent[i].id);
    //             if (elemsContent[i].id != prgId) {
    //                 elemsCards[i].className = elemsCards[i].className.replace("active-card","nonactive-card");
    //                 // header
    //                 elemsHead[i].className = elemsHead[i].className.replace("active-card-header", "nonactive-card-header");
    //                 // icon
    //                 elemsIcon[i].setAttribute("src", "./assets/icons/dropup.png");
    //                 elemsIcon[i].className = elemsIcon[i].className.replace("active-card-parg", "nonactive-card-parg");

    //                 // content
    //                 elemsContent[i].className = elemsContent[i].className.replace("active-card-parg", "nonactive-card-parg");
    //             }
    //         }

    //         document.getElementById(cardId).className = document.getElementById(cardId).className.replace("nonactive-card","active-card");

    //         // header
    //         document.getElementById(headId).className = document.getElementById(headId).className.replace("nonactive-card-header", "active-card-header");
    //         // icon
    //         document.getElementById(iconId).className = document.getElementById(iconId).className.replace("nonactive-card-icon", "active-card-icon");
    //         document.getElementById(iconId).setAttribute("src", "./assets/icons/dropdown.png");
    //         // content
    //         document.getElementById(prgId).className = document.getElementById(prgId).className.replace("nonactive-card-parg", "active-card-parg");
    //     }
    //     else {
    //         document.getElementById(cardId).className = document.getElementById(cardId).className.replace("active-card","nonactive-card");

    //         // header
    //         document.getElementById(headId).className = document.getElementById(headId).className.replace("active-card-header", "nonactive-card-header");
    //         // icon
    //         document.getElementById(iconId).className = document.getElementById(iconId).className.replace("active-card-icon", "nonactive-card-icon");
    //         document.getElementById(iconId).setAttribute("src", "./assets/icons/dropup.png");
    //         // content
    //         document.getElementById(prgId).className = document.getElementById(prgId).className.replace("active-card-parg", "nonactive-card-parg");
    //     }
    // }




    //     function hovericon(id,img) {
    //        console.log(document.getElementById(id).className.includes("nonactive-card-icon"));
    //        if(document.getElementById(id).className.includes("nonactive-card-icon"))
    //             document.getElementById(id).setAttribute('src', img);
    //     }
    //     function unhovericon(id,img) {
    //        console.log(id);
    //        if(document.getElementById(id).className.includes("nonactive-card-icon"))
    //             document.getElementById(id).setAttribute('src', img);
    //     }



        function openQuestionCard(ID)
        {
            if($('#' + ID).hasClass('service-nonactive-questions-card'))
            {
                  closeAllQuestions();
                 $('#' + ID).addClass('service-questions-card').removeClass("service-nonactive-questions-card");
                 $('#' + ID).children(".service-nonactive-question-part").addClass('service-question-part').removeClass("service-nonactive-question-part");
                 $('#' + ID).children(".service-nonactive-answer-part").addClass('service-answer-part').removeClass("service-nonactive-answer-part");
                 $('#' + ID).children(".service-question-part").children(".service-arrow-icon").addClass('service-active-arrow').removeClass("service-nonactive-arrow");
                 $('#' + ID).children(".service-question-part").children(".service-nonactive-arrow-icon").addClass('service-nonactive-arrow').removeClass("service-active-arrow");
            }
            else{
                $('#' + ID).addClass("service-nonactive-questions-card").removeClass('service-questions-card');
                $('#' + ID).children(".service-question-part").addClass("service-nonactive-question-part").removeClass('service-question-part');
                $('#' + ID).children(".service-answer-part").removeClass('service-answer-part').addClass("service-nonactive-answer-part");
                $('#' + ID).children(".service-nonactive-question-part").children(".service-arrow-icon").addClass('service-nonactive-arrow').removeClass("service-active-arrow");
                $('#' + ID).children(".service-nonactive-question-part").children(".service-nonactive-arrow-icon").addClass('service-active-arrow').removeClass("service-nonactive-arrow");
                
            }
        }

        function closeAllQuestions()
        {
            $(".service-questions-card").each(function(index) {
                var $box = $(this); // `this` is instance of .box
                $box.addClass("service-nonactive-questions-card").removeClass('service-questions-card');
                $box.children(".service-question-part").addClass("service-nonactive-question-part").removeClass('service-question-part');
                $box.children(".service-answer-part").removeClass('service-answer-part').addClass("service-nonactive-answer-part");
                $box.children(".service-nonactive-question-part").children(".service-arrow-icon").addClass('service-nonactive-arrow').removeClass("service-active-arrow");
                $box.children(".service-nonactive-question-part").children(".service-nonactive-arrow-icon").addClass('service-active-arrow').removeClass("service-nonactive-arrow");
           
            });
           
    }
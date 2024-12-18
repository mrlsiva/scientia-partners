$(function() {

    $('.wizard > .steps li a').click(function() {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function() {
        $("#wizard").steps('next');
    })
    $('.backward').click(function() {
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide();
    });
    $('.select').click(function(event) {
        event.stopPropagation();
    });
    $('.select .select-control').click(function() {
        $(this).parent().next().toggle();
    })
    $('.select .dropdown li').click(function() {
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })

    // $('[data-toggle="tooltip"]').tooltip();


    $(document).ready(function() {
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $('#slider-service').slick({
            dots: true,
            rows: 2,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    rows: 2,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 1,
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });

    });


})



//multi form ===================================
//DOM elements
const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};

//remove class from a set of items
const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

        elem.classList.remove(className);

    });

};

//return exect parent node of the element
const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }

    return currentNode;

};

//get active button step number
const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {

    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'js-active');

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};

//get active panel
const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

            activePanel = elem;

        }

    });

    return activePanel;

};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {

    const animation = $(DOMstrings.stepFormPanels, 'js-active').attr("data-animation");

    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');
    removeClasses(DOMstrings.stepFormPanels, animation);
    // removeClasses(DOMstrings.stepFormPanels, 'js-active', 'animate__animated', animation);
    removeClasses(DOMstrings.stepFormPanels, 'animate__animated');

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

            elem.classList.add('js-active');
            // stepFormPanels
            elem.classList.add('animate__animated', animation);

            setTimeout(function() {
                removeClasses(DOMstrings.stepFormPanels, 'animate__animated', animation);
            }, 1200);

            setFormHeight(elem);

        }
    });

};


//set form height equal to current panel height
const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

};

const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {

    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);

    //open active panel
    setActivePanel(activeStep);
});

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
        return;
    }

    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

    } else {

        var url = location.pathname.split('/')[2];
        if(url == 'founders'){
            if(activePanelNum == 0)
            {
                var first_name = jQuery("#first_name").val();
                var last_name = jQuery("#last_name").val();
                var email = jQuery("#email").val();
                var user_name = jQuery("#user_name").val();
                var password = jQuery("#password").val();
                var confirm_password = jQuery("#confirm_password").val();
                var find_us = jQuery("#find_us").val();
                var affiliated = $("input[type='radio'][name='affiliated']:checked").val();
                var educational_institution = jQuery("#educational_institution").val();
                var sponsor = jQuery("#sponsor").val();
                var sponsor_detail = jQuery("#sponsor_detail").val();
                var sponsor_name = jQuery("#sponsor_name").val();
                var sponsor_email = jQuery("#sponsor_email").val();
                var email_format = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;
                if(first_name == '' || last_name == '' || ( email == '' || !email_format.test(email))  || user_name == '' || password == '' || confirm_password == '' || password != confirm_password || find_us == null || (affiliated == 'yes' && educational_institution =='') || (affiliated == 'yes' && sponsor =='') || (affiliated == 'yes' && sponsor_detail =='') || (affiliated == 'yes' && sponsor_name =='') || (affiliated == 'yes' && sponsor_email =='') || ( sponsor_email != '' && !email_format.test(sponsor_email)))
                {
                    if(first_name == '')
                    {
                        $('#firstName').addClass('error');
                    }
                    else{

                        $('#firstName').removeClass('error');
                    }

                    if(last_name == '')
                    {
                        $('#lastName').addClass('error');
                    }
                    else{

                        $('#lastName').removeClass('error');
                    }

                    if(email == '' || !email_format.test(email))
                    {
                        $('#email_address').addClass('error');
                    }
                    else{

                        $('#email_address').removeClass('error');
                    }

                    if(user_name == '')
                    {
                        $('#userName').addClass('error');
                    }
                    else{

                        $('#userName').removeClass('error');
                    }

                    if(password == '')
                    {
                        $('#Password').addClass('error');
                    }
                    else{

                        $('#Password').removeClass('error');
                    }

                    if(confirm_password == '')
                    {
                        $('#confirmPassword').addClass('error');
                    }
                    else{

                        $('#confirmPassword').removeClass('error');
                    }

                    if(find_us == null)
                    {
                        $('#findUs').addClass('error');
                    }
                    else{

                        $('#findUs').removeClass('error');
                    }

                    if(affiliated == 'yes' && educational_institution =='')
                    {
                        $('#educationalInstitution').addClass('error');
                    }
                    else{

                        $('#educationalInstitution').removeClass('error');
                    }

                    if(affiliated == 'yes' && sponsor =='')
                    {
                        $('#Sponsor').addClass('error');
                    }
                    else{

                        $('#Sponsor').removeClass('error');
                    }

                    if(affiliated == 'yes' && sponsor_detail =='')
                    {
                        $('#sponsorDetail').addClass('error');
                    }
                    else{

                        $('#sponsorDetail').removeClass('error');
                    }

                    if(affiliated == 'yes' && sponsor_name =='')
                    {
                        $('#sponsorName').addClass('error');
                    }
                    else{

                        $('#sponsorName').removeClass('error');
                    }

                    if(affiliated == 'yes' && sponsor_email =='')
                    {
                        $('#sponsorEmail').addClass('error');
                    }
                    else{

                        $('#sponsorEmail').removeClass('error');
                    }

                }
                else
                {
                    $('#firstName').removeClass('error');
                    $('#lastName').removeClass('error');
                    $('#email_address').removeClass('error');
                    $('#userName').removeClass('error');
                    $('#Password').removeClass('error');
                    $('#confirmPassword').removeClass('error');
                    $('#findUs').removeClass('error');
                    $('#educationalInstitution').removeClass('error');
                    $('#Sponsor').removeClass('error');
                    $('#sponsorDetail').removeClass('error');
                    $('#sponsorName').removeClass('error');
                    $('#sponsorEmail').removeClass('error');
                    $('.progress-status').html('2 of 5 Completed');
                    $('.progress-bar').removeClass('step-1');
                    $('.progress-bar').addClass('step-2');

                    activePanelNum++;  
                }
            }

            if(activePanelNum == 1)
            {
                var company_name = jQuery("#company_name").val();
                var company_incorporated = $("input[type='radio'][name='company_incorporated']:checked").val(); 
                var incorporated_period = jQuery("#incorporated_period").val(); 
                var incorporated_country = jQuery("#incorporated_country").val();
                var company_stage = jQuery("#company_stage").val();  
                var round_size = jQuery("#round_size").val();
                if(company_name == '' || (company_incorporated == 'yes' && incorporated_period == '') || incorporated_country == null || company_stage == null || round_size == '')
                {
                    if(company_name == '')
                    {
                        $('#companyName').addClass('error');
                    }
                    else{

                        $('#companyName').removeClass('error');
                    }

                    if(company_incorporated == 'yes' && incorporated_period =='')
                    {
                        $('#IncorporatedPeriod').addClass('error');
                    }
                    else{

                        $('#IncorporatedPeriod').removeClass('error');
                    }

                    if(incorporated_country == null)
                    {
                        $('#incorporatedCountry').addClass('error');
                    }
                    else{

                        $('#incorporatedCountry').removeClass('error');
                    }

                    if(company_stage == null)
                    {
                        $('#companyStage').addClass('error');
                    }
                    else{

                        $('#companyStage').removeClass('error');
                    }

                    if(round_size == '')
                    {
                        $('#roundSize').addClass('error');
                    }
                    else{

                        $('#roundSize').removeClass('error');
                    }  
                }
                else
                {
                    $('#companyName').removeClass('error');
                    $('#IncorporatedPeriod').removeClass('error');
                    $('#incorporatedCountry').removeClass('error');
                    $('#companyStage').removeClass('error');
                    $('#roundSize').removeClass('error');
                    $('.progress-status').html('3 of 5 Completed');
                    $('.progress-bar').removeClass('step-2');
                    $('.progress-bar').addClass('step-3');

                    activePanelNum++;
                       
                } 
            }

            if(activePanelNum == 2)
            {
                $('.progress-status').html('4 of 5 Completed');
                $('.progress-bar').removeClass('step-3');
                $('.progress-bar').addClass('step-4');

                activePanelNum++;

            }

            if(activePanelNum == 3)
            {
                var revenue = $("input[type='radio'][name='revenue']:checked").val(); 
                var revenue_growth = jQuery("#revenue_growth").val();
                var development_period = jQuery("#development_period").val();
                var revenue_expected = jQuery("#revenue_expected").val();
                var policy = $("#policy").is(":checked");
                var aggrement = $("#aggrement").is(":checked");

                if((revenue == 'yes' && revenue_growth == null) || (revenue == 'no' && development_period == null) || (revenue == 'no' && revenue_expected == null) || policy == false || aggrement == false)
                {

                    if(revenue == 'yes' && revenue_growth == null)
                    {
                        $('#revenueGrowth').addClass('error');
                    }
                    else{

                        $('#revenueGrowth').removeClass('error');
                    }

                    if(revenue == 'no' && development_period == null)
                    {
                        $('#developmentPeriod').addClass('error');
                    }
                    else{

                        $('#developmentPeriod').removeClass('error');
                    } 

                    if(revenue == 'no' && revenue_expected == null)
                    {
                        $('#revenueExpected').addClass('error');
                    }
                    else{

                        $('#revenueExpected').removeClass('error');
                    }

                    if(policy == false)
                    {

                    }
                    else{

                        
                    }

                    if(aggrement == false)
                    {
                       
                    }
                    else{

                        
                    } 

                }
                else
                {
                    $('#revenueGrowth').removeClass('error');
                    $('#developmentPeriod').removeClass('error');
                    $('#revenueExpected').removeClass('error');
                    $('.progress-status').html('5 of 5 Completed');
                    $('.progress-bar').removeClass('step-4');
                    $('.progress-bar').addClass('step-5');

                    activePanelNum++; 
                }

            }
        }
        

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, true);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, true);

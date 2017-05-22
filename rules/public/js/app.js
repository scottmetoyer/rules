jQuery(document).ready(function() {
    // Initialize form elements
    $('#birthdate').combodate({
        firstItem: 'name',
        customClass: 'form-control div-inline dob'
    });

    $('#current-step').val(0);
    var steps = [];
    $('.answer').val('');

    // Push all the questions into the question array
    $('.question').each(function(){
        steps.push($(this).attr('data-id'));
    });

    $('#yes-button').click(function() {
        var step = parseInt($('#current-step').val());
        handleAnswerButton(1, step, steps);
    });
    
    $('#no-button').click(function() {
         var step = parseInt($('#current-step').val());
         handleAnswerButton(0, step, steps);
    });

    $('#continue-button').click(function(){
        var step = parseInt($('#current-step').val());
        handleContinueButton(step);
    });
});

function handleAnswerButton(answer, step, steps) {
    var id = steps[step];
    console.log(steps);
    $('#answer-'+ id).val(answer);
    
    // Show the next question, or submit the form if we are at the end
    if ((steps.length - 1) == step) {
        $('#question-form').submit()
    } else {
        $('#question-'+ id).hide();
        $('#question-'+ steps[step + 1]).show();
    }
    
    nextStep();
}

function handleContinueButton(step) {
    switch(step) {
        case 0:
        if (!($('#email').val())) {
            $('#email').addClass('required');
        } else {
            $('#email-entry').fadeOut();
            $('#detail-entry').show();
            nextStep();
        }
        break;

        case 1:
        if (!($('#birthdate').val())) {
            $('.dob').addClass('required');
        } else {
            $('#form-wrapper').animate({ height: "275px" }, 250);
            $('#phone-entry').fadeIn();
            nextStep();
        }
        break;

        case 2:
         if (!($('#areacode').val()) || !($('#prefix').val()) || !($('#line').val()) ) {
            $('.phone').addClass('required');
        } else {
            $('#form-wrapper').animate({ height: "500px" }, 250);
            $('#terms').fadeIn();
            nextStep();
        }
        break;

        case 3:
        if (!(document.getElementById('optIn').checked)) {
            $('#terms-agree').addClass('required');
        } else {
            // Post to the server to move on to the questions
            $('#apply-form').submit()
        }
        break;
    }
}

function nextStep() {
    var step = parseInt($('#current-step').val());
    $('#current-step').val(step + 1);
}

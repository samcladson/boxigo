$('.datetimepicker').datetimepicker({
    icons: {
        time: "fas fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});

$('.btn-number').click(function(e){
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
        } else if(type == 'plus') {
            input.val(currentVal + 1).change();
        }
    } else {
        input.val(input.val());
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').focusout(function(){
   if(isNaN($(this).val()) || $(this).val() == ''){
    alert("please enter a valid number");
   }
});
$('.input-number').change(function() {
    minValue =  parseInt($(this).attr('min'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if(valueCurrent >= minValue || isNaN(valueCurrent)) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".input-number").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||(e.keyCode == 65 && e.ctrlKey === true) ||(e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


$('.input-group-hover').hover(function(){
    if($(this).find('.input-group-prepend').hasClass('invisible')) { $(this).find('.input-group-prepend').removeClass('invisible') };
    if($(this).find('.input-group-append').hasClass('invisible')) { $(this).find('.input-group-append').removeClass('invisible') };
},function(){
    if($(this).find('.input-group-prepend')) { $(this).find('.input-group-prepend').addClass('invisible') };
    if($(this).find('.input-group-append')) { $(this).find('.input-group-append').addClass('invisible') };
})
function changeColor(e) {
    var color = e.value;
    e.style.color = color;
}

document.querySelector('.cancel').addEventListener('click', function () {
    document.querySelectorAll('input').forEach(function (input) {
        input.value = ''; // Clear the value of each input element
    });
});


$(".feature-down dt a").on('click', function() {
    $(".feature-down dd ul").slideToggle('fast');
});

$(".feature-down dd ul li a").on('click', function() {
    $(".feature-down dd ul").hide();
});

function getSelectedValue(id) {
    return $("#" + id).find("dt a span.value").html();
}

$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (!$clicked.parents().hasClass("feature-down")) $(".feature-down dd ul").hide();
});

$('.mutliSelect input[type="checkbox"]').on('click', function() {
    var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
    title = $(this).val() + ",";

    if ($(this).is(':checked')) {
        var html = '<span title="' + title + '">' + title + '</span>';
        $('.multiSel').append(html);
        $(".feature-down .hida").hide();
    }
    else{
        $('span[title="' + title + '"]').remove();
        var ret = $(".feature-down .hida");
        $('.feature-down dt a').append(ret);
    }
});  
  
  
$(".amenties dt a").on('click', function() {
    $(".amenties dd ul").slideToggle('fast');
});

$(".amenties dd ul li a").on('click', function() {
    $(".amenties dd ul").hide();
});

function getSelectedValue(id) {
    return $("#" + id).find("dt a span.value").html();
}

$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (!$clicked.parents().hasClass("amenties")) $(".amenties dd ul").hide();
});

$('.mutliSelectt input[type="checkbox"]').on('click', function() {
    var title = $(this).closest('.mutliSelectt').find('input[type="checkbox"]').val(),
    title = $(this).val() + ",";

    if ($(this).is(':checked')) {
        var html = '<span title="' + title + '">' + title + '</span>';
        $('.multiSell').append(html);
        $(".amenties .hida").hide();
    }
    else {
        $('span[title="' + title + '"]').remove();
        var ret = $(".amenties .hida");
        $('.amenties dt a').append(ret);
    }
});   

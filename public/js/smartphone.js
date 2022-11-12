$(function() {
    $('[id*=toolsSnippets]').toolsSnippets(mySettings);
    $('.add').click(function() {
    $('[id*=toolsSnippets]').toolsSnippets('insert',
    { 
    openWith:'<opening tag>'
    });
    return false;
    });
    });
    $("#editorplugin").keyup(function count(){
    number = $("#editorplugin").val().length;
    $("#couns").html(number);
    });
    function autoSize(element) {
    $element = $(element);
    console.log('height():', $element.height());
    console.log('getComputedStyle height:', parseInt(getComputedStyle(element).height, 10));
    console.log('scrollHeight:', element.scrollHeight);
    var paddingTopBottom = $element.innerHeight() - $element.height();
    console.log('paddingTopBottom:', paddingTopBottom);
    console.log('scrollHeight - paddingTopBottom:', element.scrollHeight - paddingTopBottom);
    element.style.height = 'auto';
    $element.height(element.scrollHeight - paddingTopBottom);
    }
    $('#editorplugin').each(function() {
    autoSize(this);
    }).on('input', function() {
    autoSize(this);
    }); 
    $(document).ready(function(){
    $("#editorplugin").keyup(function () {
    var value = $(this).val();
    $("#codeText, #toolsSnippets, #editorfull").text(value);
    }).keyup(); 
    });
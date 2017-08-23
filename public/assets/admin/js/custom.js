$(function() {
	$('#name').keyup(function(){
        updateSlug($(this).val());
    });
    $('#title').keyup(function(){
        updateSlug($(this).val());
    });
    $('.text-editor').trumbowyg({
    	btns: [
	    	['viewHTML'],
	        ['formatting'],
	        'btnGrp-semantic',
	        ['superscript', 'subscript'],
	        ['link'],
	        ['insertImage'],
	        'btnGrp-justify',
	        'btnGrp-lists',
	        ['horizontalRule'],
	        ['removeformat'],
	        ['fullscreen']
    	]
    });
});

function updateSlug(str)
{
    str=str.trim();
    var slugstring=str.replace(/ /gi,'-');
    $('#slug').val(slugstring.toLowerCase());
}

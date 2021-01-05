$(document).ready(function(){
    $('#limitSelector').on('change', function(){
    	var limit = $(this).val(); 
        var phase;
        if ($('#phaseCheck').is(":checked"))
{           phase = "phaseOn";
        }else{
            phase = "phaseOff";
        }

        var src = $("#msaImage").attr('src').substring(0, 17) + limit + "_" + phase + ".png";
        $("#msaImage").attr("src",src)
    });

    $('#phaseCheck').on('change', function(){
    	var limit = $('#limitSelector').val(); 
        var phase;
        if ($('#phaseCheck').is(":checked"))
{           phase = "phaseOn";
        }else{
            phase = "phaseOff";
        }

        var src = $("#msaImage").attr('src').substring(0, 17) + limit + "_" + phase + ".png";
        $("#msaImage").attr("src",src)
    });
});
/* 
 *Jquery calculator plugin
 *Author: Sourav Mondal
 *Version : 1.0.0
 */
jQuery(document).ready(function($) {
    $("#cal").click(function() {
        var currentval = $("#cal").html();
        if (currentval == "Hide") {
            $("#calculator").hide("slow");
            ;
            $("#cal").html("Show Calculator");
        } else {
            $("#calculator").slideDown(600);
            $("#cal").html("Hide");
        }

    });


    //calculator section code goes here
    $(".small_key").click(function() {
        var clkvalue = $(this).val();
        var firstval = 0;
        var operators = ["+", "-", "*", "/"];
        var numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
        if ($.inArray(clkvalue, operators) != -1 && $("#numbers").html() != "") {
            $("#operators").html(clkvalue);
            $("#firstvalue").html($("#numbers").html());
            $("#numbers").html("");
        } else if ($.inArray(clkvalue, numbers) != -1) {
            $("#numbers").text(function(index, text) {
                return text.substr(0, 4);
            });
            $("#numbers").append(clkvalue);
        } else if (clkvalue == "clear") {
            $("#operators").html("");
            $("#numbers").html("");
            $("#firstvalue").html("");
            $("#resultshow").html("");
        } else if (clkvalue == "OFF") {
            $("#operators").html("");
            $("#numbers").html("");
            $("#resultshow").html("");
            $("#firstvalue").html("");
            $("input[type=button]").attr("disabled", "disabled");
            $("#on").removeAttr("disabled", "disabled");
        } else if (clkvalue == "ON") {
            $("input[type=button]").removeAttr("disabled", "disabled");
        } else if (clkvalue == "=") {
            var operator = $("#operators").html();
            firstval = parseInt($("#firstvalue").html());
            var lastval = parseInt($("#numbers").html());
            if (operator == "+") {
                var result = firstval + lastval;
            } else if (operator == "-") {
                var result = firstval - lastval;
            } else if (operator == "/") {
                var result = firstval / lastval;
            } else if (operator == "*") {
                var result = firstval * lastval;
            }
            $("#resultshow").html(result);
        }
    });
});



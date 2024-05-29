(function($){

    "use strict";

    function uniqueID() {return Math.floor((Math.random() * 1000000) + 1);}

    String.prototype.replaceAll = function(str1, str2, ignore) {
        return this.replace(new RegExp(str1.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&])/g,"\\$&"),(ignore?"gi":"g")),(typeof(str2)=="string")?str2.replace(/\$/g,"$$$$"):str2);
    }

    function iframeCSS(CSS){
        var iframe = $('#vc_inline-frame');
        if (typeof(iframe) != 'undefined' && iframe != null){
            iframe.ready(function() {
                CSS = CSS.replaceAll("dir-child*",">");
                iframe.contents().find("#dynamic-styles-inline-css").append(CSS);
            });
        }
    }

    function iframeSCRIPT(element,doc){

        $(element).each(function(){

            var $this  = $(this);
            var toggle = $this.find('.currency-toggle');

            toggle.append('<span class="highlighted-currency">'+$this.find('.currency-list a:first-child').text()+'</span>');
            toggle.on('click',function(){
                toggle.find('.highlighted-currency').remove();
                toggle
                .toggleClass('active')
                .append('<span class="highlighted-currency">'+$this.find('.currency-list a:first-child').text()+'</span>');
                toggle.next('.currency-list').toggleClass('active');
            });

        });
    }

    function hbeAlign(element,doc){
        var CSS = '';

        if (element.hasClass('hbe-right')) {
            CSS = '.vc_element[data-model-id="'+element.parent().attr('data-model-id')+'"] {float:right;}';
            doc.find("#dynamic-styles-inline-css").append(CSS);
            return;
        }
        if (element.hasClass('hbe-left')) {
            CSS = '.vc_element[data-model-id="'+element.parent().attr('data-model-id')+'"] {float:left;}';
            doc.find("#dynamic-styles-inline-css").append(CSS);
            return;
        }
        if (element.hasClass('hbe-center') || element.hasClass('hbe-none')) {
            CSS = '.vc_element[data-model-id="'+element.parent().attr('data-model-id')+'"] {float:none;display:inline-block;}';
            doc.find("#dynamic-styles-inline-css").append(CSS);
            return;
        }
    }


    $( document ).ajaxComplete(function( event, xhr, settings ) {

        if (settings['type'] != 'POST') {return;}

        /* Prepare settings
        /*-------------*/

            var data = decodeURIComponent(settings['data']);

            data = data.split("&");

            var dataObj = [{}];

            for (var i = 0; i < data.length; i++) {
                var property = data[i].split("=");
                var key      = (property[0]);
                var value    = (property[1]);
                dataObj[key] = value;
            }

            var elementExists = Object.keys(dataObj).some(function(key) {
                return dataObj[key] === "et_currency_switcher";
            });

        /* Edit element
        /*-------------*/

            if(dataObj['action'] == "vc_edit_form" && dataObj['tag'] == "et_currency_switcher"){

                var edit_element = $('#vc_ui-panel-edit-element[data-vc-shortcode="et_currency_switcher"]');

                var element_css  = edit_element.find('textarea[name="element_css"]'),
                    element_id   = edit_element.find('input[name="element_id"]'),
                    margin_box   = edit_element.find(".margin-box"),
                    margin       = edit_element.find('input[name="margin"]'),
                    margin_val   = margin.val(),
                    margin_array = [];

                if(typeof(margin_val) != "undefined" && margin_val.length){

                    var margin_array = margin_val.split(",");

                    margin_box.find("input[name=\"margin-top\"]").attr('value',margin_array[0]);
                    margin_box.find("input[name=\"margin-right\"]").attr('value',margin_array[1]);
                    margin_box.find("input[name=\"margin-bottom\"]").attr('value',margin_array[2]);
                    margin_box.find("input[name=\"margin-left\"]").attr('value',margin_array[3]);

                }


                $('#vc_ui-panel-edit-element[data-vc-shortcode="et_currency_switcher"] .vc_ui-button-action[data-vc-ui-element="button-save"]').on('click',function(){

                    if ($('#vc_ui-panel-edit-element[data-vc-shortcode="et_currency_switcher"]').length) {

                        var CSS = '';
                        var ID  = uniqueID();

                        edit_element = $('#vc_ui-panel-edit-element[data-vc-shortcode="et_currency_switcher"]');

                        /* Styling
                        ---------------*/

                            var align                        = edit_element.find('select[name="align"] option:selected').val(),
                                text_color                   = edit_element.find('input[name="text_color"]').val(),
                                text_color_hover             = edit_element.find('input[name="text_color_hover"]').val(),
                                currency_color               = edit_element.find('input[name="currency_color"]').val(),
                                submenu_color                  = edit_element.find('input[name="submenu_color"]').val(),
                                submenu_color_hover            = edit_element.find('input[name="submenu_color_hover"]').val(),
                                submenu_background_color       = edit_element.find('input[name="submenu_background_color"]').val(),
                                submenu_background_color_hover = edit_element.find('input[name="submenu_background_color_hover"]').val(),
                                submenu_width                  = edit_element.find('input[name="submenu_width"]').val();

                            
                            if (text_color.length) {
                                CSS += '#currency-switcher-'+ID+' .currency-toggle {';
                                    CSS += 'color:'+text_color+';';
                                CSS += '}';
                                CSS += '#currency-switcher-'+ID+' .currency-toggle svg {';
                                    CSS += 'fill:'+text_color+' !important;';
                                CSS += '}';
                            }
                            
                            CSS += '#currency-switcher-'+ID+' .currency-toggle:hover {';
                                if (text_color_hover.length) {CSS += 'color:'+text_color_hover+';';}
                            CSS += '}';

                            CSS += '#currency-switcher-'+ID+' .highlighted-currency {';
                                if (currency_color.length) {CSS += 'color:'+currency_color+';';}
                            CSS += '}';

                            if (submenu_color.length){
                                CSS += '#currency-switcher-'+ID+' svg.close {';
                                    CSS += 'fill:'+submenu_color+';';
                                CSS += '}';
                            }

                            CSS += '#currency-switcher-'+ID+' .currency-list {';
                                if (submenu_background_color.length) {
                                    CSS += 'background-color:'+submenu_background_color+';';
                                } else {
                                    CSS += 'background-color:transparent;';
                                }
                                if (submenu_width.length) {CSS += 'width:'+submenu_width+'px;';}
                            CSS += '}';
                            
                            if (submenu_width.length) {
                                CSS += '#currency-switcher-'+ID+'.box-align-center .currency-list {';
                                    CSS += 'margin-left:-'+(submenu_width/2)+'px;';
                                CSS += '}';
                            }

                            CSS += '#currency-switcher-'+ID+' .currency-list a {';
                                if (submenu_color.length) {CSS += 'color:'+submenu_color+';';}
                                if (submenu_background_color.length) {
                                    CSS += 'background-color:'+submenu_background_color+';';
                                } else {
                                    CSS += 'background-color:transparent;';
                                }
                            CSS += '}';

                            CSS += '#currency-switcher-'+ID+' .currency-list a:hover {';
                                if (submenu_color_hover.length) {CSS += 'color:'+submenu_color_hover+';';}
                                if (submenu_background_color_hover.length) {
                                    CSS += 'background-color:'+submenu_background_color_hover+';';
                                } else {
                                    CSS += 'background-color:transparent;';
                                }
                            CSS += '}';

                        /* Margin
                        ---------------*/

                            var margin_left   = edit_element.find(".margin-box input[name=\"margin-left\"]").val(),
                                margin_top    = edit_element.find(".margin-box input[name=\"margin-top\"]").val(),
                                margin_right  = edit_element.find(".margin-box input[name=\"margin-right\"]").val(),
                                margin_bottom = edit_element.find(".margin-box input[name=\"margin-bottom\"]").val();

                            margin_top = (margin_top.length) ? margin_top : '0';
                            margin_right = (margin_right.length) ? margin_right : '0';
                            margin_bottom = (margin_bottom.length) ? margin_bottom : '0';
                            margin_left = (margin_left.length) ? margin_left : '0';

                            var margin_output = margin_top+','+margin_right+','+margin_bottom+','+margin_left,
                                margin_value  = margin_top+'px '+margin_right+'px '+margin_bottom+'px '+margin_left+'px';

                            margin.val(margin_output);

                            CSS += '#currency-switcher-'+ID+' {';
                                CSS += 'margin:'+margin_value+';';
                            CSS += '}';

                        element_id.val(ID);

                        if (CSS) {
                            element_css.text(CSS);
                            iframeCSS(CSS);
                            CSS = '';
                        }

                    }
                    
                });

                return;

            }
    
        /* Load element
        /*-------------*/

            if((dataObj['action'] == "vc_load_shortcode" && elementExists)){

                var iframe = $('#vc_inline-frame');
                if (typeof(iframe) != 'undefined' && iframe != null){
                    iframe.ready(function() {
                        var doc = iframe.contents();
                        var element = doc.find('.vc_element[data-model-id="'+dataObj['shortcodes[0][id]']+'"] .currency-switcher');

                        if (typeof(element) != 'undefined' && element != null) {
                            iframeSCRIPT(element,doc);
                            hbeAlign(element,doc);
                        }
                    });
                }
                return;
            }
    });

})(jQuery);
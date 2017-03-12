/*Все скрипты, созданные для проекта*/



/*TODO - поумнеть и понять как это работает и как это использовать
http://stackoverflow.com/questions/18307078/jquery-best-practises-in-case-of-document-ready*/



    /*IIFE - Immediately Invoked Function Expression*/
    (function($, window, document) {

    /*The $ is now locally scoped */

    /*Listen for the jQuery ready event on the document*/
    $(function() {

     /*The DOM is ready!*/

    });

    /*В НАЧАЛЕ ИДУТ ВСЕ САМЫЕ ПОЛЕЗНЫЕ СКРИПТЫ*/

    /*Отмена зума на iOS, если шрифт в input < 16px*/
    // * iOS zooms on form element focus. This script prevents that behavior.
    // * <meta name="viewport" content="width=device-width,initial-scale=1">
    //      If you dynamically add a maximum-scale where no default exists,
    //      the value persists on the page even after removed from viewport.content.
    //      So if no maximum-scale is set, adds maximum-scale=10 on blur.
    //      If maximum-scale is set, reuses that original value.
    // * <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,maximum-scale=1.0">
    //      second maximum-scale declaration will take precedence.
    // * Will respect original maximum-scale, if set.
    // * Works with int or float scale values.
    function cancelZoom()
    {
        var d = document,
            viewport,
            content,
            maxScale = ',maximum-scale=',
            maxScaleRegex = /,*maximum\-scale\=\d*\.*\d*/;

        // this should be a focusable DOM Element
        if(!this.addEventListener || !d.querySelector) {
            return;
        }

        viewport = d.querySelector('meta[name="viewport"]');
        content = viewport.content;

        function changeViewport(event)
        {
            // http://nerd.vasilis.nl/prevent-ios-from-zooming-onfocus/
            viewport.content = content + (event.type == 'blur' ? (content.match(maxScaleRegex, '') ? '' : maxScale + 10) : maxScale + 1);
        }

        // We could use DOMFocusIn here, but it's deprecated.
        this.addEventListener('focus', changeViewport, true);
        this.addEventListener('blur', changeViewport, false);
    }

    // jQuery-plugin
    (function($)
    {
        $.fn.cancelZoom = function()
        {
            return this.each(cancelZoom);
        };

        // Usage:
        $('input:text,select,textarea').cancelZoom();
    })(jQuery);

    /*поддержка placeholders в недобраузерах*/
    $('input, textarea').placeholder();

    /*Функция для задания элементам одинаковой высоты*/
    function equalHeight(container, element) {
        // Select and loop the container element of the elements you want to equalise
        $(container).each(function(){  
          // Cache the highest
          var highestBox = 0;
          // Select and loop the elements you want to equalise
          $(element, this).each(function(){
            // If this box is higher than the cached highest then store it
            if($(this).height() > highestBox) {
              highestBox = $(this).height(); 
            }
          });  
          // Set the height of all those children to whichever was highest 
          $(element, this).height(highestBox);
        }); 
    }


    /*ЗДЕСЬ ПОДКЛЮЧАЕМ ВСЕ СВОИ СКРИПТЫ, НАПИСАННЫЕ ДЛЯ ПРОЕКТА*/
    

        $(window).on("load", function () {
            
        });

        $(window).on("resize", function () {
            
        });

    }(window.jQuery, window, document));
    /*The global jQuery object is passed as a parameter*/



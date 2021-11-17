$("#print").on('click',function(){

    var d = new Date();

    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = d.getFullYear() + '/' +
        (month<10 ? '0' : '') + month + '/' +
        (day<10 ? '0' : '') + day;
    
        $(".table").printThis({
            debug: false,               // show the iframe for debugging
            importCSS: false,            // import parent page css
            importStyle: false,         // import style tags
            printContainer: true,       // print outer container/$.selector
            loadCSS: "http://localhost/IT%20Elective/bootstrap.min.css", // path to additional css file - use an array [] for multiple
            pageTitle: "Print",              // add title to print page
            removeInline: false,        // remove inline styles from print elements
            removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
            printDelay: 333,            // variable print delay
            header: "<h1>Balasing Contact Tracing List</h1>" + " " + output,               // prefix to html
            footer: null,               // postfix to html
            base: false,                // preserve the BASE tag or accept a string for the URL
            formValues: true,           // preserve input/form values
            canvas: false,              // copy canvas content
            doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
            removeScripts: false, 
        })
        //newWin= window.open("");
        //newWin.document.write($('.table').html());
        //newWin.print();
        //newWin.close();
        //$('#table').load("user_display.php");
    });

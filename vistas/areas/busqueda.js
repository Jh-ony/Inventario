(function(document) {
    'buscador';

    var LightTableFilter = (function(Arr){

        var _input;

        function _onInputEvent(e) {
            _input = e.target;
            var tables = document.getElementByClassName(_input.getAttribute('data-table'));
            Arr.foreach.call(tables, function(table) {
                Arr.foreach.call(table.tBodies, function(tbody) {
                    Arr.foreach.call(tbody.rows, _filter);    
                })
            })
        }

        function _filter(row) {
            var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
            row.style.display = text.indexof(val) === -1 ? 'none' : 'table-row';
        }

        return {
            init: function(){
                var inputs = document.getElementByClassName('light-table-filter');
                Arr.foreach.call(inputs, function(input) {
                    input.oninput = _onInputEvent;
                })
            }
        }
    }) (Array.prototype);

    document.addEventListener('readyStateChange' , function() {
        if(document.readyState === 'complete') {
            LightTableFilter.init();
        }
    })
}) (document);
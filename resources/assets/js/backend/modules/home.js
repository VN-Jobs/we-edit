// @flow
'use strict';

import Datatable from './../partials/datatable';
class Home {
  index () {
    var _$ = window.$;
    let columns = [
      { data: 'id', name: 'id', visible: false },
      { data: 'first_name', name: 'first_name' },
      { data: 'last_name', name: 'last_name'},
      { data: 'email', name: 'email'},
      { data: 'company', name: 'company'},
      { data: 'message', name: 'message'}
    ];
    let searches = {
      data: function (d) {
        d.keywords = _$('input[name=keywords]').val();
      }
    };
    var datatable = new Datatable('home', columns, searches);
    datatable.init();

    _$('#search-form').on('click', function (e) {
      e.preventDefault();
      datatable.refresh();
    });

    _$('#reset-form').on('click', function (e) {
      e.preventDefault();
      _$('input').val('');
      datatable.refresh();
    });
  }
}

export default window.home = new Home();

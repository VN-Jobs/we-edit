'use strict';

import 'datatables.net-bs/css/dataTables.bootstrap.css';
import DataTable from 'datatables.net-bs';
import Notification from './notification';
class Datatable {
  constructor (resource, columns, searches, selector, actions = true) {
    window.$.fn.DataTable = DataTable;
    window.$.fn.DataTable.ext.pager.numbers_length = 5;
    this._resource = resource || '';
    this._columns = columns || [];
    this._searches = searches || {
      data: function (d) {
        d.keywords = _$('input[name=keywords]').val();
      }
    };
    this._selector = selector || '#table-index';
    this._datatable = {};
    this._actions = actions;
  }

  init () {
    var notification = new Notification();
    var _$ = window.$;
    let datatableInfo = window.lang.get('datatables.info').replace(':totalNumber', '_TOTAL_').replace(':fromNumber', '_START_').replace(':toNumber', '_END_');
    if (this._actions) {
      this.addActionColumn();
    }
    this._datatable = _$(this._selector).DataTable({
      dom: "<'row'<'col-xs-6'l>>" +
        "<'row'<'col-xs-12'tr>>" +
        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
      pageLength: 10,
      processing: true,
      serverSide: true,
      responsive: true,
      columns: this._columns,
      order: [[0, 'desc']],
      searching: false,
      lengthMenu: [ 10, 50, 75, 100, 200 ],
      language: {
        search: '_INPUT_',
        zeroRecords: window.lang.get('datatables.zeroRecords'),
        info: datatableInfo,
        processing: window.lang.get('datatables.processing'),
        infoEmpty: window.lang.get('datatables.infoEmpty'),
        infoFiltered: window.lang.get('datatables.infoFiltered').replace(':max', '_MAX_'),
        emptyTable: window.lang.get('datatables.emptyTable'),
        lengthMenu: window.lang.get('datatables.lengthMenu') + ' _MENU_',
        paginate: {
          next: window.lang.get('datatables.next'),
          previous: window.lang.get('datatables.previous')
        }
      },
      ajax: _$.extend({
        url: window.routeType ? window.routeType : window.laroute.route('backend.' + this._resource + '.index', {'datatables': 1})
      }, this._searches)
    });

    notification.destroyRow(this);
    notification.flashMessage();
  }

  refresh () {
    this._datatable.fnDraw();
  }

  addActionColumn () {
    this._columns.push({
      name: 'actions',
      searches: false,
      orderable: false,
      render: function (data, type, row) {
        var actions = {
          edit: function () {
            return row.actions.edit ? '<a href="' + row.actions.edit.uri + '" title="' + row.actions.edit.label + '" class="btn btn-default btn-xs"><i class="ion-edit"></i></a>' : '';
          },
          delete: function () {
            return row.actions.delete ? '<a href="' + row.actions.delete.uri + '" title="' + row.actions.delete.label + '" class="btn btn-danger delete-action btn-xs"><i class="ion-close-circled"></i></a>' : '';
          }
        };

        return actions.edit() + actions.delete();
      }
    });
  }
}

export default Datatable;

// @flow
'use strict';

import '../../../bower/jqTree/build/tree.jquery';
import Notification from './../partials/notification';
import Uploadfile from './../partials/uploadfile';
class Category {
  index (items, item) {
    var notification = new Notification();
    notification.setText(window.lang.get('repositories.sweetalert.question_category'));
    this.jqTree(items, item);
    this.summernote();

    notification.destroyRow(null, 'li');
    notification.flashMessage();
  }

  summernote() {
    var _$ = window.$;
    var uploadfile = new Uploadfile();
    uploadfile.init();
    _$('.textarea-summernote').summernote({
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture','video', 'hr']],
        ['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      height:250,
      callbacks: {
        onImageUpload: function(files) {
          uploadfile.sendImage(files[0], laroute.route('backend.summernote.image'), _$(this));
        }
      }
    });
  }

  jqTree (items, item, selector = '#list') {
    var _$ = window.$;
    _$(selector).tree({
      closedIcon: _$('<i class="ion-plus"></i>'),
      openedIcon: _$('<i class="ion-minus"></i>'),
      data: items,
      dragAndDrop:false,
      autoOpen: false,
      selectable: false,
      onCreateLi: function(node, $li) {
        if (node.locked) {
          $li.find('.jqtree-title.jqtree_common').append(`<label class="btn btn-warning btn-xs pull-right">
              <i class="ion-ios-locked"></i>
              </label>`);
        }
        if (item != 0 && item.id == node.id) {
          return false;
        }
        $li.find('.jqtree-element')
          .append('<div class="btn-group pull-right tools">\
            <a href="'+laroute.route('backend.category.collection', {category: node.id})+'" class="btn btn-info btn-xs"><i class="ion-images"></i></a> \
            <a href="'+laroute.route('backend.category.edit', {category: node.id})+'" class="btn btn-default btn-xs"><i class="ion-edit"></i></a> \
            <a href="'+laroute.route('backend.category.destroy', {category: node.id})+'" class="btn btn-xs btn-danger delete-action"><i class="ion-close-circled"></i></a>\
            </div>');
        }
    });
  }
}

export default window.category = new Category();

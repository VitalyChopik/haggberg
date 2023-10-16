(function () {
  if (typeof tinymce === 'undefined') {
    return;
  }

  tinymce.PluginManager.add('custom_mce_button', function (editor, url) {
    editor.addButton('custom_mce_button', {
      text: 'Добавить ссылку с классом',
      icon: false, // Иконку можно добавить, если нужно
      onclick: function () {
        var link = prompt('Введите URL ссылки:');
        if (link) {
          var linkClass = prompt('Введите CSS класс для ссылки:');
          if (linkClass) {
            editor.insertContent('<a href="' + link + '" class="' + linkClass + '">Текст ссылки</a>');
          } else {
            editor.insertContent('<a href="' + link + '">Текст ссылки</a>');
          }
        }
      }
    });
  });
})();

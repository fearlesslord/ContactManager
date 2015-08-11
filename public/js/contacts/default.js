/*
    $(function() {

      $.get('contacts/xhrGetContacts', function(o) {
        for (var i = 0; i < o.length; i++)
        {
          $('#listContacts').append('<div>' + o[i].email + '<a class="del" href="#" rel="'+ o[i].id +'">X</a></div>');
        }

        */
/*$('.del').live ('click',function() {
          delItem = $(this);
          var id = $(this).attr('rel');
            console.log();
          $.post('contacts/xhrDelContacts', {'id' : id}, function(o) {
              delItem.parent().remove();
          });

          return false;
        });*//*

        $('.del').live('click', function() {
          delItem = $(this);
          var id = $(this).attr('rel');

          $.post('contacts/xhrDelContacts', {'id': id}, function(o) {
            delItem.parent().remove();
          });

          return false;
        });

      }, 'json');

      $('#insertContact').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o)
        {
          $('#listContacts').append('<div>' + o.email + '<a class="del" href="#" rel="'+ o.id +'">X</a></div>')
        }, 'json');


        return false;
      })


    }); */

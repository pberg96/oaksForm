var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbxitifguzbXpxXVBOZPvx3jR9ZOZnxXFZb4p5QCn2KzcSKwvWF1/exec?fname=Bob'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})

$(function () {
  $('#select_all').on('click', function () {
    $(':checkbox').prop('checked', this.checked);
  });
});
$(document).ready(function() {
  $('#childcareForm').submit(function(e) {
    e.preventDefault();
    var childName = $('#childName').val();
    var parentName = $('#parentName').val();
    var email = $('#email').val();

    $.ajax({
      type: 'POST',
      url: 'process.php',
      data: {
        childName: childName,
        parentName: parentName,
        email: email
      },
      success: function(response) {
        alert('Thông tin đã được gửi thành công!');
        $('#childName').val('');
        $('#parentName').val('');
        $('#email').val('');
      },
      error: function(xhr, status, error) {
        alert('Đã có lỗi xảy ra: ' + error);
      }
    });
  });
});

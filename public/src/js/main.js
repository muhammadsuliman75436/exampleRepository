$(document).ready(function () {
  var DOMAIN = "http://localhost/naujawan";

  //============================ For Login Part =================================
  $("#loginForm").submit(function () {
    $.post({
      url: DOMAIN + "/includes/process.php",
      data: $("#loginForm").serialize(),
      success: function (data) {
        if (data == "NOT REGISTERED") {
          alert(data);
        } else {
          window.location.href = DOMAIN + "/profile.php";
        }
      },
    });
  });

  //============================ For Login Part =================================
  $("#signupForm").submit(function () {
    $.post({
      url: DOMAIN + "/includes/process.php",
      data: $("#signupForm").serialize(),
      success: function (data) {
        if (data == 1) {
          window.location.href = DOMAIN + "/login.php";
        } else {
          alert("Email already exists.");
        }
      },
    });
  });

  //============================ For Login Part =================================
  $("#adminlogingForm").submit(function () {
    $.post({
      url: DOMAIN + "/includes/process.php",
      data: $("#adminlogingForm").serialize(),
      success: function (data) {
        if (data == "NOT REGISTERED") {
          alert(data);
        } else {
          window.location.href = DOMAIN + "/dashboard.php";
        }
      },
    });
  });

  // ================================================= END ====================================================
});

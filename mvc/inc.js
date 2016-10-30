$("#done").hide();
$("#error").hide();

$("#registerd").hide();
$("#toggleLogin").click(function() {

  if ($("#loginActive").val() == "1") {

    $("#loginActive").val("0");
    $("#loginModalTitle").html("Sign Up");
    $("#loginSignupButton").html("Sign Up");
    $("#toggleLogin").html("Login");


  } else {

    $("#loginActive").val("1");
    $("#loginModalTitle").html("Login");
    $("#loginSignupButton").html("Login");
    $("#toggleLogin").html("Sign up");

  }


})

$("#loginSignupButton").click(function() {

  $.ajax({
    type: "POST",
    url: "actions.php?action=loginSignup",
    data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
    success: function(result) {
      //alert(result);


      if (result == "1"){

        $("#error").hide()
        $("#registerd").hide();

        $("#done").show()

        window.location.assign("main.php")



      } else if (result == "registerd"){

        $("#registerd").show();
        $("#error").hide()


      }else {


        $("#done").hide()
        $("#registerd").hide();
        $("#error").show();
      }

    }


  })

})

// code end

$("#postTweet").click(function() {
  $.ajax({
    type: "POST",
    url: "actions.php?action=postTweet",
    data: "tweetData=" + $("#tweetContent").val(),
    success: function(result) {

     //alert(result);
     window.location.reload();





    }
  })
})


//PHP file my_ajax_receiver.php

$(".toggleFollow").click(function() {

  var id =  $(this).attr("data-userid");

  $.ajax({
    type: "POST",
    url: "actions.php?action=toggleFollow",
    data: "userid=" + $(this).attr("data-userid"),
    success: function(result) {


      if (result == "1"){

          $("a[data-userid=" + id + "]").html("Follow");
      }else if (result == "2"){

          $("a[data-userid="+ id +"]").html("UnFollow");
      }







    }
  })
})

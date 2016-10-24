<!DOCTYPE html>
<html>
  <head>
    <title>My App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
    maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="appjs/app.min.css">
    <style>
			@-webkit-keyframes pulse {
				0% {
					background-color: #CCC;
				}
				25% {
					background-color: #EEE;
				}
				50% {
					background-color: #CCC;
				}
				75% {
					background-color: #EEE;
				}
				100% {
					background-color: #CCC;
				}
			}

		</style>

  </head>

	<body>
		<div class="app-page" data-page="home">
			<div class="app-topbar blue">
				<div class="app-title">Send An Email</div>
			</div>

			<div class="app-content">
				<p class="app-section">click blow to send an email</p>


				<div class="app-section" id="email_to_list">


					</div>


				<div class="app-section">
				<div class="app-button" id="new_send">Send User</div>


		<div class="app-page" data-page="sendemail">
			<div class="app-topbar">
				<div class="app-title">Send Email</div>
				<div class="right app-button" data-back>Done</div>
			</div>

			<div class="app-content">

				<div class="app-section" id="result">
				</div>



				<div class="app-section">
					From Email :
					<input class="app-input" placeholder="email_from"
					id="email_from">
				</div>

								<div class="app-section">
									To Email :
					<input class="app-input" placeholder="email_to"
					id="email_to">
				</div>

				<form class="app-section">
					<input class="app-input" id="sub" name="subject"
					placeholder="Subject">
					<textarea class="app-input" id="msg" name="message"
					placeholder="Message"></textarea>
					<div class="app-button green app-submit"
					id="send">Send</div>
				</form>
			</div>
		</div>



    <script src="appjs/zepto.js"></script>
    <script src="appjs/app.min.js"></script>
    <script>

/*
    $(page).find('#send')
					.clickable()
					.on('click', function () {
/// sending email fucntcions goes here

    if (typeof localStorage !== "undefined") {

        localStorage.setItem("email_from", $("#email_from").val());

    }else{
        //alert user to update brwoser
    }
  */
    App.controller('sendemail', function (page){

    	$(page).find("#result").hide();

    	if(localStorage.getItem('click_to') !== null){
    		$(page).find('#email_to').val(localStorage.getItem('click_to'));
    	}
			var email_from_val = localStorage.getItem('email_from');
			if (email_from_val !== null) {

				$(page).find("#email_from").val(email_from_val);

			}



		//alert(email_from_val);


        $(page).find("#send").clickable().on('click', function() {

            // sending email functions goes here
    	  $.ajax({
			  type: 'GET',
			  url: 'http://id3m.net/sendmail.php?callback=response',
			  // data to be added to query string:
			  data: {
			  	to: $("#email_to").val(),
			  	from: $("#email_from").val(),
			  	sub: $("#sub").val(),
			  	msg: $("#msg").val(),
			  },
			  dataType: 'jsonp',
			  timeout: 300,
			  context: $('body'),
			  success: function(data){

			  	if(data.sent == true){

			  	$(page).find('#result').html("Your email was sent !").show();

			  	}else {
			  			$(page).find('#result').html("Your email wasn't sent !").show();
			  	}


			  				  },
			  error: function(xhr, type){
			  			$(page).find('#result').html("ajax error !").show();
			  }
			})



           if (typeof localStorage !== "undefined") {

            	localStorage.setItem("email_from", $("#email_from").val());



            	var email_to_list = new Array();

            	if (localStorage.getItem("email_to_list") !== null){

            	email_to_list = JSON.parse(localStorage.getItem("email_to_list"));

            	}

            	if ($.inArray($('#email_to').val(), email_to_list )  == -1){

				email_to_list.push($('#email_to').val());
				email_to_list.sort();
				localStorage.setItem("email_to_list", JSON.stringify(email_to_list));

				console.log(email_to_list);
            	}












            }
        });

});

	App.controller('home', function (page) {




		if( typeof localStorage !== 'undefined' ) {

		$(page).find("#new_send").clickable().on('click', function() {

		if(localStorage.getItem('click_to') !== null) {
			localStorage.removeItem('click_to');
		}
			App.load('sendemail');

		});
			if (localStorage.getItem('email_to_list') !== null){

			var email_to_list = JSON.parse(localStorage.getItem("email_to_list"));



			$.each(email_to_list, function(key, value){

				$(page).find('#email_to_list').append('<div class="app-button redir">'+ value +'</div>')


			});

			$(page).find('#email_to_list').show();

		$(page).find(".redir").clickable().on('click', function() {

			localStorage.setItem("click_to", $(this).html());

			App.load('sendemail');


			});

			} else

			{
				$(page).find('#email_to_list').hide();
			}

		}







    	            });

      try {
        App.restore();
      } catch (err) {
        App.load('home');
      }
    </script>
  </body>
</html>

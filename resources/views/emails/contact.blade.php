
<!doctype html>
<html>
  <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Password Reset - Ac89 - Email Templates for developers" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Contact From Customer</title>
		<style>
			html,
			body {
				margin: 0 auto !important;
				padding: 0 !important;
				width: 100% !important;
				font-family: sans-serif;
				line-height: 1.4;
				-webkit-font-smoothing: antialiased;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			* {
				-ms-text-size-adjust: 100%;
			}
			table,
			td {
				mso-table-lspace: 0pt !important;
				mso-table-rspace: 0pt !important;
			}
			img {
				display: block;
        border: none;
        max-width: 100%;
        -ms-interpolation-mode: bicubic;
      }
			a {
				text-decoration: none;

			}

            .footer {
        font-size: 14px;
        color: #555;
        padding-top: 20px;
        border-top: 1px solid #ccc;
        margin-top: 40px;
      }
		</style>
	</head>
	<body
		leftmargin="0"
		marginwidth="0"
		topmargin="0"
		marginheight="0"
		offset="0"
		width="100%"
		style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; "
	>
    <p><strong>Name:</strong> {{ $fname }} {{ $lname }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $user_msg }}</p>

    <div class="footer">
        <p><strong>Aging Care Tampa</strong><br>
        Contact: (813)-388-8656</p>
      </div>

  </body>
</html>

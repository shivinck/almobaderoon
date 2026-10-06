<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>New Consultation Request</title>
    <style>
      html, body {
        margin: 0 auto !important;
        padding: 0 !important;
        width: 100% !important;
        font-family: sans-serif;
        line-height: 1.4;
        -webkit-font-smoothing: antialiased;
      }
      img { display: block; border: none; max-width: 100%; }
      a { text-decoration: none; }
      .footer {
        font-size: 14px;
        color: #555;
        padding-top: 20px;
        border-top: 1px solid #ccc;
        margin-top: 40px;
      }
    </style>
  </head>
  <body style="margin: 0; padding: 0 !important;">
    <h2>New Consultation Request</h2>
    <p><strong>Full Name:</strong> {{ $full_name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    @if (!empty($company_name))
    <p><strong>Company:</strong> {{ $company_name }}</p>
    @endif
    <p><strong>Service of Interest:</strong> {{ $service_interest }}</p>
    <p><strong>Preferred Date:</strong> {{ $consultation_date }}</p>
    <p><strong>Preferred Time:</strong> {{ $consultation_time }}</p>
    <p><strong>Format:</strong> {{ $consultation_format }}</p>
    <p><strong>Business Challenge:</strong></p>
    <p>{{ $business_challenge }}</p>

    <div class="footer">
      <p><strong>Almobaderoon Consulting Services</strong></p>
    </div>
  </body>
</html>

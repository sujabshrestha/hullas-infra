
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ getSiteSetting('site_title') }} Letter Head</title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Mukta', sans-serif;
        }
        .absolute {
            position: absolute;
        }

        .letter-head-section {
            font-size: 16px;
            width: 793.5px;
            height: 1122.5px;
            margin: 0 auto;
            position: relative;
        }

        .letter-head-section .letter-head-wrapper .ref-no {
            top: 200px;
            left: 30px;
        }

        .letter-head-section .letter-head-wrapper .date {
            top: 200px;
            left: 620px;
        }

        .letter-head-section .letter-head-wrapper .salutation {
            top: 260px;
            left: 30px;
        }

        .letter-head-section .letter-head-wrapper .receiver {
            top: 280px;
            left: 30px;
        }

        .letter-head-section .letter-head-wrapper .company {
            top: 300px;
            left: 30px;
        }

        .letter-head-section .letter-head-wrapper .address {
            top: 320px;
            left: 30px;
        }

        .letter-head-section .letter-head-wrapper .subject {
            top: 380px;
            left: 0;
            right: 0;
            font-size: 20px;
            font-weight: bold;
            width: 70%;
            margin: 0 auto;
            text-align: center;
        }

        .letter-head-section .letter-head-wrapper .dear-sir {
            top: 430px;
            left: 30px;
        }

        .letter-head-section .letter-head-wrapper .body {
            top: 460px;
            left: 30px;
            right: 30px;
        }

        .letter-head-section .letter-head-wrapper .body .sender-info {
            margin-right: 0;
            margin-left: auto;
            margin-top: 50px;
            width: 25%;
            text-align: center;
        }

        .letter-head-section .letter-head-wrapper .body .sender-info .signature img {
            height: 100px;
        }

        .letter-head-section .letter-head-wrapper .body .sender-info .sender-name {
            border-top: 1px solid #6d6b6b;
            text-align: center;
            padding-top: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div
        class="letter-head-section"
        style="
                background: url({{ public_path('front/assets/letterpad/letterhead.png') }});
                background-position: center;
                background-size: cover;
                "
>
    <div class="letter-head-wrapper">
        <div class="ref-no absolute">
            <span>Ref. No.</span>
            <span>238-23238</span>
        </div>
        <div class="date absolute">
            <span>Date:</span>
            <span>2077-12-12</span>
        </div>
        <div class="salutation absolute">
            {{ $mail->name??'' }}
        </div>
        <div class="receiver absolute">
            {{ $mail->designation??'' }}
        </div>
        <div class="company absolute">
            {{ $mail->organization??'' }}
        </div>
        <div class="address absolute">
            {{ $mail->address??'' }}
        </div>

        <div class="subject absolute">
					<span>
						Subject:
					</span>
            <span>
						{{ $mail->subject??'' }}
					</span>
        </div>
        <div class="dear-sir absolute">
            {{ $mail->salutation??'' }}
        </div>
        <div class="body absolute">
            <div class="description">
                {!! $mail->body !!}
            </div>
            <div class="sender-info">
                <div class="signature">
                    <img src="{{ public_path($mail->mailSender->signature) }}" alt="{{ $mail->mailSender->name??'' }}">
                </div>
                <div class="sender-name">
                    {{ $mail->mailSender->name??'' }}
                </div>
                <div class="designation">
                    {{ $mail->mailSender->designation??'' }}
                </div>

            </div>
        </div>


    </div>
</div>
</body>
</html>
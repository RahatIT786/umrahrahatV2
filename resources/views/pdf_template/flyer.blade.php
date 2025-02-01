<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF Flyer</title>

    <style>
        /* Reset margin and padding */
        * {
            margin: 0;
            padding: 0;
        }

        /* Set the size of the page to A4 */
        #flyer {
            /* background-image: url('data:image/jpeg;base64,{{ base64_encode(file_get_contents(asset('images/flyerbg.png'))) }}'); */
            background-image: url({{"asset('images/flyerbg.png')"}});
            background-size: cover; /* Cover the entire page */
            background-position: center;
            background-repeat: no-repeat;
            width: 210mm; /* A4 size */
            height: 297mm; /* A4 size */
            padding: 20mm; /* Add padding around the content */
            color: white; /* Text color */
            font-family: Arial, sans-serif; /* Set a readable font */
            position: relative; /* Allows you to position child elements */
        }

        /* Add a semi-transparent background for better text readability */
        .content-box {
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent dark background */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Shadow for 3D effect */
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
            margin: 0 auto;
            display: block;
            width: 200px;
            text-transform: uppercase;
        }

        /* Optional: Add some more decorative elements */
        .decorative-line {
            border-bottom: 2px solid #fff;
            width: 60%;
            margin: 20px auto;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            position: absolute;
            bottom: 20px;
            width: 100%;
            color: #ccc;
        }
    </style>
  </head>
  <body>
    <div id="flyer">
        <div class="content-box">
            <h1>Welcome to Umrah</h1>
            <p>Join us for a spiritual journey to the holy cities. Book your package today!</p>
            <div class="decorative-line"></div>
            <p>Our affordable packages offer everything you need for a fulfilling journey.</p>
            <a href="#" class="btn">Book Now</a>
        </div>
        <div class="footer">
            <p>For more information, contact us at info@umrahpackages.com</p>
        </div>
    </div>
  </body>
</html>

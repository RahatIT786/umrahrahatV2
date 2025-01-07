<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://templatekit.rometheme.pro/prayer/xmlrpc.php" />
    {{-- <link rel="shortcut icon" href="{{config('assets.images.favIcon'.env('APP_ENV'))}}" type="image/x-icon"> --}}
    {{-- <link rel="shortcut icon" href="/asserts/user/img/rahatlogo.jpg" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ config('assets.images.favIcon.' . (env('APP_ENV') === 'production' ? 'production' : 'local')) }}" type="image/x-icon">
    <title>RahatGroup</title>

    <meta name='robots' content='max-image-preview:large' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Modal Styles -->
<style>
 .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5); /* Darkened background overlay */
}

.modal-content1 {
  background-color: white; /* Use your theme color for modal background */
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #f8c471; /* Use your theme color for the border */
  width: 30%;
  border-radius: 8px; /* Optional: add border-radius for rounded corners */
  position: relative;
}

.close {
  color: #c0392b; /* Use your theme color for close button */
  font-size: 28px;
  font-weight: bold;
  position: absolute;
  right: 10px;
  top: 10px;
}

.close:hover,
.close:focus {
  color:#641e16; /* Change close button color on hover */
  text-decoration: none;
  cursor: pointer;
}

.input-container {
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333; /* Text color for labels */
}

input, textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
}

button.submit-button {
  background-color: #f8c471; /* Use your theme color for the submit button */
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button.submit-button:hover {
  background-color: #e8b92f; /* Slightly darker shade for hover effect */
}

</style>
<style>
  .carousel-control-prev, .carousel-control-next {
    z-index: 1000; /* Ensure buttons are on top */
  }
</style>
    <!-- <meta name='robots' content='max-image-preview:large' />
>>>>>>> bf542e9096e97d1dfec602f38d06ff2e1cd034b5 -->

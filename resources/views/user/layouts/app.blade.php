@include('user.includes.header')
@include('user.includes.navbar') 
 <!-- This is where the content from the Livewire component will be injected -->

<style>
    
#whatsapp{
    height: clamp(25px,30vw,5rem);
    z-index: 4;
    position: fixed;
    right: 1rem;
    bottom:7rem;
    cursor: pointer;
  
}
#call{
 
    height: clamp(15px,8vw,3rem);
    z-index: 4;
    position: fixed;
    left: 1rem;
    bottom:7rem;
    cursor: pointer;
  

}
</style>

<style>

    .zoom-effect img {
        transition: transform 0.3s ease-in-out; /* Smooth transition for the zoom effect */
    }
    
    .zoom-effect img:hover {
        transform: scale(1.2); /* Zooms the image by 20% */
    }
   
    

    /* Ensure the entire navigation tab container takes full width */
    .transformer-tabs {
      width: 100%;  /* Set container width to 100% */
      padding: 0;   /* Remove any padding */
      background-color: #FEAF39;  /* Background color for the tabs */
    }
    
    .nav-tabs-package {
      display: flex;              /* Display tabs in a row */
      justify-content: space-between;  /* Distribute space evenly between tabs */
      width: 100%;  /* Ensure tabs take full width */
      background-color: #FEAF39; /* Background color for the tabs */
      padding: 0;
      border: none;
      align-items: center;
    }

    .nav-item-package {
      flex: 1;   /* Ensure each tab item takes equal width */
      text-align: center; /* Align text inside each tab */
    }

    .nav-link-package{
      display: block;
      padding: 14px 0;
      color: #555;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-family: 'Poppins', sans-serif;  /* Ensure stylish font */
      transition: background-color 0.3s ease, color 0.3s ease;
      border: none;
      border-radius: 5px;
      text-align: center;
      height: 100%;  /* Ensure each tab item takes full height */
      width: 100%;  /* Make sure link covers the entire tab item width */
      word-wrap: break-word;  /* Ensure long words or text will wrap inside the tabs */
      white-space: normal; /* Allow wrapping of long text */
    }

    /* Active tab styling */
    .nav-link-package.active {
      color: #fff;
      border-radius: 5px 5px 0 0;
    }

    /* Hover effect for the tabs */
    .nav-item-package:hover .nav-link-package {
      color: #fff;
    }

    /* Mobile view adjustments */
    @media (max-width: 768px) {
      .nav-tabs-package {
        flex-direction: column; /* Stack the tabs vertically on smaller screens */
      }

      .nav-item-package {
        width: 100%;  /* Ensure each tab item stretches across full width */
      }

      .nav-link-package {
        padding: 12px;
        font-size: 16px;
      }

      
    }
</style>


<!--enquire form -->
<style>
  /* Scoped Styles for #popupContainer */

/* Global Container for Scoping */
#popupContainer {
  position: relative;
  display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
}

#popupContainer.show {
        display: block;
        opacity: 1;
    }
/* Open Form Button */
#popupContainer .open-form-btn {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}
#popupContainer .open-form-btn:hover {
  background-color: #0056b3;
}

/* Popup Form */
#popupContainer .popup-form {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}
#popupContainer .hidden {
  display: none;
}

/* Form Container */
#popupContainer .form-container {
  background: white;
  padding: 20px 30px;
  width: 100%;
  max-width: 400px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  animation: fadeIn 0.3s ease;
}
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Close Button */
#popupContainer .close-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  background: transparent;
  border: none;
  font-size: 20px;
  cursor: pointer;
}

/* Form Title */
#popupContainer .form-title {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
}

/* Form Group */
#popupContainer .form-group {
  margin-bottom: 15px;
}
#popupContainer .form-group label {
  display: block;
  margin-bottom: 5px;
  font-size: 14px;
  color: #555;
}
#popupContainer .form-group input,
#popupContainer .form-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 14px;
}

/* Submit Button */
#popupContainer .submit-btn {
  width: 100%;
  padding: 10px;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
#popupContainer .submit-btn:hover {
  background-color: #218838;
}

</style>


<!--enquire form -->
<style>
  /* Scoped Styles for #popupContainer */

/* Global Container for Scoping */
#popupContainerHome {
  position: relative;
  display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
}

#popupContainerHome.show {
        display: block;
        opacity: 1;
    }
/* Open Form Button */
#popupContainerHome .open-form-btn {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}
#popupContainerHome .open-form-btn:hover {
  background-color: #0056b3;
}

/* Popup Form */
#popupContainerHome .popup-form {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}
#popupContainerHome .hidden {
  display: none;
}

/* Form Container */
#popupContainerHome .form-container {
  background: white;
  padding: 20px 30px;
  width: 100%;
  max-width: 400px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  animation: fadeIn 0.3s ease;
}
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Close Button */
#popupContainerHome .close-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  background: transparent;
  border: none;
  font-size: 20px;
  cursor: pointer;
}

/* Form Title */
#popupContainerHome .form-title {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
}

/* Form Group */
#popupContainerHome .form-group {
  margin-bottom: 15px;
}
#popupContainerHome .form-group label {
  display: block;
  margin-bottom: 5px;
  font-size: 14px;
  color: #555;
}
#popupContainerHome .form-group input,
#popupContainerHome .form-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 14px;
}

/* Submit Button */
#popupContainerHome .submit-btn {
  width: 100%;
  padding: 10px;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
#popupContainerHome .submit-btn:hover {
  background-color: #218838;
}

</style>


<!---agent-signup---->
<style>
  /* Form container styling */
  #agentSignup.form-container {
      background-color: #fff;
      padding: 20px 30px;
      width: 100%;
      max-width: 500px;
      margin: 50px auto;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      animation: fadeIn 0.3s ease;
  }

  /* Fade in effect */
  @keyframes fadeIn {
      from {
          opacity: 0;
          transform: translateY(-20px);
      }
      to {
          opacity: 1;
          transform: translateY(0);
      }
  }

  /* Form title styling */
  #agentSignup .form-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
      text-align: center;
  }

  /* Form group styling */
  #agentSignup .form-group {
      margin-bottom: 15px;
  }

  /* Label styling */
  #agentSignup .form-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #555;
  }

  /* Input and select field styling */
  #agentSignup .form-group input,
  #agentSignup .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
      box-sizing: border-box;
  }

  /* Error message styling */
  #agentSignup .error {
      color: red;
      font-size: 12px;
      margin-top: 5px;
  }

  /* Submit button styling */
  #agentSignup .submit-btn {
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }

  /* Submit button hover effect */
  #agentSignup .submit-btn:hover {
      background-color: #218838;
  }

  /* Success alert message styling */
  #agentSignup .alert-success {
      padding: 10px;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
      border-radius: 5px;
      margin-bottom: 15px;
  }

  /* Centering the error messages and form */
  .text-center {
      text-align: center;
  }
</style>

 <body>

    <div id="whatsapp">
        {{-- <a href="https://wa.me/+971567866713"> --}}
            <a href="https://api.whatsapp.com/send/?phone=%2B971567866713&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0">
        <img src="{{asset('asserts/user/img/whatsapp.png')}}" alt="whats_app" style="height: 100%;">
    </a>
    </div>

    <div id="call">
        <a href="tel:+971567866713">
        <img src="{{asset('asserts/user/img/call_logo.png')}}" alt="call_logo" style="height: 100%;">
    </a>
    </div>

 <div class=" bg-white p-0">
{{$slot}}
        
@include('user.includes.footer')
    
@include('user.includes.header')
@include('user.includes.navbar') 
 <!-- This is where the content from the Livewire component will be injected -->

<style>
    
#whatsapp{
    height: clamp(25px,30vw,5rem);
    z-index: 4;
    position: fixed;
    right: 10px;
    bottom:6rem;
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











 <body>

    <div id="whatsapp">
        {{-- <a href="https://wa.me/+971567866713"> --}}
            <a href="https://api.whatsapp.com/send/?phone=%2B971567866713&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0">
        <img src="{{asset('asserts/user/img/whatsapp.png')}}" alt="whats_app" style="height: 100%;">
    </a>
    </div>

    <div id="call">
        <a href="tel:++971566115491">
        <img src="{{asset('asserts/user/img/call_logo.png')}}" alt="call_logo" style="height: 100%;">
    </a>
    </div>

 <div>

  <!------>
  <div class="chat-icon" onclick="toggleChat()">
    💬
</div>

<!-- Chat Box -->
<div class="chat-box" id="chatBox">
    <div class="chat-header">
      Quick Book
        <span class="close-btn" onclick="toggleChat()">×</span>
    </div>
    <form id="chatForm" method="POST"  action="{{route('qbook.submitForm')}}">
      @csrf
      @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
    <!-- Name -->
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" placeholder="Enter your name" name="name" required>
      @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <!-- Mobile -->
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="text" id="mobile" placeholder="Enter your mobile number"  name="qmobile" required>
      @error('mobile') <span class="error">{{ $message }}</span> @enderror
    </div>
    <!-- Date of Travel -->
    <div class="form-group">
      <label for="date">Date of Travel</label>
      <input type="date" id="date"  name="date_of_travel" required>
      @error('date_of_travel') <span class="error">{{ $message }}</span> @enderror
    </div>
    <!-- Total Pax -->
    <div class="form-group">
      <label for="pax">Total Pax</label>
      <input type="number" id="pax" placeholder="Enter number of travelers"  name="total_pax" required>
      @error('total_pax') <span class="error">{{ $message }}</span> @enderror
    </div>
    <!-- Travel Mode -->
    <div class="form-group">
      <label for="mode">Travel Mode</label>
      <select class="form-control" id="mode"  name="travel_type" required>
        <option value="">Select</option>
        <option value="Bus">By Bus</option>
        <option value="Flight">By Flight</option>
      </select>
      @error('travel_type') <span class="error">{{ $message }}</span> @enderror
    </div>
    <!-- Submit Button -->
        <button class="mt-3" type="submit">Send</button>
    </form>
</div>



<style>
  /* Floating Chat Icon */
  .chat-icon {
    z-index: 5;
      position: fixed;
      bottom: 11rem;
      right: 20px;
      background-color: #FEAF39;
      color: white;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      cursor: pointer;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  }

  /* Chat Box */
  .chat-box {
    z-index: 5;
      position: fixed;
      bottom: 14rem;
      right: 50px;
      width: 300px;
      background: white;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      display: none;
      flex-direction: column;
      padding: 15px;
      /* Smooth Transition */
    /* opacity: 0;*/
    transform: translateY(20px); 
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  /* Chat Box Header */
  .chat-header {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      display: flex;
      justify-content: space-between;
  }

  /* Close Button */
  .close-btn {
      cursor: pointer;
      color: red;
      font-weight: bold;
  }

  /* Form Inputs */
  .chat-box input, .chat-box textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
  }

  /* Submit Button */
  .chat-box button {
      background-color: #FEAF39;
      color: white;
      border: none;
      padding: 8px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
  }

  /* Style for the text above the icon */
#text .text {
    font-size: 14px;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 5px;
    opacity: 0; /* Initially hidden */
    transform: translateY(-20px); /* Start off-screen */
    transition: opacity 0.3s ease, transform 0.3s ease; /* Smooth transition */
}

/* Add animation when the chat icon is active */
.chat-container:hover .text {
    opacity: 1; /* Show the text */
    transform: translateY(0); /* Move the text into place */
}

</style>

<script>
function toggleChat() {
    let chatBox = document.getElementById("chatBox");
    chatBox.style.display = (chatBox.style.display === "none" || chatBox.style.display === "") ? "block" : "none";
}


</script>



 </div>



 <div class=" bg-white p-0">
{{$slot}}

        
@include('user.includes.footer')






    

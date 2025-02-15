@include('user.includes.header')
@include('user.includes.navbar') 
 <!-- This is where the content from the Livewire component will be injected -->

<style>
@keyframes jump {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px); /* Moves the icon up by 10px */
        }
    }
 
#whatsapp{
    height: clamp(25px,30vw,5rem);
    z-index: 4;
    position: fixed;
    right: 10px;
    bottom:6rem;
    cursor: pointer;
    animation: jump 1.5s infinite ease-in-out; 
  
}
#call{
 
    height: clamp(15px,8vw,3rem);
    z-index: 4;
    position: fixed;
    left: 1rem;
    bottom:7rem;
    cursor: pointer;
     animation: jump 1.5s infinite ease-in-out; 
  

}
</style>

 <body >

    <div id="whatsapp">
        {{-- <a href="https://wa.me/+971567866713"> --}}
            <a href="https://api.whatsapp.com/send/?phone=%2B971567866713&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0">
        <img src="{{asset('asserts/user/img/whatsapp.png')}}" alt="whats_app" style="height: 100%;">
    </a>
    </div>

    <div id="call">
        <a href="tel:+971566115491">
        <img src="{{asset('asserts/user/img/call_logo.png')}}" alt="call_logo" style="height: 100%;">
    </a>
    </div>

 <div>

 
<div id="chat-icon" onclick="toggleChat()">
 BOOK NOW


 <style>
    /* Floating Chat Icon */
    #chat-icon {
    z-index: 5;
      position: fixed;
      top: 25rem;
      right: -47px;
      background-color: #FEAF39;
      color: white;
      
      height: 50px;
      letter-spacing: 2px;
      padding: 0px 10px;
      border-radius: 15px 15px 0 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
     transform: rotate(270deg);
      cursor: pointer;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

/* Hover effect */
#chat-icon:hover {
  transition: linear 0.8s ;
  transform: rotate(270deg);
    transform: translate(-80px,20px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
    background-color: rgb(6, 184, 6); /* Slightly darker background color on hover */
}

 </style>
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


<style>
  .package-image {
      width: 18vw;
      height: 18vw;
      max-width: 100%;
      max-height: 100%;
      aspect-ratio: 1 / 1; /* Ensures a square shape */
      border-radius: 15px;a
  }

  @media (max-width: 768px) {
      .package-image {
          width: 50vw; /* Increase size for mobile */
          height: 50vw;
      }
  }

  @media (max-width: 480px) {
      .package-image {
          width: 80vw; /* Full width for smaller screens */
          height: auto; /* Maintain aspect ratio */
      }
  }

  @keyframes zoomInOut {
    0% { 
    transform: scale(1); 
    opacity: 1;
  }
  50% { 
    transform: scale(1.1); 
    opacity: 1; /* Keep normal opacity */
  }
  90% {
    transform: scale(1); 
    opacity: 1; /* Reset zoom */
  }
  100% { 
    background-color: white; /* White blink effect */
    opacity: 0; 
  }/* Zoom out */
}

.imgZoom img {
animation: zoomInOut 9s infinite ease-in-out;
}

</style>

 </div>



 <div class=" bg-white p-0">
{{$slot}}

        
@include('user.includes.footer')






    

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
    
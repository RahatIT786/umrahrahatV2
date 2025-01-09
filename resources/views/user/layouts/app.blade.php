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
 <body>

    <div id="whatsapp">
        {{-- <a href="https://wa.me/+971567866713"> --}}
            <a href="https://api.whatsapp.com/send/?phone=%2B971567866713&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0">
        <img src="{{asset('public/asserts/user/img/whatsapp.png')}}" alt="whats_app" style="height: 100%;">
    </a>
    </div>

    <div id="call">
        <a href="tel:+971567866713">
        <img src="{{asset('public/asserts/user/img/call_logo.png')}}" alt="call_logo" style="height: 100%;">
    </a>
    </div>

 <div class=" bg-white p-0">
{{$slot}}
        
@include('user.includes.footer')
    
@include('user.includes.navbar') 
 <!-- This is where the content from the Livewire component will be injected -->
 <body>
 <div class=" bg-white p-0">
{{$slot}}
        
@include('user.includes.footer')
    
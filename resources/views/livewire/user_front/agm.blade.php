<section style="margin-bottom:110px">
        <!-- Carousel Start -->
        {{-- <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " src="{{asset('newImg/awart4.jpg')}}" alt="Image" style="height: 30vh; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">AGM Speak</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="gallery-container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="award">Awards</button>
                <button class="filter-btn" data-filter="agm">AGM</button>
                <button class="filter-btn" data-filter="event">Events</button>
                
              
            </div>
    
            <div class="gallery-grid">
                @foreach ($events as $event)
                <div class="gallery-item" data-category="event">
                    <img src="{{asset($event['imgPath'])}}" alt="Event 1" style="object-fit: cover; object-position:{{$event['position']}};">
                    <div class="item-overlay">
                        <h3>{{$event['title']}}</h3>
                        {{-- <p>2023 Main Event</p> --}}
                    </div>
                </div>
                @endforeach
               
    <!------------------event-bottom------------------------------------------------->
                <!-- AGM Items -->
                @foreach ($agms as $agm)
                <div class="gallery-item" data-category="agm">
                    <img src="{{asset($agm['imgPath'])}}" alt="AGM 1">
                    <div class="item-overlay">
                        {{-- <h3>2023 AGM Meeting</h3>
                        <p>Shareholder Gathering</p> --}}
                    </div>
                </div>
                @endforeach
    

                 <!------------------agm-bottom------------------------------------------------->
                <!-- Award Items -->
               @foreach ($awards as $award)
               <div class="gallery-item" data-category="award">
                <img src="{{asset($award['imgPath'])}}" alt="Award 1" style="object-fit: cover; object-position:{{$award['position']}};">
                <div class="item-overlay">
                    <h3>{{$award['title']}}</h3>
                    {{-- <p>2023 Ceremony</p> --}}
                </div>
            </div>
               @endforeach
                 <!------------------award-bottom------------------------------------------------->
                 <!-- Award Items -->
                 {{-- <div class="gallery-item" data-category="award">
                    <img src="{{asset()}}" alt="Award 1">
                    <div class="item-overlay">
                        <h3>Excellence Awards</h3>
                        <p>2023 Ceremony</p>
                    </div>
                </div>
                 <!-- Award Items -->
                 <div class="gallery-item" data-category="award">
                    <img src="{{asset()}}" alt="Award 1">
                    <div class="item-overlay">
                        <h3>Excellence Awards</h3>
                        <p>2023 Ceremony</p>
                    </div>
                </div> --}}
    
                <!-- Add more items with appropriate data-category -->
            </div>
        </div>
        <div class="" id="about">
            <div class="container" >
                
           
                   
               
                <h4 class="section-title text-start text-primary my-5 text-uppercase">People Love RAHAT .. Watch some of Our Agents Speak...</h4>
                <div>
    <div class="container-fluid p-0">
        <div class="owl-carousel testimonial-carousel py-5" data-items="3" data-loop="true" data-autoplay="true" data-margin="30">
            <!-- YouTube Video 1 -->
            <div style="height:500px;width:500px" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <div class="embed-responsive ">
                    <iframe  style="height:500px;width:500px"  class="embed-responsive-item" src="https://www.youtube.com/embed/vbREORgANBE?autoplay=1&controls=0&loop=1&playlist=vbREORgANBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="" style="max-width: 500px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Customer Review</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Shaikh's Experience</h1>
                    </div>
                </div> -->
            </div>

            <!-- YouTube Video 2 -->
            <div style="height:500px;width:500px" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <div class="embed-responsive ">
                  <iframe width="500" height="500" src="https://www.youtube.com/embed/ZjlB1NqAdZ8?si=X8wVEm-IGNFWwYW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="" style="max-width: 500px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Customer Review</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Ansari Hammad's Experience</h1>
                    </div>
                </div> -->
            </div>

            <!-- YouTube Video 3 -->
            <div style="height:500px;width:500px" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <div class="embed-responsive">
                <iframe width="500" height="500" src="https://www.youtube.com/embed/wpVaK-E9T7s?si=q5biYSOJpc5HnITu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="" style="max-width: 500px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Customer Review</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Mohammed Milkan's Experience</h1>
                    </div>
                </div> -->
            </div>
            
            <!-- YouTube Video 4 -->
            <div style="height:500px;width:500px" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <div class="embed-responsive">
                <iframe width="500" height="500" src="https://www.youtube.com/embed/GG41qrQjlLk?si=8xwO3BgbosIFXWsi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="" style="max-width: 500px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Customer Review</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Mohammed Milkan's Experience</h1>
                    </div>
                </div> -->
            </div>
            
            <!-- YouTube Video 5 -->
            <div style="height:500px;width:500px" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <div class="embed-responsive">
                <iframe width="500" height="500" src="https://www.youtube.com/embed/TPqPl_KBYQI?si=TMkkbwfAEThr-ORw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="" style="max-width: 500px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Customer Review</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Mohammed Milkan's Experience</h1>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 3,            // Show 3 items at once
        loop: true,          // Loop the carousel
        margin: 30,          // Margin between items
        autoplay: true,      // Enable autoplay
        autoplayTimeout: 5000, // Set timeout for autoplay
        autoplayHoverPause: true, // Pause on hover
        responsive: {
            0: {
                items: 1 // Show 1 item on small screens (Mobile)
            },
            768: {
                items: 2 // Show 2 items on tablets
            },
            1024: {
                items: 3 // Show 3 items on large screens (Desktop)
            }
        }
    });
});

</script>


            </div>
        </div>
        <!-- About End -->


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterButtons = document.querySelectorAll('.filter-btn');
                const galleryItems = document.querySelectorAll('.gallery-item');
    
                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Remove active class from all buttons
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');
    
                        const filter = button.dataset.filter;
    
                        galleryItems.forEach(item => {
                            const category = item.dataset.category;
                            if (filter === 'all' || category === filter) {
                                item.style.display = 'block';
                                item.classList.remove('hide');
                            } else {
                                item.classList.add('hide');
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 300); // Match animation duration
                            }
                        });
                    });
                });
            });
        </script>

<style>
    .gallery-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 20px;
    }

    .filter-buttons {
        text-align: center;
        margin-bottom: 30px;
    }

    .filter-btn {
        background: #f5f5f5;
        border: 2px solid #2c3e50;
        color: #2c3e50;
        padding: 12px 25px;
        margin: 0 10px;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .filter-btn.active,
    .filter-btn:hover {
        background: #2c3e50;
        color: #fff;
        transform: translateY(-2px);
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        animation: fadeIn 0.5s ease;
    }

    .gallery-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
    }

    .gallery-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .item-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.8));
        color: white;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.3s ease;

        h3{
            color: #f5f5f5;
        }
        
    }

    .gallery-item:hover .item-overlay {
        opacity: 1;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Animation for filtered items */
    .gallery-item.hide {
        animation: fadeOut 0.3s ease forwards;
    }

    @keyframes fadeOut {
        from { opacity: 1; }
        to { opacity: 0; height: 0; width: 0; margin: 0; padding: 0; }
    }
</style>

</section>
 

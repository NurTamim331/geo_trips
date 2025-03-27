<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geo Trips</title>
    <!-- tailwind link  -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- daisy ui cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- playfair font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <style>
        .header-font {
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: bolder;
        }
    </style>
</head>

<body class="bg-blue-100">
    <header class="h-24 w-full">
        <nav class="flex flex-row max-h-24  bg-blue-400 justify-between items-center px-4 ">
            <div class="max-h-24"><img class="rounded-2xl max-h-24 p-2" src="resources/images/geo_travel_logo.png"
                    alt=""></div>
            <ul class="flex flex-row justify-evenly gap-4 font-bold font-sans">
                <li><a class="hover:bg-cyan-400 p-2 rounded-lg" href="home.php">Home</a></li>
                <li><a class="hover:bg-cyan-400 p-2 rounded-lg" href="about.php">About Us</a></li>
                <li><a class="hover:bg-cyan-400 p-2 rounded-lg" href="services.php">Services</a></li>
                <li><a class="hover:bg-cyan-400 p-2 rounded-lg" href="packages.php">Packages</a></li>
                <li><a class="hover:bg-cyan-400 p-2 rounded-lg" href="contacts.php">Contacts</a></li>
            </ul>
            <div>
                <a href="login.php"><button class="btn bg-orange-400 p-4 hover:bg-orange-300"><i class="fa-solid fa-lock" style="color: #262726;"></i>Admin</button></a>
                <a href="signin.php"><button class="btn bg-purple-600 p-4 hover:bg-purple-400"><i class="fa-solid fa-arrow-right-to-bracket"></i>Sign in</button></a>
                <a href="Registration.php"><button class="btn bg-teal-500 p-4 hover:bg-teal-300"><i class="fa-solid fa-user-plus"></i>Sign up</button></a>

            </div>
        </nav>
    </header>
    <!-- carousal section  -->
    <section class="mx-10 mt-1 rounded-md">
        <!-- slider carousal code  -->
        <div class="carousel md:h-[550px] w-full">
            <!-- slider 1 -->
            <div id="slide1" class="carousel-item relative w-full bg-gradient-to-r from-blue-200 to-blue-400  bg-opacity-55 gap-y-8">
                <!-- main content container  -->
                <div class="flex flex-col md:flex-row justify-between">
                    <!-- text content  -->
                    <div class="flex flex-col  items-start justify-center gap-y-10 p-10 flex-1 text-black">
                        <h1 class="text-5xl font-bold">Fly To Riyadh With Us Bangla, Your friendliest companion</h1>
                        <p>Experience a seamless journey from the heart of Bangladesh to the vibrant capital of Saudi Arabia. Enjoy comfortable flights with US-Bangla Air and discover the rich culture and modern wonders of Riyadh.

                        </p>
                        <button class="btn bg-blue-500 hover:bg-teal-300 p-4">Purchase</button>
                    </div>
                    <!-- image content  -->
                    <div class="flex-1  py-8 md:py-24 px-3  "><img src="resources/images/carousal_pic_1.jpeg"
                            class="w-[400px] " />
                    </div>
                </div>
                <!-- button container  -->
                <div class="absolute left-2 right-2 top-1/2 flex -translate-y-1/2 transform justify-between ">
                    <a href="#slide4" class="btn  opacity-55 hover:opacity-100">❮</a>
                    <a href="#slide2" class="btn btn-warning opacity-55 hover:opacity-100">❯</a>
                </div>
            </div>
            <!-- slide 2 -->
            <div id="slide2" class="carousel-item relative w-full bg-gradient-to-r from-blue-200 to-blue-400">
                <!-- main content container  -->
                <div class="flex flex-col md:flex-row justify-between">
                    <!-- text content  -->
                    <div class="flex flex-col  items-start justify-center gap-y-10 p-10 gap-y-8 flex-1 text-black">
                        <h1 class="text-5xl font-bold">Himalayan Heritage Kathmandu</h1>
                        <p> Discover the soul of Nepal with our Kathmandu package. Explore ancient temples, breathtaking landscapes, and vibrant culture. Your adventure awaits!</p>
                        <button class="btn bg-blue-500 hover:bg-teal-300 p-4 text-white border-none">Purchase</button>
                    </div>
                    <!-- image content  -->
                    <div class="flex-1  py-8 md:py-24 px-3  "><img src="resources/images/Carousal_pic_2.jpeg"
                            class="w-[400px] " />
                    </div>
                </div>
                <!-- button container  -->
                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <a href="#slide1" class="btn btn-warning opacity-55 hover:opacity-100">❮</a>
                    <a href="#slide3" class="btn btn-warning opacity-55 hover:opacity-100">❯</a>
                </div>
            </div>
            <!-- sslide 3 -->
            <div id="slide3" class="carousel-item relative w-full bg-gradient-to-r from-blue-200 to-blue-400">
                <!-- main content container  -->
                <div class="flex flex-col md:flex-row justify-between">
                    <!-- text content  -->
                    <div class="flex flex-col  items-start justify-center gap-y-10 p-10 flex-1 text-black">
                        <h1 class="text-5xl font-bold">Tropical Twin Treasures</h1>
                        <p>Experience the pristine beaches of the Maldives, then explore Sri Lanka's cultural treasures. This package blends relaxation with adventure in two stunning Indian Ocean destinations.</p>
                        <button class="btn  bg-blue-500 hover:bg-teal-300 p-4 text-white border-none">Purchase</button>
                    </div>
                    <!-- image content  -->
                    <div class="flex-1  py-8 md:py-24 px-3  "><img src="resources/images/carousal pic 3.jpeg"
                            class="w-[400px] " />
                    </div>
                </div>
                <!-- button container  -->
                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <a href="#slide2" class="btn btn-warning opacity-55 hover:opacity-100">❮</a>
                    <a href="#slide4" class="btn btn-warning opacity-55 hover:opacity-100">❯</a>
                </div>
            </div>
            <!-- slide 4  -->

            <div id="slide4" class="carousel-item relative w-full bg-gradient-to-r from-blue-200 to-blue-400">
                <!-- main content container  -->
                <div class="flex flex-col md:flex-row justify-between">
                    <!-- text content  -->
                    <div class="flex flex-col  items-start justify-center gap-y-10 p-10 flex-1 text-black">
                        <h1 class="text-5xl font-bold">Dream Destinations, Dream Discounts</h1>
                        <p>Your dream trip is now more affordable. Enjoy 30% off economy flights with Oman Air.</p>
                        <button class="btn  bg-blue-500 hover:bg-teal-300 p-4 text-white border-none">Purchase</button>
                    </div>
                    <!-- image content  -->
                    <div class="flex-1  py-8 md:py-24 px-3  "><img src="resources/images/carousal pic 4.jpeg"
                            class="w-[400px] " />
                    </div>
                </div>
                <!-- button container  -->
                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <a href="#slide3" class="btn btn-warning opacity-55 hover:opacity-100">❮</a>
                    <a href="#slide1" class="btn btn-warning opacity-55 hover:opacity-100">❯</a>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section  -->
    <section class="mx-10 mt-2 p-10 grid grid-cols-2 items-center justify-between gap-10  bg-[url('resources/images/hero_bg.jpg')] rounded-lg ">
        <!-- #contents section -->
        <div
            class="flex flex-col gap-4 bg-[#004d40] justify-center items-center bg-gradient-to-r from-black via-gray-800 to-transparent p-6 rounded-lg">
            <h1 class="text-2xl font-bold font-mono text-orange-500">Explore the World with Ease!</h1>
            <h3 class="text-lg font-normal text-white"><i>Explore breathtaking destinations, plan seamless trips, and
                    book hassle-free accommodations—all in one place. Whether you're dreaming of a relaxing getaway, an
                    exciting adventure, or a cultural escape, we make travel easy and unforgettable.</i></h3>
            <!-- button section  -->
            <div class="flex flex-row gap-3">
                <!-- Leads to search or booking page -->
                <button class="btn p-4 bg-red-500 hover:bg-red-600 border-none"><i class="fa-solid fa-camera"
                        style="color: #B197FC;"></i>Start your Journey</button>
                <!-- Leads to a list of travel locations -->
                <button class="btn p4 bg-green-300 p-4 hover:bg-green-200 "><i class="fa-solid fa-magnifying-glass fa-sm"
                        style="color: #000000;"></i>Explore Destinations</button>
            </div>
        </div>
        <div>
            <img class="max-w-[90%] rounded-2xl self-end" src="resources/images/hero.jfif" alt="">
        </div>
    </section>
    <!-- popular destinations  -->
    <section class="p-10">
        <h2 class="text-3xl font-bold text-center mb-6">Popular Destinations</h2>
        <div class="grid grid-cols-3 gap-6">
            <!-- Bali -->
            <div class="bg-white shadow-lg p-4 rounded-lg flex flex-col justify-between items-start">
                <img src="resources/images/destination1.jpg" class="rounded-lg">
                <h3 class="text-xl font-semibold header-font mt-3">Bali, Indonesia</h3>
                <p class="text-gray-600">A symphony of nature, culture, and serenity. Let your journey begin.</p>
                <button class="btn p-4 text-white bg-blue-500 rounded-lg hover:bg-teal-300 hover:text-black ">View More</button>
            </div>
            <!-- santorini, greece  -->
            <div class="bg-white shadow-lg p-4 rounded-lg flex flex-col justify-between items-start">
                <img src="resources/images/destination2.jpg" class="rounded-lg">
                <h3 class="text-xl font-semibold header-font mt-3">Santorini, Greece</h3>
                <p class="text-gray-600">Enjoy stunning views and charming whitewashed villages.</p>
                <button class="btn btn p-4 text-white bg-blue-500 rounded-lg hover:bg-teal-300 hover:text-black  mt-1">View More</button>
            </div>
            <!-- kyoto japan  -->

            <div class="bg-white shadow-lg p-4 rounded-lg flex flex-col justify-between items-start">
                <img src="resources/images/destination3.jpg" class="rounded-lg">
                <h3 class="text-xl font-bold mt-1 header-font">Kyoto, Japan</h3>
                <p class="text-gray-600">A tapestry of temples, gardens, and geishas. Your unforgettable adventure
                    awaits.</p>
                <button class="btn btn p-4 text-white bg-blue-500 rounded-lg hover:bg-teal-300 hover:text-black  mt-1">View More</button>
            </div>
            <!-- paris  -->
            <div class="bg-white shadow-lg p-4 rounded-lg flex flex-col justify-between items-start">
                <img src="resources/images/destination4.jpg" class="rounded-lg">
                <h3 class="text-xl font-bold mt-1 header-font">Paris, France</h3>
                <p class="text-gray-600">A tapestry of temples, gardens, and geishas. Your unforgettable adventure
                    awaits.</p>
                <button class="btn btn p-4 text-white bg-blue-500 rounded-lg hover:bg-teal-300 hover:text-black   mt-1">View More</button>
            </div>
            <!-- barcelona  -->
            <div class="bg-white shadow-lg p-4 rounded-lg flex flex-col justify-between items-start">
                <img src="resources/images/destination5.jpg" class="rounded-lg">
                <h3 class="text-xl font-bold mt-1 header-font">Barcelona, Spain</h3>
                <p class="text-gray-600">A tapestry of temples, gardens, and geishas. Your unforgettable adventure
                    awaits.</p>
                <button class="btn btn p-4 text-white bg-blue-500 rounded-lg hover:bg-teal-300 hover:text-black   mt-1">View More</button>
            </div>
            <!-- sundarban  -->
            <div class="bg-white shadow-lg p-4 rounded-lg flex flex-col justify-between items-start">
                <img src="resources/images/destination6.jpg" class="rounded-lg">
                <h3 class="text-xl font-bold mt-1 header-font">Sundarban, Bangladesh</h3>
                <p class="text-gray-600">A tapestry of temples, gardens, and geishas. Your unforgettable adventure
                    awaits.</p>
                <button class="btn btn p-4 text-white bg-blue-500 rounded-lg hover:bg-teal-300 hover:text-black   mt-1">View More</button>
            </div>
        </div>
    </section>
    <!-- packages section  -->
    <section class="p-10 bg-white mx-10 mt-2">
        <h2 class="text-3xl font-bold text-center mb-6">Top Travel Packages</h2>
        <!-- container for cards  -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Package 1 -->
            <div class="bg-white shadow-lg p-6 rounded-lg transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-semibold mt-3">Bali Adventure</h3>
                <p class="text-gray-600 mt-2">5 Nights | 4-Star Hotel | Guided Tours</p>
                <div class="flex items-center gap-3 mt-4">
                    <i class="fa-solid fa-plane text-blue-600 text-2xl"></i>
                    <i class="fa-solid fa-hotel text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-map text-red-600 text-2xl"></i>
                </div>
                <p class="mt-4 text-lg font-bold text-red-600">$999 <span
                        class="text-gray-500 line-through">$1299</span></p>
                <button class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Book Now</button>
            </div>

            <!-- Package 2 -->
            <div class="bg-white shadow-lg p-6 rounded-lg transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-semibold mt-3">Santorini Escape</h3>
                <p class="text-gray-600 mt-2">7 Nights | Beach Resort | Cruise Ride</p>
                <div class="flex items-center gap-3 mt-4">
                    <i class="fa-solid fa-plane text-blue-600 text-2xl"></i>
                    <i class="fa-solid fa-hotel text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-ship text-red-600 text-2xl"></i>
                </div>
                <p class="mt-4 text-lg font-bold text-red-600">$1499 <span
                        class="text-gray-500 line-through">$1899</span></p>
                <button class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Book Now</button>
            </div>
            <!-- Package 3 -->
            <div class="bg-white shadow-lg p-6 rounded-lg transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-semibold mt-3">Kyoto Kimono Dreams</h3>
                <p class="text-gray-600 mt-2">7 Nights | Temple visit |Meditation Session</p>
                <div class="flex items-center gap-3 mt-4">
                    <i class="fa-solid fa-plane text-blue-600 text-2xl"></i>
                    <i class="fa-solid fa-hotel text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-ship text-red-600 text-2xl"></i>
                </div>
                <p class="mt-4 text-lg font-bold text-red-600">$1499 <span
                        class="text-gray-500 line-through">$1899</span></p>
                <button class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Book Now</button>
            </div>
            <!-- Package 4 -->
            <div class="bg-white shadow-lg p-6 rounded-lg transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-semibold mt-3">Love in Paris</h3>
                <p class="text-gray-600 mt-2">5 Nights | 4-Star Hotel | Guided Tours</p>
                <div class="flex items-center gap-3 mt-4">
                    <i class="fa-solid fa-plane text-blue-600 text-2xl"></i>
                    <i class="fa-solid fa-hotel text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-map text-red-600 text-2xl"></i>
                </div>
                <p class="mt-4 text-lg font-bold text-red-600">$999 <span
                        class="text-gray-500 line-through">$1299</span></p>
                <button class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Book Now</button>
            </div>

            <!-- Package 5 -->
            <div class="bg-white shadow-lg p-6 rounded-lg transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-semibold mt-3">Barcelona's Artistic Soul</h3>
                <p class="text-gray-600 mt-2">7 Nights | Beach Resort | Camp Nou visit</p>
                <div class="flex items-center gap-3 mt-4">
                    <i class="fa-solid fa-plane text-blue-600 text-2xl"></i>
                    <i class="fa-solid fa-hotel text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-ship text-red-600 text-2xl"></i>
                </div>
                <p class="mt-4 text-lg font-bold text-red-600">$1499 <span
                        class="text-gray-500 line-through">$1899</span></p>
                <button class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Book Now</button>
            </div>
            <!-- Package 6 -->
            <div class="bg-white shadow-lg p-6 rounded-lg transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-semibold mt-3">Sundarbans Delta Discovery</h3>
                <p class="text-gray-600 mt-2">3 Nights | Beach Resort | Boat Ride</p>
                <div class="flex items-center gap-3 mt-4">
                    <i class="fa-solid fa-plane text-blue-600 text-2xl"></i>
                    <i class="fa-solid fa-hotel text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-ship text-red-600 text-2xl"></i>
                </div>
                <p class="mt-4 text-lg font-bold text-red-600">$399 <span class="text-gray-500 line-through">$599</span>
                </p>
                <button class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Book Now</button>
            </div>
        </div>
        </div>
    </section>
    <div class="max-w-4xl mx-auto py-10 px-5 mx-10 mt-2">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <?php
            $faqs = [
                "What destinations do you offer?" => "We offer a wide range of destinations, including tropical beaches, historic cities, and adventure locations worldwide.",
                "How do I book a trip?" => "You can book a trip by selecting your destination, choosing a package, and completing the checkout process on our website.",
                "What payment methods do you accept?" => "We accept credit cards, PayPal, and other online payment options.",
                "Can I cancel or reschedule my booking?" => "Yes, you can cancel or reschedule your booking depending on the policy of the chosen package. Please check the terms before booking."
            ];

            foreach ($faqs as $question => $answer):
            ?>
                <div class="bg-white shadow-md p-5 rounded-lg">
                    <button class="w-full text-left font-semibold text-gray-800 flex justify-between" onclick="toggleFAQ(this)">
                        <?php echo $question; ?>
                        <span class="text-xl">+</span>
                    </button>
                    <p class="mt-2 text-gray-600 hidden"><?php echo $answer; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                button.querySelector('span').textContent = '-';
            } else {
                answer.classList.add('hidden');
                button.querySelector('span').textContent = '+';
            }
        }
    </script>
    <!-- reviews section -->
    <section class="grid grid-cols-3 mx-10 mt-2 gap-y-4 gap-x-2">
        <!-- card 1 -->
        <div class="flex flex-col justify-center items-center bg-gradient-to-r from-blue-200 to-blue-400 p-6 rounded-lg">
            <img src="resources/images/avatar-1.jpg" alt="" class="rounded-full max-h-60 ">
            <div class="flex flex-row gap-x-2 mt-4">
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
            </div>
            <p class="text-white text-center mt-4">"I had an amazing experience with Geo Trips. The booking process was easy, and the trip was unforgettable!"</p>
            <h4 class="text-white font-semibold mt-4">- Jane Doe</h4>
        </div>
        <!-- card 2 -->
        <div class="flex flex-col justify-center items-center bg-gradient-to-r from-teal-400 to-yellow-400 p-6 rounded-lg">
            <img src="resources/images/avatar-2.jpg" alt="" class="rounded-full max-h-60  ">
            <div class="flex flex-row gap-x-2 mt-4">
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
            </div>
            <p class="text-white text-center mt-4">"The guides' deep knowledge and passion truly enhanced the experience, making complex geological concepts accessible and fascinating.!"</p>
            <h4 class="text-white font-semibold mt-4">- Oscar Rio</h4>
        </div>
        <!-- card 3 -->
        <div class="flex flex-col justify-center items-center bg-gradient-to-r from-red-500 to-purple-400 p-6 rounded-lg">
            <img src="resources/images/avatar-3.jpg" alt="" class="rounded-full max-h-60">
            <div class="flex flex-row gap-x-2 mt-4">
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
            </div>
            <p class="text-white text-center mt-4">"From meticulously planned itineraries to exceptional field experiences, Geo Trips provides an unforgettable journey into the earth's remarkable history."</p>
            <h4 class="text-white font-semibold mt-4">- Alexander Sorloth</h4>
        </div>
    </section>
    <footer class="bg-gray-900 text-white py-6 px-10 mt-2">
        <div class="container mx-auto flex justify-between">
            <div>
                <h3 class="text-xl font-bold header-font">Geo Trips</h3>
                <p>Explore the world with ease!</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold">Quick Links</h4>
                <ul>
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Services</a></li>
                    <li><a href="#" class="hover:underline">FAQs</a></li>
                    <li><a href="contact_us.php" class="hover:underline">Contact Us</a></li>

                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold">Follow Us</h4>
                <div class="flex gap-6 mt-2">
                    <i class="fa-brands fa-facebook text-2xl"></i>
                    <i class="fa-brands fa-twitter text-2xl"></i>
                    <i class="fa-brands fa-instagram text-2xl"></i>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- <meta http-equiv="refresh" content="200"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        Advance PET ct scan Services
    </title>
    <link rel="stylesheet" href="./components/styles.css">
    <script src="./components/index.js" defer></script>
</head>

<body>
    <?php include './components/connectDB.php' ?>
    <?php include './components/faq.php' ?>
    <div class='d-flex flex-column min-vh-100' id="container">
        <header class="position-sticky top-0 bg-light border-danger" style="z-index: 2;">
            <nav class='d-flex justify-content-between align-items-center p-3 px-md-5 custom-nav'>
                <a class="">
                    <img class="h-100" src="https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="">
                </a>
                <button style="background-color: #dc3545; background: var(--clr1); font-weight: 500; border-radius: calc(6rem/53) !important;" class="border-0 rounded text-light myBtn">
                    <a href="tel:18001202676" style="text-decoration: none; color: white;">Contact Us</a>
                </button>
            </nav>

        </header>
        <div class='flex-grow align-self-center' style='flex-grow:1;'>
            <div class='banner d-flex flex-column flex-md-row align-items-center p-3 pe-md-0'>
                <section class="banner__text-section" id="#form1">
                    <h1>
                        PET CT SCAN Cost for cancer diagnostic starts at <span style="border-radius:3px; background-color: var(--clr1); height: auto;">Rs.10999/-</span>
                    </h1>
                    <div class="d-flex section-div d-flex flex-row align-items-center py-1 banner-first-div">
                        <img src="./assets/imgs1.webp" alt="" width="60" height="60" class="">
                        <p class="ms-2 fs-4 fw-normal text-light">One Free Oncology Consultation</p>
                    </div>
                    <div class="d-flex section-div py-1 banner__text-section__div">
                        <img src="./assets/imgs2.webp" alt="" width="60" height="60" class="">
                        <p class="ms-2 fs-4 fw-normal text-light">CION Assured Oncologist Diagnostics
                        </p>
                    </div>
                </section>
                <div class="bg-light p-3 p-md-auto banner__form-section align-self-stretch">
                    <form action="redirect.php" method="POST" style="" class="form laptop-form bg-light rounded border-0 d-flex flex-column align-items-center bg-light ms-3">
                        <h1 class="text-center text-dark mb-0 pb-0" style="color: #a65fa2; font-family: var(--font-sans);">
                            Book Your Pet Scan Now !
                        </h1>
                        <input placeholder="Name" pattern="[a-zA-Z0-9 ]+" name='name' type="text" class="border-0 px-2 bg-white rounded bg-gray-200">
                        <input placeholder="Phone Number" pattern='[0-9]+' name='number' type="number" pattern="" class="border-0 px-2 bg-white rounded bg-gray-200">
                        <select name='type' class="border-0 px-2 bg-white rounded bg-gray-200" id="scanElement" value=''>
                            <option value="Select type of scan">Select type of scan</option>
                            <?php
                            $scansType = array(
                                array("text" => "Whole Body Analog Pet CT scan", "price" => "20000", "discount_price" => "14999"),
                                array("text" => "Whole Body Digital Pet CT Scan", "price" => "25000", "discount_price" => "20999"),
                                array("text" => "PSMA Pet CT Scan", "price" => "35000", "discount_price" => "31000"),
                                array("text" => "Fdopa Pet CT Scan", "price" => "35000", "discount_price" => "31000"),
                                array("text" => "Dotatate Pet CT Scan", "price" => "35000", "discount_price" => "31000"),
                                array("text" => "Dotanoc Pet CT Scan", "price" => "35000", "discount_price" => "31000"),
                            );

                            $typesCardData = $scansType;

                            foreach ($scansType as $scan) {
                                echo "<option value='{$scan['text']}'>{$scan['text']}</option>";
                            }
                            ?>

                        </select>
                        <button style="background-color: #a65fa2;" class="m-auto border-0 fs-bold text-white my-2 form-submit-btn">
                            BOOK NOW
                        </button>
                    </form>
                </div>
            </div>

            <div class="features d-flex flex-row justify-content-around flex-wrap flex-md-nowrap  my-3">
                <div class='features__card'>
                    <img src="./assets/img1.webp" alt="">
                    <span class="align-self-center">Upto 40% Discount</span>
                </div>
                <div class='features__card'>
                    <img src="./assets/img2.webp" alt="">
                    <span class="align-self-center">Same Day Report</span>
                </div>
                <div class='features__card'>
                    <img src="./assets/img3.webp" alt="">
                    <span class="align-self-center">100% Accuracy Assured</span>
                </div>
                <div class='features__card'>
                    <img src="./assets/img4.webp" alt="">
                    <span class="align-self-center">Free Doctor Consultation</span>
                </div>
            </div>
            <?php include './components/typesOFScan.php' ?>
            <div class="d-flex flex-md-row justify-content-center justify-content-md-start align-items-center p-3 text-white mb-2" style="background-image: linear-gradient(to right, #802a8f, #d37fa0);">
                <img class="doctor-image" src="./assets/img5.webp" alt="">
                <div class="ms-3 d-md-flex ms-md-3 flex-md-grow-1 justify-content-md-between align-items-md-center  ">
                    <p class="text-md-start para">
                        Don’t have a prescription?
                        Consult Our Oncologist <span>FREE</span> now!  
                    </p>
                    <button class="btn myBtn book-btn btn-outline-primary bg-light" style="color: var(--clr1);">
                        Book Appointment
                    </button>
                </div>
            </div>
            <div class="reviews-section d-flex flex-column">
                <h1 class="title align-self-center">
                    Testimonial
                </h1>
                <div class="reviews-card-container flex-wrap  d-flex justify-content-md-around align-self-center">

                    <div id="carouselExampleCaptions" class="carousel slide d-md-none pc-accordian-size">
                        <div class="carousel-indicators">
                            <?php
                            $reviews_query = "SELECT * FROM reviews ;";
                            $review_result = $conn->query($reviews_query);
                            $num_reviews = $review_result->num_rows;
                            for ($i = 0; $i < $num_reviews; $i++) {
                                $active_class = ($i == 0) ? 'active' : '';
                                echo "<button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='{$i}' class='{$active_class}' aria-label='Slide " . ($i + 1) . "'></button>";
                            }
                            ?>
                        </div>
                        <div class="carousel-inner">
                            <?php
                            while ($reviewData = $review_result->fetch_assoc()) {
                                $carouselClass = ($reviewData['id'] == 1) ? 'carousel-item active' : 'carousel-item';
                                echo "
                                    <div class='{$carouselClass}'>
                                        <div class='review-card p-2'>
                                            <p>{$reviewData['review']}</p>
                                            <hr class='review-hr-line' />
                                            <div class='p-2 d-flex justify-content-between'>
                                                <h3>{$reviewData['person']}<br>{$reviewData['location']}</h3>
                                                <div>
                                                    <img src='./assets/borderStar.png' alt=''>
                                                    <img src='./assets/borderStar.png' alt=''>
                                                    <img src='./assets/borderStar.png' alt=''>
                                                    <img src='./assets/borderStar.png' alt=''>
                                                    <img src='./assets/borderStar.png' alt=''>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide pc-accordian-size d-none d-md-block">
                        <div class="carousel-indicators">
                            <?php
                            $length_of_review_array = $review_result->num_rows;
                            for ($x = 0; $x < ceil($length_of_review_array / 2); $x++) {
                                $active_class = ($x == 0) ? 'active' : '';
                                echo "<button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='{$x}' class='{$active_class}' aria-label='Slide " . ($x + 1) . "'></button>";
                            }
                            ?>
                        </div>
                        <div class="carousel-inner">
                            <?php
                            $review_result->data_seek(0); // Reset the internal pointer
                            for ($x = 0; $x < ceil($length_of_review_array / 2); $x++) {
                                $carouselClass = ($x == 0) ? 'carousel-item active' : 'carousel-item'; // Set active class for the first item

                                // Move the internal pointer to the desired row
                                $review_result->data_seek($x * 2);
                                $item1 = $review_result->fetch_assoc();

                                // Move the internal pointer to the next row
                                $review_result->data_seek($x * 2 + 1);
                                $item2 = $review_result->fetch_assoc();

                                echo "
                <div class='{$carouselClass}'>
                    <div class='d-flex justify-content-center'>
                        <div class='review-card d-none d-md-flex flex-column me-1'>
                            <p><strong style='font-weight: 400;'>{$item1['review']}</strong></p>
                            <hr />
                            <div class='p-2 d-flex justify-content-between'>
                                <h3 class='review-person'>{$item1['person']}<br>{$item1['location']}</h3>
                                <div class='rating-container'>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                </div>
                            </div>
                        </div>
                        <div class='review-card d-none d-md-flex flex-column ms-1'>
                            <p><strong style='font-weight: 400;'>{$item2['review']}</strong></p>
                            <hr />
                            <div class='p-2 d-flex justify-content-between align-items-center'>
                                <h3 class='review-person'>{$item2['person']}<br>{$item2['location']}</h3>
                                <div class='rating-container'>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                    <img src='./assets/borderStar.png' alt=''>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
            <div class="my-4 guidelines-section">
                <h2 class="text-center my-3 title">
                    Guidelines for PET-CT scans
                </h2>
                <div class="guidelines-container d-flex flex-row justify-content-center flex-wrap ">
                    <div class="guidance-card d-flex flex-column align-items-center py-3 mx-0 text-center">
                        <img src="./assets/imgicon1.webp" height="80" alt="">
                        <h5 class="mt-2 card-title">At least 6 hours of fasting before the scan, but the patient can have plain water.</h5>
                    </div>
                    <div class="guidance-card d-flex flex-column align-items-center p-3 mx-0  text-center">
                        <img src="./assets/imgicon2.webp" height="80" alt="">
                        <h5 class="mt-2 card-title">You are advised to report one hour before the scheduled time.</h5>
                    </div>
                    <div class="guidance-card d-flex flex-column align-items-center p-3 mx-0 text-center">
                        <img src="./assets/imgicon3.webp" height="80" alt="">
                        <h5 class="mt-2 card-title">Carry previous PET-CT reports, CDs, medical records, recent serum creatinine and fasting blood sugar reports.</h5>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-wrap location-container py-3">
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3 mt-md-0 ">
                    <img src="./assets/locationicon.webp" alt="">
                    Chinnagadili
                </div>
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3 mt-md-0 ">
                    <img src="./assets/locationicon.webp" alt="">
                    MVP Colony
                </div>
                <div class="location-card d-flex justify-content-center align-items-center p-2 mt-3 mt-md-0 ">
                    <img src="./assets/locationicon.webp" alt="">
                    Jagadamba Centre
                </div>
            </div>

            <div class="understanding-ct-scan-container p-3 p-md-5">
                <h2 class="text-center fw-bold my-3 title">
                    Understanding PET-CT Scans: Importance, Need, and Cost in India
                </h2>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start  understanding-ct-scan-card-container">
                    <button type="button" class="btn btn-danger waves-effect waves-light" style="all: unset !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="align-self-stretch" src="./assets/video.webp" alt="">
                    </button>
                    <div class="flex-grow-1 align-self-md-stretch ms-md-3 mt-3 mt-md-0 rounded overflow-y-scroll understanding-accordian" style="width: 90%;">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" style="font-weight: 600;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is PET Scan
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        PET scan is a medical imaging method using a trace of radioactive material to reveal metabolic activity. It helps detect and monitor diseases, especially cancer, by providing detailed insights into tissue function. PET scans are often combined with other imaging techniques for comprehensive diagnostics.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why you need PET Scan
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        PET scans are crucial for diagnosing and monitoring diseases, as they reveal metabolic activity in tissues. This imaging technique is particularly valuable in detecting cancer and assessing treatment effectiveness. It aids physicians in making informed decisions about patient care based on detailed insights into the body's physiological processes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How much PET Scan cost in India?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The cost of a PET scan in India can vary widely depending on the city, facility, and specific requirements. On average, it may range from ₹15,000 to ₹35,000 or more. It is advisable to check with individual healthcare providers for accurate and up-to-date pricing information.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center pt-3" style="background-color: var(--clr2);">
                <h2 class="text-center title">
                    Our services
                </h2>
                <div class="d-flex flex-row flex-wrap justify-content-center p-3">
                    <?php
                    $faq_sql_query = 'SELECT * FROM faqs; ';
                    $services_sql_query = 'SELECT * FROM services; ';
                    $faq_result = $conn->query($faq_sql_query);
                    $services_result = $conn->query($services_sql_query);
                    foreach ($services_result as $services) {
                        echo "
                            <div class='our-services-card guidance-card d-flex flex-column align-items-center p-3 text-center'>
                                <img src='{$services['image']}' height='80' alt=''>
                                <span class='mt-2 change-to-span'>{$services['name']}</span>
                            </div>
                            ";
                    }
                    ?>
                </div>
            </div>



            <div class="faq-container d-flex flex-column align-items-center pt-3 p-2 p-md-0">
                <h1 class="title mt-3 mb-0">
                    FAQs
                </h1>
                <?php getFaqs($faq_result) ?>
            </div>
        </div>
        <footer class='text-center bg-dark text-light p-1'>
            @ Cipher Oncology Pvt Ltd
        </footer>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow p-1 rounded-0 ">
                <div class="modal-body p-1">
                    <iframe class='video' src="https://www.youtube.com/embed/lE6bzCEjyU0?si=4QtmKRYdx-LiWBeL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="modal-footer p-0 m-0">
                    <button type="button" class="btn-danger video-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
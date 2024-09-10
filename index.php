<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('connection failed');
    
    if($insert){
        $message[] = 'appointment made successfully!';
    }else{
        $message[] = 'appointment failed';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <section class="home" id="home">

        <div class="image">
            <img src="images/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
            <a href="#appointment" class="btn"> take appointment <span class="fas fa-chevron-right"></span></a>
        </div>

    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>400+</h3>
            <p>bad facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>70+</h3>
            <p>available hospitals</p>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us</h1>

        <div class="row">
            
            <dv class="image">
                <img src="images/about-img.svg" alt="">
            </dv>

            <div class="content">
                <h3>take the world's best quality treatment</h3>
                <p>We are not content to rest on our laurels. We are constantly looking for new ways to improve our services and expand our reach.
                Our unwavering dedication to excellence has earned us a reputation for unparalleled medical expertise and a patient-centric approach 
                to care that is synonymous with our hospital in India. We take immense pride in offering services provided by a team of medical experts 
                who are renowned internationally for their expertise. These esteemed professionals have received numerous awards and accolades in recognition 
                of their outstanding contributions to the medical field. Their presence ensures that our patients receive world-class care and treatment.
                </p>
                <p>Our hospitals boast 35 well-equipped operation theaters that meet the most stringent standards, ensuring optimal surgical outcomes. 
                    We also house advanced diagnostic imaging capabilities, enabling accurate and timely diagnoses. Additionally, our intensive care units 
                    are equipped with the latest monitoring and life-support systems.. With the adoption of the cutting-edge Hugo™ Robotic-Assisted Surgery (RAS) 
                    System, the hospital showcases its commitment to pioneering medical practices.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>

        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span></h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Depend on us for swift and expert ambulance services during emergencies. 
                    Get info on ambulance types and secure transport to the hospital.</p>
                <a href="#" class="btn"> learn more <span fas fa-chevron-right></span></a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Read our updates and contact doctors easily for vaccines, symptoms and 
                    prevention measures to protect yourself and your loved ones.</p>
                <a href="#" class="btn"> learn more <span fas fa-chevron-right></span></a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Convenient payment options for your healthcare needs. Choose from multiple 
                    payment methods and make your hospital experience hassle-free.</p>
                <a href="#" class="btn"> learn more <span fas fa-chevron-right></span></a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>Stay Ahead of Illness: Proactively Take Charge of Your Well-being by Embracing 
                    Preventive Health Measures.</p>
                <a href="#" class="btn"> learn more <span fas fa-chevron-right></span></a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>Stay protected and worry-free with our insurance and TPA services. 
                    Enjoy seamless and hassle-free medical assistance.</p>
                <a href="#" class="btn"> learn more <span fas fa-chevron-right></span></a>
            </div>

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>billing info</h3>
                <p>Simplify hospital bills, and pick payment mode. Know OPD, Emergency, 
                    IPD billing, episode numbers, and registration to pay conveniently.</p>
                <a href="#" class="btn"> learn more <span fas fa-chevron-right></span></a>
            </div>

        </div>

    </section>

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/doc-1.jpg" alt="">
                <h3>Dr. Sian Spurney</h3>
                <span>Family Medicine</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-2.jpg" alt="">
                <h3>Dr. Jeffrey Sherman</h3>
                <span>Physician</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-3.jpg" alt="">
                <h3>Dr. Amanda Pilone</h3>
                <span>Nurse Practitioner</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-4.jpg" alt="">
                <h3>Dr. Roya Yumul</h3>
                <span>Ear/Nose/Throat</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-5.jpg" alt="">
                <h3>Dr. Paul Abramson</h3>
                <span>Concierge Primary Care</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-6.jpg" alt="">
                <h3>Dr. Michel Accad</h3>
                <span>Cardiology Consultant</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-7.jpg" alt="">
                <h3>Dr. Benjamin Abella</h3>
                <span>Physician</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-8.jpg" alt="">
                <h3>Dr. S George</h3>
                <span>Dermatologists</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc-9.jpg" alt="">
                <h3>Dr. Paul Adolph</h3>
                <span>Surgical oncology</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section>

    <section class="appointment" id="appointment">

        <h1 class="heading">get <span>appointment</span> now</h1>

        <div class="row">

            <div class="image">
                <img src="images/appointment-img.svg" alt="">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo'<p class = "message">'.$message.'</p>';
                    }
                }
            ?>
                <h3>make appointment</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="name" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" value="appointment now" class="box">
            </form>

        </div>

    </section>

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="images/pic3.jpeg" alt="">
                <h3>John williams</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">"My wife, a former nurse, and I consider 
                    Dr Benjamin Abella one of the very best we have had in several 
                    cities in which we lived smart, well read, thorough, explains 
                    things in non-technical language, friendly, and cares enough to 
                    follow-up."</p>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/pic1.jpeg" alt="">
                <h3>Man wong</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">"Dr Paul Adolph really cares about his patients. 
                    He asks pertinent questions and sprinkles his comments with humor and verve. 
                    Helistens carefully to what his patients report and provides common sense suggestions. 
                    A caring person, which is clearly evident, he listens... and probes.. and listens some more."</p>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/pic2.jpeg" alt="">
                <h3>Robert young</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">"I have been to see her for a number of ailments and 
                    she has always been responsive and right about her diagnose. 
                    I also took my mother to see her. Dr Sian Spurney was right on her 
                    assessments of my mother's health problems. She seems like a highly 
                    ethical and intelligent doctor."</p>
            </div>

        </div>

    </section>

    <section class="blogs" id="blogs">
        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 12 August, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Ty Lee </a>
                    </div>
                    <h3>Vitamin B6 Vs B12</h3>
                    <p>Did you know that vitamins B6 and B12 play crucial roles in our body, yet many 
                        confuse their functions? While both are part of the B-complex family, these essential 
                        nutrients have distinct benefits and purposes. Understanding the difference between 
                        vitamin B6 and B12 is... </p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 17 May, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Thomas Harper </a>
                    </div>
                    <h3>Cardiovascular Disease(CVD)</h3>
                    <p>Cardiovascular disease (CVD) is a complex condition that can arise from a mix 
                        of factors, and having multiple risk factors significantly boosts your chances 
                        of developing it. Alarmingly, CVD remains the top cause of global deaths, claiming 
                        18.6 million...</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 30 June, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by K D'souza </a>
                    </div>
                    <h3>Effective Orthopaedic Treatments</h3>
                    <p>Overview of Sprained Ankle Ankle ligament injuries, such as a torn ligament, 
                        are common among people of all ages. These injuries can significantly impact 
                        physical activity, often leading to missed opportunities for athletes to participate 
                        in tournaments... </p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 20 September, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Jun yu </a>
                    </div>
                    <h3>Mitigating Cancer Risk</h3>
                    <p>Cancer, one of the most dreaded health disorders, causes countless deaths around 
                        the world each year, and its instances are only increasing by the day, making it 
                        essential for everyone to take all possible measures to prevent this life-threatening 
                        disorder...</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Peter Elson </a>
                    </div>
                    <h3>Global Health Humanities</h3>
                    <p>One Health project exhibition at the Albert Einstein College of Medicine, Bronx, 
                        New York April, 2024.  Students from Lehman HS, Bronx, NY, were mentored by medical 
                        students to learn and produce books and posters, in an ongoing project since 2022, 
                        about how One Health is reflected...</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 19 February, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by D S Wang </a>
                    </div>
                    <h3>Injuries during monsoon</h3>
                    <p>The months of July and August bring in the soft winter breeze with splashes 
                        of little water droplets on the dull and dry face of the earth. These splashes 
                        mark the onset of monsoon in India. Generally, monsoon is observed between June 
                        and September...</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
            
        </div>

    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
                <a href="#review"> <i class="fas fa-chevron-right"></i> review</a>
                <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#dental care"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#message therapy"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#cardiology"> <i class="fas fa-chevron-right"></i> cardiology </a>
                <a href="#diagnosis"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#ambulance services"> <i class="fas fa-chevron-right"></i> ambulance services </a>
            </div>

            <div class="box">
                <h3>appointment info</h3>
                <a href="#+8801688238801"> <i class="fas fa-chevron-right"></i> +8801688238801 </a>
                <a href="#+8801782546978"> <i class="fas fa-chevron-right"></i> +8801782546978 </a>
                <a href="#sehgal2@gmail.com"> <i class="fas fa-chevron-right"></i> sehgal2@gmail.com </a>
                <a href="#sujan26@gmail.com"> <i class="fas fa-chevron-right"></i> sujan26@gmail.com </a>
                <a href="#sylhet"> <i class="fas fa-chevron-right"></i> sylhet, bangladesh </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#facebook"> <i class="fas fa-chevron-right"></i> facebook </a>
                <a href="#twitter"> <i class="fas fa-chevron-right"></i> twitter </a>
                <a href="#instagram"> <i class="fas fa-chevron-right"></i> instagram </a>
                <a href="#linkedin"> <i class="fas fa-chevron-right"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>vanshika sehgal</span> | all rights reserved </div>

    </section>

    <script src="js/script.js"></script>

</body>
</html>
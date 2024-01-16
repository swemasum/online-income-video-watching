  <!DOCTYPE php>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website complete</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index.php" class="nav__logo">F.M. Javed Mehedi Shamrat</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="about.php" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="research.php" class="nav__link">Research</a></li>
                        <li class="nav__item"><a href="experience.php" class="nav__link active">Experience</a></li>
						<li class="nav__item"><a href="training.php" class="nav__link">Training</a></li>
						<li class="nav__item"><a href="award.php" class="nav__link">Award</a></li>
						<li class="nav__item"><a href="cv.php" class="nav__link">CV</a></li>
                        <li class="nav__item"><a href="contact.php" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">

		  <!--===== Experince =====-->

         <section class="skills section" id="skills">
                <h2 class="section-title">Experience</h2>

                <div class="home bd-grid">
                    <div>
                        <h2 class="skills__subtitle"></h2>




                        <?php include_once "admin/connection.php";

                        $sql = "SELECT * FROM experience order by ex_id asc";
                        $result = mysqli_query($conn, $sql);
                        $c_count=0;
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                            $c_count++;
                            echo '<div class="skills__data">
                                 <div class="skills__names">
                                 <span class="skills__name"> <font color="navy"></font>'.$row['info'].'
                                 </li><p></p></span>
                                 </div>
                        </div>';
                          }
                        } else {
                          echo "0 results";
                        }

  mysqli_close($conn);
                        ?>











                    </div>


                </div>
				</section>





                            <div class="skills__names">

								<span class="skills__name"><b> <font color="navy">2.</font> ICT Division (Newgen Technology Limited)</b>  [Dec’ 2019 – Mar’ 2020] <br>
       <font weight="normal">Position: Lecturer</font>.
        </li><p></p></span>
                            </div>


                    </div>

                </div>
				</div>
            </section>





        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Shamrat</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/javedmehedi.shamrat.777/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/f_m_javed_mehedi_shamrat/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/fmjavedmehedi" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

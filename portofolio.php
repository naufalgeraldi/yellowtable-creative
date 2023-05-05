<?php require 'template/header.php'; ?>

<div class="container">
    <div class="row" style="text-align: center;">
        <h1 style="color: #fcb212;">Our</h1>
        <h1 class="bawah">Portofolio <span style="color: #fcb212; margin-left: -20px;"">.</span></h1>
        <div class=" bawah">

    </div>

    <img src="img/porto/02.jpg" width="100%">

    <div class=" bawah">
        <br>
        <hr style="margin: auto;">
    </div>

    <div class="accordion">
        <div class="contentBx">
            <div class="label">
                <h3> Social Media Management</h3>
            </div>

            <div class="content">
                <img src="img/porto/03.jpg" width="100%">
                <img src="img/porto/04.jpg" width="100%">
                <img src="img/porto/05.jpg" width="100%">
                <img src="img/porto/06.jpg" width="100%">
                <img src="img/porto/07.jpg" width="100%">

            </div>
        </div>
        <div class="contentBx">
            <div class="label">
                <h3> Photography</h3>
            </div>
            <div class="content">
                <img src="img/porto/08.jpg" width="100%">
                <img src="img/porto/09.jpg" width="100%">
                <img src="img/porto/10.jpg" width="100%">
                <img src="img/porto/11.jpg" width="100%">
                <img src="img/porto/12.jpg" width="100%">
                <img src="img/porto/13.jpg" width="100%">
                <img src="img/porto/14.jpg" width="100%">
                <img src="img/porto/15.jpg" width="100%">
                <img src="img/porto/16.jpg" width="100%">
                <img src="img/porto/17.jpg" width="100%">
                <img src="img/porto/18.jpg" width="100%">

            </div>
        </div>
        <div class="contentBx">
            <div class="label">
                <h3> Videography </h3>
            </div>
            <div class="content">

                <iframe src="https://drive.google.com/file/d/1ASB81Ybg6CSCRDFc9UC-PEnimWCkFNId/preview" width="1200" height="680" allow="autoplay"></iframe>
                <iframe src="https://drive.google.com/file/d/1naypVH-9Y8nI-xjtQSRIHTpUzs_3ya3O/preview" width="1200" height="680" allow="autoplay"></iframe>
                <iframe src="https://drive.google.com/file/d/1epErI91MoyXqLXa-YAGULx4KlGRIyM8R/preview" width="1200" height="680" allow="autoplay"></iframe>

            </div>
        </div>
        <div class="contentBx">
            <div class="label">
                <h3> Logo Design </h3>
            </div>
            <div class="content">
                <img src="img/porto/19.jpg" width="100%">
                <img src="img/porto/20.jpg" width="100%">
                <img src="img/porto/21.jpg" width="100%">
                <img src="img/porto/22.jpg" width="100%">


            </div>
        </div>
        <div class=" bawah">
            <br>
            <hr style="margin: auto;">
        </div>
        <div class="contentBx">
            <div class="label">
                <h3> Other Project </h3>
            </div>
            <div class="content">
                <img src="img/porto/23.jpg" width="100%">
                <img src="img/porto/24.jpg" width="100%">
                <img src="img/porto/25.jpg" width="100%">
                <img src="img/porto/26.jpg" width="100%">


            </div>
        </div>
    </div>



    <script>
        const accordion = document.getElementsByClassName('contentBx');

        for (i = 0; i < accordion.length; i++) {
            accordion[i].addEventListener('click', function() {
                this.classList.toggle('active')
            })
        }
    </script>

    <div class="m-5">






    </div>


</div>


<?php require 'template/footer.php'; ?>
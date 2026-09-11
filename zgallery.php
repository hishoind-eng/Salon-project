<?php include('include/header.php'); ?>

<style>
    .gallery-container {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .gallery-img {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 350px;
        margin-bottom: 30px;
        cursor: pointer;
        border-radius: 15px;
        border: 2px solid goldenrod;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .gallery-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.5s ease;
        padding: 10px;
        text-align: center;
    }

    .gallery-img:hover img {
        transform: scale(1.1);
    }

    .gallery-img:hover .overlay {
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .gallery-img {
            height: 200px;
        }
    }

    @media (max-width: 768px) {
        .gallery-img {
            margin-bottom: 10px;
        }
    }
</style>

<main class="main-content">

    <div class="gallery-container py-5">
        <div class="container">

            <div class="section-header text-center pb-4">
                <div class="title-decoration">
                    <img src="assets/img/comman/section-title.png" alt="Decor" class="decor-left">

                    <h2 class="section-title"> Restaurant Gallery </h2>
                </div>
                <img src="assets/img/comman/section-title-underline.png" alt="underline" class="bottom-underline">
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery1.png" alt="Food 1">
                        <div class="overlay"> MONAL Restaurant — where authentic taste meets a golden ambiance. </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery9.png" alt="Food 4">
                        <div class="overlay">A warm welcome awaits you at MONAL — where elegance meets comfort from the moment you step in.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery2.png" alt="Food 2">
                        <div class="overlay">Step into MONAL — where style, warmth, and flavor come together.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery13.jpg" alt="Food 4">
                        <div class="overlay">Indulge in the essence of MONAL — where every visit is a blend of taste and elegance.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery3.png" alt="Food 3">
                        <div class="overlay">Experience the charm of MONAL — elegant, cozy, and unforgettable. </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery4.png" alt="Food 4">
                        <div class="overlay"> MONAL welcomes you with comfort, class, and a touch of luxury. </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery5.png" alt="Food 1">
                        <div class="overlay">Discover the inviting ambiance of MONAL — where every guest feels at home.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery6.png" alt="Food 2">
                        <div class="overlay">At MONAL, every moment begins with elegance and a warm smile.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery7.png" alt="Food 3">
                        <div class="overlay">Experience warmth, taste, and tradition under one golden glow at MONAL.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery8.png" alt="Food 4">
                        <div class="overlay">Indulge in the essence of MONAL — where every visit is a blend of taste and elegance.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery10.jpg" alt="Food 1">
                        <div class="overlay">Embrace the MONAL experience — where hospitality shines and flavors inspire.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery11.jpg" alt="Food 2">
                        <div class="overlay">Refresh your senses with vibrant flavors and handcrafted juices made from the freshest fruits. At Monal, every sip brings you closer to nature’s pure delight.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery12.jpg" alt="Food 3">
                        <div class="overlay">Where nature inspires taste — welcome to Monal, a place of elegance, flavor, and serene beauty.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery14.jpg" alt="Food 4">
                        <div class="overlay">At Monal, every detail — from the lush greenery to the golden glow — is crafted to create an unforgettable dining experience.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include('include/footer.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-...." crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url("css/style-sidebar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("css/style-card.css") ?>">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>


<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-custom col-auto col-md-2 min-vh-100">
                <div class="bg-custom p-2">
                    <a href="<?= base_url() ?>" class="d-flex text-decoration-none mt-4 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline mb-3">InstaApp</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav item mb-2">
                            <a href="<?= base_url("/profil") ?>" class="nav-link text-white">
                                <i class="fas fa-user fs-4 mr-2"></i><span class="fs-3 d-none d-sm-inline">Profil</span>
                            </a>
                        </li>
                        <li class="nav item mb-2">
                            <a href="<?= base_url("/beranda") ?>" class="nav-link text-white">
                                <i class="fas fa-home fs-5 mr-2"></i><span
                                    class="fs-3 d-none d-sm-inline">Beranda</span>
                            </a>
                        </li>
                        <li class="nav item mb-2">
                            <a href="<?= base_url("/buat") ?>" class="nav-link text-white">
                                <i class="fas fa-plus fs-5 mr-2"></i><span class="fs-3 d-none d-sm-inline">Buat</span>
                            </a>
                        </li>
                        <li class="nav item mb-2">
                            <a href="<?= base_url("user/login") ?>" class="nav-link text-white">
                                <i class="fas fa-sign-out-alt fs-5 mr-2"></i><span
                                    class="fs-3 d-none d-sm-inline">Keluar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-12 col-md-20 mt-3 mt-md-0">
                <section class="main ms-md-3">
                    <div class="wrapper">
                        <div class="left-col">

                            <div class="post" id="post1">
                                <div class="info">
                                    <div class="user">
                                        <div class="profile-pic"><img src=" alt=""></div>
                                        <p class=" username">modern_web_channel</p>
                                        </div>
                                        <img src="img/option.PNG" class="options" alt="">
                                    </div>
                                    <img src="img/cover 2.png" class="post-image" alt="">
                                    <div class="post-content">
                                        <div class="reaction-wrapper">
                                            <a id="heartButton" style="margin-right: 10px; cursor: pointer;">
                                                <i class="fas fa-heart" style="color: black;"></i>
                                                <span class="likes fs-3 d-none d-sm-inline" style="margin-left: 5px;"
                                                    data-likes="1012">
                                                    1012 likes
                                                </span>
                                            </a>

                                            <script>
                                            $(document).ready(function() {
                                                $("#heartButton").click(function() {
                                                    // Dapatkan elemen ikon hati
                                                    var heartIcon = $("#heartButton i.fa-heart");

                                                    // Dapatkan elemen span yang menyimpan likes count
                                                    var likesElement = $("#heartButton .likes");

                                                    // Dapatkan jumlah likes saat ini dari atribut data-likes
                                                    var currentLikes = parseInt(likesElement.attr(
                                                        "data-likes"));

                                                    // Tambahkan 1 ke jumlah likes saat ini
                                                    var newLikes = currentLikes + 1;

                                                    // Perbarui atribut data-likes dengan jumlah likes yang baru
                                                    likesElement.attr("data-likes", newLikes);

                                                    // Tampilkan jumlah likes yang baru pada halaman
                                                    likesElement.text(newLikes + " likes");

                                                    // Ubah warna ikon hati menjadi merah
                                                    heartIcon.css("color", "red");
                                                });
                                            });
                                            </script>

                                            <a style="margin-right: 10px;"><i class="fa-regular fa-comment"></i></a>
                                            <a style="margin-right: 10px;"><i
                                                    class="fa-regular fa-share-from-square"></i></a>
                                            <div class="ml-auto">
                                                <a><i class="fa-regular fa-bookmark"></i></a>
                                            </div>

                                        </div>

                                        <p class="description" id="caption1">
                                            <span>username </span> Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut
                                            provident eum quo natus molestias?
                                            <span class="delete-caption"
                                                onclick="deleteCaption('caption1')">Delete</span>
                                        </p>
                                        <p class="post-time">2 minutes ago</p>
                                    </div>
                                    <div class="comment-wrapper">
                                        <img src="img/smile.PNG" class="icon" alt="">
                                        <input type="text" id="comment2" class="comment-box"
                                            placeholder="Add a comment">
                                        <button class="comment-btn">post</button>
                                    </div>
                                </div>

                                <div class="post" id="post2">
                                    <div class="info">
                                        <div class="user">
                                            <div class="profile-pic"><img src=" alt=""></div>
                                        <p class=" username">modern_web_channel</p>
                                            </div>
                                            <img src="img/option.PNG" class="options" alt="">
                                        </div>
                                        <img src="img/cover 2.png" class="post-image" alt="">
                                        <div class="post-content">
                                            <div class="reaction-wrapper">
                                                <a id="heartButton" style="margin-right: 10px; cursor: pointer;">
                                                    <i class="fas fa-heart" style="color: black;"></i>
                                                    <span class="likes fs-3 d-none d-sm-inline"
                                                        style="margin-left: 5px;" data-likes="1012">
                                                        1012 likes
                                                    </span>
                                                </a>

                                                <script>
                                                $(document).ready(function() {
                                                    $("#heartButton").click(function() {
                                                        // Dapatkan elemen ikon hati
                                                        var heartIcon = $("#heartButton i.fa-heart");

                                                        // Dapatkan elemen span yang menyimpan likes count
                                                        var likesElement = $("#heartButton .likes");

                                                        // Dapatkan jumlah likes saat ini dari atribut data-likes
                                                        var currentLikes = parseInt(likesElement.attr(
                                                            "data-likes"));

                                                        // Tambahkan 1 ke jumlah likes saat ini
                                                        var newLikes = currentLikes + 1;

                                                        // Perbarui atribut data-likes dengan jumlah likes yang baru
                                                        likesElement.attr("data-likes", newLikes);

                                                        // Tampilkan jumlah likes yang baru pada halaman
                                                        likesElement.text(newLikes + " likes");

                                                        // Ubah warna ikon hati menjadi merah
                                                        heartIcon.css("color", "red");
                                                    });
                                                });
                                                </script>
                                                <a style="margin-right: 10px;"><i class="fa-regular fa-comment"></i></a>
                                                <a style="margin-right: 10px;"><i
                                                        class="fa-regular fa-share-from-square"></i></a>
                                                <div class="ml-auto">
                                                    <a><i class="fa-regular fa-bookmark"></i></a>
                                                </div>

                                            </div>

                                            <p class="description" id="caption2">
                                                <span>username </span> Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit
                                                aut
                                                provident eum quo natus molestias?
                                                <span class="delete-caption"
                                                    onclick="deleteCaption('caption2')">Delete</span>
                                            </p>
                                            <p class="post-time">2 minutes ago</p>
                                        </div>
                                        <div class="comment-wrapper">
                                            <img src="img/smile.PNG" class="icon" alt="">
                                            <input type="text" id="comment2" class="comment-box"
                                                placeholder="Add a comment">
                                            <button class="comment-btn">post</button>
                                        </div>
                                    </div>

                                    <script>
                                    function deleteCaption(postId) {
                                        var postElement = document.getElementById(postId);
                                        postElement.parentNode.removeChild(postElement);
                                    }
                                    </script>

                                </div>
                            </div>
                </section>
            </div>
        </div>
    </div>


</body>

</html>
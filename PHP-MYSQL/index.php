<?php 
 require 'db_connect.php';
 $stars = 0;
 $score = $db->query("SELECT rating FROM reviews");
 if ($score->num_rows > 0){
     while($rating = $score->fetch_assoc()){
         $stars += $rating['rating'];
     }
     $stars = ($stars/$score->num_rows);
 }
 $result = $db->query("SELECT * FROM reviews ORDER BY created_at DESC LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Rotten Apples | Kingsman: The Golden Circle</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Modal Body -->
    <div class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Kingsman: The Golden Circle</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <center>
                    <iframe src="https://www.youtube.com/embed/0WmUbiMHeSE" allowfullscreen></iframe>
                </center>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    
    <header>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color:darkred;color:white;">
            <div class="container">
                <a class="navbar-brand" href="#">Rotten Apples</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Critics</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false">Username</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container">
        <div class="review-head row">
            <div class="movie-rating col-lg-4">
                <h1 class="title" style="text-align:center;">Kingsman: The Golden Circle</h1>
                <h3 class="title" style="text-align:center;">
                    <?php if($score->num_rows > 0):?>
                        Rating: 
                        <span class="overall-rating">
                            <?php for($i = 1; $i <= 5; $i++):?>
                                <?php if($stars < $i):?>
                                    &star;
                                <?php else:?>
                                    &#9733;
                                <?php endif ?>
                            <?php endfor ?>
                        </span>
                    <?php else:?>
                        No review yet for this movie
                    <?php endif?>
                </h3>
                <center>
                    <img src="http://cdn3-www.superherohype.com/assets/uploads/gallery/kingsman-2-the-golden-circle/kingsmanposter_0.jpg" alt="kingsman2" style="height:540px;width:350px;">
                </center>
            </div>
            <div class="movie-synopsis col-lg-8">
                <h2>Synopsis</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati necessitatibus iste debitis incidunt, asperiores pariatur dolor fugit! Pariatur officia natus veniam magni doloremque eius iusto, perferendis, illum molestias minus in facilis cumque reprehenderit ea, quaerat tempore. Quia, aliquid incidunt officia obcaecati eos consectetur quos optio doloremque consequuntur recusandae aut beatae magni rerum suscipit quibusdam maiores commodi in itaque aliquam at dolore! Non laboriosam voluptatum suscipit nemo error ex nihil voluptas provident eveniet ipsa, amet fugiat illum, eligendi explicabo tempore voluptatem voluptatibus! Quos fugiat eligendi odit praesentium, obcaecati corrupti est beatae ea consectetur aliquid, nesciunt qui mollitia ullam expedita dolorem perspiciatis?</p>
                <div class="synopsis-buttons">
                    <button class="btn btn-info" data-toggle="modal" data-target="#trailerModal">Watch the trailer</button>
                    <a class="btn btn-success" href="#review">Rate this movie</a>
                </div>
                <br>
                <div class="related-movies">
                    <center>
                        <h3>Related Movies</h3>
                        <a href="#" ><img src="https://i.pinimg.com/736x/22/25/8f/22258fee7719c92aabb5163463f909ff--john-wick-alternative-movie-posters.jpg" alt="johnwick" style="height:332px;width:230px;"></a>
                        <a href="#" ><img src="http://www.joblo.com/posters/images/full/kingsman-poster-main.jpg" alt="kingsman" style="height:332px;width:230px;"></a>
                        <a href="#" ><img src="http://cdn.collider.com/wp-content/uploads/2016/10/john-wick-2-poster.jpg" alt="johnwick2" style="height:332px;width:230px;"></a>
                    </center>
                </div>
            </div>
        </div>
        <hr>
        <div class="critics-review">
            <h2>Critics Review</h2>
            <div class="reviews">
                <?php if($result->num_rows > 0): ?>
                 <div class="row">
                    <?php while($review =  $result->fetch_assoc()):?>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $review["name"]?></h4>
                                    <h6 class="card-subtitle rating">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <?php if($review["rating"] < $i): ?>
                                                &star;
                                            <?php else: ?>
                                                &#9733;
                                            <?php endif ?>
                                        <?php endfor ?>
                                    </h6>
                                    <p class="card-text"><?= $review["review"]?></p>
                                    <small><?= $review["created_at"]?></small>
                                    <br>
                                    <a href="delete.php?id=<?= $review['id']?>" class="card-link">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
                <?php else: ?>
                    <h6>No reviews yet</h6>
                <?php endif ?>
            </div>
        </div>
        <a class ="see-more" href="">See More Reviews...</a>
        <hr>
        <div class="review-form" id="review">
            <h3>Submit a review for Kingsman: The Golden Circle</h3>
            <form class="form" method="POST" action="submit.php">
                <fieldset>
                        <div class="submit-name">
                            <label class="control-label" for="name">Name:</label>
                            <br>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>
                        <div class="submit-rating">
                            <label class="control-label" for="rating">Rating:</label>
                            <br>
                            <select class="form-control" name="rating" id="stars" required>
                                <option value="1">1 Star</option>
                                <option value="2">2 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="5">5 Stars</option>
                            </select>
                        </div>
                        <label class="control-label" for="review">Review:</label>
                        <textarea class="form-control" name="review" cols="30" rows="10" required></textarea>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                </fieldset>
            </form>
        </div>
        <br>
    </section>
    <footer style="text-align:center">
        Rotten Apples &copy; 2017
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <?php $db->close(); ?>
</body>
</html>
<?php include("php/header.php")?>


        <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">TROUVÉ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                   
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Home</a>
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href='./html/favorite.html'>Favorites</a><hr>
                        <a href="#" class="dropdown-item">Log Out</a>
                      </div>
                    </li>
                  </ul>
                </div>
        </nav>

        <!-- drag & drop -->

        <div class="upload_area">
        <div class="upload" id="dropzone"></div>
            
        <form class="box" method="POST" action="./php/upload.php" enctype="multipart/form-data">
            <div class="box__input">
              <!-- <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple /> -->
              <!-- <input type="file" onchange="encodeImageFileAsURL(this)" /> -->
              <input type="file" name="file">
              <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
              <button class="box__button" type="submit" name="submit">Upload</button>
            </div>
            
            <!-- <div class="box__uploading">Uploading&hellip;</div>
            <div class="box__success">Done!</div>
            <div class="box__error">Error! <span></span>.</div> -->
        </form>

        <!-- <p class="upload_note">Please upload your img here</p> -->
      </div>
      

        <div class="container">
            <div id="info">
                <p>The information of the uploaded image will be displayed here...</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed vulputate mi sit amet. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Laoreet id donec ultrices tincidunt arcu non. Habitant morbi tristique senectus et netus. Id interdum velit laoreet id donec. Magna etiam tempor orci eu lobortis elementum nibh. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Elit pellentesque habitant morbi tristique senectus et. Tortor id aliquet lectus proin nibh nisl condimentum id. Aliquam id diam maecenas ultricies mi. Urna neque viverra justo nec ultrices dui sapien eget mi. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit. Risus commodo viverra maecenas accumsan lacus. Euismod in pellentesque massa placerat duis. Amet aliquam id diam maecenas. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum.

                        Feugiat in ante metus dictum at tempor commodo. Pretium quam vulputate dignissim suspendisse in est. Pellentesque id nibh tortor id aliquet lectus proin. Cursus sit amet dictum sit. Amet purus gravida quis blandit turpis cursus. Integer vitae justo eget magna fermentum iaculis eu non. Arcu odio ut sem nulla pharetra diam sit. Tempus egestas sed sed risus pretium. Nunc lobortis mattis aliquam faucibus purus in. Vitae semper quis lectus nulla at volutpat diam. Eleifend donec pretium vulputate sapien nec sagittis. Integer vitae justo eget magna fermentum. Sit amet justo donec enim diam vulputate. Leo a diam sollicitudin tempor id eu. Condimentum id venenatis a condimentum vitae. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel. Facilisi nullam vehicula ipsum a arcu cursus vitae congue.
                        
                        Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Sit amet dictum sit amet justo. Aliquam id diam maecenas ultricies mi eget. Massa enim nec dui nunc mattis enim ut. Lobortis scelerisque fermentum dui faucibus in. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Duis at consectetur lorem donec massa. Volutpat diam ut venenatis tellus in metus vulputate eu scelerisque. Sit amet luctus venenatis lectus magna fringilla urna. Scelerisque felis imperdiet proin fermentum leo. Vitae suscipit tellus mauris a diam maecenas sed. In fermentum posuere urna nec. Varius vel pharetra vel turpis nunc eget lorem dolor. Ornare massa eget egestas purus viverra accumsan in. At auctor urna nunc id cursus metus.
                        
                        Pellentesque massa placerat duis ultricies lacus sed turpis. Tempus imperdiet nulla malesuada pellentesque elit eget. Proin fermentum leo vel orci porta non pulvinar. Vulputate enim nulla aliquet porttitor. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. Tortor posuere ac ut consequat semper viverra nam. Eu feugiat pretium nibh ipsum consequat. Ultricies lacus sed turpis tincidunt id aliquet. Arcu dictum varius duis at consectetur lorem donec massa. Adipiscing at in tellus integer feugiat scelerisque varius morbi enim. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Nam libero justo laoreet sit amet cursus sit amet. Eu non diam phasellus vestibulum. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Morbi tristique senectus et netus et malesuada fames ac turpis. Pharetra massa massa ultricies mi quis hendrerit dolor magna. Sit amet luctus venenatis lectus.
                        
                        Amet facilisis magna etiam tempor orci eu lobortis. Malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Sem viverra aliquet eget sit amet tellus. Aliquam purus sit amet luctus venenatis. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Bibendum ut tristique et egestas quis. Enim nunc faucibus a pellentesque sit amet. At varius vel pharetra vel turpis nunc eget lorem. Tellus in metus vulputate eu. Donec ac odio tempor orci dapibus ultrices in iaculis. Bibendum est ultricies integer quis auctor elit sed. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Volutpat sed cras ornare arcu. Adipiscing elit ut aliquam purus sit amet. Vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Consectetur a erat nam at. Egestas dui id ornare arcu odio. Volutpat odio facilisis mauris sit amet massa vitae tortor.</p>
            </div>
            <a href="#" class="btn btn-primary">Audio</a>
        </div>
        
<?php include('php/footer.php') ?>
        

        

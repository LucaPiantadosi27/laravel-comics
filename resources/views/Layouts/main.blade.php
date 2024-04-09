
<main>

    

    <div id="comics">
        <div class="container">
            <h3>    
                <button class="btn-primary">Current Series</button>  
            </h3>    
        
            <div id="comics-list" class="row row-cols-6">
                 @foreach ($comic as $comic_item)
                    <div class="col">
                        <div class="card">
                            <img src= {{$comic_item['thumb']}}  class="card-img-top" alt="  {{$comic_item['title']}} ">
                            <div class="card">
                                <h5 class="card-title"> {{$comic_item['title']}} </h5>
                            </div>
                        </div>
                    </div>
                 @endforeach
            </div>


            

            <div class="btn-container">
                <button class="btn-primary">Load more</button>
            </div>
        </div>
    </div>




    
        
    
        

</main>
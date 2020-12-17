
          <script>
            $(function() {
            // Current Ajax request.
            var currentAjaxRequest = null;
            // Grabbing all search forms on the page, and adding a .search-results list to each.
            var searchForms = $('form[action="/search"]').css('position','relative').each(function() {
              // Grabbing text input.
              var input = $(this).find('input[name="q"]');
              // Adding a list for showing search results.
              var offSet = input.position().top + input.innerHeight();
              $('<ul class="search-results"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo($(this)).hide();    
              // Listening to keyup and change on the text field within these search forms.
              input.attr('autocomplete', 'off').bind('keyup change', function() {
                // What's the search term?
                var term = $(this).val();
                // What's the search form?
                var form = $(this).closest('form');
                // What's the search URL?
                var searchURL = '/search?type=product&q=' + term;
                // What's the search results list?
                var resultsList = form.find('.search-results');
                // If that's a new term and it contains at least 3 characters.
                if (term.length > 3 && term != $(this).attr('data-old-term')) {
                  // Saving old query.
                  $(this).attr('data-old-term', term);
                  // Killing any Ajax request that's currently being processed.
                  if (currentAjaxRequest != null) currentAjaxRequest.abort();
                  // Pulling results.
                  currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
                    // Reset results.
                    resultsList.empty();
                    // If we have no results.
                    if(data.results_count == 0) {
                      // resultsList.html('<li><span class="title">No results.</span></li>');
                      // resultsList.fadeIn(200);
                      resultsList.hide();
                    } else {
                      // If we have results.
                      $.each(data.results, function(index, item) {
                        var link = $('<a></a>').attr('href', item.url);
                        link.append('<span class="thumbnail"><img src="' + item.thumbnail + '" /></span>');
                         link.append('<span class="type">' + item.type + '</span>');
                        link.append('<span class="title">' + item.title + '</span>');
                        link.append('<span class="price">' + item.price + '</span>');
                        link.wrap('<li></li>');
                        resultsList.append(link.parent());
                      });
                      // The Ajax request will return at the most 10 results.
                      // If there are more than 10, let's link to the search results page.
                      if(data.results_count > 10) {
                        resultsList.append('<li><span class="title"><a href="' + searchURL + '">See all results (' + data.results_count + ')</a></span></li>');
                      }
                      resultsList.fadeIn(200);
                    }        
                  });
                }
              });
            });
            // Clicking outside makes the results disappear.
            $('body').bind('click', function(){
              $('.search-results').hide();
            });
            });
          </script>
          <a id="slidetop" href="#top" title="top" >top
          </a>
          <div id="cartmessage">
            <div class="title-success hide">Added To Cart : </div>
            <div class="title-failed hide">Add To Cart Failed : </div>
          </div>
          <div id= "wishlistmessage">
            <div class="title-success hide">prouduct successfully added to wishlist !</div>
          </div>
          <!-- Size Chart Modal -->
          <div class="modal fade size-chart-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="modal-body row">
                  <div class="modal-img col-sm-12 col-md-6">
                    <img src="//cdn.shopify.com/s/files/1/0267/2073/1222/files/Size-Chat_480x650.png?v=1571653546"
                      data-widths="[480]"
                      alt="">
                  </div>
                  <div class="modal-text col-sm-12 col-md-6">
                    <div class="custom_size_chart_des">
                      <h4>Creative Measurement Term Definitions</h4>
                      <div class="custom-text-right-table">
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Size</th>
                              <th scope="col">Chest</th>
                              <th scope="col">Brand Size</th>
                              <th scope="col">Shoulder</th>
                              <th scope="col">Length</th>
                              <th scope="col">Sleeve Length</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>38</td>
                              <td>40.2</td>
                              <td>38</td>
                              <td>17.9</td>
                              <td>29.9</td>
                              <td>24</td>
                            </tr>
                            <tr>
                              <td>39</td>
                              <td>41.3</td>
                              <td>39</td>
                              <td>18.2</td>
                              <td>30.1</td>
                              <td>24.5</td>
                            </tr>
                            <tr>
                              <td>40</td>
                              <td>42.5</td>
                              <td>40</td>
                              <td>18.5</td>
                              <td>30.3</td>
                              <td>25</td>
                            </tr>
                            <tr>
                              <td>42</td>
                              <td>44.9</td>
                              <td>42</td>
                              <td>19.1</td>
                              <td>30.7</td>
                              <td>25.5</td>
                            </tr>
                            <tr>
                              <td>44</td>
                              <td>47.2</td>
                              <td>44</td>
                              <td>19.7</td>
                              <td>31.1</td>
                              <td>26</td>
                            </tr>
                            <tr>
                              <td>46</td>
                              <td>49.6</td>
                              <td>46</td>
                              <td>20.3</td>
                              <td>31.5</td>
                              <td>26.5</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="custom-text-right">
                        <p><strong>Effective Top Tube Length:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p><strong>Seat Tube Length:</strong> dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p><strong>Head Tube Length:</strong>Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                        <p><strong>Head Angle:</strong>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p><strong>Fork Rake (rake):</strong>It has survived not only five centuries popularised of Letraset sheets containing and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                        <p><strong>Stand Over Height:</strong>galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div> -->
              </div>
            </div>
          </div>
          <!-- Quickview Modal -->
          <div id="quickviewModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div id="qv-images-container">
                        <div id="qv-product-cover">
                          <img id="main-thumbnail" src="#" alt="product-img">
                        </div>
                        <div id="qv-thumbnails" class="owl-carousel owl-theme">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div id="qv-text-container">
                        <div id="qv-productname"></div>
                        <div id="qv-productprice"></div>
                        <div id="qv-spr-badge"></div>
                        <div id="qv-productdescription"></div>
                        <div id="qv-quantity"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>//code for extra tabs in product page
          $(".template-product .product-tab .custom-tab").each(function(index) {
              $('.nav-tabs').append('<li class="tab-item"> <a href="#tab'+ index +'" class="nav-link" data-toggle="tab" role="tab">'+ $(this).find('.title').html() +'</a> </li>');
              $('#tab-content').append('<div id="tab'+ index +'" class="custom-desc tab-pane fade in">'+ $(this).find('.description').html() +'</div>');
              $(this).remove();
          });
        </script>
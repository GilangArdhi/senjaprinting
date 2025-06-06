<nav class="navbar " id="homePageNav">
      <div class="container">
        <div class="flex--center">
          <div class="navbar__logo"><a href="index.html">
              <svg class="navbar__logo-svg fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.77 35.001">
                <path d="M437.579,459a1.344,1.344,0,0,1-1.3-.867l-3.26-8.556H418.69a2.69,2.69,0,0,1-2.69-2.692V426.692A2.691,2.691,0,0,1,418.7,424h18.843a1.346,1.346,0,0,1,1.218.773l4.07,8.65h16.252a2.69,2.69,0,0,1,2.69,2.692v20.192a2.691,2.691,0,0,1-2.7,2.692Zm-.895-32.308H418.7s0,6.731,0,20.192h27.494Zm7.41,9.423,5.432,11.542a1.346,1.346,0,0,1-.332,1.586l-8.073,7.064h17.952s0-6.731,0-20.192Zm-5.986,19.251,6.617-5.79H435.9Z" transform="translate(-416 -424)"> </path>
              </svg><span class="navbar__logo-txt">Senja Printing</span></a></div>
          <ul class="navbar__links" id="menu">
          <li class="navbar__link-item" id="men">
              <div class="navbar__link">Produk</div>
              <div class="navbar-level-2" id="menuMen">
                <div class="container"> 
                  <div class="flex--center">
                    <div class="main-list">
                      <ul>
                        <!-- <li class="main-list__item"><a href="#">Sale</a></li>
                        <li class="main-list__item"><a href="#">Bestsellers</a></li>
                        <li class="main-list__item"><a href="#">Latest Arrivals</a></li> -->
                      </ul>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title" style="color: #EBA51A;">Trend</h3>
                        <ul>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="hoodie">
                              <a onclick="event.preventDefault(); document.getElementById('hoodie').submit();">Hoodie</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="kaos">
                              <a onclick="event.preventDefault(); document.getElementById('kaos').submit();">Kaos</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="sweater">
                              <a onclick="event.preventDefault(); document.getElementById('sweater').submit();">Sweater</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="tote_bag">
                              <a onclick="event.preventDefault(); document.getElementById('tote_bag').submit();">Tote Bage</a>
                            </form>
                          </li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <!-- <h3 class="list-category__title">Bags</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Backpacks</a></li>
                          <li class="list-category__item"><a href="#">Messenger Bags</a></li>
                          <li class="list-category__item"><a href="#">Luggage</a></li>
                        </ul> -->
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title" style="color: #EBA51A;">Seri</h3>
                        <ul>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="hoodie">
                              <a onclick="event.preventDefault(); document.getElementById('hoodie').submit();">Hoodie</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="kaos">
                              <a onclick="event.preventDefault(); document.getElementById('kaos').submit();">Kaos</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="sweater">
                              <a onclick="event.preventDefault(); document.getElementById('sweater').submit();">Sweater</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="tote_bag">
                              <a onclick="event.preventDefault(); document.getElementById('tote_bag').submit();">Tote Bage</a>
                            </form>
                          </li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <!-- <h3 class="list-category__title">Outerwear</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Parkas</a></li>
                          <li class="list-category__item"><a href="#">Jackets</a></li>
                          <li class="list-category__item"><a href="#">Coats</a></li>
                        </ul> -->
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <!-- <h3 class="list-category__title">Accesorries</h3> -->
                        <h3 class="list-category__title"></h3>
                        <ul>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="polo">
                              <a onclick="event.preventDefault(); document.getElementById('polo').submit();">Polo</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="pdh_pdl">
                              <a onclick="event.preventDefault(); document.getElementById('pdh_pdl').submit();">PDH/PDL</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="topi">
                              <a onclick="event.preventDefault(); document.getElementById('topi').submit();">Topi</a>
                            </form>
                          </li>
                          <li class="list-category__item">
                            <form action="{{ url('searchCatalog') }}" id="jersey">
                              <a onclick="event.preventDefault(); document.getElementById('jersey').submit();">Jersey</a>
                            </form>
                          </li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <!-- <h3 class="list-category__title">Collections</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Originals</a></li>
                          <li class="list-category__item"><a href="#">New Casual</a></li>
                          <li class="list-category__item"><a href="#">Reviving Retro</a></li>
                        </ul> -->
                      </div>
                    </div>
                    <div class="list-group-ad">
                      <!-- <a class="list-group-ad__link" href="#"><img src="./images/menu-ad1.png" alt="ad1"/></a><a class="list-group-ad__link" href="#"><img src="./images/menu-ad2.png" alt="ad2"/></a><a class="list-group-ad__link" href="#"><img src="./images/menu-ad3.png" alt="ad3"/></a> -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="navbar__link-item" id="women">
              <a href="https://www.instagram.com/senjaprintingg/"><div class="navbar__link">Portofolio</div></a>
              <!-- <div class="navbar-level-2" id="menuWomen">
                <div class="container"> 
                  <div class="flex--center">
                    <div class="main-list">
                      <ul>
                        <li class="main-list__item"><a href="#">Sale</a></li>
                        <li class="main-list__item"><a href="#">Bestsellers</a></li>
                        <li class="main-list__item"><a href="#">Latest Arrivals</a></li>
                      </ul>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title">Tentang Kami</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Lifestyle</a></li>
                          <li class="list-category__item"><a href="#">Running</a></li>
                          <li class="list-category__item"><a href="#">Soccer</a></li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <h3 class="list-category__title">Bags</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Backpacks</a></li>
                          <li class="list-category__item"><a href="#">Messenger Bags</a></li>
                          <li class="list-category__item"><a href="#">Luggage</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title">Clothing</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Pants</a></li>
                          <li class="list-category__item"><a href="#">Hoodies & Sweatshirts</a></li>
                          <li class="list-category__item"><a href="#">Vests</a></li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <h3 class="list-category__title">Outerwear</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Parkas</a></li>
                          <li class="list-category__item"><a href="#">Jackets</a></li>
                          <li class="list-category__item"><a href="#">Coats</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title">Accesorries</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Glasses</a></li>
                          <li class="list-category__item"><a href="#">Caps & Hats</a></li>
                          <li class="list-category__item"><a href="#">Watches</a></li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <h3 class="list-category__title">Collections</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Originals</a></li>
                          <li class="list-category__item"><a href="#">New Casual</a></li>
                          <li class="list-category__item"><a href="#">Reviving Retro</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-group-ad"><a class="list-group-ad__link" href="#"><img src="./images/menu-ad1.png" alt="ad1"/></a><a class="list-group-ad__link" href="#"><img src="./images/menu-ad2.png" alt="ad2"/></a><a class="list-group-ad__link" href="#"><img src="./images/menu-ad3.png" alt="ad3"/></a></div>
                  </div>
                </div>
              </div> -->
            </li>
            <li class="navbar__link-item" id="kids">
              <div class="navbar__link"><a href="tentangkami">Tentang Kami</a></div>
              <!-- <div class="navbar-level-2" id="menuKids">
                <div class="container"> 
                  <div class="flex--center">
                    <div class="main-list">
                      <ul>
                        <li class="main-list__item"><a href="#">Sale</a></li>
                        <li class="main-list__item"><a href="#">Bestsellers</a></li>
                        <li class="main-list__item"><a href="#">Latest Arrivals</a></li>
                      </ul>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title">Shoes</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Lifestyle</a></li>
                          <li class="list-category__item"><a href="#">Running</a></li>
                          <li class="list-category__item"><a href="#">Soccer</a></li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <h3 class="list-category__title">Bags</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Backpacks</a></li>
                          <li class="list-category__item"><a href="#">Messenger Bags</a></li>
                          <li class="list-category__item"><a href="#">Luggage</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title">Clothing</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Pants</a></li>
                          <li class="list-category__item"><a href="#">Hoodies & Sweatshirts</a></li>
                          <li class="list-category__item"><a href="#">Vests</a></li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <h3 class="list-category__title">Outerwear</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Parkas</a></li>
                          <li class="list-category__item"><a href="#">Jackets</a></li>
                          <li class="list-category__item"><a href="#">Coats</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-category">
                        <h3 class="list-category__title">Accesorries</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Glasses</a></li>
                          <li class="list-category__item"><a href="#">Caps & Hats</a></li>
                          <li class="list-category__item"><a href="#">Watches</a></li>
                        </ul>
                      </div>
                      <div class="list-category">
                        <h3 class="list-category__title">Collections</h3>
                        <ul>
                          <li class="list-category__item"><a href="#">Originals</a></li>
                          <li class="list-category__item"><a href="#">New Casual</a></li>
                          <li class="list-category__item"><a href="#">Reviving Retro</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-group-ad"><a class="list-group-ad__link" href="#"><img src="./images/menu-ad1.png" alt="ad1"/></a><a class="list-group-ad__link" href="#"><img src="./images/menu-ad2.png" alt="ad2"/></a><a class="list-group-ad__link" href="#"><img src="./images/menu-ad3.png" alt="ad3"/></a></div>
                  </div>
                </div>
              </div> -->
            </li>
            <li id="profile"><a class="navbar__link" href="#">Profile</a></li>
            <li id="profile"><a class="navbar__link" href="{{ route('lihatKeranjang') }}">Keranjang</a></li>
            @if(isset($showLoginLink))
            <li id="profile"><a class="navbar__link" href="masuk">Login</a></li>
            <li id="profile"><a class="navbar__link" href="daftar">Daftar</a></li>
            @endif

            @if(isset($showLogoutLink))
            <li id="profile"><a class="navbar__link" href="/logout">Logout</a></li>
            @endif

          </ul>
          <ul class="navbar__utilities">
            <li class="input-w-icon search-bar" id="searchBar">
              <form action="{{ route('product.search', ['search' => request('search')]) }}" method="GET">
              <input class="txt-input search-bar--input" type="text" name="search" placeholder="Enter the product you are looking for" onkeydown="if(event.keyCode === 13) { event.preventDefault(); this.closest('form').submit(); }" />
                
                  <svg class="input-icon fill-black" xmlns="http://www.w3.org/2000/svg" width="14.498" height="14.5" viewBox="0 0 14.498 14.5">
                    <path d="M11.359,16.712a5.344,5.344,0,0,0,3.335-1.165l4.776,4.776a.6.6,0,1,0,.854-.854l-4.776-4.776a5.359,5.359,0,1,0-4.19,2.02ZM8.425,8.424a4.149,4.149,0,1,1,0,5.868A4.122,4.122,0,0,1,8.425,8.424Z" transform="translate(-6.004 -6)"></path>
                  </svg>
                
              </form>
              </li>
              <li class="navbar__utility" id="searchIcon">
                <svg class="fill-black" xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 21.996 22">
                  <path d="M14.129,22.253a8.109,8.109,0,0,0,5.061-1.768l7.246,7.246a.917.917,0,1,0,1.3-1.3l-7.246-7.246a8.131,8.131,0,1,0-6.357,3.064ZM9.677,9.677a6.3,6.3,0,1,1,0,8.9A6.253,6.253,0,0,1,9.677,9.677Z" transform="translate(-6.004 -6)"></path>
                </svg>
              </li>
              <!-- <div class="tampilkan">
                <canvas id="myCanvas" width="400" height="200"></canvas>
                <button id="showButton">Tampilkan Elemen</button>
                <div id="rightElement">Ini adalah elemen di sebelah kanan</div>
              </div> -->
            <!-- keranjang -->
            <li class="navbar__utility jarak"><a href="{{ route('lihatKeranjang') }}">
                <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 22 22">
                  <g transform="translate(-6 -6)">
                    <path d="M6.917,7.833H8.448l2.295,10.355a3.289,3.289,0,0,0-1.871,3.042,3.133,3.133,0,0,0,2.962,3.275H23.988a.917.917,0,1,0,0-1.833H11.833A1.332,1.332,0,0,1,10.7,21.231a1.332,1.332,0,0,1,1.128-1.442H23.988a.917.917,0,0,0,.863-.606l3.1-8.591a.917.917,0,0,0-.863-1.227H10.665l-.586-2.646A.916.916,0,0,0,9.184,6H6.917a.917.917,0,0,0,0,1.833ZM25.779,11.2l-2.435,6.758H12.568l-1.5-6.758H25.779Z" fill="#fff"></path>
                    <path d="M19.261,50a.917.917,0,0,0,0,1.833h1.164a.917.917,0,1,0,0-1.833Z" transform="translate(-6.687 -23.833)" fill="#fff"></path>
                    <path d="M37.713,50a.917.917,0,0,0,0,1.833h1.164a.917.917,0,1,0,0-1.833Z" transform="translate(-16.682 -23.833)" fill="#fff"></path>
                  </g>
                </svg></a></li>
            <!-- profil -->
                <li class="navbar__utility jarak" id="avatar"><a href="/logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
                </svg></a></li>
            <li class="navbar__utility menu" id="menuIcon">
              <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="22" height="15" viewBox="0 0 22 15">
                <g id="Group_1" data-name="Group 1" transform="translate(-316 -39)">
                  <rect width="22" height="2" rx="1" transform="translate(316 39)"></rect>
                  <rect width="22" height="2" rx="1" transform="translate(316 46)"></rect>
                  <rect width="22" height="2" rx="1" transform="translate(316 52)"></rect>
                </g>
              </svg>
            </li>
          </ul>
        </div>
      </div>
    </nav>
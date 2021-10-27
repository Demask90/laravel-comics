<footer>

    <div id="footer_top">
      <ul class="flex center middle w-60">
        <li class="icons flex middle center" v-for="(icon, index) in icons" :key="index"> 
            <img :src="require(`../assets/img/${icon.img}`)" alt="icon.text">
            <h3>{{ icon.text.toUpperCase() }}</h3>
        </li>
      </ul>
    </div>
    
    
    <div id="footer_bottom">
      <div class="w-60 flex middle">
        <div id="left_bottom" class="flex">
          <div>

            <ul class="list-link">
              <span class="title-list">DC COMICS</span>
              <li v-for="(link, index) in footDCComics" :key="index"><a href="">{{link.text}}</a></li>
            </ul>

            <ul class="list-link">
              <span class="title-list">SHOP</span>
              <li v-for="(link, index) in footShop" :key="index"><a href="">{{link.text}}</a></li>
            </ul>

          </div>


          <div class="flex">

            <ul class="list-link">
              <span class="title-list">DC</span>
              <li v-for="(link, index) in footDC" :key="index"><a href="">{{link.text}}</a></li>
            </ul>

            <ul class="list-link">
              <span class="title-list">SITES</span>
                <li v-for="(link, index) in footSites" :key="index"><a href="">{{link.text}}</a></li>
            </ul>

          </div>

        </div>
      
        <div id="right_bottom">
          <img src="../assets/img/dc-logo-bg.png" alt="logo DC">
        </div>
      </div>
      
      <div class="banner_footer flex middle">

        <div class="w-60 flex between middle">

          <div class="sign-up">
              <button> SIGN-UP NOW!</button>
          </div>

          <div class="socials flex middle">
              <span class="follow">FOLLOW US</span>
              <div v-for="(social, index) in socialsLink" :key="index" class="img-social">
                  <a :href="social.url"><img :src="require(`../assets/${social.icon}`)" :alt="social.name"></a>
              </div>
          </div>

        </div>

      </div>
      

    </div>
  </footer>
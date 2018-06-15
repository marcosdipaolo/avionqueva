<?php ?>

<div class="uk-card uk-card-default uk-grid-collapse un-evento" uk-grid>
<div class="uk-card-media-left">
      <a href="#_EVENTURL">
        {has_image}
         <div class="event-image-container" style="background-image: url('#_EVENTIMAGEURL')"></div>
         {/has_image}
        {no_image}
         <div class="event-image-container" style="background-image: url('<?php echo get_bloginfo('template_url') . '/img/comodin-500px.jpg' ?>')"></div>
         {/no_image}
      </a>
   </div>
   <div class="aq-body">
      <div class="uk-card-body">
         <div class="contenido-evento">
            <h3 class="card-title">#_EVENTLINK</h3>
            <span class="fechayhora">
              {has_location}
               #_LOCATIONNAME, #_LOCATIONADDRESS, <br>#_LOCATIONTOWN. #_LOCATIONSTATE.
               {/has_location}
                  <br>
                   #_EVENTDATES.
            </span>
          <div class="content-footer">#_EVENTCATEGORIES</div>
         </div>
         <!-- <div class="mapa">
            #_LOCATIONMAP
         </div> -->
      </div>
   </div>
<div style="width: 100%; height: 5px; background-color: #_CATEGORYCOLOR"></div>
</div>
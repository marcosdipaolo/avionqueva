<div class="social clearfix">
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Compartir esta nota" target="_blank" onclick="window.open(this.href, this.target, 'width=400,height=300'); return false;" uk-icon="ratio:2; icon: facebook">
<!-- <li>
<i class="fab fa-facebook-f" aria-hidden="true"></i>
</li> -->
</a> 
<a href="https://twitter.com/intent/tweet?text=<?php echo the_title();?>&url=<?php the_permalink();?>/&via=Avionqueva&lang=es" target="_blank" uk-icon="ratio:2; icon: twitter">
<!-- <li>
<i class="fab fa-twitter" aria-hidden="true"></i>
</li> -->
</a>
 <a href="mailto:?subject=Nota%20compartida%20desde%20Avionqueva&body=<?php the_title(); ?>%20-%20<?php the_permalink(); ?>" target="_blank" uk-icon="ratio:2; icon: mail">
<!-- <li class="no-margin">
<i class="fas fa-envelope" aria-hidden="true"></i>
</li> -->
</a>
</div>
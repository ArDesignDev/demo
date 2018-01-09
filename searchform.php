<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="put_a_size_here" name="s" id="search" placeholder="<?php the_search_query(); ?>" value=" " onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
<input type="submit" id="searchsubmit" value="&#xf002;"  aria-hidden="true" />
</div>
</form>

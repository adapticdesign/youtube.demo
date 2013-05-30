<div id="container">

	<div id="body">
        <form action="<?php echo $url; ?>" method="post" >
            <input type="hidden" name="id" value="<?php echo $job->id;?>" />
            <label>Name</label>
            <input type="text" name="name" value="" />
            <br />
            <label>cv_attached</label>
            <input type="text" name="cv_attached" value="" />
            <br />
            <label>email</label>
            <input type="text" name="email" value="" />
            <br />
            <input type="submit" value="submit" />
        </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

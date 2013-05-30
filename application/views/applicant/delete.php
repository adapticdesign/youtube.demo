<body>

<div id="container">

	<div id="body">
        <form action="<?php echo $url; ?>" method="post" >
        <p>Are you aure you want to delete?</p>
            <input type="hidden" name="id" value="<?php echo $applicant->id;?>" />
            <input type="submit" name="submit" value="yes" />
            <input type="submit" name="submit" value="no" />
        </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

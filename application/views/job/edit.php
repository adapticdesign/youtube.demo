<body>

<div id="container">

	<div id="body">
        <form action="<?php echo $url; ?>" method="post" >
            <input type="hidden" name="id" value="<?php echo $job->id;?>" />
            <label>Job Title</label>
            <input type="text" name="job_title" value="<?php echo $job->job_title;?>" />
            <br />
            <label>Keywords</label>
            <input type="text" name="keywords" value="<?php echo $job->keywords;?>" />
            <br />
            <label>Description</label>
            <input type="text" name="description" value="<?php echo $job->description;?>" />
            <br />
            <label>Date Created</label>
            <input type="text" class='datepicker' name="date_created" value="<?php if(isset($job->date_created))echo date( 'm/d/Y',$job->date_created );?>" />
            <br />
            <label>Closing Date</label>
            <input type="text" class='datepicker' name="closing_date" value="<?php if(isset($job->closing_date))echo date( 'm/d/Y',$job->closing_date );?>" />
            <input type="submit" value="submit" />
        </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

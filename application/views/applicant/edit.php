<body>

<div id="container">

	<div id="body">
        <form action="<?php echo $url; ?>" method="post" >
            <input type="hidden" name="id" value="<?php echo $applicant->id;?>" />
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $applicant->name;?>" />
            <br />
            <label>cv_attached</label>
            <input type="text" name="cv_attached" value="<?php echo $applicant->cv_attached;?>" />
            <br />
            <label>email</label>
            <input type="text" name="email" value="<?php echo $applicant->email;?>" />
            <br />
            <label>Job</label>
            <select name="job_id">
            <?php foreach($jobs as $j){?>
            <option value="<?php echo $j->id;?>" <?php if($applicant->job_id == $j->id){ echo 'selected="selected"';}?>><?php echo $j->job_title;?></option>
            <?php } ?>
            </select>
            <br />
            <input type="submit" value="submit" />
        </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

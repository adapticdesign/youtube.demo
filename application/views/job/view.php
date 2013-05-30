<body>

<div id="container">

	<div id="body">
        <ul>
        <?php foreach($jobs as $job){
            echo "<li>".$job->job_title." - (created - ".date( 'm/d/Y',$job->date_created ).") - (closing date ".date( 'm/d/Y',$job->closing_date ).") <a href='/jobs/details/".$job->id."'>View</a> <a href='/jobs/apply/".$job->id."'>Apply</a></li>";
        }?>
        </ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
<body>

<div id="container">

	<div id="body">
    
    <h1><?php echo $job->job_title;?></h1>
    <p><?php echo $job->description;?></p>
        <ul>
        <?php 
            echo "<li>(created - ".date( 'm/d/Y',$job->date_created ).") - (closing date ".date( 'm/d/Y',$job->date_created ).")";
        ?>
        </ul>
        
        <?php echo "<a href='/jobs/apply/".$job->id."'>Apply</a></li>";?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
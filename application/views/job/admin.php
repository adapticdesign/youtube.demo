<body>

<div id="container">

	<div id="body">
    <a href="/jobs/add" >Add</a>
        <ul>
        <?php foreach($jobs as $job){
            echo "<li>".$job->job_title." <a href='/jobs/edit/".$job->id."' >Edit</a> <a href='/jobs/delete/".$job->id."' >Delete</a></li>";
        }?>
        </ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
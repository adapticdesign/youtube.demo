<body>

<div id="container">

	<div id="body">
        <ul>
        <?php foreach($applicants as $applicant){
            echo "<li>".$applicant->name."<a href='applicants/apply/".$applicant->id."'>Apply</a></li>";
        }?>
        </ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
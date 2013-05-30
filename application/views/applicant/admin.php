<body>

<div id="container">

	<div id="body">
    <a href="/applicants/add" >Add</a>
        <ul>
        <?php foreach($applicants as $applicant){
            echo "<li>".$applicant->name." <a href='/applicants/edit/".$applicant->id."' >Edit</a> <a href='/applicants/delete/".$applicant->id."' >Delete</a></li>";
        }?>
        </ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
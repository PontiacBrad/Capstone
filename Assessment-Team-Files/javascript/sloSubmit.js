function sloSubmit()
{
	var property = document.getElementById('buttonKnowledgeBase');

	if (property.style.backgroundColor == "rgb(127, 255, 0)") 
	{
		var SLO1 = true; 
	} 
	else
	{	
		var SLO1 = false;
	}
	var property = document.getElementById('buttonLabSkills');

	if (property.style.backgroundColor == "rgb(127, 255, 0)") 
	{
		var SLO2 = true; 
	} 
	else
	{
		var SLO2 = false;
	}
		var property = document.getElementById('buttonPractice');

	if (property.style.backgroundColor == "rgb(127, 255, 0)") 
	{
		var SLO3 = true; 
	} 
	else
	{
		var SLO3 = false;
	}
	var property = document.getElementById('buttonSocietalConnects');

	if (property.style.backgroundColor == "rgb(127, 255, 0)") 
	{
		var SLO4 = true; 
	} 
	else
	{
		var SLO4 = false;
	}
	var property = document.getElementById('buttonCapstone');
	
	if (property.style.backgroundColor == "rgb(127, 255, 0)") 
	{
		var SLO5 = true; 
	} 
	else
	{
		var SLO5 = false;
	}
	var property = document.getElementById('Course');
	var SLOCourse = property.value;

	$.post("sloSubmit.php",
        {
	        postSLO1: SLO1,
		postSLO2: SLO2,
		postSLO3: SLO3,	
		postSLO4: SLO4,
		postSLO5: SLO5,	
		postCourse: SLOCourse
        },
        function(data)
	{
          my_function(data);
        });
	function my_function(data)
	{
	}
}

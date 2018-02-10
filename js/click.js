
$(document).ready(function(){
	var draggedItem = null;
	var foodLen = $(".food-control").length;
	var drinkLen = $(".drink-control").length;

	// display drink to green sheet
	$(".drink-display").click(function(){
		var drink = $(this).text();
	
        $(".drink-control").each(function(index){
			if($(this).text()=="drag to here...")
			{

				($(this).text(drink));
				return false;


			}


        });
    });
    $(".food-display").click(function(){
		var food = $(this).text();
        $(".food-control").each(function(index){
			if($(this).text()=="drag to here..." )
			{
				($(this).text(food));
				return false;


			}


        });
    });
	//add customer order into database,no id yet
	
	$("#noid").submit(function(){
		var drink = "";
		var food = "";	
        $(".drink-control").each(function(index){
			if($(this).text()!="drag to here...")
			{
				if(drink == "")
				{
					drink += $(this).text();
				}
				else
				{
					drink += "|" + $(this).text();
				}

			}

        });

        $(".food-control").each(function(index){
			if($(this).text()!="drag to here...")
			{
				if(food == "")
				{
					food += $(this).text();
				}
				else
				{
					food += "|" + $(this).text();
				}

			}


        });		
		 $("#drink-history").val()= drink;
		 $("#food-history").val()= food;
    });	
	
	//drag food

	    $('.food-control').each(function(index) {
        $(this)[0].addEventListener('dragstart', handleDragStart, false);
        $(this)[0].addEventListener('drop', handleDrop, false);
        $(this)[0].addEventListener('dragover', handleDragOver, false);
		$(this)[0].addEventListener('dragenter', handleDragEnter, false);
		$(this)[0].addEventListener('dragleave', handleDragLeave, false);
		$(this)[0].addEventListener('dragend', handleDragEnd, false);
		

    function handleDragStart(e) {
        //console.log('start');
        draggedItem = this;

        e.dataTransfer.effectAllowed = 'move';
		e.target.style.opacity = "0.4";
		e.dataTransfer.setData('text/html', this.innerHTML);
    }

    function handleDragOver(e) {
        if (e.preventDefault) {
            e.preventDefault(); // Necessary. Allows us to drop.
        }
        e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
        return false;
    }
	function handleDragEnter(e) {
        if (e.target.className=="food-control") {
            e.target.style.border = "3px dotted red";
			e.target.style.backgroundColor = "grey";
        }
        e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
        return false;
    }
	function handleDragLeave(e) {
        if (e.target.className=="food-control") {
            e.target.style.border = "";
			e.target.style.backgroundColor = "";
        }
        e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
        return false;
    }
    function handleDragEnd(e) {
		e.target.style.opacity = "1";
    }	
    function handleDrop(e) {
        if (e.stopPropagation) {
            e.stopPropagation(); // Stops some browsers from redirecting.
        }

		  if (draggedItem != this) {
			// Set the source column's HTML to the HTML of the column we dropped on.
			draggedItem.innerHTML = this.innerHTML;
			this.innerHTML = e.dataTransfer.getData('text/html');

		  }
		e.target.style.border = "";
		e.target.style.backgroundColor = "";

        return false;
    }
    });
	// drag drink
	    $('.drink-control').each(function(index) {
        $(this)[0].addEventListener('dragstart', handleDragStart, false);
        $(this)[0].addEventListener('drop', handleDrop, false);
        $(this)[0].addEventListener('dragover', handleDragOver, false);
		$(this)[0].addEventListener('dragenter', handleDragEnter, false);
		$(this)[0].addEventListener('dragleave', handleDragLeave, false);
		$(this)[0].addEventListener('dragend', handleDragEnd, false);
		

    function handleDragStart(e) {
        //console.log('start');
        draggedItem = this;

        e.dataTransfer.effectAllowed = 'move';
		e.target.style.opacity = "0.4";
		e.dataTransfer.setData('text/html', this.innerHTML);
    }

    function handleDragOver(e) {
        if (e.preventDefault) {
            e.preventDefault(); // Necessary. Allows us to drop.
        }
        e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
        return false;
    }
	function handleDragEnter(e) {
        if (e.target.className=="drink-control") {
            e.target.style.border = "3px dotted red";
			e.target.style.backgroundColor = "grey";
        }
        e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
        return false;
    }
	function handleDragLeave(e) {
        if (e.target.className=="drink-control") {
            e.target.style.border = "";
			e.target.style.backgroundColor = "";
        }
        e.dataTransfer.dropEffect = 'move'; // See the section on the DataTransfer object.
        return false;
    }
    function handleDragEnd(e) {
		e.target.style.opacity = "1";
    }	
    function handleDrop(e) {
        if (e.stopPropagation) {
            e.stopPropagation(); // Stops some browsers from redirecting.
        }

		  if (draggedItem != this) {
			// Set the source column's HTML to the HTML of the column we dropped on.
			draggedItem.innerHTML = this.innerHTML;
			this.innerHTML = e.dataTransfer.getData('text/html');

		  }
		e.target.style.border = "";
		e.target.style.backgroundColor = "";

        return false;
    }
    });
	
	
	

});

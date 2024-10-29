<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel = "stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
<style>
.poppins-regular {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }
body{
	border-radius: 20px;
	font-family: "Poppins", sans-serif;
}
.header {
	background: #ffffff;
	color: white;
	height: 70px;
	display: flex;
	border-radius: 20px;
	justify-content: center; /* Center the button horizontally */
	align-items: center;     /* Center the button vertically */
	min-width: 300px;
	margin-left: 80px;
	margin-right:100px;

}
.header1{
	margin:30px 10px;
	display: flex;
	justify-content: center;

}

.header2 {
	background: #ffffff;
	height: 500px;
	min-width: 300px;
	margin-left: 80px;
	margin-right:100px;
	padding-top: 40px;
	padding-left:20px;
	padding-right:20px;
	margin-top:50px;
	border-radius: 20px;

}
      
.noted-logo{
	margin-left: 25px;
	font-size: 30px;
}
.my-notes-button {
	background-color: white;
	color: rgb(0, 0, 0);
	border-color: rgb(0, 0, 0);
	border-style: solid;
	border-width: 1px;
	height: 30px;
	width: 101px;
	border-radius:2px;
	cursor: pointer;
	transition: background-color 0.2s,
	color 0.2s, box-shadow 0.15s;

}
.reminder-button {
	background-color: white;
	color: rgb(0, 0, 0);
	border-color: rgb(0, 0, 0);
	border-style: solid;
	border-width: 1px;
	height: 30px;
	width: 101px;
	border-radius:2px;
	cursor: pointer;
	transition: background-color 0.2s,
	color 0.2s, box-shadow 0.15s;
	margin-left: 10px;

}

.task-tracker-button {
	background-color: white;
	color: rgb(0, 0, 0);
	border-color: rgb(0, 0, 0);
	border-style: solid;
	border-width: 1px;
	height: 30px;
	width: 101px;
	border-radius:2px;
	cursor: pointer;
	transition: background-color 0.2s,
	color 0.2s, box-shadow 0.15s;
	margin-left: 10px;
}

.my-profile-button {
	background-color: rgb(37, 37, 37);
	color: white;
	border: none;
	height: 38px;
	width: 108px;
	border-radius: 2px;
	cursor: pointer;
	transition: background-color 0.2s,
	box-shadow 0.15s;
}

.check-button {
	background-color: rgb(37, 37, 37);
	color: white;
	border: none;
	height: 30px;
	width: 30px;
	border-radius: 2px;
	cursor: pointer;
	transition: background-color 0.2s,
	box-shadow 0.15s;
}

.my-profile-button:hover {

	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)

}
.my-profile-button:active {
	background-color: gray;
}

.my-notes-button:hover {
	background-color: rgb(37, 37, 37);
	color: white;
	box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

}
.my-notes-button:active {
	opacity: 0.7s;
	background-color: gray;
	border: none;
}   

.reminder-button:hover {
	background-color: rgb(37, 37, 37);
	color: white;
	box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

}
.reminder-button:active {
	opacity: 0.7s;
	background-color: gray;
	border: none;
}

.task-tracker-button:hover {
	background-color: rgb(37, 37, 37);
	color: white;
	box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

}
.task-tracker-button:active {
	opacity: 0.7s;
	background-color: gray;
	border: none;
}		

.check-button:hover {
	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
}

.check-button:active {
	background-color: gray;			
}

body {
	transition: background-color 0.3s, color 0.3s;
}
.dark-mode {
	background-color: #555555;
	color: black;
}
.dark-mode .bg-gray-600 {
	background-color: #ffffff;
}
.dark-mode .bg-white {
	background-color: #ffffff;
}
.dark-mode .header {
	background-color: #2e2e2e;
	color: black;
}

.dark-mode .header2 {
	background-color: #2e2e2e;
	color: black;
}

.dark-mode .my-profile-button {
	background-color: #ffffff;
	color: black;
}

.dark-mode .div1 {
	background-color: #292929;
	color: white;
}

.dark-mode p {
	background-color: #292929;
	color: white;
}
.timer {
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 10px;
		margin-top: 20px;
	}

	.header2 {
		text-align: center;            
		padding: 20px;                   
		background-color: white;          
		border-radius: 10px;             
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
	}

	#countdown {
		font-size: 48px;                
		color: #FF5733;                  
		background-color: #F0F0F0;       
		padding: 20px;                   
		border: 2px solid #FF5733;       
		border-radius: 10px;             
		margin: 20px 0;                  
		transition: transform 0.3s;      
	}

	#countdown:hover {
		transform: scale(1.05);          
	}

	.timer {
		display: flex;                   
		justify-content: center;         
		gap: 10px;                       
	}

	
	button:hover {
		background-color: #e74c3c;      
	}

	.timer button {
		background-color: #4CAF50; 
		color: white; 
		border: none;
		padding: 10px 20px;
		font-size: 16px;
		border-radius: 5px;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}
	
	.timer button:hover {
		background-color: #45a049;
	}

	#pause-btn {
		background-color: #f0ad4e; /* Orange background */
	}

	#pause-btn:hover {
		background-color: #ec9a29;
	}

	#restart-btn {
		background-color: #d9534f; /* Red background */
	}

	#restart-btn:hover {
		background-color: #c9302c;
	}

</style>
</head>


<body class = "bg-gray-200 p-4 rounded-lg">
<header>
	<div class="header">
		<a href='notes'>
			<button class="my-notes-button">Notes</button>
		</a>

		<a href='reminder'>
			<button class="reminder-button">Reminder</button>
		</a>
		
		<a href='task-tracker'>
			<button class="task-tracker-button">Tracker</button>
		</a>

		<a href='my-profile'>
			<button class="task-tracker-button">Profile</button>
		</a>
	</div>
	<div class="header1">
		<button id="toggleDarkMode" class=" flex items-center justify-center h-screenml-2 text-black border border-black bg-white px-4 py-2 rounded hover:bg-black hover:text-white">Dark Mode</button>
	</div>
</header>
<section>
	<div class="header2">
		<h1 class="font-bold text-5xl text-center mb-8"> My Profile</h1>
		<p>Under Maintance</p>
		
</section>
    
<script>
	const toggleDarkMode = document.getElementById('toggleDarkMode');
		toggleDarkMode.addEventListener('click', () => {
		document.body.classList.toggle('dark-mode');
	});
	
</script>
</body>
  
</html>



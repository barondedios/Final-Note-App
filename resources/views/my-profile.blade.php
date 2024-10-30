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
	justify-content: center;
	align-items: center;
	margin: 10px 20px;
	min-width: 300px;
}
.header button{
	border-radius: 10px;
}
.header1 {
	margin: 20px 5px;
	display: flex;
	justify-content: center;
}

.header2 {
	background: #ffffff;
	height: auto;
	min-width: 300px;
	margin: 20px;
	padding: 20px;
	border-radius: 20px;
}
.header2 p {
	align-items: center;
}

.noted-logo {
	margin-left: 15px;
	font-size: 24px;
}

.my-notes-button,
.reminder-button,
.task-tracker-button,
.my-profile-button,
.check-button {
	background-color: white;
	color: rgb(0, 0, 0);
	border: 1px solid rgb(0, 0, 0);
	border-radius: 2px;
	cursor: pointer;
	transition: background-color 0.2s, color 0.2s, box-shadow 0.15s;
	width: 80px;
	height: 30px;
	margin: 5px;
	font-size: 0.8rem;
}

.my-profile-button {
	background-color: rgb(37, 37, 37);
	color: white;
	width: 90px;
	height: 35px;
}

.check-button {
	width: 30px;
	height: 30px;
}

/* Dark Mode */
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

.dark-mode .header,
.dark-mode .header2 {
	background-color: #2e2e2e;
	color: black;
}

.dark-mode .my-profile-button {
	background-color: #ffffff;
	color: black;
}

.dark-mode .div1, .dark-mode p {
	background-color: #292929;
	color: white;
}

/* Hover States */
.my-notes-button:hover, .reminder-button:hover, .task-tracker-button:hover {
	background-color: rgb(37, 37, 37);
	color: white;
	box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);
}

.my-profile-button:hover {
	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35);
}

/* Responsive Styling */
@media (min-width: 768px) {
	.header, .header2 {
		margin: 30px 80px;
		padding: 30px;
	}

	.header2 {
		height: 500px;
		padding-top: 40px;
		padding-left: 20px;
		padding-right: 20px;
	}

	.noted-logo {
		margin-left: 25px;
		font-size: 30px;
	}

	.my-notes-button, .reminder-button, .task-tracker-button {
		width: 101px;
		height: 30px;
		font-size: 1rem;
	}

	.my-profile-button {
		width: 108px;
		height: 38px;
	}
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
			<button class="task-tracker-button">Timer</button>
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
		<p class="text-center">Under Maintanance</p>
	</div>
</section>
    
<script>
	const toggleDarkMode = document.getElementById('toggleDarkMode');
		toggleDarkMode.addEventListener('click', () => {
		document.body.classList.toggle('dark-mode');
	});
	
</script>





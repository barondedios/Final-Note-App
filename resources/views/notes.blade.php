<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel = "stylesheet">
	@vite('resources/css/app.css')
    <title>noted</title>
</head>

<body class = "bg-gray-200 p-4">
<header>
<div class="header">
	<a href='notes'>
		<button class="my-notes-button">My Notes</button>
	</a>

	<a href='reminder'>
		<button class="reminder-button">Reminder</button>
	</a>
	
	<a href='task-tracker'>
		<button class="task-tracker-button">Task Tracker</button>
	</a>

	<a href='my-profile'>
		<button class="task-tracker-button">My Profil</button>
	</a>
</div>
<br>
<div class="header3">
	<input type="text" id="search" placeholder="Search by title..." class="text-black border border-black bg-white px-4 -ml-6 py-2 rounded hover:bg-black hover:text-white" onkeyup="filterNotes()">
	<button id="toggleDarkMode" class="w-32 h-10 ml-2 text-black border border-black bg-white px-4 py-2 rounded hover:bg-black hover:text-white">Dark</button>
</div>
<br>
</header>

<section>
	<div class="header2">
		<h1 class="font-bold text-3xl lg:text-5xl text-center mb-6 lg:mb-8">Notes</h1>
		<div class="container1">
			<a href="add-notes">
				<button class="my-profile-button">+</button>
			</a>
		</div>
	</div><br>
	
	<div class="mt-2">
		<div class="flex-1 pr-8">
		@foreach ($notes as $note)
	
		<div class="note-item px-4 py-4">
			<p class="text-gray-500 ">
			<div class='flex-1 pr-8'>
				<h3 class="text-lg font-semibold">
					Title: <b>{{ $note->title }}</b>
				</h3>
			</div>
			<div>
				<p class="text-gray-700">{{ $note->desc}}</p><br>

				<form action="{{route('viewNote',['id'=>$note->id])}}" method="GET">
					@csrf
					@method('GET')
					<button type="submit" class ="my-profile-button1">VIEW</button>
				</form>

				<form action="{{route('deleteNote',['id'=>$note->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to DELETE it?')">
					@csrf
					@method('delete')
					<button type="submit" class ="my-profile-button1">DELETE</button>
				</form>

				<p class="text-gray-500 py-4 flex-1 items-center border-b border-gray-300"></p><br>
			</div>
		</div>
	</div>
		@endforeach
</section>
	
<script>
	const toggleDarkMode = document.getElementById('toggleDarkMode');
		toggleDarkMode.addEventListener('click', () => {
		document.body.classList.toggle('dark-mode');
	});

	function filterNotes() {
		const searchInput = document.getElementById('search').value.toLowerCase();
		const notes = document.querySelectorAll('.note-item');

		notes.forEach(note => {
			const title = note.querySelector('h3').textContent.toLowerCase();
			if (title.includes(searchInput)) {
				note.style.display = '';
			} else {
				note.style.display = 'none';
			}
		});
	}
</script>
</body>
</html>
